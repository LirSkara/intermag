@extends('admin.admin_layout')
@section('admin_main')


<main id="main" class="main">

    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <h1>Реклама</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление номера</li>
                        </ol>
                    </nav>
                </div>
                <button class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#addtell">Добавить номер</button>
            </div><!-- End Page Title -->
        </div>
    
    
        <section class="section dashboard mt-2">
            <div class="row">
                @foreach ($hot_line as $item)
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card pb-0">
    
                            <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exit_hot_line{{$item->id}}">Редактировать</button></li>
                                <li><a class="dropdown-item" href="/delete_hot_line/{{$item->id}}">Удалить</a></li>
                            </ul>
                            </div>

                            <div class="card-body">
                            <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->tel}}</h2>
                            <h2 class="carousel-name mt-2 text-truncate w-75">{{$item->description}}</h2>      
                            <div style="background-image: url(storage/advertising_three/{{$item->img}}); background-size: cover; height: 100px"></div>
                            </div>
    
                        </div>
                    </div><!-- End Sales Card -->
                    <!-- Modal Exit Carousel -->
                    <div class="modal fade" id="exit_hot_line{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exampleModalLabel">Редактирование рекламы</h3>
                                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/exit_hot_line/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
    
                                    <div class="form-floating mt-2">
                                        <input type="tel" name="tel" value="{{$item->tel}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Телефон</label>
                                        @if($errors->has('tel'))
                                            {{$errors->first('tel')}}
                                        @endif
                                    </div>
    
                                    <div class="form-floating mt-2">
                                        <input type="text" name="description" value="{{$item->description}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Описание</label>
                                        @if($errors->has('description'))
                                            {{$errors->first('description')}}
                                        @endif
                                    </div>

                                    <button class="btn btn-lg btn-carousel mt-2 w-100">Сохранить</button>
                                </form>
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
    <div class="modal fade" id="addtell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header d-flex border-0">
            <h3 class="modal-title ms-auto" id="exampleModalLabel">Добавление номера</h3>
            <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/add_hot_line" method="POST" enctype="multipart/form-data">
            @csrf
    
                <div class="form-floating mt-2">
                    <input type="tel" name="tel" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Телефон</label>
                    @if($errors->has('tel'))
                        {{$errors->first('tel')}}
                    @endif
                </div>
                
                <div class="form-floating mt-2">
                    <input type="text" name="description" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Описание</label>
                    @if($errors->has('description'))
                    {{$errors->first('description')}}
                    @endif
                </div>
    
                <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection