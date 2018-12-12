<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Init;
use App\Menu;
use App\Roles;
use App\Roleaccess;
use App\User;
use Auth;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //menu management
    public static function showMenus(){
        $userroles = Auth::user()->rolesid;
        $getAuthMenu = Menu::getAuthorizedMenus($userroles);
        $getMenu = Menu::getMenus();
        $name = Auth::user()->name;
        return view('admin/menumanagement',
            [
                'name' => $name,
                'authmenus' => $getAuthMenu,
                'menus' => $getMenu,
                'editedmenu' => null
            ]
        );
    }

    public static function setMenu(Request $request){
        $menuname = $request->get('menuname');
        $menulink = $request->get('menulink');
        $iconname = $request->get('iconname');
        $position = $request->get('position');
        $visible = 'N';
        if($request->get('visible')!==null){
            $visible = 'Y';
        }
        $m=Menu::getMenus();
        $m = Menu::setMenu($menuname,$menulink,$iconname,$position,$visible);
        return redirect('admin/menumanagement');

    }

    
    public static function editMenu($menuid, Request $request){
        $menuname = $request->get('menuname');
        $menulink = $request->get('menulink');
        $iconname = $request->get('iconname');
        $position = $request->get('position');
        $visible = 'N';
        if($request->get('visible')!==null){
            $visible = 'Y';
        }
        $m = Menu::setMenuById($menuid,$menuname,$menulink,$iconname,$position,$visible);
        return redirect('admin/menumanagement/'.$m['id']);
    }
    
    public static function showEditMenu($menuid){
        $getEditMenu = Menu::getMenuById($menuid);
        $userroles = Auth::user()->rolesid;
        $getAuthMenu = Menu::getAuthorizedMenus($userroles);
        $getMenu = Menu::getMenus();
        $name = Auth::user()->name;
        return view('admin/menumanagement',
            [
                'name' => $name,
                'authmenus' => $getAuthMenu,
                'menus' => $getMenu,
                'editedmenu' => $getEditMenu
            ]
        );
    }

    public static function deleteMenu($menuid){
        Menu::deleteMenuById($menuid);
        return redirect('admin/menumanagement');
    }

    // ROLES
    public static function showRoles(){
        $userroles = Auth::user()->rolesid;
        $getAuthMenu = Menu::getAuthorizedMenus($userroles);
        $getMenu = Menu::getMenus();
        $getRoles = Roles::getRoles();
        
        $name = Auth::user()->name;
        return view('admin/rolesmanagement',
            [
                'name' => $name,
                'authmenus' => $getAuthMenu,
                'menus' => $getMenu,
                'roles' => $getRoles,
                'rol' =>null,
                'rolaccs' => null
            ]
        );
    }

    
    public static function showEditRoles($rolesid){
        $userroles = Auth::user()->rolesid;
        $getAuthMenu = Menu::getAuthorizedMenus($userroles);
        $getMenu = Menu::getMenus();
        $getRoles = Roles::getRoles();
        $r = Roles::getRoleById($rolesid);
        $ra = Roleaccess::getRoleaccessByRolesid($rolesid);
        
        $name = Auth::user()->name;
        return view('admin/rolesmanagement',
            [
                'name' => $name,
                'authmenus' => $getAuthMenu,
                'menus' => $getMenu,
                'roles' => $getRoles,
                'rol' =>$r,
                'rolaccs' => $ra
            ]
        );
    }

    
    public static function setRole(Request $request){
        $rolesname = $request->get('rolesname');
        $description = $request->get('description');
        $menuid = $request->get('menuid');
        $role = Roles::setRole($rolesname,$description);
        foreach($menuid as $id){
            Roleaccess::setRoleaccess($role['id'],$id);
        }
        return redirect('admin/rolesmanagement');
    }
    public static function setEditRole(Request $request,$rolesid){
        $rolesname = $request->get('rolesname');
        $description = $request->get('description');
        $menuid = $request->get('menuid');
        $role = Roles::editRole($rolesid,$rolesname,$description);
        Roleaccess::deleteByRolesid($rolesid);
        foreach($menuid as $id){
            Roleaccess::setRoleaccess($role['id'],$id);
        }
        return redirect('admin/rolesmanagement');
    }
    
    public static function deleteRole($rolesid){
        Roles::deleteRole($rolesid);
        Roleaccess::deleteByRolesid($rolesid);
        return redirect('admin/rolesmanagement');
    }

    // ACCESS
    public static function showAccess(){
        $userroles = Auth::user()->rolesid;
        $getAuthMenu = Menu::getAuthorizedMenus($userroles);
        $getMenu = Menu::getMenus();
        $getRoles = Roles::getRoles();
        $getUsers = User::all();
        $name = Auth::user()->name;
        return view('admin/accessmanagement',
            [
                'name' => $name,
                'authmenus' => $getAuthMenu,
                'menus' => $getMenu,
                'roles' => $getRoles,
                'users' => $getUsers
            ]
        );
    }

    
    public static function setAccess($accountid,Request $request){
        $u=User::find($accountid);
        $u->rolesid = $request->rolesid;
        $u->update();
        return redirect('admin/accessmanagement');
    }

    // POST
    public function showPost(Request $request)
    {
        $userroles = Auth::user()->rolesid;
        $getAuthMenu = Menu::getAuthorizedMenus($userroles);
        $p=Post::getPosts();
        $name = Auth::user()->name;
        return view('admin/managepost',[
            'name' => $name,
            'authmenus' => $getAuthMenu,
            'posts'=>$p,
            'post'=>null
        ]);
    }

    public function setPost(Request $request,$id=null)
    {
        $title = $request->get('title');
        $bodypost = $request->get('bodypost');

        $image = null;
        if($request->hasfile('titleimage')){
            $imagefile = $request->file('titleimage');
            $imagename = $imagefile->getClientOriginalName();
            $destination = base_path() . Init::PATHSTRING_POST_TITLE_IMAGE();
            $image = Init::PATH_POST_TITLE_IMAGE().$imagename;
            $imagefile->move($destination, $imagename);
        }

        $submittype = $request->get('submittype');
        $isshow=false;
        if($request->get('isshow') !== null){
            $isshow = true;
        }

        if(isset($id)){
            if($image){
                $p = Post::updatePostById($id,$title,$bodypost,$isshow,$image);        
            }else{
                $p = Post::updatePostById($id,$title,$bodypost,$isshow);                        
            }
        }else{
            $p = Post::setPost($title, $image,$bodypost,$isshow);
        }
        
        
        return redirect('admin/managepost');
        
    }

    
    public function showEditPost($id)
    {
        $userroles = Auth::user()->rolesid;
        $getAuthMenu = Menu::getAuthorizedMenus($userroles);
        $p=Post::getPosts();
        $pid = Post::getPostById($id);
        $name = Auth::user()->name;
        return view('admin/managepost',[
            'name' => $name,
            'authmenus' => $getAuthMenu,
            'posts'=>$p,
            'post'=>$pid
        ]);
    }

    public function deletePost($id){
        $p=Post::deletePost($id);
        return redirect('admin/managepost');
    }
 
}
