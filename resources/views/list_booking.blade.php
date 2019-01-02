@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            @if (\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-success" style="margin-top: 20px;">
                    <ul>
                        <li>{!! \Illuminate\Support\Facades\Session::get('message') !!}</li>
                    </ul>
                </div>
            @elseif (\Illuminate\Support\Facades\Session::has('error'))
                <div class="alert alert-error" style="margin-top: 20px;">
                    <ul>
                        <li>{!! \Illuminate\Support\Facades\Session::get('error') !!}</li>
                    </ul>
                </div>
            @endif
            <a href="{{route('list_booking',['status' => 0 ])}}"><button type="button" class="btn btn-danger">Pending</button></a>
            <a href="{{route('list_booking',['status' => 1 ])}}"><button type="button" class="btn btn-warning">Process</button></a>
            <a href="{{route('list_booking',['status' => 2 ])}}"><button type="button" class="btn btn-info">Finish</button></a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Property Name</th>
                    <th scope="col" style="width: 30%;">Start Date</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Room</th>
                    <th scope="col">Name of Tenant</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="tableview">
                @foreach($booking as $row)
                    <tr>
                        <td>{{$row['hotel']['property_name']}}</td>
                        <td>{{$row['start_date']}}</td>
                        <td>{{$row['return_date']}}</td>
                        <td>{{$row['room_need']}}</td>
                        <td>{{$row['name_tenant']}}</td>
                        <td>
                            <a href="{{route('view_detail_booking',['id' => $row['id']])}}"><button class="btn btn-primary" type="submit">view</button></a>
                            @if($status == 0)
                                <a href="{{route('process_booking',['id' => $row['id']])}}"><button class="btn btn-success" type="submit">Process</button></a>
                            @endif
                            @if($status != 2)
                                <a href="{{route('reject_booking',['id' => $row['id']])}}"><button class="btn btn-error" type="submit">Reject</button></a>
                            @endif
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection