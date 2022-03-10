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
            <ul class="nav px-1 mx-auto" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="btn btn-none border-bottom-custom" id="login_tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h1>Одобренные</h1></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-none" id="reg_tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h1>Неодобренные</h1></button>
                </li>
            </ul>
            <button id="approve" class="btn btn-success me-2 d-none" data-bs-toggle="modal" data-bs-target="#approve_modal">Одобрить всё</button>
            <button class="btn btn-carousel" data-bs-toggle="modal" data-bs-target="#addtovar">Добавить товар</button>
        </div><!-- End Page Title -->
    </div>

    <section class="section dashboard mt-0">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="login_tab">
                <div class="row">
                    @foreach($tovar->where('status', 1) as $item)
                        <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-image">
                                    <img src="/storage/tovar/{{$item->img}}" alt="#">
                                    <div class="button">
                                        <button class="btn bg-blue" data-bs-toggle="modal" data-bs-target="#edittovar{{$item->id}}">Редактировать</button>
                                        <button class="btn bg-red mt-2" data-bs-toggle="modal" data-bs-target="#deletetovar{{$item->id}}">Удалить</button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">{{$item->tags}}</span>
                                    <h4 class="title">
                                        <a href="/product/{{$item->id}}">{{$item->name_tovar}}</a>
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

                        <!-- Modal Edit Tovar -->
                        <div class="modal fade" id="edittovar{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header d-flex border-0">
                                        <h3 class="modal-title ms-auto" id="exampleModalLabel">Редактировать товар</h3>
                                        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/edit_tovar/{{$item->id}}" method="POST" enctype="multipart/form-data">
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

                        <!-- Modal delete -->
                        <div class="modal fade" id="deletetovar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="reg_tab">
                <div class="row">     
                    @foreach($tovar->where('status', 0) as $item)
                        <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-image">
                                    <img src="/storage/tovar/{{$item->img}}" alt="#">
                                    <div class="button">
                                        <button class="btn bg-blue" data-bs-toggle="modal" data-bs-target="#edittovar{{$item->id}}">Редактировать</button>
                                        <button class="btn bg-red mt-2" data-bs-toggle="modal" data-bs-target="#deletetovar{{$item->id}}">Удалить</button>
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
                                    <div>
                                        <a href="/approve/{{$item->id}}" class="btn btn-success w-100 mt-2">Одобрить</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>

                        <!-- Modal Edit Tovar -->
                        <div class="modal fade" id="edittovar{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header d-flex border-0">
                                        <h3 class="modal-title ms-auto" id="exampleModalLabel">Редактировать товар</h3>
                                        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/edit_tovar/{{$item->id}}" method="POST" enctype="multipart/form-data">
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

                        <!-- Modal delete -->
                        <div class="modal fade" id="deletetovar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            </div>
        </div>
    </section>
</div>

</main><!-- End #main -->

<!-- Modal Add Tovar -->
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
                <input type="text" name="name_tovar" class="form-control" id="floatingInput" placeholder="Наименование товара">
                <label for="floatingInput">Наименование товара</label>
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="tags" class="form-control" id="floatingInput" placeholder="Теги">
                <label for="floatingInput">Теги</label>
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="price" class="form-control" id="floatingInput" placeholder="Цена">
                <label for="floatingInput">Цена</label>
            </div>

            <div class="form-floating mt-2">
                <input type="text" name="description" class="form-control" id="floatingInput" placeholder="Описание">
                <label for="floatingInput">Описание</label>
            </div>

            <div class="form-floating mt-2">
                <input type="number" name="remains" class="form-control" id="floatingInput" placeholder="Количество">
                <label for="floatingInput">Количество</label>
            </div>

            <select name="category" class="form-select mt-2" aria-label="Default select example">
                <option selected disabled>Выберите категорию</option>
                @foreach($category as $item)
                    <option disabled><----- {{$item->name}} -----></option>
                    @foreach($punkts->where('categories', $item->id) as $punkt)
                        <option value="{{$punkt->id}}">{{$item->name}} -> {{$punkt->name}}</option>
                    @endforeach
                @endforeach
            </select>

            <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить товар</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal approve  -->
<div class="modal fade" id="approve_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 400px;">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-column">
                    <h4>Подтверждение</h4>
                    <div>Вы действительно хотите одобрить все товары? Отменить это действие будет невозможно</div>
                    <div class="d-flex gap-3 ms-auto mt-1">
                        <a href="/approve_all" class="text-dark py-2">Да</a>
                        <button class="btn" data-bs-dismiss="modal">Нет</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
reg_tab.onclick = function() {
    login_tab.classList.remove('border-bottom-custom')
    reg_tab.classList.add('border-bottom-custom')
    approve.classList.remove('d-none')
}

login_tab.onclick = function() {
    reg_tab.classList.remove('border-bottom-custom')
    login_tab.classList.add('border-bottom-custom')
    approve.classList.add('d-none')
}
</script>
@endsection
