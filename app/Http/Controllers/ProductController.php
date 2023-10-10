<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // public function viewProduct() {
    //     $product = [
    //         'name' => request('1',"kau"),
    //         'price' => request('price',1300)


    //     ];  
    //     return ($product);
    // }

    
    public function viewProduct(){
        $id = 1;

        $product=DB::table('product')
        
        ->select('id','name','category','qty','created_at')
        //->where('id','=',$id)
        //->orwhere('id','=',2)
        //->orderByDesc('name')
        //->limit(2)
        ->get()
        
        
       
        ;

        return $product;
    }


    public function createProduct (Request $ambil){
        $product = [
                "name" => $ambil->name,
                "category"=>$ambil->category,
                "price"=>$ambil->price,
                "qty"=>$ambil->qty,
                "created_at"=>now(),
        ];
        DB::table('product')->insert($product);


        return $product;
    }

    public function updateProduct(Request $ambil){

        $product = [
            "id" =>$ambil->id,
            "name" => $ambil->name,
            "category"=>$ambil->category,
            "price"=>$ambil->price,
            "qty"=>$ambil->qty,
            "created_at"=>now(),
    ];

   $id=$ambil->id;

    DB::table('product')
    ->where('id',$id)
    ->update($product);
 
    // for get return from viewProduct function
$viewAll = $this->viewProduct();
    return $viewAll;

    }


    public function deleteProduct(Request $ambil){
        $id=$ambil->id;
    DB::table('product')
    ->where('id','=',$id)
    ->delete()
    ;
    $viewAll = $this->viewProduct();
    return $viewAll;
    }
}
