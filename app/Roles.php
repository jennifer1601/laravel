<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    public static function setRole($rolesname,$description){
        $r=new Roles;
        $r->rolesname = $rolesname;
        $r->description = $description;
        $r->save();
        return $r;
    }

    
    public static function editRole($id,$rolesname,$description){
        $r=Roles::find($id);
        $r->rolesname = $rolesname;
        $r->description = $description;
        $r->save();
        return $r;
    }

    public static function deleteRole($id){
        Roles::find($id)->delete();
    }

    public static function getRoles(){
        return Roles::all();
    }

    public static function getRoleById($id){
        return Roles::find($id);
    }
}
