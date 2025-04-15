<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the CoffeeNect homepage.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('first-page');
    }
}
