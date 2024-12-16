<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.signup.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function started()
    {
        return view('auth.signup.started');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return to_route('user.started');
    }

    /**
     * Display the specified resource.
     */
    public function seller()
    {
        return view('auth.signup.seller');
    }

    /**
     * Display the specified resource.
     */

    public function franchiser()
    {
        return view('auth.signup.franchiser');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
