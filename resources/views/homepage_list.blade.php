@extends('websites.layouts.app')

@section('content')
    <!--Carousel Wrapper-->

    <div  class="row m-5">
        <div class="container" >
            @if(@$category_id == 1)
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 pb-80 header-text">
                        <h1 style="text-align: center;">Popular</h1>
                    </div>
                </div>
            @elseif (@$category_id== 2)
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 pb-80 header-text">
                        <h1 style="text-align: center;">Natural</h1>
                    </div>
                </div>
            @elseif (@$category_id == 3)
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 pb-80 header-text">
                        <h1 style="text-align: center;">Fun Park</h1>
                    </div>
                </div>
            @else
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 pb-80 header-text">
                        <h1 style="text-align: center;">Religius</h1>
                    </div>
                </div>
            @endif
            @foreach($object as $rows)
                <div class="row mt-2">
                    @foreach($rows as $row)
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" style="min-height: 220px;" src="{{$row['image_link']}}"
                                     alt="Card image cap">
                                <div class="card-body" style="min-height: 190px;">
                                    <h4 class="card-title">{{$row['object_title']}}</h4>
                                    <p class="card-text">{{$row['meta_description']}}</p>
                                    <a href="{{route('object_detail',['id' => $row['id'] ])}}" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
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