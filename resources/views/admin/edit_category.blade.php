@extends('admin.admin_layout')
@section('admin_main')
     <div class="container d-flex flex-column mt-5 me-4">
         <div class="pagetitle mt-5">
            <div class="d-flex ms-5 ps-5">
                <div class="ms-5">
                    <h1>Редактирование категории</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/home">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="/category">Категории</li>
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
            <div class="container mt-5 text-center ms-5 bg-light">
                <div class="d-flex flex-column ps-5 ms-4">
                    <div class="d-flex"><h3 class="lead fs-3"></h3>
                        <div class="btn-group dropend ms-1">
                            <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu bg-light ms-1">
                                <li><a class="dropdown-item" href="/edit_category">Редактировать</a></li>
                                <li><a class="dropdown-item" href="/delete_category">Удалить</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- End Page Title -->


    </div>
</div> 
@endsection