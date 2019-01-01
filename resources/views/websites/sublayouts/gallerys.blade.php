
<section class="packages-area" id="gallerys">
    <div class="container-fluid">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6 pb-80 header-text">
                <h1>Gallerys</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">View More...</span></a>
            </div>
        </div>


        <div id="gallery" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <!--First slide-->
                @foreach($gallery as $keys => $rows)
                    <div class="carousel-item {{$keys == 0 ? "active" : ''}}">
                        <div class="row m-5">
                            @foreach($rows as $key =>  $row)
                                <div class="col-lg-2 col-sm-6 single-packages no-padding">
                                    <div class="content">
                                        <a href="{{route('object_detail',['id' => $row['object_id']])}}" >
                                            <div class="content-overlay"></div>
                                            <img style="min-height: 150px;" class="content-image img-fluid d-block mx-auto" src="{{$row['image_path']}}" alt="">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Details...</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</section>