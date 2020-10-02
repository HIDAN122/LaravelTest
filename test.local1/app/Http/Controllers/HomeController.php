<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Http\Controllers\Account\AccountController;
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
        $items = Account::all();
        return view('home',compact('items'));
    }
}
