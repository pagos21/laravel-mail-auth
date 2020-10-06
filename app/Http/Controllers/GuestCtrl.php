<?php

namespace App\Http\Controllers;
use App\Pizza;
use Illuminate\Http\Request;

class GuestCtrl extends Controller
{
    public function index(){
        $pizs = Pizza::all();
        return view('pizza_list', compact('pizs'));
    }
    public function show($id){
        $piz = Pizza::findOrFail($id);
        return view('pizza_show', compact('piz'));
    }
}
