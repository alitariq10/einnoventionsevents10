<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // public function index()
    // {
    //     return view('buyticket');
    // }

    public function bookTicket()
    {
        return view('ticket_detail');
    }
}
