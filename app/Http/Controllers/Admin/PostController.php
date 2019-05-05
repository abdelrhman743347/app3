<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Post;
use App\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $posts = Post::
        when($request->search, function ($q) use ($request)
        {
            return $q->where('title','like', '%' . $request->search . '%');
        })->when($request->category_id, function($q) use ($request){
            return $q->where('category_id', $request->category_id);
        })->latest()->paginate(5);
        return view('admin.posts.index', compact('categories','posts') );

    } //end of index

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }// end of create

    public function store(Request $request)
    {
        // dd($request->all());
        //
        $rules = [
            'category_id' => 'required',
            'writer_id' => 'required',
            'title' => 'required|unique:posts,title',
            'description' => 'required',
            'content' => ['required'],
        ];
        $request->validate($rules);

        $request_data = $request->all();




        Post::create($request->all());

        session()->flash('status', ('Post Added successfully'));
        // return back();
        return redirect()->route('posts.index');
    }// end of store


    public function show(Post $post, Request $request)
    {

//        $category = Category::find($request->category_id);
        return view('admin.posts.show', compact( 'post'));

    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('categories', 'post'));
    }// end of edit


    public function update(Request $request, Post $post)
    {
        $rules = [

            'category_id' => 'required',
            'title' => ['required', Rule::unique('posts')->ignore($post->id),],
            'description' => 'required',
            'content' => ['required'],

        ];

        $request->validate($rules);

        $post->update($request->all());

        session()->flash('status', ('Post Updated successfully'));

        return redirect()->route('posts.index');


    }// end of update

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('status', 'Post Deleted Successfully');
        return redirect()->route('posts.index');
    }
}
