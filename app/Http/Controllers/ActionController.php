<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;

/*
by Gentle Programmer +2347064229453
*/

class ActionController extends Controller
{
    //search function... select user table ( name or email)
     public function search()
    {
       $q = Input::get('q');
    if($q != ""){
        $user = User::where( 'name', 'LIKE', '%' . $q . '%' )->orWhere( 'email', 'LIKE', '%' . $q . '%' )->get();

        if (count($user)>0) {
            return view('welcome')->with('details',$user)->with('query',$q);

        }
    
        else {
            return back()->withMessage( 'No Details found. Try to search again !' );
        }
    }
    return back()->withMessage ( 'No Details found. Try to search again !' );
	}
}
