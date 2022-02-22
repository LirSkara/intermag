@extends('layout')
@section('content')


<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <div class="box-heading" data-aos="fade-up">
            <div class="badge bg-primary text-wrap" style="width: 6rem;">
              <h4>О НАС</h4>
            </div><br> <hr>

            <div class="alert alert-primary" role="alert">
              <h3>Приглашаем Вас в наш гостевой дом «LOFT».</h3>
            </div>
           
            <div class="alert alert-info" role="alert">
              <p>Современный гостевой дом "LOFT" является отличным выбором для любителей искусства, дизайна и технологий.</p>
            </div>
           
          </div>

          <div class="icon-box" data-aos="fade-up">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <div class="alert alert-primary" role="alert">
                <h4 class="title"><a href="">Интерьер</a></h4>
              </div>
           
              <div class="alert alert-info" role="alert">
                <p class="description">Элегантный интерьер и полный комфорт создают идеальную атмосферу для отдыха после многочисленных экскурсий.</p>
              </div>
           
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-gift"></i></div>
              <div class="alert alert-primary" role="alert">
                <h4 class="title"><a href="">Индивидуальный подход</a></h4>
              </div>
           
              <div class="alert alert-info" role="alert">
                <p class="description">Индивидуальный подход к запросам гостей является одной из наших сильных сторон: от момента бронирования до благополучного возвращения домой.</p>
              </div>
            
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

@endsection