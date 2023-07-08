@extends('layouts.index')
@section('content')
    

 <!-- ======= About Section ======= -->
 <section id="about" class="about" style="margin-left:300px">
    <div class="container">

      @foreach ($data as $dat)
          
      <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ asset('frontend/assets/img/' . $dat->image) }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3> {{$dat->track}}</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$dat->birthday}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$dat->website}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$dat->phone}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$dat->city}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$dat->age}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$dat->degree}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$dat->email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{$dat->status}}</span></li>
              </ul>
            </div>
          </div>
          <p>
            I'am 
          {{$dat->name}} , 
          {{$dat->description}}
          </p>
        </div>
      </div>

      @endforeach

    </div>
  </section><!-- End About Section --> 

@endsection