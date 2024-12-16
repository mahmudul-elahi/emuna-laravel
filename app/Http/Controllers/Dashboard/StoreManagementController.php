<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreManagementController extends Controller
{
    public function index()
    {
        return view('dashboard.store_management.index');
    }
    public function online()
    {
        return view('dashboard.store_management.online');
    }
    public function recent()
    {
        return view('dashboard.store_management.recent-online');
    }
    public function offline()
    {
        return view('dashboard.store_management.offline');
    }
    public function offline_status()
    {
        return view('dashboard.store_management.offline-status');
    }
    public function offline_monthly_sale()
    {
        return view('dashboard.store_management.offline-monthly_sale');
    }
}
