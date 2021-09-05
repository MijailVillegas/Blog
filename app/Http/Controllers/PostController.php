<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Support\Facades\Crypt;

use function PHPUnit\Framework\callback;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('bloggers.pages.home')->with('posts', $posts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $posts = Post::all();
        return view('bloggers.pages.create')->with('posts', $posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new Post();

        $posts->title = $request->get('title');
        $posts->content = $request->get('content');
        $posts->image_url = $request->get('image_url');
        $posts->userId = $request->get('userId');

        $posts->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Post::find($id);
        $posts = Post::all();
        return view('bloggers.pages.show')->with('item', $item)->with('posts', $posts);
    }
    
    public function misblog($userId)
    {
        $posts = Post::where('userId',$userId)->get();
        return view('bloggers.pages.misblogs')->with('posts', $posts);
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find(Crypt::decrypt($id));
        $getposts = Post::all();
        return view('bloggers.pages.edit')->with('post', $post)->with('getposts', $getposts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->image_url = $request->get('image_url');
        $post->userId = $request->get('userId');

        $post->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getid = Post::find($id);
        $getid->delete();
        $posts = Post::all();
        return view('bloggers.pages.home')->with('posts', $posts);
    }
}
