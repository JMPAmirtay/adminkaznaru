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
            @foreach($sidebar_announces->take(4) as $sidebar_announce)
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
            @foreach($sidebar_conferences->take(5) as $sidebar_conference)
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
