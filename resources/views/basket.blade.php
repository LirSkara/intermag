@extends('layout')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Корзина</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i> Главная</a></li>
                    <li><a href="index.html">Магазин</a></li>
                    <li>Отдельный продукт</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Start Item Details -->
<section class="item-details section">
    <div class="container">
        <div class="d-flex gap-3">
            <div class="top-area w-75">
                <div class="row align-items-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
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
                        <div class="col-lg-4 col-md-6 col-12">
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
                        <div class="col-lg-4 col-md-6 col-12">
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
                        <div class="col-lg-4 col-md-6 col-12">
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
                        <div class="col-lg-4 col-md-6 col-12">
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
                        <div class="col-lg-4 col-md-6 col-12">
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
                        <div class="col-lg-4 col-md-6 col-12">
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
                        <div class="col-lg-4 col-md-6 col-12">
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
            </div>  
            <!-- End Trending Product Area -->
            <div class="top-area w-25 h-50">
                <div class="row align-items-center">
                    <div class="d-flex">
                        <h3>Итого</h3>
                        <h3 class="ms-auto">3000 р</h3>
                    </div>
                    <span class="mt-2">Товары, 0 шт.</span>
                    <div class="button mt-3">
                        <button class="btn w-100">Оформить заказ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Item Details -->
@endsection