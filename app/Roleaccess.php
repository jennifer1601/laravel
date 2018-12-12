<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roleaccess extends Model
{
    //
    public static function setRoleaccess($rolesid,$menuid){
        $ra = new Roleaccess;
        $ra->rolesid = $rolesid;
        $ra->menuid = $menuid;
        $ra->save();
        return $ra;
    }

    
    public static function deleteByRolesid($rolesid){
        $ra = Roleaccess::where('rolesid',$rolesid);
        return $ra->delete();
    }

    public static function getRoleaccessByRolesid($rolesid){
        $ra = Roleaccess::where('rolesid',$rolesid);
        return $ra->get();
    }
}
