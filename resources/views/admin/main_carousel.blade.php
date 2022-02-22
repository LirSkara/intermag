@extends('admin.admin_layout')
@section('admin_main')
<main id="main" class="main">

<div class="container d-flex flex-column px-0">
    <div class="pagetitle">
        <div class="d-flex">
            <div>
                <h1>Карусель</h1>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                        <li class="breadcrumb-item active">Карусель</li>
                    </ol>
                </nav>
            </div>
            <button class="btn btn-carousel ms-auto" data-bs-toggle="modal" data-bs-target="#addcarousel">Добавить карточку</button>
        </div><!-- End Page Title -->
    </div>

    <section class="section dashboard mt-2">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card pb-0">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h2 class="carousel-name mt-2">M75 Sport Watch</h2>    
                  <div style="background-image: url(assets/images/hero/slider-bg1.jpg); background-size: cover; height: 200px"></div>
                </div>

              </div>
            </div><!-- End Sales Card -->

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card pb-0">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h2 class="carousel-name mt-2">M75 Sport Watch</h2>    
                  <div style="background-image: url(assets/images/hero/slider-bg2.jpg); background-size: cover; height: 200px"></div>
                </div>

              </div>
            </div><!-- End Sales Card -->

           <!-- Sales Card -->
           <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card pb-0">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h2 class="carousel-name mt-2">M75 Sport Watch</h2>    
                  <div style="background-image: url(assets/images/hero/slider-bg1.jpg); background-size: cover; height: 200px"></div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
        </div><!-- End Left side columns -->
    </section>
</div>

</main><!-- End #main -->

<!-- Modal Add Carousel -->
<div class="modal fade" id="addcarousel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex border-0">
        <h3 class="modal-title ms-auto" id="exampleModalLabel">Добавление карточки</h3>
        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">

            <div>
                <label>Выберите фото</label>
                <input type="file" class="form-control mt-1">
            </div>

            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Название карточки</label>
            </div>

            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Первый текст</label>
            </div>

            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Описание</label>
            </div>

            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Текст цены</label>
            </div>

            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Цена</label>
            </div>

            <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
