@extends('layout_backend.index')
@section('content')
    <h1 style="color: black; margin-top: 40px;" class="text-center">Edit Data</h1>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('dashboard.all_data.update', ['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" required name="name" value="{{$data->name}}" placeholder="name"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">track</label>
                            <input type="text" required name="track" value="{{$data->track}}" placeholder="track"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">age</label>
                            <input type="text" required name="age" value="{{$data->age}}" placeholder="age"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">birthday</label>
                            <input type="date" required name="birthday" value="{{$data->birthday}}" placeholder="birthday"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">website</label>
                            <input type="text" required name="website" value="{{$data->website}}" placeholder="website"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">degree</label>
                            <input type="text" required name="degree" value="{{$data->degree}}" placeholder="degree"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">email</label>
                            <input type="email" required name="email" value="{{$data->email}}" placeholder="email"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">phone</label>
                            <input type="text" required name="phone" value="{{$data->phone}}" placeholder="phone"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">city</label>
                            <input type="text" required name="city" value="{{$data->city}}" placeholder="city"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">status</label>
                            <input type="text" required name="status" value="{{$data->status}}" placeholder="status"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image</label>
                            <input type="file" required name="image" value="{{$data->image}}" 
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">description</label>
                            <textarea  required name="description"  placeholder="description"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">{{$data->description}}</textarea>
                        </div>


                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Form End -->
@endsection
