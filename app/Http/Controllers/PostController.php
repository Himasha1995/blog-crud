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
    function __construct()
    {
         $this->middleware('permission:post-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('posts')->latest()->paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Posts::all();

        return view('posts.create', compact('categories'));
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
    public function show($id)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
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
        $post->update($input);

        return redirect()->route('posts.index')->with('status', 'Post Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $ImagePath = 'image/'.$post->image;
        unset($ImagePath);
        $post->delete();
        Cache::forget('posts');
        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }

    public function inline(Request $request)
    {
        $user = Auth::user();
        if ($user->can('post-edit')) {
            $post = Post::findorFail($request->post_id);
            if ($post) {
                $post->content = $request->post_content;
                $post->save();
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
