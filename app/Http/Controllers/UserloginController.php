<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserloginController extends Controller
{
    function verify(Request $request)
    {
        $view = 'error';
        // dd($request->all());
        $name = $request->name;
        $password = $request->password;

        if($name == 'dzikrullah')
        {
            if($password=="12345"){
                $view = 'success';
            }

        }

        return view($view);
    }

}

