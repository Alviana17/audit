<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BahanKlarifikasi;
use App\Models\Audit;
use App\Models\KkaInformation;

class BahanKlarifikasiController extends Controller
{
    public function index(){
        return view('dashboard.BA.index');
    }
}
