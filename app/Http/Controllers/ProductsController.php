<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){



        return view('products.index');
        //a way to pass variable: compact();
        //return view('products.index', compact('title', 'description')); // 'title' is referring to $title

    }

    public function about(){
        return 'About Us Page';
    }

    public function show($id){
        return $id;
    }
}
