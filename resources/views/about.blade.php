@extends('layout')
@section('content')


<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
          <div class="container" style="margin-top: 125px">
            <iframe width="600" height="565" src="https://www.youtube.com/embed/HKdsl_nPpXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </div>

        <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <div class="box-heading" data-aos="fade-up">
            <div class="badge bg-primary text-wrap" style="width: 6rem;">
              <h4>О НАС</h4>
            </div><br> <hr>

            <div class="alert alert-primary" role="alert">
              <h3>Одна из крупнейших торговых площадок в России</h3>
            </div>
           
            <div class="alert alert-info" role="alert">
              <h4>18 миллионов посетителей — каждый месяц</h4>
            </div>
           
          </div>

          <div class="icon-box" data-aos="fade-up">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <div class="alert alert-primary" role="alert">
                <h4 class="title">входим в ТОП-100 в рейтинге интернет-площадок</h4>
              </div>
              <div class="alert alert-info" role="alert">
                <h4 class="description">В ТОПе поисковой выдачи
товары продавцов</h4>
              </div>
           
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-gift"></i></div>
              <div class="alert alert-primary" role="alert">
                <h4 class="title">Индивидуальный подход</h4>
              </div>
           
              <div class="alert alert-info" role="alert">
                <h4 class="description">560 тысяч россиян ежедневно выбирают нас.</h4>
              </div>
            
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

@endsection