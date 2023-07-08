@extends('layout_backend.index')
@section('content')

<h1 style="color: black; margin-top: 40px;" class="text-center">All Skills</h1>

<div class="col-11">
    <div class="bg-light rounded h-100 p-4" style="margin-top: 50px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">rate</th>
                        <th scope="col">created at</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i=1;
                    @endphp

                    @foreach ($skills as $skill)
                        
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$skill->title}}</td>
                        <td>{{$skill->rate}}</td>
                        <td>{{$skill->created_at}}</td>
                        <td><a href="{{ route('dashboard.all_skills.edit', ['id'=>$skill->id]) }}" class="btn btn-success">edit</a></td>
                        <td><a href="{{ route('dashboard.all_skills.destroy', ['id'=>$skill->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection