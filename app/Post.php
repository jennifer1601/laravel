<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public static function getPosts(){
        $p = Post::all();
        return $p;
    }

    public static function getPostsLimit(){
        $p = Post::limit(3)->get();
        return $p;
    }

    public static function getPostById($id){
        $p = Post::find($id);
        return $p;
    }

    public static function getPostsByIsshow($isshow=true){
        $p = Post::where('isshow',$isshow);
        return $p->get();
    }

    public static function setPost($title,$imgurl,$bodypost,$isshow=false){
        $p = new Post;
        $p->title = $title;
        $p->imgurl = $imgurl;
        $p->bodypost = $bodypost;
        $p->isshow = $isshow;
        return $p->save();
    }

    public static function updatePostById($id,$title,$bodypost,$isshow,$imgurl=null){
        $p = Post::find($id);
        $p->title = $title;
        if($imgurl != null){
            $p->imgurl = $imgurl;
        }
        
        $p->bodypost = $bodypost;
        $p->isshow = $isshow;
        $p->save();
    }

    public static function deletePost($id){
        $p = Post::find($id)->delete();
    }
}
