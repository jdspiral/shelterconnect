@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Shelter</div>

                    <div class="panel-body">
                        <form action="/admin/create" method="POST">
                            <div class="form-group">
                                <label for="shelter-name">Shelter Name:</label>
                                <input type="text" class="form-control" id="shelter-name" name="shelter_name">
                            </div>
                            <div class="form-group">
                                <label for="shelter-address">Shelter Address:</label>
                                <input type="text" class="form-control" id="shelter-address" name="shelter_address">
                            </div>
                            <div class="form-group">
                                <label for="shelter-phone">Shelter Phone:</label>
                                <input type="text" class="form-control" id="shelter-phone" name="shelter_phone">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
