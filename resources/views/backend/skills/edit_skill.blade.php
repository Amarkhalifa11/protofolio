@extends('layout_backend.index')
@section('content')
    <h1 style="color: black; margin-top: 40px;" class="text-center">Edit skill</h1>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('dashboard.all_skills.update', ['id'=>$skills->id]) }}" method="POST">
                        @csrf


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">title</label>
                            <input type="text" name="title" placeholder="title" value="{{$skills->title}}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">rate</label>
                            <input type="name" name="rate" placeholder="rate" value="{{$skills->rate}}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="text-center mt-5">

                            <button type="submit" class="btn btn-primary">Edit skill</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Form End -->
@endsection
