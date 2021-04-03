<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel Crash Course";
        $description = "Created by Dary";

        return view('products.index', compact('title', 'description')); // 'title' is referring to $title

    }

    public function about(){
        return 'About Us Page';
    }
}
