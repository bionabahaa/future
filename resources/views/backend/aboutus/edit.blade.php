@extends('layouts.adminheader')
@section('content1')
<div class="container">
    <div class="col-lg-3 col-xs-6">

        <div class="btn-lg">


            <a href="{{URL('/aboutus ')}}" class="btn btn-block btn-info"><i class="fa  fa-arrow-left"></i> <span></span>Bcak To List </a>
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
    <form method="post" action="{{ URL('/aboutus/'.$aboutus_data->id )}}" enctype="multipart/form-data" class="border">

        @csrf
        @method('PATCH')
        <div class="row">
            <label class="col-md-2">Enter Title</label>
            <div class="col-md-7">
                <input type="text" name="title" value="{{ $aboutus_data->title }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
       
        <div class="row">
            <label class="col-md-2">Enter Dsecription</label>
            <div class="col-md-7">
{{--                <input type="text"  name="description" value="{{ $aboutus_data->description }}" class="form-control input-lg" />--}}


                <textarea class="form-control mb-2" name="description" rows="10" cols="50">{{ $aboutus_data->description }}</textarea>




            </div>
        </div>
        <br />
      
        <div class="row">
            <label class="col-md-2">Select Image</label>
            <div class="col-md-7">
                <input type="file" name="image" />
                <img src="{{ URL::to('/') }}/images/aboutus/{{ $aboutus_data->image }}" class="img-thumbnail" width="100" />
                <input type="hidden" name="hidden_image" value="{{ $aboutus_data->image }}" />
            </div>
        </div>
       <br />
        <div class="form-group text-right">
            <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
        </div>
    </form>
</div>










@endsection