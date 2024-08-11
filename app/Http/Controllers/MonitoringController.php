<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringControllers;
use App\Models\Audit;
use App\Models\KkaInformation;

class MonitoringController extends Controller
{
    public function index(){
        return view('dashboard.MONITORING.index');
    }
}
