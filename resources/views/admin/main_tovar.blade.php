@extends('admin.admin_layout')
@section('admin_main')
<main id="main" class="main">

<div class="container d-flex flex-column px-0">
    <div class="pagetitle">
        <div class="d-flex">
            <div>
                <h1>Товары</h1>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/admin_home">Главная</a></li>
                        <li class="breadcrumb-item active">Товары</li>
                    </ol>
                </nav>
            </div>
            <button class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#addtovar">Добавить товар</button>
        </div><!-- End Page Title -->
    </div>

    <section class="section dashboard mt-0">
        <div class="row">     
            @foreach($tovar as $item)
                <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="/storage/tovar/{{$item->img}}" alt="#">
                            <div class="button">
                                <button class="btn bg-blue" data-bs-toggle="modal" data-bs-target="#exittovar">Редактировать</button>
                                <button class="btn bg-red mt-2" data-bs-toggle="modal" data-bs-target="#deletetovar">Удалить</button>
                                <a href="/details_product/{{$item->id}}" class="btn bg-green mt-2">Подробнее</a>
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
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Обзор(ы)</span></li>
                            </ul>
                            <div class="price">
                                <span>{{$item->price}} р</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>

                <!-- Modal Exit Carousel -->
                <div class="modal fade" id="exittovar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exampleModalLabel">Редактировать товар</h3>
                                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/exit_tovar/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div>
                                        <label>Выберите главное фото товара</label>
                                        <input type="file" name="img" class="form-control mt-1">
                                    </div>

                                    <div class="form-floating mt-2">
                                        <input type="text" name="name_tovar" value="{{$item->name_tovar}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Наименование товара</label>
                                    </div>

                                    <div class="form-floating mt-2">
                                        <input type="text" name="tags" value="{{$item->tags}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Теги</label>
                                    </div>

                                    <div class="form-floating mt-2">
                                        <input type="text" name="price" value="{{$item->price}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Цена</label>
                                    </div>

                                    <div class="form-floating mt-2">
                                        <input type="text" name="description" value="{{$item->description}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Описание</label>
                                    </div>

                                    <button class="btn btn-lg btn-carousel mt-2 w-100">Редактировать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="deletetovar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width: 400px;">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="d-flex flex-column">
                                    <h4>Подтверждение</h4>
                                    <div>Вы действительно хотите удалить этот товар? Отменить это действие будет невозможно</div>
                                    <div class="d-flex gap-3 ms-auto mt-1">
                                        <a href="/delete_tovar/{{$item->id}}" class="text-dark py-2">Да</a>
                                        <button class="btn" data-bs-dismiss="modal">Нет</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- End Left side columns -->
    </section>
</div>

</main><!-- End #main -->

<!-- Modal Add Carousel -->
<div class="modal fade" id="addtovar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex border-0">
        <h3 class="modal-title ms-auto" id="exampleModalLabel">Добавление товара</h3>
        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/add_tovar" method="POST" enctype="multipart/form-data">
        @csrf
            <div>
                <label>Выберите главное фото товара</label>
                <input type="file" name="img" class="form-control mt-1">
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="name_tovar" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Наименование товара</label>
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="tags" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Теги</label>
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="price" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Цена</label>
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="description" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Описание</label>
            </div>

            <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить товар</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
