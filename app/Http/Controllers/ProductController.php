<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
     public function register(){ 
     return view ('product.register');
     }
    public function store(Request $request)
    {

    

    $product = new product ();
    $product ->name = $request-> name;
    $product -> unit = $request-> unit;
    $product -> price = $request-> price;
    $product -> quality = $request-> quality;
    $is_successed= $product::save();
    if($is_successed)
    echo 'record saved successfully';
    else
    echo 'somting went to wong please try again';
    
    }}