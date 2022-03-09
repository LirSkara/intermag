@extends('layout')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Отдельный Продукт</h1>
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
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-images">
                        <main id="gallery">
                            <div class="main-img">
                                <img src="/storage/tovar/{{$Product_Model->img}}" id="current" alt="#">
                            </div>
                            {{-- <div class="images">
                                <img src="/assets/images/product-details/01.jpg" class="img" alt="#">
                                <img src="/assets/images/product-details/02.jpg" class="img" alt="#">
                                <img src="/assets/images/product-details/03.jpg" class="img" alt="#">
                                <img src="/assets/images/product-details/04.jpg" class="img" alt="#">
                                <img src="/assets/images/product-details/05.jpg" class="img" alt="#">
                            </div> --}}
                        </main>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-info">
                        <h2 class="title">{{$Product_Model->name_tovar}}</h2>
                        <p class="category"><i class="lni lni-tag"></i> Дроны:<a href="javascript:void(0)">{{$Product_Model->tags}}</a></p>
                        {{-- <p class="category"><i class="lni lni-tag"></i> Дроны:<a href="javascript:void(0)">Действие
                            камеры</a></p> --}}
                        <h3 class="price">{{$Product_Model->price}}<span>{{$Product_Model->old_price}}</span></h3>
                        <p class="info-text"> {{$Product_Model->description}}</p>
                        {{-- <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group color-option">
                                    <label class="title-label" for="size">Выбрать цвет</label>
                                    <div class="single-checkbox checkbox-style-1">
                                        <input type="checkbox" id="checkbox-1" checked="">
                                        <label for="checkbox-1"><span></span></label>
                                    </div>
                                    <div class="single-checkbox checkbox-style-2">
                                        <input type="checkbox" id="checkbox-2">
                                        <label for="checkbox-2"><span></span></label>
                                    </div>
                                    <div class="single-checkbox checkbox-style-3">
                                        <input type="checkbox" id="checkbox-3">
                                        <label for="checkbox-3"><span></span></label>
                                    </div>
                                    <div class="single-checkbox checkbox-style-4">
                                        <input type="checkbox" id="checkbox-4">
                                        <label for="checkbox-4"><span></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label for="color">Емкость аккумулятора</label>
                                    <select class="form-control" id="color">
                                        <option>5100 mAh</option>
                                        <option>6200 mAh</option>
                                        <option>8000 mAh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group quantity">
                                    <label for="color">Количество</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                        <div class="bottom-content">
                            <div class="row align-items-end">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="button cart-button">
                                        <button class="btn" style="width: 100%;">Добавить в корзину</button>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="wish-button">
                                        <button class="btn"><i class="lni lni-reload"></i> Сравнивать</button>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="wish-button">
                                        <button class="btn"><i class="lni lni-heart"></i> В Список желаний</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-info">
            <div class="single-block">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="info-body custom-responsive-margin">
                            <h4>Детали</h4>
                            <p>Lorem ipsum, повышенная конкуренция среди студентов, но сделайте eiusmod tempor
 так же низко, как усталость и ожирение. Для получения дополнительной информации, пожалуйста, свяжитесь с нами
 физические упражнения и физические упражнения, за исключением получения от них некоторой пользы. В фильме есть
 вернуться в нужное русло не будет опубликован университетский факультет компьютерных наук.</p>
                            <h4>Особенности</h4>
                            <ul class="features">
                                <li>Захватывайте видео 4K30 и фотографии 12MP</li>
                                <li>Игровой контроллер с сенсорным экраном</li>
                                <li>Просмотр Прямой Трансляции С Камеры</li>
                                <li>Полный контроль над HERO6 Black</li>
                                <li>Используйте приложение для работы с выделенной камерой</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="info-body">
                            <h4>Технические характеристики</h4>
                            <ul class="normal-list">
                                <li><span>Ширина:</span> 35.5oz (1006g)</li>
                                <li><span>Максимальная скорость:</span> 35 mph (15 m/s)</li>
                                <li><span>Максимальное расстояние:</span> Up to 9,840ft (3,000m)</li>
                                <li><span>Рабочая частота:</span> 2.4GHz</li>
                                <li><span>Производитель:</span> GoPro, USA</li>
                            </ul>
                            <h4>Варианты Доставки:</h4>
                            <ul class="normal-list">
                                <li><span>Курьер:</span> 2 - 4 дней, $22.50</li>
                                <li><span>Местная доставка:</span> до одной недели, $10.00</li>
                                <li><span>Наземная доставка ИБП:</span> 4 - 6 дней, $18.00</li>
                                <li><span>Unishop Global Export:</span> 3 - 4 дней, $25.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Item Details -->
@endsection