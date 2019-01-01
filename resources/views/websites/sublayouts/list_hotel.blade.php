<!-- Start blog Area -->
<section class="blog-area section-gap" id="hotels">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1>List of Hotels & Resorts</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div id="hotel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">


                <!--First slide-->
                @foreach($hotel as $keys => $rows)
                    <div class="carousel-item {{$keys == 0 ? "active" : ''}}">
                        <div class="row">
                            @foreach($rows as $key =>  $row)
                                    <div class="single-blog col-lg-4 col-md-4">

                                        <a href="{{route('hotel_detail',['id' => $row['id']])}}">
                                            <img style="min-height: 170px;" class="f-img img-fluid mx-auto" src="{{$row['image_link']}}" alt="">
                                        </a>
                                        <h4>
                                         {{$row['property_name']}}
                                        </h4>
                                        <div class="card" style="background-color: black; height: 10rem; line-height: 100%" >
                                            <div class="card-body">
                                                <p>
                                                    {!! $row['meta_description'] !!}
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                            @endforeach
                        </div>
                    </div>
                @endforeach


            </div>

            <a class="carousel-control-prev" href="#hotel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#hotel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- End blog Area -->