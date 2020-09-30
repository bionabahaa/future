@extends('layouts.adminheader')
@section('content1')
    <div class="col-lg-3 col-xs-6">

        <div class="btn-lg">


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
    <a href="{{URL('/slider ')}}" class="btn btn-info"><i class="fa  fa-arrow-left"></i> <span></span>Bcak To List </a>

    <form method="post" action="{{ URL('/slider/'.$slider_data->id )}}" enctype="multipart/form-data" class="border">

        @csrf
        @method('PATCH')
        <div class="row">
            <label class="col-md-2">Enter Title :</label>
            <div class="col-md-7">
                <input type="text" name="title" value="{{ $slider_data->title }}" class="form-control input-lg" />
            </div>
        </div>
        <br/>
        
        <div class="row">
            <label class="col-md-2">Enter Dsecription :</label>
            <div class="col-md-7">
                <textarea class="form-control mb-2" name="description" rows="10" cols="50">{{ $slider_data->description }}</textarea>
            </div>
        </div>
        <br />
       
        <div class="row">
            <label class="col-md-2">Select Image</label>
            <div class="col-md-8">
                <input type="file" name="image" />
                <img src="{{ URL::to('/') }}/images/slider/{{ $slider_data->image }}" class="img-thumbnail" width="100" />
                <input type="hidden" name="hidden_image" value="{{ $slider_data->image }}" />
            </div>
        </div>
        <br /><br /><br />
        <div class="form-group text-right">
            <input type="submit" name="edit" class="btn btn-info input-lg" value="Edit" />
        </div>
    </form>
    </div>










@endsection