<?php

namespace App\Http\Controllers;

use App\Models\CategoryManager;
use Illuminate\Http\Request;

class CategoryManagerController extends Controller{
    public function index()
    {
        $data = CategoryManager::all();
        return view('category.index', ['categories' => $data]);
    }
}
