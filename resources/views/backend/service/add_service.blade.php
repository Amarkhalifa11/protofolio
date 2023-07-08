@extends('layout_backend.index')
@section('content')
    <h1 style="color: black; margin-top: 40px;" class="text-center">Add service</h1>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('dashboard.all_service.store') }}" method="POST">
                        @csrf


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" placeholder="name" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">icon</label>
                            <input type="text" name="icon" placeholder="icon" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">description</label>
                            <textarea name="description" placeholder="description" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                        </div>


                        <div class="text-center mt-5">

                            <button type="submit" class="btn btn-primary">add service</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Form End -->
@endsection
