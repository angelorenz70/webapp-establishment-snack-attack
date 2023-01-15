<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data = DB::table('announcements')
                ->select('id','header', 'sub_header', 'image', 'description')
                ->get();

        return view('homepage', ['announcements' => $data]);
    }

    public function login(){
        return view('loginPage');
    }

    public function register(){
        return view('registerPage');        
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }
}
