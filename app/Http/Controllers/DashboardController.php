<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
//         $data= [
//             'nama'=>"dika",
//             'alamat'=>"jalan merak",
//             'masalah'=>"apa aja ada",
//         ];
//         return view('dashboard',compact("data"));
    
//    }
$data = [
    'nama' => 'John Doe',
    'umur' => 30,
    'alamat' => 'Jalan Contoh No. 123',
    'pekerjaan' => 'Programmer',
];

return view('dashboard', compact('data'));

   
   }
}
