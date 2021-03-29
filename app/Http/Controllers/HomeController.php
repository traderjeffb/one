<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function map()
    {
        return view('map');
    }
    public function schedule()
    {
        return view('schedule');
    }
    public function tickets()
    {
        return view('tickets');
    }
}