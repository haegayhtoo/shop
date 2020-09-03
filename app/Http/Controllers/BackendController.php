<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    function dashboardfun()
    {
        return view('backend.dashboard');
    }
    function table()
    {
        return view('backend.table');

    }
    
}
