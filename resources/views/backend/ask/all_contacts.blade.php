@extends('layout_backend.index')
@section('content')

<h1 style="color: black; margin-top: 40px;" class="text-center">All Ask</h1>

<div class="col-11">
    <div class="bg-light rounded h-100 p-4" style="margin-top: 50px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">subject</th>
                        <th scope="col">message</th>
                        <th scope="col">createt at</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($contacts as $contact)
                        
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
                        <td>{{$contact->created_at}}</td>
                        <td><a href="{{ route('dashboard.all_ask.destroy', ['id'=>$contact->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection