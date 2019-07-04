<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        return view('products.create');
    }
    
    public function store()
    {
        $data = request()->validate([
            'caption'=>'required',
            'image'=>['required', 'image'],
        ]);
        
        \App\Product::create($data);
        
        dd(request()->all());
    }
}
