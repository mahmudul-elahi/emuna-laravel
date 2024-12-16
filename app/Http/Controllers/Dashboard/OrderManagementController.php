<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderManagementController extends Controller
{
    public function index()
    {
        return view('dashboard.order_management.index');
    }
    public function order_list()
    {
        return view('dashboard.order_management.order_list');
    }
    public function update()
    {
        return view('dashboard.order_management.update');
    }
}
