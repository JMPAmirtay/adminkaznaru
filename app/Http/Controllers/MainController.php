<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\SidebarAnnounce;
use App\Models\SidebarLink;
use App\Models\Slide;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $slides = Slide::all();
        $sidebar_links = SidebarLink::all();
        $sidebar_announces = SidebarAnnounce::all();

        return view('layouts.app', compact('navbars','slides', 'sidebar_links', 'sidebar_announces'));
    }
}
