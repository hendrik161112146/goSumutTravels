@extends('websites.layouts.app')


@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center m-5" style="height: 50px;">
            <div class="col-md-6 pb-80 header-text">
                <h1 style="text-align: center;">Image Gallery</h1>
            </div>
        </div>
        @foreach($gallery as $rows)
            <div class="row">
                @foreach($rows as $row)
                <div class="col-4">
                    <div class="thumbnail">
                        <a href="{{route('object_detail',['id' => $row['object_id']])}}" >
                            <img style="min-height: 200px; max-width: 90%; margin: 5px" src="{{$row['image_path']}}" alt="Lights">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        @endforeach

    </div>
@endsection