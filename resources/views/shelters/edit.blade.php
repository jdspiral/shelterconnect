@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Shelter</div>

                    <div class="panel-body">
                        {{ Form::model($shelter, ['action' => ['SheltersController@update', $shelter->id], 'method' => 'PATCH']) }}

                            @include('shelters._form', ['submitButtonText' => 'Edit Shelter'])

                        {{ Form::close() }}

                        @include('errors._errors')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
