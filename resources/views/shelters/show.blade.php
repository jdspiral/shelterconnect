@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Shelter {{ $shelter->shelter_name }}</div>

                    <div class="panel-body">
                        Shelter Name: {{ $shelter->shelter_name }}
                        Shelter Address: {{ $shelter->shelter_address }}
                        Shelter Phone: {{ $shelter->shelter_phone }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
