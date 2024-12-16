<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.product.index');
    }
    public function add_product()
    {
        return view('dashboard.product.add_product');
    }
}
