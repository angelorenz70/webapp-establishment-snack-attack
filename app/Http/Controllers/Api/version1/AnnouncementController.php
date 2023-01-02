<?php

namespace App\Http\Controllers\Api\version1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index(){

        return Announcement::all();

    }
}
