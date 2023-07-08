@extends('layout_backend.index')
@section('content')

<h1 style="color: black; margin-top: 40px;" class="text-center">All Admin</h1>

<div class="col-11">
    <div class="bg-light rounded h-100 p-4" style="margin-top: 50px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">createt at</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($users as $user)
                        
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td><a href="{{ route('dashboard.all_user.delete', ['id'=>$user->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection