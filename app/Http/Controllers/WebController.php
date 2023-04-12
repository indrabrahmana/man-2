<?php

namespace App\Http\Controllers;
use App;
use App\Models\Admin;
use App\Models\Datapegawai;

use Config;

class WebController extends Controller{


    function showadmin(){
       
    }


    function showdashboard(){
        return view('admin/dashboard.index');
    }

    



}