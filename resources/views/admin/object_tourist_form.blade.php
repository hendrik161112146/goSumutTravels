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
                <div class="panel panel-default" style="min-height: 90px;">
                    <div class="row" id="image_preview"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit">Sumbit</button>
        </form>
    </div>




    <script>
        function preview_images()
        {
            var total_file=document.getElementById("images").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
            }
        }
    </script>

@endsection