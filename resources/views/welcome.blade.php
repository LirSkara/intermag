@extends('layout')
@section('content')
<!-- Start Hero Area -->
<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 custom-padding-right">
                <div class="slider-head">
                    <!-- Start Hero Slider -->
                    <div class="hero-slider">
                        @foreach($main_carousel as $carousel)
                            <div class="single-slider"
                                style="background-image: url(storage/carousel/{{$carousel->foto}});">
                                <div class="content">
                                    <h2><span>{{$carousel->first_text}}</span>
                                        {{$carousel->name_cart}}
                                    </h2>
                                    <p>{{$carousel->description}}</p>
                                    <h3><span>{{$carousel->text_price}}</span> {{$carousel->price}}</h3>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Купить сейчас</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Hero Slider -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                        <!-- Start Small Banner -->
                        <div class="hero-small-banner"
                            style="background-image: url('assets/images/hero/slider-bnr.jpg');">
                            <div class="content">
                                <h2>
                                    <span>Требуется новая строка</span>
                        
                                    iPhone 12 Pro Max
                                </h2>
                                <h3>$259.99</h3>
                            </div>
                        </div>
                        <!-- End Small Banner -->
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <!-- Start Small Banner -->
                        <div class="hero-small-banner style2">
                            <div class="content">
                                <h2>Еженедельная распродажа!</h2>
                                <p>Экономия до 50% на всех товарах интернет-магазина на этой неделе.</p>
                                <div class="button">
                                    <a class="btn" href="product-grids.html">Купить сейчас</a>
                                </div>
                            </div>
                        </div>
                        <!-- Start Small Banner -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start Trending Product Area -->
<section class="trending-product section" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Трендовый Продукт</h2>
                    <p>Существует множество вариантов отрывков из Lorem Ipsum, но большинство
из них претерпели изменения в той или иной форме.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-1.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Часы</span>
                        <h4 class="title">
                            <a href="product-grids.html">Xiaomi Mi Band 5</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Обзор(ы)</span></li>
                        </ul>
                        <div class="price">
                            <span>$199.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-2.jpg" alt="#">
                        <span class="sale-tag">-25%</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Добавить в корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Динамики</span>
                        <h4 class="title">
                            <a href="product-grids.html">Громкоговоритель Большой Мощности</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Обзор(ы)</span></li>
                        </ul>
                        <div class="price">
                            <span>$275.00</span>
                            <span class="discount-price">$300.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-3.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Добавить в корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Камера</span>
                        <h4 class="title">
                            <a href="product-grids.html">Камера безопасности Wi-Fi</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Обзор(ы)</span></li>
                        </ul>
                        <div class="price">
                            <span>$399.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-4.jpg" alt="#">
                        <span class="new-tag">Новые</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Добавить в корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Телефоны</span>
                        <h4 class="title">
                            <a href="product-grids.html">iphone 6x plus</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Обзор(ы)</span></li>
                        </ul>
                        <div class="price">
                            <span>$400.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-5.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Наушники</span>
                        <h4 class="title">
                            <a href="product-grids.html">Беспроводные Наушники</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Обзор(ы)</span></li>
                        </ul>
                        <div class="price">
                            <span>$350.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-6.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Добавить в корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Динамики</span>
                        <h4 class="title">
                            <a href="product-grids.html">Мини-динамик Bluetooth</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Обзор(ы)</span></li>
                        </ul>
                        <div class="price">
                            <span>$70.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-7.jpg" alt="#">
                        <span class="sale-tag">-50%</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Добавить в корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Наушники</span>
                        <h4 class="title">
                            <a href="product-grids.html">PX7 Wireless Headphones</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Обзор(ы)</span></li>
                        </ul>
                        <div class="price">
                            <span>$100.00</span>
                            <span class="discount-price">$200.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-8.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Добавить в корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Ноутбук</span>
                        <h4 class="title">
                            <a href="product-grids.html">Apple MacBook Air</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Обзор(ы)</span></li>
                        </ul>
                        <div class="price">
                            <span>$899.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
        </div>
    </div>
</section>
<!-- End Trending Product Area -->

<!-- Start Call Action Area -->
<section class="call-action section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="inner">
                    <div class="content">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">В настоящее время Вы используете бесплатный<br>
                            Lite version of ShopGrids</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Пожалуйста, приобретите полную версию шаблона
, чтобы получить все страницы,<br> функции и коммерческая лицензия.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn">Покупайте Сейчас</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action Area -->

<!-- Start Banner Area -->
<section class="banner section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner" style="background-image:url('assets/images/banner/banner-1-bg.jpg')">
                    <div class="content">
                        <h2>Умные часы 2.0</h2>
                        <p>Космический серый алюминиевый корпус с <br>Черная / Вольтовая Настоящая Спортивная лента </p>
                        <div class="button">
                            <a href="product-grids.html" class="btn">Просмотр подробных сведений</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner custom-responsive-margin"
                    style="background-image:url('assets/images/banner/banner-2-bg.jpg')">
                    <div class="content">
                        <h2>Умные наушники</h2>
                        <p>Основные характеристики, <br>eiusmod темпор
 так же мало, как и усилий.</p>
                        <div class="button">
                            <a href="product-grids.html" class="btn">Купить сейчас</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Shipping Info -->
<section class="shipping-info">
    <div class="container">
        <ul>
            <!-- Free Shipping -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-delivery"></i>
                </div>
                <div class="media-body">
                    <h5>бесплатная доставка</h5>
                    <span>При заказе свыше 99 долларов</span>
                </div>
            </li>
            <!-- Money Return -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-support"></i>
                </div>
                <div class="media-body">
                    <h5>Поддержка 24/7.</h5>
                    <span>Чат Или Звонок.</span>
                </div>
            </li>
            <!-- Support 24/7 -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class="media-body">
                    <h5>Онлайн-оплата.</h5>
                    <span>Безопасные Платежные Сервисы.</span>
                </div>
            </li>
            <!-- Safe Payment -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-reload"></i>
                </div>
                <div class="media-body">
                    <h5>Легкое Возвращение.</h5>
                    <span>Беспроблемный Шопинг.</span>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- End Shipping Info -->

@endsection