@extends('layout_backend.index')
@section('content')

<h1 style="color: black; margin-top: 40px;" class="text-center">All Data</h1>

<div class="col-11">
    <div class="bg-light rounded h-100 p-4" style="margin-top: 50px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">track</th>
                        <th scope="col">age</th>
                        <th scope="col">birthday</th>
                        <th scope="col">website</th>
                        <th scope="col">degree</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">city</th>
                        <th scope="col">status</th>
                        <th scope="col">description</th>
                        <th scope="col">image</th>
                        <th scope="col">edit</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($datas as $data)
                        
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->track}}</td>
                        <td>{{$data->age}}</td>
                        <td>{{$data->birthday}}</td>
                        <td>{{$data->website}}</td>
                        <td>{{$data->degree}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->city}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="{{ asset('frontend/assets/img/' . $data->image) }}" width="50" alt=""></td>
                        <td><a href="{{ route('dashboard.all_data.edit', ['id'=>$data->id]) }}" class="btn btn-success">edit</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection