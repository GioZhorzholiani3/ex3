<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class calculate extends Controller
{
    public  function calculate(Request $request){
        $number1 = $request->get('number1');
        $number2 = $request->get('number2');
        $action = $request->get('action');
        if($action=='multiply'){
            return view('calculate')->with('action',$number1*$number2);
        }
        else if($action=='plus'){
            return view('calculate')->with('action',$number1+$number2);
        }
        else if($action=='devide'){
            return view('calculate')->with('action',$number1/$number2);
        }
        else if($action=='minus'){
            return view('calculate')->with('action',$number1-$number2);
        }
        else{
            return view('calculate')->with('action','there is mistake');
        }


    }

}
