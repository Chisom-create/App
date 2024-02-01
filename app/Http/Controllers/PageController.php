<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function users(){
        return view('users');
    }    
    public function dashboard(){
        return view('dashboard');
    }
    public function employee(){
        return view('employee');
    }
    public function expenditure(){
        return view('expenditure');
    }
    public function revenue(){
        return view('revenue');
    }
    public function project(){
        return view('project');
    }
    public function client(){
        return view('client');
    }
}
