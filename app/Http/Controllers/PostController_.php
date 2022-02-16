<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $posts=[
            ["id"=>1,
            "name"=>"Basma",
            "body"=>"hi every one",
            "title"=>"title basma"],
            ["id"=>2,
            "name"=>"Basma",
            "body"=>"hi every one",
            "title"=>"title basma"],
            ["id"=>3,
            "name"=>"Basma",
            "body"=>"hi every one",
            "title"=>"title basma"],
            ["id"=>4,
            "name"=>"Basma",
            "body"=>"hi every one",
            "title"=>"title basma"]
    
        ];
        return view("posts.index",["posts"=>$posts]);
    }

    function show($id){
        $post=  ["id"=>$id,
        "name"=>"Basma",
        "body"=>"hi every one",
        "title"=>"title basma"];
        return view('posts.show', $post);
    }

    function edit(){ //loading for edit page
        return view("posts.edit");
    }

    function update(){

    }

    function create(){ //loading for create page
        return view("posts.create");
    }

    function destroy(){

    }
}
