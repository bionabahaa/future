@extends('layouts.adminheader')

@section('content1')
<div class="container">
    <div class="col-lg-3 col-xs-6">

        <div class="btn-lg">


            <a href="{{URL('/clients ')}}" class="btn btn-info"><i class="fa  fa-arrow-left"></i> <span></span>Bcak To List </a>
        </div>
    </div>
</div>
@endsection
@section('main')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="container">
    <form method="post"  action="{{ route('clients.store') }}" enctype="multipart/form-data" class="border">

        @csrf

        <div class="row">
        <label class="col-md-2 mfile">Select  Image</label>
            <div class="col-md-7">
                <input type="file" id="file" aria-label="File browser example" name="image" onchange="readURL(this);" />
                <img id="blah" src="#" alt="your image" />
                <span class="file-custom"></span>
            </div>
        </div>

        <br />
        <div class="row text-right">
            <input type="submit" name="add" class="btn btn-info input-lg" value="create" />
        </div>

    </form>



    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('backend/ckeditor/config.js')}}"></script>
    <script>
        var ckview = document.getElementById("ckview");
        CKEDITOR.replace(ckview,{
            language:'en-gb'
        });
    </script>



<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


@endsection



