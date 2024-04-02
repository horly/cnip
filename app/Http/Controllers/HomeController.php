<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function home()
    {
        return view('home.home');
    }

    public function agriculture()
    {
        return view('activity.agriculture');
    }

    public function transport()
    {
        return view('activity.transport');
    }

    public function immobilier()
    {
        return view('activity.immobilier');
    }

    public function tourisme()
    {
        return view('activity.tourisme');
    }

    public function general_trade()
    {
        return view('activity.general_trade');
    }
}
