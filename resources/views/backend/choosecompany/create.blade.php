@extends('layouts.adminheader')

@section('content1')
    <div class="col-lg-3 col-xs-6">

        <div class="btn-lg">


            <a href="{{URL('/choosecompany ')}}" class="btn btn-block btn-default"><i class="fa  fa-arrow-left"></i> <span></span>Bcak To List </a>
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

    <form method="post"  action="{{ route('choosecompany.store') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label class="col-md-4">Tiltle</label>
            <div class="col-md-8">
                <input type="text" name="title" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />

        <div class="form-group text-center">
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





@endsection




