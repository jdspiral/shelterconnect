@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Shelter</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'shelters']) !!}
                            <div class="form-group">
                                {{ Form::label('shelter_name', 'Shelter Name') }}
                                {{ Form::text('shelter_name', '',['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('shelter_address', 'Shelter Address') }}
                                {{ Form::text('shelter_address', '',['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('shelter_phone', 'Shelter Phone') }}
                                {{ Form::text('shelter_phone', '',['class' => 'form-control']) }}
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>

                        {!! Form::close() !!}

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
