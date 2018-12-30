@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="nav nav-tabs">
        @if(@$_GET['status'] == 'object')
            <li class="nav-item">
                <a class="nav-link" href="{{route('edit_object_tourist',['id' => $id,'status' => 'object'])}}">Tourist Object</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('edithotels',['id' => $id,'status' => 'hotel'])}}">Hotel & Resort</a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link active" href="{{@$_GET['status'] == 'object' ? route('add_upload_image_tourist',['id' => $id,'status' => 'object']) :
             route('add_upload_image_tourist',['id' => $id,'status' => 'hotel'])
             }}">Upload Image</a>
        </li>
    </ul>

    <div class="row">
        <div class="col-lg-8 col-sm-12 col-11 main-section">
            <h1 class="text-center text-danger m-1">Insert Images</h1><br>

            {!! csrf_field() !!}
            <div class="form-group">
                <div class="row" id="image_preview">
                <div class="file-loading">
                    <input id="file-1" onchange="loadFile(event)" type="file" name="images" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                </div>
            </div>

        </div>


</div>




<script>


    $("#file-1").fileinput({
        theme: 'fa',
        uploadUrl: "{{@$_GET['status'] == 'object' ? route('add_upload_image_tourist',['id' => $id,'status' => 'object']):route('add_upload_image_tourist',['id' => $id,'status' => 'hotel'])}}",
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg','jpeg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        initialPreview: [
            @foreach ($images as $rows)
            '<img src="{{$rows['image_path']}}" class="file-preview-image" alt="Desert" style="max-width : 100%; max-height : 100%" title="Desert">',
            @endforeach
        ],
        initialPreviewConfig: [
            @foreach ($images as $rows)
            {
                caption: '{{$rows['image_path']}}',
                width: '120px',
                url: '{{@$_GET['status'] == 'object' ? route('delete_upload_image_tourist',['id' => $rows['id'],'_token' => csrf_token(),'status' => 'object'])
                    :
                    route('delete_upload_image_tourist',['id' => $rows['id'],'_token' => csrf_token(),'status' => 'hotel'])
                   }}', // server delete action
                key: '{{$rows['id']}}',
                extra: function() {
                    return {
                        id: '{{$rows['id']}}',
                    };
                }
            },
            @endforeach
        ],
    });

    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
@endsection