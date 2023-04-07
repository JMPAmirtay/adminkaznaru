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


    public function slider_second_edit(SecondSlide $slide)
    {
        return view('admin.slider.second.edit', compact('slide'));
    }
    public function slider_second_update(SecondSlide $slide)
    {
        $data = request()->all();
        if (isset($data['image'])) {
            $filename = $data['image']->getClientOriginalName();

            //Сохраняем оригинальную картинку
            $data['image']->move(public_path('data\content'), $filename);

            $data['image'] = 'data/content/' . $filename;
            $data['name'] = pathinfo($filename)['filename'];
        }
        $slide->update($data);
        return redirect(route('admin.slider'));
    }
}
