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
                                    <h3><span>{{$carousel->text_price}}</span> {{$carousel->price}} р</h3>
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
                        @if($advertising_count != 0)
                            <div class="hero-small-banner"
                                style="background-image: url(storage/advertising_one/{{$advertising_one->img}});">
                                <div class="content">
                                    <h2>
                                        <span> {{$advertising_one->description}}</span>
                                    {{$advertising_one->title}}
                                    </h2>
                                    <h3> {{$advertising_one->price}} р</h3>
                                </div>
                            </div>
                            <!-- End Small Banner -->
                        @endif
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
                    <h2>Недавно добавленные</h2>
                    <p>Существует множество вариантов отрывков из Lorem Ipsum, но большинство
из них претерпели изменения в той или иной форме.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($tovar as $item)
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="assets/images/products/product-1.jpg" alt="#">
                            <div class="button">
                                <a href="/basket/{{$item->id}}" class="btn"><i class="lni lni-cart"></i>В корзину</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">{{$item->tags}}</span>
                            <h4 class="title">
                                <a href="product-grids.html">{{$item->name_tovar}}</a>
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
                                <span>{{$item->price}} р</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            @endforeach
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
            @if($advertising_two_count != 0)
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner" style="background-image:url(storage/advertising_two/{{$advertising_two->img}})">
                    <div class="content">
                        <h2>{{$advertising_two->description}}</h2>
                        <p class="col-lg-6 col-md-6 col-12">{{$advertising_two->title}}</p>
                        <div class="button">
                            <a href="{{$advertising_two->link}}" class="btn">Просмотр подробных сведений</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($advertising_three_count != 0)
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url('storage/advertising_three/{{$advertising_three->img}}')">
                        <div class="content">
                            <h2>{{$advertising_three->description}}</h2>
                            <p>{{$advertising_three->title}}</p>
                            <div class="button">
                                <a href="{{$advertising_three->link}}" class="btn">Купить сейчас</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- End Banner Area -->
    <!-- Start Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul>
                <!-- Free Shipping -->
                @foreach($servises as $servise)
                <li>
                    <div class="media-icon">
                        <img src="/storage/servise/{{$servise->imgservise}}" alt="Загрузка фото">
                    </div>
                    <div class="media-body">
                        <h5>{{$servise->sloganservise}}</h5>
                        <span>{{$servise->descriptionservise}}</span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- End Shipping Info -->
@endsection