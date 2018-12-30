@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('add_object_tourist')}}"><button type="button" class="btn btn-primary m-1">Add</button></a>
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
                @foreach($list as $row)
                    <tr>
                        <td><img src="{{@$row['image_link']}}"></td>
                        <td>{{$row['object_title']}}</td>
                        <td>{{$row['category']}}</td>
                        <td>{{$row['updated_at']}}</td>
                        <td><a href="{{route('edit_object_tourist',['id' => $row['id']])}}"><button class="btn btn-primary" type="submit">Edit</button></a>
                            <a href="{{route('delete_object_tourist',['id' => $row['id']])}}"><button class="btn btn-primary" type="submit">Delete</button></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection