@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <td>Shelter Name</td>
                        <td>Shelter Address</td>
                        <td>Shelter Phone</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shelters as $key => $value)
                        <tr>
                            <td>{{ $value->shelter_name }}</td>
                            <td>{{ $value->shelter_address }}</td>
                            <td>{{ $value->shelter_phone }}</td>

                            <!-- we will also add show, edit, and delete buttons -->
                            <td>

                                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                <!-- we will add this later since its a little more complicated than the other two buttons -->

                                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                <a class="btn btn-small btn-success" href="{{ URL::to('shelter/' . $value->id) }}">Show this Shelter</a>

                                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                <a class="btn btn-small btn-info" href="{{ URL::to('shelters' . $value->id . '/edit') }}">Edit this Shelter</a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
