    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
          
          {{-- <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                
                @foreach ($categories as $category)
                <li data-filter=".filter-app">{{$category->name}}</li>
                @endforeach
              
              </ul>
            </div>
          </div> --}}

          
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('frontend/assets/img/portfolio/' . $post->image1	) }}" width="1000" height="1000" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{ asset('frontend/assets/img/portfolio/' . $post->image2) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ route('single_post', ['id'=>$post->id]) }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>


  
  
        </div>
      </section><!-- End Portfolio Section -->