@extends('admin.admin_layout')
@section('admin_main')
<main id="main" class="main">
    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <h1>Категории</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/admin_home">Главная</a></li>
                            <li class="breadcrumb-item active">Категории</li>
                        </ol>
                    </nav>
                </div>
                <button class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#addcategory">Добавить категорию</button>
            </div>
        </div>

        <section class="section dashboard mt-2">
            <div class="row">
            @foreach($reviews as $item)
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card pb-0">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit">Редактировать</button></li>
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete">Удалить</button></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->name}}</h2>    
                        </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exampleModalLabel">Редактировать категорию</h3>
                                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/edit_category/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                    <div class="form-floating mt-2">
                                        <input type="text" name="name" value="{{$item->name}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Название категории</label>
                                    </div>

                                    <button class="btn btn-lg btn-carousel mt-2 w-100">Редактировать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal delete -->
                <div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width: 400px;">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="d-flex flex-column">
                                    <h4>Подтверждение</h4>
                                    <div>Вы действительно хотите удалить эту категорию? Отменить это действие будет невозможно</div>
                                    <div class="d-flex gap-3 ms-auto mt-1">
                                        <a href="/delete_category/{{$item->id}}" class="text-dark py-2">Да</a>
                                        <button class="btn" data-bs-dismiss="modal">Нет</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </section>
    </div>
</main>
        
<!-- Modal Add Category -->
<div class="modal fade" id="addcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex border-0">
                <h3 class="modal-title ms-auto" id="exampleModalLabel">Добавление категории</h3>
                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/category" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="form-floating mt-2">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Название категории</label>
                    </div>

                    <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection