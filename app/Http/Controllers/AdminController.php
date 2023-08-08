<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\NavbarDropdown;
use App\Models\News;
use App\Models\PostTag;
use App\Models\SecondSlide;
use App\Models\Slide;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin');
    }
}
