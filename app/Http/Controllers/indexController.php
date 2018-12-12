<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['path']= $request->path();
        $p = Post::getPostsLimit();
        return view('/home', [
            'path'=>'/',
            'posts'=>$p
        ]);
    }

    
    public function about(Request $request)
    {
        $data['path']= $request->path();
        return view('/about', $data);
    }
    
    public function services(Request $request)
    {
        $data['path']= $request->path();
        return view('/services', $data);
    }
    
    public function team(Request $request)
    {
        $data['path']= $request->path();
        return view('/team', $data);
    }
    
    public function contact(Request $request)
    {
        $data['path']= $request->path();
        return view('/contact', $data);
    }
    
    public function achievement(Request $request)
    {
        $data['path']= $request->path();
        return view('/achievement', $data);
    }
    
    public function blog(Request $request,$id)
    {
        $pid=Post::getPostById($id);
        $p = Post::getPostsLimit();
        $data['path']= $request->path();
        return view('/blog', [
            'path'=>$data,
            'post'=>$pid,
            'posts'=>$p
        ]);
    }

}
