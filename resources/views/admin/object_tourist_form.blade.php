@extends('layouts.app')

@section('content')

    <div class="container">

        <form enctype="multipart/form-data"  action="{{route('add_object_tourist')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input  type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
                    </div>
                </div>
                <div class="panel panel-default" style="min-height: 90px; margin-top: 10px;">
                    <div class="row" id="image_preview"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input name="object_title" value="{{@$data['object_title'] ?$data['object_title']:'' }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="title ...">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" name="category_id">
                    <option value="1" {{@$data['category_id'] === 1 ?'checked="checked"':'' }} >Popular</option>
                    <option value="2" {{@$data['category_id'] === 2 ?'checked="checked"':'' }}>Natural</option>
                    <option value="3" {{@$data['category_id'] === 3 ?'checked="checked"':'' }}>Fun Park</option>
                    <option value="4" {{@$data['category_id'] === 4 ?'checked="checked"':'' }}>Religius</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea  class="form-control" id="summary-ckeditor" name="object_description" rows="3">{{$data['object_description']}}</textarea>
            </div>

            <button type="submit">Sumbit</button>
        </form>
    </div>




    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>

        CKEDITOR.replace( 'summary-ckeditor' );

        function preview_images()
        {
            var total_file=document.getElementById("images").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<div class='col-md-3'><img style='width: 170px; height: 100px;' class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
            }
        }
    </script>

@endsection