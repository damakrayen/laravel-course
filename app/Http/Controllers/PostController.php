<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        return view('posts.index',['posts'=>Post::all()]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required|min:4|max:100','content'=>'required']);
        $data=$request->only(['title','content','slug','active']);
        
        

        $post = Post::create($data);


 
        return redirect()->route('posts.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        $post = Post::findOrFail($id); 
        return view('posts.show', ['post' => $post]); 
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post= Post::findOrFail($id);
        return view('posts.edit',['post'=>$post]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {
        $post=Post::findOrFail($id);
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        $post->slug=$request->input('slug');
        $post->save();
        session()->flash('status','post was updated!!');
        return redirect()->route('posts.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        session()->flash('status','post was deleted');
        return redirect()->route('posts.index');
        //
    }
}
