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
            <button class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#addcarousel">Добавить вопрос</button>
        </div><!-- End Page Title -->
    </div>
@endsection