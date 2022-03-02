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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Часто задаваемые вопросы</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/add_faq" method="POST">
        @csrf
        <input type="text" class="form-control mt-2" id="question" aria-describedby="question" placeholder="Напишите вопрос">
        <input type="text" class="form-control mt-1" id="answer" aria-describedby="answer" placeholder="Напишите ответ">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Отправить</button>
      </div>
    </div>
  </div>
</div>
     <!-- Button trigger modal -->
     <li data-aos="fade-up" data-aos-delay="200">
                <div class="alert alert-success" role="alert">
                @foreach($main_faq as $faq)
      
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">{{$faq->question}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>{{$faq->answer}}</p>
                </div>
            </div>
              </li>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Добавить вопрос
</button>


@endforeach

@endsection