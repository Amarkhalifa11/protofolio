@extends('layout_backend.index')
@section('content')

<h1 style="color: black; margin-top: 40px;" class="text-center">All Posts</h1>

<div class="col-11">
    <div class="bg-light rounded h-100 p-4" style="margin-top: 50px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">date</th>
                        <th scope="col">url</th>
                        <th scope="col">client</th>
                        <th scope="col">category_id </th>
                        <th scope="col">description</th>
                        <th scope="col">image1</th>
                        <th scope="col">image2</th>
                        <th scope="col">image3</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($posts as $post)
                        
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->date}}</td>
                        <td>{{$post->url}}</td>
                        <td>{{$post->client}}</td>
                        <td>{{$post->category_id}}</td>
                        <td>{{$post->description}}</td>
                        <td><img src="{{ asset('frontend/assets/img/portfolio/' . $post->image1 ) }}" width="50" alt=""></td>
                        <td><img src="{{ asset('frontend/assets/img/portfolio/' . $post->image2 ) }}" width="50" alt=""></td>
                        <td><img src="{{ asset('frontend/assets/img/portfolio/' . $post->image3 ) }}" width="50" alt=""></td>
                        <td><a href="{{ route('dashboard.all_posts.edit', ['id'=>$post->id]) }}" class="btn btn-success">edit</a></td>
                        <td><a href="{{ route('dashboard.all_posts.destroy', ['id'=>$post->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection