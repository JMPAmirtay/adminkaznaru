<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\PostTag;
use App\Models\Tag;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.news.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $data = request()->all();
        $tags = $data['tag'];
        unset($data['tag']);
        if (isset($data['image'])) {
            $filename = $data['image']->getClientOriginalName();

            //Сохраняем оригинальную картинку
            $data['image']->move(public_path('data\content'), $filename);

            $data['image'] = 'data/content/' . $filename;
            $data['image_name'] = pathinfo($filename)['filename'];
        }
        $post = News::create($data);

        foreach ($tags as $tag) {
            PostTag::create(['news_id' => $post->id, 'tag_id' => $tag]);
        }
        return redirect(route('admin.news'));
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $tags = Tag::all();
        return view('admin.news.edit', compact('news', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
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
        if (isset($data['image'])) {
            $filename = $data['image']->getClientOriginalName();

            //Сохраняем оригинальную картинку
            $data['image']->move(public_path('data\content'), $filename);

            $data['image'] = 'data/content/' . $filename;
            $data['image_name'] = pathinfo($filename)['filename'];
        }
        $news->update($data);
        return redirect()->route('admin.news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
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
}
