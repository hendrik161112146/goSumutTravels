@extends('websites.layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$object['object_title']}}</h1>

            <hr>

            <!-- Date/Time -->
            <p>{{$object['created_at']}}</p>

            <hr>

            <!-- Preview Image -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($object['image_link'] as $key => $row)
                        @if($key == 0)
                            <div class="carousel-item active">
                                <img class="d-block w-100" style="min-height: 500px;" src="{{$row}}" alt="First slide">
                            </div>
                        @else
                            <div class="carousel-item">
                                <img class="d-block w-100"  style="min-height: 500px;" src="{{$row}}" alt="Second slide">
                            </div>
                        @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <hr>


            <!-- Post Content -->
            <p class="lead" style="color: black;">{!! $object['meta_description'] !!}</p>

            <p style="color: black;">{!! $object['object_description']!!}</p>

            <hr>



            <!-- Start booking Area -->

{{--
                    <div class="row d-flex justify-content-center">
                        <div class="row col-md-12">
                            <h4>Book Your Flights</h4>
                            <form class="booking-form" id="booking" action="mail.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="from" class="single-in form-control" placeholder="From" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="to" class="single-in form-control" placeholder="To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="datepicker" name="start" class="single-in form-control"  onblur="this.placeholder = 'Start'" type="text" placeholder="Start" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input id="datepicker2" name="return" class="single-in form-control"  onblur="this.placeholder = 'Return'" type="text" placeholder="Return" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="adults" class="single-in form-control" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults'" required="">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="child" class="single-in form-control" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child'">
                                    </div>
                                    <div class="col-lg-12 d-flex justify-content-end">
                                        <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                    <div class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>--}}

            <!-- End booking Area -->
        </div>



        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">


            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{route('object_spec',['category_id' => 1])}}">Popular</a>
                                </li>
                                <li>
                                    <a href="{{route('object_spec',['category_id' => 2])}}">Natural</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{route('object_spec',['category_id' => 3])}}">Fun Park</a>
                                </li>
                                <li>
                                    <a href="{{route('object_spec',['category_id' => 4])}}">Religius</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Tips</h5>
                <div class="card-body" style="color: black;">
                    always compare the price value of each hotel, with the facilities available, so you can enjoy your vacation
                </div>
            </div>



        </div>


    </div>
    <hr style="font-weight: bold; color: black;"/>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1 style="text-align: center;">Hotels & Resorts</h1>
            </div>
        </div>

        <div id="hotel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">


                <!--First slide-->
                @foreach($hotel as $keys => $rows)
                    <div class="carousel-item {{$keys == 0 ? "active" : ''}}">
                        <div class="row">
                            @foreach($rows as $key =>  $row)

                                <div class="col-md-4">
                                    <div class="card mb-2"style=" border: 2px solid grey;">
                                        <img class="card-img-top" style="min-height: 220px;" src="{{$row['image_link']}}"
                                             alt="Card image cap">
                                        <div class="card-body" style="min-height: 190px;text-align: center; ">
                                            <h4 class="card-title">{{$row['property_name']}}</h4>
                                            <p class="card-text" style="color: black;">{!!$row['meta_description']!!}</p>
                                            <a href="{{route('hotel_detail',['id' => $row['id'] ])}}" class="text-uppercase primary-btn2 primary-border circle text-xl-center">View Details</span></a>
                                        </div>
                                    </div>
                                </div>


                            @endforeach
                        </div>
                    </div>
                @endforeach


            </div>

            <a class="carousel-control-prev" href="#hotel" role="button" data-slide="prev">
                <i style="font-size: 50px;color: black;" class="fas fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#hotel" role="button" data-slide="next">
                <i style="font-size: 50px; color: black;" class="fas fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
@endsection