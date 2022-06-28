<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        return view("pages.mulia-products");
    }
    public function create()
    {
        return view("pages.mulia-add-product");
    }
}
