
@extends('base')
@section('content')

@if($info = Session::get('info'))
<div class="card">
    <div class="card-body bg-success text-dark">
    {{$info}}
    </div>
</div>
@endif
<div class="container">
<div class="float-right">
    <a href="{{url('/Videos/create')}}" class="btn btn-primary"> Add New Video</a>
</div>
        <div class="align-self-center px-9 mt-5">
            <h1 class="text-white">Video</h1>
            <table class="table table-bordered table table-striped table-light table-sm">
                <thead class="bg-info">
                    <tr>
                        <th>Video Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Duration(seconds)</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    @foreach($Videos as $vid)
                    <tr class="fs-5">
                        <td>{{$vid->id}}</td>
                        <td>{{$vid->title}}</td>
                        <td>{{$vid->description}}</td>
                        <td>{{$vid->duration}}</td>
                        <td>{{$vid->rating}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection