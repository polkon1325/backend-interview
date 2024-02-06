<?php

namespace App\Http\Controllers;

use App\Models\ProductManager;
use Illuminate\Http\Request;

class ProductManagerController extends Controller{
    public function index()
    {
        $data = ProductManager::all();
        return view('product.index', ['products' => $data]);
    }
}
