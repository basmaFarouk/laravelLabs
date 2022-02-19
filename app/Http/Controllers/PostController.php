<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from posts
        $posts=Post::all();
        //$post->user->name;
        // return $posts;
        return view("posts.index",["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //loading page
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request) //request hold all the information from the form
    {
        //$data=$request->all();
        //return $data;
        /*Post::create([
            //name in database -> name in html from request
            "title"=>$request->title,
            "description"=>$request->description,
            "user_id"=>1
        ]);*/

        //validate([roles],[msg])
        // $request->validate([
        //     'title'=>'required|min:3',
        //     'description'=>'required'
        // ]);
        $post= new Post;
        //name in database -> name in html from request
        $post->title=$request->title;
        $post->description=$request->description;
        $post->user_id=Auth::id();
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //select * from posts where id =$id
        $post=Post::find($id);
        return view("posts.show",$post);
        //Post::where("id",$id)
        //Post::where("fname","basma")
        //Post::where("salary","<",50)->where()->get() return all data
        //Post::where("salary","<",50)->first() return all data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {      //return all data with that id
        $post=Post::find($id);
        return view("posts.edit",$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {


        $post=Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        //Post::destroy($id);
        return redirect()->route('posts.index');

        }
}
