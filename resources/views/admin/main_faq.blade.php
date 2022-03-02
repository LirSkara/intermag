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
            <!-- Modal -->
<div class="modal fade" id="addreklama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header d-flex border-0">
            <h3 class="modal-title ms-auto" id="exampleModalLabel">Добавление вопроса</h3>
            <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/add_faq" method="POST" enctype="multipart/form-data">
            @csrf
    
                <div class="form-floating mt-2">
                    <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Напишите вопрос">
                    <label for="floatingInput">Вопрос</label>
                    @if($errors->has('question'))
                        {{$errors->first('question')}}
                    @endif
                </div>
                
                <div class="form-floating mt-2">
                    <input type="text" name="description" class="form-control" id="floatingInput" placeholder="Напишите ответ">
                    <label for="floatingInput">Ответ</label>
                    @if($errors->has('answer'))
                    {{$errors->first('answer')}}
                    @endif
                </div>

                <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
            </form>
          </div>
        </div>
      </div>

@endsection