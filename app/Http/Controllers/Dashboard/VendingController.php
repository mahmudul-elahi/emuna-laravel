<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendingController extends Controller
{
    public function index()
    {
        return view('dashboard.vending.index');
    }

    public function dhave()
    {
        return view('dashboard.vending.dhave');
    }

    public function have()
    {
        return view('dashboard.vending.have');
    }
}
