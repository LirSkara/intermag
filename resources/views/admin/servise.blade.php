@extends('admin.admin_layout')
@section('admin_main')
<main id="main" class="main">
    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <h1>Сервис</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/admin_home">Главная</a></li>
                            <li class="breadcrumb-item active">Сервис</li>
                        </ol>
                    </nav>
                </div>
                @if($servises_count < 4)
                    <button class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#addservise">Добавить сервис</button>
                @else
                    <button class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#addservise" disabled>Добавить сервис</button>
                @endif
            </div>
        </div>

        <section class="section dashboard mt-2">
            <div class="row">
                
                @foreach ($servises as $servise)
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card pb-0">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editservise{{$servise->id}}">Редактировать</button></li>
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteservise{{$servise->id}}">Удалить</button></li>
                            </ul>
                        </div>
                        <div class="card-body pb-0"> 
                            <div class="bg-light rounded-3 ps-3 py-2 mb-2">
                               <div class="mt-2 mb-1">
                                   <img src="/storage/servise/{{$servise->imgservise}}" alt="Загрузка" width="100px" height="120px">
                               </div>
                               <div>
                                   <h4>{{$servise->sloganservise}}</h4>
                               </div>
                               <div>
                                   <span>{{$servise->descriptionservise}}</span>
                               </div>

                                     <!-- Modal Edit servise -->
                                    <div class="modal fade" id="editservise{{$servise->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex border-0">
                                                    <h3 class="modal-title ms-auto" id="exampleModalLabel">Редактировать</h3>
                                                    <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/edit_servise/{{$servise->id}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                        <div class="form-floating">
                                                            <div>
                                                                <input type="file" name="imgservise" value="{{$servise->imgservise}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                @error('imgservise'){{$message}}@enderror
                                                            </div>
                                                            <div class="form-floating">
                                                                <input type="text" name="sloganservise" value="{{$servise->sloganservise}}" class="form-control mt-2" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">Слоган сервиса</label>
                                                                @error('sloganservise'){{$message}}@enderror
                                                            </div>
                                                            <div class="form-floating">
                                                                <input type="text" name="descriptionservise" value="{{$servise->descriptionservise}}" class="form-control mt-2" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">Описание сервиса</label>
                                                                @error('descriptionservise'){{$message}}@enderror
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-lg btn-carousel mt-2 w-100">Изменить</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- Modal Edit servise -->


                                     <!-- Modal delete servise -->
                                    <div class="modal fade" id="deleteservise{{$servise->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" style="width: 400px;">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="d-flex flex-column">
                                                        <h4>Подтверждение</h4>
                                                        <div>Вы действительно хотите удалить этот сервис? Отменить это действие будет невозможно</div>
                                                        <div class="d-flex gap-3 ms-auto mt-1">
                                                            <a href="/delete_servise/{{$servise->id}}" class="text-dark py-2 px-1">Да</a>
                                                            <button class="btn px-1" data-bs-dismiss="modal">Нет</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        
<!-- Modal Add servise -->
<div class="modal fade" id="addservise" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex border-0">
                <h3 class="modal-title ms-auto" id="exampleModalLabel">Добавление сервиса</h3>
                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/servise" method="POST" enctype="multipart/form-data">
                @csrf

                    <div>
                        <input type="file" name="imgservise" class="form-control" id="floatingInput" placeholder="name@example.com">
                    </div>

                    <div class="form-floating mt-2">
                        <input type="text" name="sloganservise" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Слоган сервиса</label>
                    </div>

                    <div class="form-floating mt-2">
                        <input type="text" name="descriptionservise" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Описание сервиса</label>
                    </div>

                    <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection