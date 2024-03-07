<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request) {
        return view('category.show', ['category' => $request]);
    }
}
