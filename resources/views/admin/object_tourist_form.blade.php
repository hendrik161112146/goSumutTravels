@extends('layouts.app')

@section('content')
    <div class="container">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('add_object_tourist')}}">Tourist Object</a>
            </li>
            @if(@$id)
                <li class="nav-item">
                    <a class="nav-link " href="{{route('add_upload_image_tourist',['id' => $id,'status' => 'object'])}}">Upload Image</a>
                </li>
            @endif
        </ul>

        <?php
            if(@$id){
                $action = route('edit_object_tourist',['id' => $id]);
            }else{
                $action = route('add_object_tourist');
            }
        ?>
        <form  action="{{$action}}" method="POST" enctype="multipart/form-data" >
            @csrf


           {{-- <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input  type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
                    </div>
                </div>
                <div class="panel panel-default" style="min-height: 90px; margin-top: 10px;">
                    <div class="row" id="image_preview">
                        @if(@$data['images'])
                            @foreach($data['images'] as $img)
                                <div class='col-md-3'><img style='width: 170px; height: 100px;' class='img-responsive' src='{{$img}}'></div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>--}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input name="object_title" value="{{@$data['object_title'] ?$data['object_title']:'' }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="title ...">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" name="category_id">

                    <option value="1" {{@$data['category_id'] == 1 ?'selected="selected"':'' }} >Popular</option>
                    <option value="2" {{@$data['category_id'] == 2 ?'selected="selected"':'' }}>Natural</option>
                    <option value="3" {{@$data['category_id'] == 3 ?'selected="selected"':'' }}>Fun Park</option>
                    <option value="4" {{@$data['category_id'] == 4 ?'selected="selected"':'' }}>Religius</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea  class="form-control" id="summary-ckeditor" name="object_description" rows="3">{{@$data['object_description']}}</textarea>
            </div>

            <button type="submit">Sumbit</button>
        </form>
    </div>




    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>

        CKEDITOR.replace( 'summary-ckeditor' );
        /*   function preview_images()
                {
                    var total_file=document.getElementById("images").files.length;
                    for(var i=0;i<total_file;i++)
                    {
                        $('#image_preview').append("<div class='col-md-3'><img style='width: 170px; height: 100px;' class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
                    }

                }*/


    </script>

@endsection