<?php

namespace App\Http\Controllers;
use App\Models\Posts;


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
        $this->middleware('auth');
    }

    public function showRegistrationForm()
    {
        return redirect('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $posts = Posts::orderBy('id', 'DESC')->get();
            
        return view('home')
        ->with(['posts' => $posts,]);
    }
}
