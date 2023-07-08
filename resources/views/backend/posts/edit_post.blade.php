@extends('layout_backend.index')
@section('content')
    <h1 style="color: black; margin-top: 40px;" class="text-center">Edit post</h1>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('dashboard.all_posts.update', ['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">title</label>
                            <input type="text" name="title" value="{{$post->title}}" placeholder="title" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">date</label>
                            <input type="date" name="date" value="{{$post->date}}" placeholder="date" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">url</label>
                            <input type="text" name="url" value="{{$post->url}}" placeholder="url" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">client</label>
                            <input type="text" name="client" value="{{$post->client}}" placeholder="client" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">category_id</label>
                            <input type="text" name="category_id" value="{{$post->category_id}}" placeholder="category_id" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">description</label>
                            <textarea name="description" placeholder="description" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">{{$post->description}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image1</label>
                            <input type="file" name="image1" placeholder="image1" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image2</label>
                            <input type="file" name="image2" placeholder="image2" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image3</label>
                            <input type="file" name="image3" placeholder="image3" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="text-center mt-5">

                            <button type="submit" class="btn btn-primary">Edit post</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- Form End -->
@endsection
