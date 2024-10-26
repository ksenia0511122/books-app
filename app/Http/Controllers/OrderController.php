<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class OrderController extends Controller
{
    public function index(){
        Order::all();
        return view('index', compact('orders'));
    }

    public function store(Request $request){

    }
}
