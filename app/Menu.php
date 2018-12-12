<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public static function setMenu($menuname,$menulink,$iconname,$position,$isvisible){

        $m = new Menu;
        $m->menuname = $menuname;
        $m->menulink = $menulink;
        $m->iconname = $iconname;
        $m->position = $position;
        $m->isvisible = $isvisible;
        return $m->save();
    }

    public static function setMenuById($id,$menuname,$menulink,$iconname,$position,$isvisible){

        $m = Menu::find($id);
        $m->menuname = $menuname;
        $m->menulink = $menulink;
        $m->iconname = $iconname;
        $m->position = $position;
        $m->isvisible = $isvisible;
        return $m->save();
    }

    public static function getMenus(){
        return Menu::all();
    }

    public static function getMenuById($id){
        $m = Menu::where('id',$id)->first();
        return $m;
    }

    public static function getMenusByPosition($isvisible){
        return Menu::where('isvisible',$isvisible)->orderBy('position')->get();
    }

    public static function getAuthorizedMenus($rolesid) {
        $m = Menu::join('roleaccesses', 'roleaccesses.menuid', '=', 'menus.id')
            ->join('roles', 'roles.id', '=', 'roleaccesses.rolesid')
            ->where('menus.isvisible', 'Y')
            ->where('roles.id', $rolesid)
            ->orderBy('menus.position')
            ->distinct()
            ->select('menus.*')
            ->get();
        return $m;
    }

    public static function deleteMenuById($id){
        Menu::find($id)->delete();
    }
    //

    
}
