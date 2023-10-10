<?php

namespace App\Http\Controllers;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class HomeController extends Controller
{
    public function index()  {
        return (view('welcome'));
        
    }

    public function profile ($username){
        
        return $username;
    }

}


