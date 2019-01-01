
<header class="default-header">
    <div class="container">
        <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{route('homepage')}}"><img style="height: 40px; width: 100px;" src="{{asset('img/logo_sumut.png')}}" alt=""></a>
                </div>
                <div class="main-menubar d-flex align-items-center">
                    <nav class="hide">
                        <a href="{{route('homepage')}}">Home</a>
                        <a href="{{route('hotel_list')}}">Hotel</a>
                        <a href="{{route('gallery_list')}}">Gallerys</a>
                        <a href="#test" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p style="color: black;">Turist Object</p>  <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('object_spec',['category' => 1])}}"><p >Pupular</p></a></li>
                            <li><a href="{{route('object_spec',['category' => 2])}}"><p >Natural</p></a></li>
                            <li><a href="{{route('object_spec',['category' => 3])}}"><p >Fun Park</p></a></li>
                            <li><a href="{{route('object_spec',['category' => 4])}}"><p >Religius</p></a></li>
                        </ul>
                        {{--<a href="#contact">Contact</a>--}}
                    </nav>
                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>