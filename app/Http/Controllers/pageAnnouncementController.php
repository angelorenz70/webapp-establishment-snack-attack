<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class pageAnnouncementController extends Controller
{
    public function index(){
        $data = DB::table('announcements')
                ->select('id','header', 'sub_header', 'image', 'description')
                ->get();

        return view('dashboard.dashboard', ['announcements' => $data]);
    }

}
