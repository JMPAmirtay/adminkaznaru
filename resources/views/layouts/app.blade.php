<!doctype html>
<html lang="en">
<head>
    <title>
        КазНАИУ - Казахский национальный аграрный исследовательский университет
    </title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap"
        rel="stylesheet"
    />
    <link href="{{ asset('css/index.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/adaptive.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link
        rel="SHORTCUT ICON"
        href="{{ asset('favicon.png') }}"
        type="image/png"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body onload="start();">
<div class="all">
    <header>
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <img
                src="https://cdn-icons-png.flaticon.com/512/271/271237.png"
                alt=""
            />
        </button>

        <div class="toolbar">
            <div id="burger" onclick="$('#toolbar-hidden').toggle()">
                <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fas"
                    data-icon="bars"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                    class="svg-inline--fa fa-bars fa-w-14 fa-3x"
                >
                    <path
                        fill="currentColor"
                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                        class=""
                    ></path>
                </svg>
            </div>
            <div class="wrap" id="toolbar-hidden">
                <ul class="toolbar-right dropdown">
                    <li>
                        <a
                            style="display: flex; align-items: center"
                            href="https://www.kaznaru.edu.kz/?lang=kz"
                        >
                            <img
                                src="{{ asset('data/icons/flag_kz.jpg') }}"
                                alt="flag_ru"
                                style="width: 30px; margin-right: 8px"
                            />
                            Қаз</a
                        >
                    </li>
                    <li>
                        <a
                            style="display: flex; align-items: center"
                            href="https://www.kaznaru.edu.kz/?lang=ru"
                            class="lang-check"
                        ><img
                                src="{{ asset('data/icons/Flag_of_Russia.svg.webp') }}"
                                alt="flag_ru"
                                style="width: 23px; margin-right: 8px"
                            />Рус</a
                        >
                    </li>
                    <li>
                        <a
                            style="display: flex; align-items: center"
                            href="https://www.kaznaru.edu.kz/?lang=en"
                        ><img
                                src="{{ asset('data/icons/flag_usa.png') }}"
                                alt="flag_ru"
                                style="width: 25px; margin-right: 8px"
                            />En</a
                        >
                    </li>
                </ul>
                <ul>
                    <li><a href="page/talapker/?lang=ru">Абитуриентам</a></li>
                    <li><a href="page/studentter/?lang=ru">Обучающимся</a></li>
                    <li><a href="page/kyzmetkerler/?lang=ru">Сотрудникам</a></li>
                    <li>
                        <a href="page/zhumys_berushiler/?lang=ru">Работодателям</a>
                    </li>
                    <li><a href="page/tulekter/?lang=ru">Выпускникам</a></li>
                    <li><a href="page/seriktester/?lang=ru">Партнерам</a></li>
                    <li><a href="page/press/?lang=ru">Для прессы</a></li>
                    <li>
                        <a href="https://www.kaznaru.edu.kz/page/DO"
                        >On-Line обучение
                        </a>
                    </li>
                </ul>
                <div class="dropdown_buttons">
                    <a
                        href="https://es.kaznaru.edu.kz"
                        class="auth-link"
                        title="Platonus"
                    >
                        <img
                            src="{{ asset('data/icons/platonus.png') }}"
                            alt="platonus"
                        />
                    </a>
                    <a
                        href="https://outlook.office365.com/"
                        class="auth-link"
                        title="Электронная почта"
                    >
                        <img
                            src="{{ asset('data/icons/post.png') }}"
                            alt="post"
                        />
                    </a>
                    <a
                        href="https://library.kaznaru.edu.kz/new/?lang=ru"
                        class="auth-link"
                        title="Научная библиотека"
                    >
                        <img
                            src="{{ asset('data/icons/lib.png') }}"
                            alt="lib"
                        />
                    </a>
                    <a
                        href="https://edoc.kaznaru.edu.kz/login/"
                        class="auth-link"
                        title="Документооборот"
                    >
                        <img
                            src="{{ asset('data/icons/docob.png') }}"
                            alt="docob"
                        />
                    </a>
                    <a
                        href="https://itserv.kaznaru.edu.kz"
                        class="auth-link"
                        title="Сервисное обслуживание КазНАИУ"
                    >
                        <img
                            src="{{ asset('data/icons/itserv.png') }}"
                            alt="itserv"
                        />
                    </a>
                    <a
                        href="https://repository.kaznaru.edu.kz/"
                        class="auth-link"
                        title="Репозиторий"
                    >
                        <img
                            src="{{ asset('data/icons/репозиторий.png') }}"
                            alt="rep"
                        />
                    </a>
                    <a
                        href="https://www.kaznaru.edu.kz/campus/"
                        class="auth-link"
                        title="Электронное общежитие"
                    >
                        <img
                            src="{{ asset('data/icons/общежитие.png') }}"
                            alt="studhome"
                        />
                    </a>
                    <a
                        href="https://skud.kaznaru.edu.kz/"
                        class="auth-link"
                        title="СКУД"
                    >
                        <img
                            src="{{ asset('data/icons/скуд.png') }}"
                            alt="scud"
                        />
                    </a>
                    <a
                        href="https://www.kaznaru.edu.kz/page/manager/"
                        class="auth-link"
                        title="Event manager"
                    >
                        <img
                            src="{{ asset('data/icons/евентменеджер.png') }}"
                            alt="iventmanager"
                        />
                    </a>
                </div>
            </div>
        </div>
        <br/>
        <div class="main">
            <div class="wrap2">
                <form class="search-bar">
                    <a
                        href="https://agrodamu.kz/ru"
                        style="
                  margin-left: 3%;
                  margin-right: 20px;
                  color: #0f9d58;
                  font-size: 20px;
                  font-weight: bolder;
                  line-height: 150%;
                  text-shadow: #000000 0 1px 1px;
                  text-decoration: none;
                "
                    ><img
                            src="{{ asset('data/icons/agrodamu-e1590494630470.png') }}"
                            alt="AGRODAMU"
                            style="width: 40px"
                        />
                        AGRODAMU</a
                    >
                    <div class="search-bar-link">
                        <a href="page/sitemap/?lang=ru" class="site-map">Карта сайта</a>
                        <a href="page/keri_baylanys/?lang=ru" class="site-map"
                        >Обратная связь</a
                        >
                        <a href="#" class="site-map"
                        >Телефонный справочник</a
                        >
                    </div>
                </form>
                <a href="?lang=ru" class="logo">
                    <img src="{{ asset("favicon.png") }}" alt="КазНАИУ"/>
                    <div class="logo-txt">
                <span
                >Казахский Национальный Аграрный<br/>
                  Исследовательский Университет</span
                >
                        <br/>Основан в 1929 году
                    </div>
                </a>
            </div>
        </div>
        <nav>
            <div class="wrap">
                <ul class="nav-ul">
                    @foreach($navbars as $navbar)
                        <li class="{{ $navbar->class }}">
                            <span>{{ $navbar->title }}</span>
                            <div>
                                @foreach($navbar->dropdowns as $dropdown)
                                    <a
                                        href="{{ $dropdown->url }}"
                                    >{{ $dropdown->title }}</a
                                    >
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                </ul>
                <a
                    class="nav-blog"
                    href="page/blog_rector/?link=omirbaian_509&lang=ru"
                >Блог</a
                >
            </div>
        </nav>
    </header>
    @yield('slider')
    <div class="content">
        <div class="wrap" style="width: 1240px">
            <div class="right">
                <style>
                    #s0 {
                        box-shadow: 0 0 25px red;
                    }

                    .wrap_serv {
                        flex-wrap: wrap !important;
                        width: 303px !important;
                    }
                </style>
                @yield('sidebar')
                <div class="sidebar2">
                    <div class="sidebar-select">
                        <span class="sidebar-selected">Пользователь</span>
                    </div>
                    <div class="sidebar-content-adv">
                        <form
                            action="page/enter/?cookie=empty"
                            class="auth-form"
                            method="POST"
                            onsubmit='if($("#recaptcha").is(":hidden")){$("#recaptcha").show();return false}'
                        >
                            <label for="auth-user">
                                <b>Учетная запись:</b>
                            </label>
                            <input name="auth-user" id="auth-user" class="auth-input"/>
                            <label for="auth-pass">
                                <b>Пароль:</b><a href="">Забыли пароль?</a>
                            </label>
                            <input
                                name="auth-pass"
                                id="auth-pass"
                                type="password"
                                class="auth-input"
                            />
                            <script src="https://www.google.com/recaptcha/api.js?"></script>
                            <style>
                                .g-recaptcha {
                                    width: 164px;
                                    margin: 0 auto;
                                    display: none;
                                }
                            </style>
                            <div
                                id="recaptcha"
                                class="g-recaptcha"
                                data-sitekey="6LehIscaAAAAAH3DrCCyb_wpKsBoww0jKXk6erfb"
                                data-size="compact"
                            ></div>
                            <input
                                type="submit"
                                class="green auth-submit"
                                value="Отправить"
                            />
                        </form>

                        <br/>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<footer>
    <div class="footer-ornament"></div>
    <div class="footer">
        <div class="logo_footer">
            <img
                src="{{ asset("data/icons/footer.jpg") }}"
                alt="КазНАУ"
                style="width: 150px; height: 150px"
            />
        </div>
        <div class="inf_footer">
            <p>
                Казахский Национальный Аграрный<br/>
                Исследовательский Университет
            </p>
            <p>050010, г.Алматы, проспект Абая, 8</p>
            <p>
                Приемная комиссия: <span>+7(727) 264 06 13, +7(727) 264 08 54</span>
            </p>
            <p>Канцелярия (факс):<span>+7(727) 262 11 08</span></p>
            <p>e-mail: <span>info@kaznaru.edu.kz</span></p>
        </div>
        <div class="about_footer">
            <p>
                Казахский Национальный Аграрный<br/>
                Исследовательский Университет <br/>
                <span
                >- элитный вуз инновационного направления, лидер аграрного сектора
              в Казахстане, Средней и Центральной Азии</span
                >
            </p>
        </div>
        <div class="social_media">
            <a
                href="https://vk.com/kaznau1929"
                class="grey-text valign-wrapper"
                target="_blank"
                rel="nofollow"
            >
                <i class="fa-brands fa-vk"></i>
            </a>
            <a
                href="https://www.facebook.com/profile.php?id=100043580851461"
                class="grey-text valign-wrapper"
                target="_blank"
                rel="nofollow"
            >
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a
                href="https://www.instagram.com/kaznaru_official"
                class="grey-text valign-wrapper"
                target="_blank"
                rel="nofollow"
            >
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a
                href="https://www.tiktok.com/@kaznaru_"
                class="grey-text valign-wrapper"
                target="_blank"
                rel="nofollow"
            >
                <i class="fa-brands fa-tiktok"></i>
            </a>
        </div>
    </div>
</footer>
</div>
</body>
<script src="{{ asset("js/topbotton.js")}}"></script>
<script src="{{ asset("js/slider.js")}}"></script>
<script src="{{ asset("js/jquery.min.js")}}"></script>
<script src="{{ asset("js/googlesearch.js")}}"></script>
<script src="{{ asset("js/publications_and_conferences.js")}}"></script>
<script src="{{ asset("js/news.js")}}"></script>
<!-- /c-carousel -->
<script
    src="{{ asset("js/jquery.carouFredSel-6.0.4-packed.js")}}"
    type="text/javascript"
></script>
</html>
