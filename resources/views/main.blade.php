@extends('layouts.app')

@section('slider')
    <div class="slider-main">
        <div class="slider-wrap" id="sw">
            @foreach($slides as $slide)
                <div class="slider" id="slide{{ $slide->id }}" onclick="setslide({{ $slide->id }})">
                    <div class="slider-first">
                        <div class="slider-box slider-content">
                            <a
                                href="{{ $slide->url }}"
                            >
                                <img
                                    class="slider-img"
                                    src="{{ asset($slide->image) }}"
                                    style="height: 400px; width: 627px"
                                    alt="{{ $slide->name }}"
                                /></a>

                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>{{ $slide->title }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-second">
                        @php
                            $second_slides = $slide->second;
                            $second_slide = $second_slides[0];
                        @endphp
                        <div class="slider-box slider-content1">
                            <a
                                href="{{ $second_slide->url }}"
                            ><img
                                    class="slider-img"
                                    src="{{ asset($second_slide->image) }}"
                                    alt="{{ $slide->name }}"
                                /></a>
                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>
                                        {{ $second_slide->title }}
                                    </h3>
                                    <a
                                        href="{{ $second_slide->url }}"
                                    >Подробнее</a
                                    >
                                </div>
                            </div>
                        </div>
                        @php
                            $second_slide = $second_slides[1]
                        @endphp
                        <div class="slider-box slider-content2">
                            <a
                                href="{{ $second_slide->url }}"
                            ><img
                                    src="{{ asset($second_slide->image) }}"
                                    style="height: 180px; width: 310px"
                                    alt="{{ $slide->name }}"
                                /></a>
                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>
                                        {{ $second_slide->title }}
                                    </h3>
                                    <a
                                        href="{{ $second_slide->url }}"
                                    >Подробнее</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-second">
                        @php
                            $second_slide = $second_slides[2]
                        @endphp
                        <div class="slider-box slider-content1">
                            <a
                                href="{{ $second_slide->url }}"
                            ><img
                                    class="slider-img"
                                    src="{{ asset($second_slide->image) }}"
                                    alt="{{ $slide->name }}"
                                /></a>
                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>
                                        {{ $second_slide->title }}
                                    </h3>
                                    <a
                                        href="{{ $second_slide->url }}"
                                    >Подробнее</a
                                    >
                                </div>
                            </div>
                        </div>
                        @php
                            $second_slide = $second_slides[3]
                        @endphp
                        <div class="slider-box slider-content2">
                            <a
                                href="{{ $second_slide->url }}"
                            ><img
                                    src="{{ asset($second_slide->image) }}"
                                    style="height: 180px; width: 310px"
                                    alt="{{ $slide->name }}"
                                /></a>
                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>
                                        {{ $second_slide->title }}
                                    </h3>
                                    <a
                                        href="{{ $second_slide->url }}"
                                    >Подробнее</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('sidebar')
    <div
        style="text-align: center; padding-top: 20px"
        class="wrap_serv sidebar2"
    >
        <a
            href="https://es.kaznaru.edu.kz"
            class="auth-link"
            title="Platonus"
        >
            <img src="{{ asset("data/icons/platonus.png")}} " alt="platonus"/>
        </a>
        <a
            href="https://outlook.office365.com/"
            class="auth-link"
            title="Электронная почта"
        >
            <img src="{{ asset("data/icons/post.png")}} " alt="post"/>
        </a>
        <a
            href="https://library.kaznaru.edu.kz/new/?lang=ru"
            class="auth-link"
            title="Научная библиотека"
        >
            <img src="{{ asset("data/icons/lib.png")}} " alt="lib"/>
        </a>
        <a
            href="https://edoc.kaznaru.edu.kz/login/"
            class="auth-link"
            title="Документооборот"
        >
            <img src="{{ asset("data/icons/docob.png")}} " alt="docob"/>
        </a>
        <a
            href="https://itserv.kaznaru.edu.kz"
            class="auth-link"
            title="Сервисное обслуживание КазНАИУ"
        >
            <img src="{{ asset("data/icons/itserv.png")}} " alt="itserv"/>
        </a>
        <a
            href="https://repository.kaznaru.edu.kz/"
            class="auth-link"
            title="Репозиторий"
        >
            <img src="{{ asset("data/icons/репозиторий.png")}} " alt="rep"/>
        </a>
        <a
            href="https://www.kaznaru.edu.kz/campus/"
            class="auth-link"
            title="Электронное общежитие"
        >
            <img src="{{ asset("data/icons/общежитие.png")}} " alt="studenthome"/>
        </a>
        <a
            href="https://skud.kaznaru.edu.kz/"
            class="auth-link"
            title="СКУД"
        >
            <img src="{{ asset("data/icons/скуд.png")}} " alt="scud"/>
        </a>
        <a
            href="https://www.kaznaru.edu.kz/page/manager/"
            class="auth-link"
            title="Event manager"
        >
            <img src="{{ asset("data/icons/евентменеджер.png")}} " alt="iventmanager"/>
        </a>
    </div>

    <div class="sidebar">
        @foreach($sidebar_links as $sidebar_link)
            <a
                href="{{ $sidebar_link->url }}"
                style="
                  text-decoration: none;
                  width: 95%;
                  display: block;
                  margin: 2px auto -7px;
                  border: 1px solid hsl(0, 4%, 84%);
                "
            >
                <p style="text-decoration: none !important">
                    {{ $sidebar_link->name }}
                </p>
            </a>
        @endforeach
    </div>

    <div class="sidebar2">
        <div class="sidebar-select">
                <span
                    id="side-select1"
                    style="padding-left: 4px"
                    class="sidebar-selected"
                    onclick="sidebar(1)"
                >Объявления</span
                >
            <span id="side-select2" onclick="sidebar(2)">Конференции</span>
        </div>
        <!--ОБЪЯВЛЕНИЯ-->
        <div
            style="
                  overflow: scroll;
                  height: fit-content;
                  overflow-x: hidden;
                "
            class="sidebar-content-adv"
            id="side-con1"
        >
            @foreach($sidebar_announces as $sidebar_announce)
                <div id="events_list">
                    <a
                        href="{{ $sidebar_announce->url }}"
                        class="sidebar-link"
                    >
                        <div class="sidebar-link-date">
                            <span></span>{{ $sidebar_announce->created_at }}
                        </div>
                        <div class="sidebar-link-title">
                            {{ $sidebar_announce->title }}
                        </div>
                        <div class="sidebar-link-span">
                            {{ $sidebar_announce->description }}
                        </div>
                    </a>
                </div>
            @endforeach
            <a href="page/events" class="white sidebar-link-more"
            >Все объявления</a
            >
        </div>
        <!--КОНФНРЕНЦИИ-->
        <div
            class="sidebar-content-adv"
            id="side-con12"
            style="display: none"
        >
            @foreach($sidebar_conferences as $sidebar_conference)
                <a
                    href="{{ $sidebar_conference->url }}"
                    class="sidebar-link"
                >
                    <div class="sidebar-link-date">
                        <span></span>{{ $sidebar_conference->created_at }}
                    </div>
                    <div class="sidebar-link-title">
                        {{ $sidebar_conference->title }}
                    </div>
                    <div class="sidebar-link-span">
                        {{ $sidebar_conference->description }}
                    </div>
                </a>
            @endforeach
            <a href="" class="white sidebar-link-more">Все конференции</a>
        </div>
    </div>
@endsection

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
                @foreach($news as $post)
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
                @foreach($media_tag as $post)
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
                @foreach($mass_media_tag as $post)
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
                @foreach($congratulation_tag as $post)
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
