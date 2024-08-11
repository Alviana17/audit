<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rkiaController extends Controller
{
    public function index(){
        return view('dashboard.RKIA.index');
    }
}
