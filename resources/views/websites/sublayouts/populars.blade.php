<!--Carousel Wrapper-->

<div>
    <div class="row justify-content-center mb-1">
        <div class="col-md-8 pb-20 text-center mt-5 mb-1 header-text">
            <h1>Popular Place</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
            </p>
        </div>
    </div>
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" >

        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            @foreach($object as $keys => $rows)
                <div class="carousel-item {{$keys == 0 ? "active" : ''}}">
                    <div class="row m-5">
                    @foreach($rows as $key =>  $row)
                        @if($key == 0)
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" style="height: 220px;" src="{{$row['image_link']}}"
                                         alt="Card image cap">
                                    <div class="card-body" style="min-height: 190px;">
                                        <h4 class="card-title">{{$row['object_title']}}</h4>
                                        <p style="color: black;" class="card-text">{!! $row['meta_description'] !!}</p>
                                        <a href="{{route('object_detail',['id' => $row['id']])}}" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" style="height: 220px;" src="{{$row['image_link']}}"                                         alt="Card image cap">
                                    <div class="card-body" style="min-height: 190px;">
                                        <h4 class="card-title">{{$row['object_title']}}</h4>
                                        <p style="color: black;" class="card-text">{!! $row['meta_description']  !!}</p>
                                        <a href="{{route('object_detail',['id' => $row['id']])}}" class="text-uppercase primary-btn2 primary-border circle">View Details</span></a>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                    </div>
                </div>
            @endforeach

            <!--/.Third slide-->


            <!--Controls-->
            <div class="controls-top" style="text-align: center;">
                <a class="btn-floating" style="margin-right: 30px;" href="#multi-item-example" data-slide="prev"><i style="font-size: 50px;color: dodgerblue;" class="fas fa-chevron-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i style="font-size: 50px; color: dodgerblue;" class="fas fa-chevron-right"></i></a>
            </div>

            <hr style="text-align: center; width: auto;"/>
            <!--/.Controls-->

        </div>
        <!--/.Slides-->

    </div>
</div>
<!--/.Carousel Wrapper-->