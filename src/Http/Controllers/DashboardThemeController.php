<?php

namespace Duynguyen\Dadtheme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardThemeController extends Controller
{
    public function create()
    {
        return view('dashboard-theme::register');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}