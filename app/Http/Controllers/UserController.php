<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewUser(){
        $user=DB::table('product')->get();
        return $user;
    }
}
