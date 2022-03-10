<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ShopGrids - Bootstrap 5 eCommerce HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="/assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="/">
                            <img src="/assets/images/logo/logo.svg" alt="Logo">
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">
                        <!-- Start Main Menu Search -->
                        <div class="main-menu-search">
                            <!-- navbar search start -->
                            <div class="navbar-search search-style-5">
                                <div class="search-select">
                                    <div class="select-position">
                                        <select id="select1">
                                            <option selected disabled>Все</option>
                                            @foreach($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <input type="text" placeholder="Поиск">
                                </div>
                                <div class="search-btn">
                                    <button><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>
                            <!-- navbar search Ends -->
                        </div>
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <div class="middle-right-area">
                            @if($hot_line_count == 1)
                            <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>Горячая линия:
                                    <span>{{$hot_line->tel}}</span>
                                </h3>
                            </div>
                            @endif
                            <div class="navbar-cart">
                                <div class="wishlist">
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-heart"></i>
                                        <span class="total-items">0</span>
                                    </a>
                                </div>
                                <div style="margin-right: 12px" class="cart-items">
                                    <a href="javascript:void(0)" class="main-btn">
                                        <i class="lni lni-cart"></i>
                                        <span class="total-items">2</span>
                                    </a>
                                    <!-- Shopping Item -->
                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <span>2 Items</span>
                                            <a href="cart.html">View Cart</a>
                                        </div>
                                        <ul class="shopping-list">
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                        class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html"><img src="assets/images/header/cart-items/item1.jpg" alt="#"></a>
                                                </div>

                                                <div class="content">
                                                    <h4><a href="product-details.html">
                                                            Apple Watch Series 6</a></h4>
                                                    <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                        class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html"><img src="assets/images/header/cart-items/item2.jpg" alt="#"></a>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                                                    <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span>Total</span>
                                                <span class="total-amount">$134.00</span>
                                            </div>
                                            <div class="button">
                                                <a href="checkout.html" class="btn animate">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Shopping Item -->


                                </div>
                                <div style="margin-right: 12px" class="cart-items">
                                    <a href="javascript:void(0)" class="main-btn">
                                        <i class="bi bi-person-circle"></i>
                                    </a>
                                    <!-- Shopping Item -->
                                    <div class="shopping-item">
                                        <div class="d-flex flex-column">
                                            <a href="/login" class="text-dark mb-2 fs-6">Вход</a>
                                            <a href="/register" class="text-dark fs-6">Регистрация</a>
                                        </div>
                                    </div>
                                    <!--/ End Shopping Item -->

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Header Bottom -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">
                        <!-- Start Mega Category Menu -->
                        <div class="mega-category-menu">
                            <span class="cat-button"><i class="lni lni-menu"></i>Все категории</span>
                            <ul class="sub-category">
                                @foreach($categories as $item)
                                <li>
                                    @if($test = $punkts->where('categories', $item->id)->count() != 0)
                                    <ul class="inner-sub-category">
                                        @foreach($punkts->where('categories', $item->id) as $punkt)
                                        <li><a href="product-grids.html">{{$punkt->name}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    <a href="product-grids.html">{{$item->name}} @if($test == 1)<i class="lni lni-chevron-right"></i>@endif</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End Mega Category Menu -->
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/" class="active" aria-label="Toggle navigation">Главная</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Страницы</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="/about">О нас</a></li>
                                            <li class="nav-item"><a href="/FAQ">Часто задаваемые вопросы</a></li>
                                            <li class="nav-item"><a href="/login">Логин</a></li>
                                            <li class="nav-item"><a href="/register">Регистрация</a></li>
                                            <li class="nav-item"><a href="mail-success.html">Почта</a></li>
                                            <li class="nav-item"><a href="404.html">404 Ошибка</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Магазин</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="product-grids.html">Сетка магазина</a></li>
                                            <li class="nav-item"><a href="product-list.html">Список магазинов</a></li>
                                            <li class="nav-item"><a href="product-details.html">Одиночный магазин</a></li>
                                            <li class="nav-item"><a href="cart.html">Корзина</a></li>
                                            <li class="nav-item"><a href="checkout.html">Проверка</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Блог</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="blog-grid-sidebar.html"> Боковая панель сетки блога</a>
                                            </li>
                                            <li class="nav-item"><a href="blog-single.html">Одиночный блог</a></li>
                                            <li class="nav-item"><a href="blog-single-sidebar.html">Одиночный блог
                                                    Sibebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation"> Контакты</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Nav Social -->
                    <div class="nav-social">
                        @if($icons_count != 0)
                        <h5 class="title">Подпишитесь на нас:</h5>
                        <ul>
                            @foreach($icons as $icon)
                            <li>
                                <a href="{{$icon->link}}">
                                    <img style="width:70%;" src="storage/icons/{{$icon->img}}" alt="...">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- End Nav Social -->
                </div>
            </div>
        </div>
        <!-- End Header Bottom -->
    </header>
    <!-- End Header Area -->

    @yield('content')

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="/assets/images/logo/white-logo.svg" alt="#">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 text-start">
                            <div class="footer-newsletter">
                                <h4 class="title">
                                    Подпишитесь на нашу рассылку новостей
                                    <span>Получайте всю самую свежую информацию, информацию о продажах и предложениях.</span>
                                </h4>
                                <div class="newsletter-form-head">
                                    <form action="#" method="get" target="_blank" class="newsletter-form mt-3">
                                        <input name="EMAIL" placeholder="Введите Email" type="email">
                                        <div class="button">
                                            <button class="btn">Подписаться<span class="dir-part"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact">
                                <h3>Свяжитесь С Нами</h3>
                                <p class="phone">Телефон: +1 (900) 33 169 7720</p>
                                <ul>
                                    <li><span>Понедельник-Пятница: </span> 9.00 am - 8.00 pm</li>
                                    <li><span>Субботу: </span> 10.00 am - 6.00 pm</li>
                                </ul>
                                <p class="mail">
                                    <a href="mailto:support@shopgrids.com">support@shopgrids.com</a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer our-app">
                                <h3>Наше Мобильное приложение</h3>
                                <ul class="app-btn">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-apple"></i>
                                            <span class="small-title">Скачать на</span>
                                            <span class="big-title">App Store</span>
                                        </a>
                                    </li>
                                    <li class="text-decoration-none">
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-play-store"></i>
                                            <span class="small-title text-decoration-none">Скачать на</span>
                                            <span class="big-title text-decoration-none">Google Play</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link d-flex flex-column">
                                <h3>Информация
                                </h3>
                                <ul>
                                    <li><a href="/about">О нас</a></li>
                                    <li><a href="javascript:void(0)">Контакты</a></li>
                                    <li><a href="javascript:void(0)">Загрузки</a></li>
                                    <li><a href="javascript:void(0)">Карта сайта</a></li>
                                    <li><a href="javascript:void(0)">Страница часто задаваемых вопросов</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Цеховые отделы</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Компьютеры и аксессуары</a></li>
                                    <li><a href="javascript:void(0)">Смартфоны и планшеты</a></li>
                                    <li><a href="javascript:void(0)">Телевидение, Видео и Аудио</a></li>
                                    <li><a href="javascript:void(0)">Камеры, Фото и Видео</a></li>
                                    <li><a href="javascript:void(0)">Наушники</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="payment-gateway">
                                <span>Способ оплаты:</span>
                                <img src="/assets/images/footer/credit-cards-footer.png" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="copyright">
                                <p>Compani Colibry</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <ul class="socila">
                                @foreach($icons as $icon)
                                <li class="bg-light rounded-circle"><a class="" href="{{$icon->link}}">
                                        <img style="width:75%;" src="storage/icons/{{$icon->img}}" alt="...">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/tiny-slider.js"></script>
    <script src="/assets/js/glightbox.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>