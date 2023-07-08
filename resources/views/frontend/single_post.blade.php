@extends('layouts.index')
@section('content')





  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfoio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfoio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('frontend/assets/img/portfolio/' . $posts['image1']) }}" width="50" height="500" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('frontend/assets/img/portfolio/' . $posts['image2']) }}" width="50" height="500" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('frontend/assets/img/portfolio/' . $posts['image3']) }}"  width="50" height="500" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{$posts->category->name}}</li>
                <li><strong>Client</strong>: {{$posts['client']}}</li>
                <li><strong>Project date</strong>: {{$posts['date']}}</li>
                <li><strong>Project URL</strong>: <a href="#">{{$posts['url']}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{$posts['title']}}</h2>
              <p>
                {{$posts['description']}}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->



@endsection
