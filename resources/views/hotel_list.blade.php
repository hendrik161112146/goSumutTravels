@extends('websites.layouts.app')

@section('content')
    <!--Carousel Wrapper-->

    <div  class="row m-5">
        <div class="container" >
            <div class="row d-flex justify-content-center m-5" style="height: 50px;">
            <div class="col-md-6 pb-80 header-text">
                <h1 style="text-align: center;">List Hotel</h1>
            </div>
        </div>
            @foreach($hotel as $rows)
                <div class="row mt-2">
                    @foreach($rows as $row)
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" style="min-height: 220px;" src="{{$row['image_link']}}"
                                     alt="Card image cap">
                                <div class="card-body" style="min-height: 190px;">
                                    <h4 class="card-title">{{$row['property_name']}}</h4>
                                    <p class="card-text">{!! $row['meta_description'] !!}</p>
                                    <a href="{{route('hotel_detail',['id' => $row['id'] ])}}" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
    <!--/.Carousel Wrapper-->
@endsection