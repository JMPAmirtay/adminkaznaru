@section('news')
    <div class="mainbar">
        <div class="mainbar-select">
              <span
                  id="main-select1"
                  class="sidebar-selected"
                  onclick="mainbar(1)"
              >Последние новости</span
              >
            <span id="main-select2" onclick="mainbar(2)">Популярные</span>
            <span id="main-select3" onclick="mainbar(3)">Прочитанные</span>
            <a href="page/news/?lang=ru" class="mainbar-select-right"
            >Архив новостей</a
            >
        </div>
        <div class="mainbar-news">
            <div id="newsbox1">
                @foreach($news->take(4) as $post)
                    <div class="news-box">
                        <a
                            href="{{ $post->url }}"
                            class="news-box-link"
                        >
                            <div class="news-box-img">
                                <img src="{{ asset($post->image) }}" alt="{{ $post->image_name }}"/>
                            </div>
                            <div class="news-box-right">
                                <div class="news-box-title">
                                    {{ $post->title }}
                                </div>
                                <div class="news-box-data">
                                    Опубликовано: {{ $post->created_at }} | Просмотров: {{ $post->views }}
                                </div>
                                <div class="news-box-txt">
                                    {{ $post->Description }}
                                </div>
                            </div>
                        </a>
                        <div class="news-box-adt">
                            <span></span>
                            @foreach($post->tags as $tag)
                                <a href="page/news/?lang=ru&rubr={{ $tag->id }}"
                                >{{ $tag->title }}</a
                                >
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <div
                    id="newsloader"
                    class="white news-morebtn"
                    onclick="newsloader()"
                >
                    Загрузить ещё
                </div>
            </div>
        </div>
    </div>
    <div class="mainbar">
        <div class="mainbar-select">
              <span
                  id="multi-select1"
                  class="sidebar-selected"
                  onclick="multi(1)"
              >Мультимедиа</span
              >
            <span id="multi-select2" onclick="multi(2)">СМИ о нас</span>
            <span id="multi-select3" onclick="multi(3)">Поздравляем</span>
            <span id="multi-select4" onclick="multi(4)">Достижения</span>
        </div>
        <!--МУЛЬТИМЕДИА-->
        <div class="mainbar-news">
            <div id="multibox1">
                @foreach($media_tag->take(4) as $post)
                    <div class="news-box" style="padding-bottom: 15px">
                        <a
                            href="{{ $post->url }}"
                            class="news-box-link"
                        >
                            <div class="news-box-img">
                                <img src="{{ $post->image}} " alt="{{ $post->name }}"/>
                                <div class="news-box-play"></div>
                            </div>
                            <div class="news-box-right">
                                <div class="news-box-title">
                                    {{ $post->title }}
                                </div>
                                <div class="news-box-data">
                                    Опубликовано: {{ $post->created_at }} | Просмотров: {{ $post->views }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="white news-morebtn" id="multi-loadmore">
                Загрузить ещё
            </div>
            <div id="multibox2" style="display: none">
                @foreach($mass_media_tag->take(4) as $post)
                    <div class="news-box" style="padding-bottom: 15px">
                        <a
                            href="{{ $post->url }}"
                            class="news-box-link"
                        >
                            <div class="news-box-img">
                                <img src="{{ $post->image}} " alt="{{ $post->name }}"/>
                                <div class="news-box-play"></div>
                            </div>
                            <div class="news-box-right">
                                <div class="news-box-title">
                                    {{ $post->title }}
                                </div>
                                <div class="news-box-data">
                                    Опубликовано: {{ $post->created_at }} | Просмотров: {{ $post->views }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div id="multibox3" style="display: none">
                @foreach($congratulation_tag->take(4) as $post)
                    <div class="news-box" style="padding-bottom: 15px">
                        <a
                            href="{{ $post->url }}"
                            class="news-box-link"
                        >
                            <div class="news-box-img">
                                <img src="{{ $post->image}} " alt="{{ $post->name }}"/>
                                <div class="news-box-play"></div>
                            </div>
                            <div class="news-box-right">
                                <div class="news-box-title">
                                    {{ $post->title }}
                                </div>
                                <div class="news-box-data">
                                    Опубликовано: {{ $post->created_at }} | Просмотров: {{ $post->views }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
