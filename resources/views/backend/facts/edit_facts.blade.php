@extends('layout_backend.index')
@section('content')
    <h1 style="color: black; margin-top: 40px;" class="text-center">Edit Facts</h1>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('dashboard.all_facts.update', ['id'=>$facts->id]) }}" method="POST">
                        @csrf


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hapy</label>
                            <input type="text" required name="Hapy" value="{{$facts->Hapy}}" placeholder="Hapy"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> 

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Projects</label>
                            <input type="text" required name="Projects" value="{{$facts->Projects}}" placeholder="Projects"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> 

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hours</label>
                            <input type="text" required name="Hours" value="{{$facts->Hours}}" placeholder="Hours"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> 

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hard</label>
                            <input type="text" required name="Hard" value="{{$facts->Hard}}" placeholder="Hard"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> 


                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">Edit Fats</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Form End -->
@endsection
