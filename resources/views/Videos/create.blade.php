@extends('base')

@section('content')
   
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-5 offset-md-2">
                    <h1>Create New Videos</h1>
                    {!! Form::open(['url' => '/Videos', 'method' => 'post']) !!}

                    <div class="form-group">
                        {{Form::label('id', 'Id Name')}}
                        {{Form::text('id', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('title', 'Title Name')}}
                        {{Form::text('title', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        {{Form::text('description', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('duration', 'Duration')}}
                        {{Form::number('duration', null, ['class' =>'form-control'])}}
                    </div>


                    <div class="form-group">
                        {{Form::label('rating', 'Rating')}}
                        {{Form::number('rating', null, ['class' =>'form-control'])}}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right">
                            Create Videos

                        </button>
                    </div>
                    {!! Form::close() !!}

                </div>
                <div class="mt-5">  
                @include('errors')
        </div>
</div>

        </div>


    
@endsection