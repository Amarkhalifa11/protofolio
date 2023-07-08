@extends('layout_backend.index')
@section('content')

<h1 style="color: black; margin-top: 40px;" class="text-center">All Service</h1>

<div class="col-11">
    <div class="bg-light rounded h-100 p-4" style="margin-top: 50px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">description</th>
                        <th scope="col">icon</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($service as $service)
                        
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$service->name}}</td>
                        <td>{{$service->description}}</td>
                        <td>{{$service->icon}}</td>
                        <td><a href="{{ route('dashboard.all_service.edit', ['id'=>$service->id]) }}" class="btn btn-success">edit</a></td>
                        <td><a href="{{ route('dashboard.all_service.destroy', ['id'=>$service->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection