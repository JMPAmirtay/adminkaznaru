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

    public function news()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function slider()
    {
        $slides = Slide::all();
        return view('admin.slider.index', compact('slides'));
    }

    public function navbar()
    {
        $navbars = Navbar::all();
        return view('admin.navbar.index', compact('navbars'));
    }

    public function navbar_create(Navbar $navbar)
    {
        return view('admin.navbar.create', compact('navbar'));
    }

    public function navbar_store()
    {
        $data = request()->validate([
            'title' => 'string',
            'class' => 'string'
        ]);
        Navbar::create($data);
        return redirect(route('admin.navbar'));
    }

    public function navbar_edit(Navbar $navbar)
    {
        return view('admin.navbar.edit', compact('navbar'));
    }

    public function navbar_update(Navbar $navbar)
    {
        $data = request()->validate([
            'title' => 'string'
        ]);
        $navbar->update($data);
        return redirect()->route('admin.navbar', $navbar->id);
    }

    public function navbar_destroy(Navbar $navbar)
    {
        $navbar->delete();
        return redirect()->route('admin.navbar');
    }

    public function dropdown_create(Navbar $navbar)
    {
        return view('admin.navbar.dropdown.create', compact('navbar'));
    }

    public function dropdown_store()
    {
        $data = request()->validate([
            'title' => 'string',
            'url' => 'string',
            'navbar_id' => 'string'
        ]);
        NavbarDropdown::create($data);
        return redirect(route('admin.navbar'));
    }

    public function dropdown_edit(NavbarDropdown $dropdown)
    {
        return view('admin.navbar.dropdown.edit', compact('dropdown'));
    }

    public function dropdown_destroy(NavbarDropdown $dropdown)
    {
        $dropdown->delete();
        return redirect()->route('admin.navbar');
    }

    public function dropdown_update(NavbarDropdown $dropdown)
    {
        $data = request()->validate([
            'title' => 'string',
            'url' => 'string'
        ]);
        $dropdown->update($data);
        return redirect()->route('admin.navbar');
    }

    public function news_create()
    {
        $tags = Tag::all();
        return view('admin.news.create', compact('tags'));
    }

    public function news_store()
    {
        $data = request()->all();
        $tags = $data['tag'];
        unset($data['tag']);

        $filename = $data['image']->getClientOriginalName();

        //Сохраняем оригинальную картинку
        $data['image']->move(public_path('data\content'), $filename);

        $data['image'] = 'data/content/' . $filename;
        $data['image_name'] = pathinfo($filename)['filename'];

        $post = News::create($data);

        foreach ($tags as $tag) {
            PostTag::create(['news_id' => $post->id, 'tag_id' => $tag]);
        }
        return redirect(route('admin.news'));
    }

    public function news_edit(News $news)
    {
        $tags = Tag::all();
        return view('admin.news.edit', compact('news', 'tags'));
    }

    public function news_destroy(News $news)
    {
        $post_tags = PostTag::all();
        foreach ($post_tags as $post_tag) {
            if ($news->id == $post_tag->news_id) {
                $post_tag->delete();
            }
        }
        $news->delete();
        return redirect()->route('admin.news');
    }

    public function news_update(News $news)
    {
        $data = request()->all();
        if (isset($data['tag'])) {
            $tags = $data['tag'];
            $post_tags = PostTag::all();
            foreach ($post_tags as $post_tag) {
                if ($news->id == $post_tag->news_id) {
                    $post_tag->delete();
                }
            }
            foreach ($tags as $tag) {
                PostTag::create(['news_id' => $news->id, 'tag_id' => $tag]);
            }
            unset($data['tag']);
        }
        $filename = $data['image']->getClientOriginalName();

        //Сохраняем оригинальную картинку
        $data['image']->move(public_path('data\content'), $filename);

        $data['image'] = 'data/content/' . $filename;
        $data['image_name'] = pathinfo($filename)['filename'];
        $news->update($data);
        return redirect()->route('admin.news');
    }

    public function slider_first_edit(Slide $slide)
    {
        return view('admin.slider.first.edit', compact('slide'));
    }

    public function slider_first_update(Slide $slide)
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
