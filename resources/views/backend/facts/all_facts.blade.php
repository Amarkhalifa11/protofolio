@extends('layout_backend.index')
@section('content')

<h1 style="color: black; margin-top: 40px;" class="text-center">All Facts</h1>

<div class="col-11">
    <div class="bg-light rounded h-100 p-4" style="margin-top: 50px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Hapy_Clients</th>
                        <th scope="col">Projects</th>
                        <th scope="col">Hours_Of_Support</th>
                        <th scope="col">Hard_Workers</th>
                        <th scope="col">edit</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($facts as $fact)
                        
                    <tr>
                        <th style="color: rgb(0, 0, 0);" scope="row">{{$i++}}</th>
                        <td style="color: rgb(0, 0, 0);">{{$fact->Hapy}}</td>
                        <td style="color: rgb(0, 0, 0);">{{$fact->Projects}}</td>
                        <td style="color: rgb(0, 0, 0);">{{$fact->Hours}}</td>
                        <td style="color: rgb(0, 0, 0);">{{$fact->Hard}}</td>
                        <td><a href="{{ route('dashboard.all_facts.edit', ['id'=>$fact->id]) }}" class="btn btn-success">edit</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection