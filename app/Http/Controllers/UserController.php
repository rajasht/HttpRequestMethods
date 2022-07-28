<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function testHttpRequest(Request $req){
        // return $req->input();
        $data = $req->input();
        return $data;
    }
}
