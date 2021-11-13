<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Fortnite extends Controller
{
   function inicio(){
        return view('login');
    }
    function jinx(Request $request){
        $usuario = $request->input('inusername');
        $contra = $request->input('inpassword');
        if ($usuario==0) {
            return view('toledo');
        }
        else if ($contra==0) {
            return view('toledo');
        }
        else {
            return view('toledo');
        }
    }
}