<?php

namespace App\Http\Controllers;
use App\Clothes;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clothes=clothes::orderBy('id','DESC')->paginate(9);
      
        return View('home',['clothes'=>$clothes]);
    }
}
