@extends('layouts.adminheader')

@section('content1')
<div class="container">
    <div class="col-lg-3 col-xs-6">

        <div class="btn-lg">


            <a href="{{URL('/services ')}}" class="btn btn-block btn-info"><i class="fa  fa-arrow-left"></i> <span></span>Bcak To List </a>
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
        <div class="card">

            <div class="card-body">
                <h2 class="card-title">{{ $Services_data->title }}</h2>
                <p class="card-text">{{ $Services_data->description }}</p>
                <img src="{{ URL::to('/') }}/images/services/{{ $Services_data->image }}" class="img-thumbnail" />

            </div>
        </div>
    </div>
@endsection