<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Startup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about=About::first();
        $categories=Category::orderBy('created_at','asc')->get();
        $startups=Startup::orderBy('created_at','asc')->get();
        return view('front.home',compact('about','categories','startups'));
    }
}
