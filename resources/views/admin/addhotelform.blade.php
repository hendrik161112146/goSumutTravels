@extends('layouts.app')

@section('content')
    <div class="container">

        <ul class="nav nav-tabs">
            @if(@$id)
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('edithotels',['id' => $id,'status' => 'hotel'])}}">Hotel & Resort</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('addhotels')}}">Hotel & Resort</a>
                </li>
            @endif
            @if(@$id)
                <li class="nav-item">
                    <a class="nav-link " href="{{route('add_upload_image_tourist',['id' => $id,'status' => 'hotel'])}}">Upload Image</a>
                </li>
            @endif
        </ul>

        <?php
        if(@$id){
            $action = route('edithotels',['id' => $id]);
        }else{
            $action = route('addhotels');
        }
        ?>
        <form  action="{{$action}}" method="POST" enctype="multipart/form-data" >
            @csrf


            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input name="email" value="{{@$hotel['email'] ?$hotel['email']:'' }}" type="email" class="form-control"  placeholder="Email ...">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" value="{{@$hotel['name'] ?$hotel['name']:'' }}" type="text" class="form-control"  placeholder="Name ...">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Property Name</label>
                <input name="property_name" value="{{@$hotel['property_name'] ?$hotel['property_name']:'' }}" type="text" class="form-control"  placeholder="Property Name ...">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Address</label>
                <input name="address" value="{{@$hotel['address'] ?$hotel['address']:'' }}" type="text" class="form-control"  placeholder="Address ...">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Property Type</label>
                <select class="form-control" name="property_type">

                    <option value="1" {{@$hotel['property_type'] == 1 ?'selected="selected"':'' }} >Hotel</option>
                    <option value="2" {{@$hotel['property_type'] == 2 ?'selected="selected"':'' }}>Resort</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input name="price" value="{{@$hotel['price'] ?$hotel['price']:'' }}" type="number" class="form-control"  placeholder="Price dalam Dollar...">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Meta Description</label>
                <textarea  class="form-control" id="summary-ckeditor1" name="meta_description" rows="3">{{@$hotel['meta_description']}}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Room</label>
                <input name="room" value="{{@$hotel['room'] ?$hotel['room']:'' }}" type="number" class="form-control"  placeholder="Jumlah Ruang ...">
            </div>


            <div class="form-group">
                <?php
                $arr=['WiFi','Air Conditioner (AC)','TV (flat screen)','Shower','Toilets','private bathroom'
                ]?>
                <label for="exampleFormControlSelect1">Facilities</label>
                @foreach($arr as $key =>  $row)
                    <div class="checkbox">
                        <label><input  name="facilities[]" {{@$hotel['facilities'][$key] == $row ? 'checked="checked"' : ''}} type="checkbox" value="{{$row}}">{{$row}}</label>
                    </div>
                @endforeach
            </div>

            <button type="submit">Sumbit</button>
        </form>
    </div>

    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>

        CKEDITOR.replace( 'summary-ckeditor1' );

    </script>
@endsection