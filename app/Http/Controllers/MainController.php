<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\News;
use App\Models\SidebarAnnounce;
use App\Models\SidebarConference;
use App\Models\SidebarLink;
use App\Models\Slide;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $slides = Slide::all();
        $sidebar_links = SidebarLink::all();
        $sidebar_announces = SidebarAnnounce::all();
        $sidebar_conferences = SidebarConference::all();
        $news = News::paginate(4);
        $media_tag = Tag::where('title', 'Мультимедиа')->firstOrFail()->news;
        $mass_media_tag = Tag::where('title', 'СМИ о нас')->firstOrFail()->news;
        $congratulation_tag = Tag::where('title', 'Поздравления')->firstOrFail()->news;
        return view('main', compact('navbars', 'slides', 'sidebar_links', 'sidebar_announces', 'sidebar_conferences', 'news', 'media_tag', 'mass_media_tag', 'congratulation_tag'));
    }
}
