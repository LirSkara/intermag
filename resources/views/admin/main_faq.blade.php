@extends('admin.admin_layout')
@section('admin_main')
<main id="main" class="main">

<div class="container d-flex flex-column px-0">
    <div class="pagetitle">
        <div class="d-flex">
            <div>
                <h1>Часто задаваемые вопросы</h1>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                        <li class="breadcrumb-item active">Часто задаваемые вопросы</li>
                    </ol>
                </nav>
            </div>
        <button class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#addfaq">Добавить FAQ</button>
            </div><!-- End Page Title -->
        </div>
            <!-- Modal -->
 <section class="section dashboard mt-2">
            <div class="row">
                 @foreach ($main_faq as $faq)
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card pb-0">
    
                            <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exitfaq">Редактировать</button></li>
                                <li><a class="dropdown-item" href="/delete_faq/{{$faq->id}}">Удалить</a></li>
                            </ul>
                            </div>
    
                            <div class="card-body">
                            <h2 class="carousel-name mt-2 text-truncate w-75">{{$faq->question}}</h2>    
                            <h2 class="carousel-name mt-2 text-truncate w-75">{{$faq->answer}}</h2>
                            </div>
    
                        </div>
                    </div><!-- End Sales Card -->
                <!-- Modal Exit FAq -->
                <div class="modal fade" id="exitfaq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header d-flex border-0">
                            <h3 class="modal-title ms-auto" id="exampleModalLabel">Редактирование вопроса</h3>
                            <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/exit_faq/{{$faq->id}}" method="POST">
                            @csrf
                                <div>

                                <div class="form-floating mt-2">
                                    <input type="text" name="question" value="{{$faq->question}}" class="form-control" id="question" placeholder="name@example.com">
                                    <label for="question">Вопрос</label>
                                    @if($errors->has('question'))
                                        {{$errors->first('question')}}
                                    @endif
                                </div>

                                <div class="form-floating mt-2">
                                    <input type="text" name="answer" value="{{$faq->answer}}" class="form-control" id="answer" placeholder="name@example.com">
                                    <label for="answer">Ответ</label>
                                    @if($errors->has('answer'))
                                        {{$errors->first('answer')}}
                                    @endif
                                </div>
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

<!-- Modal Add FAq -->
<div class="modal fade" id="addfaq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex border-0">
        <h3 class="modal-title ms-auto" id="exampleModalLabel">Добавление вопроса</h3>
        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
        <form action="/add_faq" method="POST">
        @csrf
            <div>
            <div class="form-floating mt-2">
                            <input type="text" name="question" value="" class="form-control" id="question" placeholder="name@example.com">
                             <label for="question">Вопрос</label>
                             @if($errors->has('question'))
                                {{$errors->first('question')}}
                            @endif
                        </div>

                                <div class="form-floating mt-2">
                                <input type="text" name="answer" value="" class="form-control" id="answer" placeholder="name@example.com">
                            <label for="floatingInput">Ответ</label>
                            @if($errors->has('answer'))
                                {{$errors->first('answer')}}
                            @endif
                        </div>
                    </div>
            <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection