<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        return view('account.index');
    }

    public function setting(Request $request)
    {
        return view('account.setting');
    }
}
