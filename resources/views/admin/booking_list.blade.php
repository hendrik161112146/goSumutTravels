@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('addhotels')}}"><button type="button" class="btn btn-primary m-1">Add</button></a>
        <div class="table-responsive">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col" style="width: 30%;">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($booking as $row)
                    <tr>
                        <td><img src="{{$row['image_link']}}"></td>
                        <td>{{$row['property_name']}}</td>
                        <td>{{$row['property_type']}}</td>
                        <td>{{$row['updated_at']}}</td>
                        <td><a href="{{route('edithotels',['id' => $row['id']])}}"><button class="btn btn-primary" type="submit">Edit</button></a>
                            <a href="{{route('deletehotels',['id' => $row['id']])}}"><button class="btn btn-primary" type="submit">Delete</button></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection