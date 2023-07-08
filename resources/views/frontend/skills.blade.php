@extends('layouts.index')
@section('content')
<section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title" style="margin-left: 200px">
        <h2>Skills</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row skills-content" style="margin-left: 200px">

        <div class="col-lg-12" data-aos="fade-up">

          @foreach ($skills as $skill)
              
          <div class="progress">
            <span class="skill">{{$skill->title}} <i class="val">{{$skill->rate}}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->rate}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>


          @endforeach

        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->
@endsection