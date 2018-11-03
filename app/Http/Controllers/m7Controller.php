<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class m7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return view('meeting7');
    }
    public function getData(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        if($b == 'weekdays'){
            switch ($a) {
                case 'morning':
                    $data['activity'] = 'studying';                    
                    break;
                case 'afternoon':
                    $data['activity'] = 'watching';                    
                    break;
                case 'evening':
                    $data['activity'] = 'cycling';                    
                    break;
                case 'night':
                    $data['activity'] = 'studying';                    
                    break;
                default:
                    # code...
                    break;
            }
        }
        if($b == 'weekends'){
            switch ($a) {
                case 'morning':
                    $data['activity'] = 'watching';                    
                    break;
                case 'afternoon':
                    $data['activity'] = 'playing';                    
                    break;
                case 'evening':
                    $data['activity'] = 'cycling';                    
                    break;
                case 'night':
                    $data['activity'] = 'playing';                    
                    break;
                default:
                    # code...
                    break;
            }
        }
        // if($a == 'morning' && $b == 'weekdays'){
        //     $data['activity'] = 'studying';
        // }
        // if($a == 'afternoon' && $b == 'weekdays'){
        //     $data['activity'] = 'watching';
        // }
        // if($a == 'evening' && $b == 'weekdays'){
        //     $data['activity'] = 'cycling';
        // }
        // if($a == 'night' && $b == 'weekdays'){
        //     $data['activity'] = 'studying';
        // }
        // if($a == 'morning' && $b == 'weekends'){
        //     $data['activity'] = 'watching';
        // }
        // if($a == 'afternoon' && $b == 'weekends'){
        //     $data['activity'] = 'playing';
        // }
        // if($a == 'evening' && $b == 'weekends'){
        //     $data['activity'] = 'cycling';
        // }
        // if($a == 'night' && $b == 'weekends'){
        //     $data['activity'] = 'playing';
        // }
        return view("meeting7", $data);
    }
}
