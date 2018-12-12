<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Init extends Model
{
    //
    public static function PATHSTRING_POST_TITLE_IMAGE(){
        return '/public/post_title_image/';
    }

    public static function PATH_POST_TITLE_IMAGE(){
        return '/post_title_image/';
    }
}
