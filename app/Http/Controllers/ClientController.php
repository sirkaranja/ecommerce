<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('clients.home');
    }
    public function shop(){
        return view('clients.shop');
    }
    
    public function checkout(){
        return view('clients.checkout');
    }
    public function cart(){
        return view('clients.cart');
    }
}
