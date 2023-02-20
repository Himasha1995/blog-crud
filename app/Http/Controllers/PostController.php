<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function __construct()
    // {
    //      $this->middleware('permission:post-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:posts-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:posts-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:posts-delete', ['only' => ['destroy']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('ss');

        
        $user = Auth::user();
        if ($user->can('view post')) {
        $posts = Post::with('posts')->latest()->paginate(10);

        return view('posts.index', compact('posts'));
        }else{
            dd("else");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user = Auth::user();
        if ($user->can('create post')) {
        $posts = Post::all();
        return view('posts.create');
        }else{
            return redirect()->route('posts.show')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required',
            'parent_id' => 'required',
            'title'     => 'required|string|max:255',
            'image'     => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'summery'   => 'required',
            'content'   => 'required',
        ]);

        $input = $request->all(); 

        return redirect()->route('posts.index')->with('status', 'Post Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        return view('posts.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        return view('posts.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        $request->validate([
            'author_id' => 'required',
            'parent_id' => 'required',
            'title'     => 'required|string|max:255',
            'image'     => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'summery'   => 'required',
            'content'   => 'required',
        ]);

        $input = $request->all(); 
        $posts->update($input);

        return redirect()->route('posts.index')->with('status', 'Post Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        $ImagePath = 'image/'.$posts->image;
        unset($ImagePath);
        $posts->delete();
        Cache::forget('posts');
        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }

    public function inline(Request $request)
    {
        $user = Auth::user();
        if ($user->can('posts-edit')) {
            $posts = Posts::findorFail($request->posts_id);
            if ($posts) {
                $posts->content = $request->posts_content;
                $posts->save();
                if ($request->is_ajax_call) {
                    return response()->json(['success' => 'Post content edited Successfully']);
                }
            }
        } else {
            if ($request->is_ajax_call) {
                return response()->json(['error' => 'You dont have Permission!']);
            }
        }
    }
}
