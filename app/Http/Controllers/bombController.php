<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bombController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start(Request $request)
    {
        if(!$request->session()->has('table')){
            $table = [[]];
            $k = 0;
            for($i = 0 ; $i < 3 ; $i++){
                for($j = 0 ; $j < 3 ; $j++){
                    $table[$i][$j] = ++$k;
                }
            }
            $request->session()->put('table',$table);
        }
        
        if(!$request->session()->has('bomb')){
            $bomb = [[]];
            $k=0;
            for($i = 0 ; $i < 3 ; $i++){
                for($j = 0 ; $j < 3 ; $j++){
                    $bomb[$i][$j] = ++$k;
                }
            }
            for($b = 0; $b < 3; $b++){
                $xbomb = rand(0,2);
                $ybomb = rand(0,2);
                echo $xbomb.$ybomb;
                $bomb[$xbomb][$ybomb] = 'b';
                $request->session()->put('bomb',$bomb);
            }
        }
        if($request->session()->has('turn')){
            echo $request->session()->get("turn");
        }
        if(!$request->session()->has('turn')){
            $request->session()->put('turn',0);
        }
        if(!$request->session()->has('win')){
            $request->session()->put('win',0);
        }
        $data['turn'] = $request->session()->get("turn");
        $data['win'] = $request->session()->get("win");
        $data['bomb'] = $request->session()->get("bomb");
        $data['table'] = $request->session()->get("table");
        return view('bomb', $data);
        //
    }
    public function calculate(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $turn = $request->session()->get("turn");
        $request->session()->put('turn',$turn + 1);
        $win = $request->session()->get("win");
        $bomb = $request->session()->get("bomb");
        $table = $request->session()->get("table");
        if($bomb[$a-1][$b-1]=='b'){
           $request->session()->put('win',$win + 1);
           $table[$a-1][$b-1]='b';
        }else{
            $table[$a-1][$b-1]='x';
        }
        $request->session()->put('table',$table);
        if($turn >= 2){
            switch($win){
                case 3:
                    echo 'Excellent';
                    break;
                case 2:
                    echo 'Great';
                    break;
                case 1;
                    echo 'Try Harder';
                    break;
                case 0:
                    echo 'Game over';
                    break;
            }
            $request->session()->flush();
        }else
        return redirect('/bomb');
    
    }
    public function flushSession(Request $request){
        $request->session()->flush();
    }
}
