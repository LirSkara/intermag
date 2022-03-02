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
                            <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                            <li class="breadcrumb-item active">Категории</li>
                        </ol>
                    </nav>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Добавить категорию
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавление категории</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/category" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="name" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Название категории</label>
                                <button class="btn btn-primary mt-2">Добавить</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Назад</button>
                        
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- End  Modal -->

            <!-- End Page Title -->
            @foreach($reviews as $item)
            <div class="container mt-4 text-center bg-light">
                <div class="d-flex flex-column">
                    <div class="d-flex"><h3 class="lead fs-3">{{$item->name}}</h3>
                        <div class="btn-group dropend ms-1">
                        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu bg-light ms-1">
                            <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}">Редактировать</button></li>
                            <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">Удалить</button></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Edit -->
            <div class="modal fade" id="edit{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Редактирование</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="/edit_category/{{$item->id}}" method="post">
                            <div class="form-floating mb-3">
                                @csrf
                                <input value="{{$item->name}}" type="name" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Название категории</label>
                                <button class="btn btn-primary mt-2">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <!-- Modal Delete -->
            <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Вы уверены в этом?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <a href="/delete_category/{{$item->id}}" class="btn btn-danger mt-2">Удалить навсегда</a>
                    <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">Отмена</button>
                </div>
                </div>
            </div>
            </div>
            @endforeach
            <!-- End Page Title -->


    </div>
</div> 
</main>
@endsection