@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <!-- Post Content Column -->


                <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                Property Name : {{$booking['hotel']['property_name']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                Property Type : {{$booking['hotel']['property_type'] == 1 ? 'Hotel':'Resort'}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                Address : {{$booking['hotel']['address']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                Room : {{$booking['room_need']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                Email of Tenant : {{$booking['email']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                From : {{$booking['from']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                To : {{$booking['to']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                Status :
                                @if($booking['status'] == 0)
                                    <button type="button" class="btn btn-danger" disabled>Pending</button>
                                @elseif($booking['status'] == 1)
                                    <button type="button" class="btn btn-warning" disabled>Process</button>
                                @else
                                    <button type="button" class="btn btn-info" disabled>Finish</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm ml-3 mt-5">
                    <a href="{{route('list_booking',['status' => $status ])}}"><button type="button" class="btn btn-dark">back</button></a>
                </div>
            </div>

            <!-- Post Content -->
            {{--    <p class="lead" style="color: black;">{!! $object['meta_description'] !!}</p>

                <p style="color: black;">{!! $object['object_description']!!}</p>--}}

                <hr>



            </div>



            <!-- Sidebar Widgets Column -->



        </div>


@endsection