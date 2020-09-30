@extends('layouts.adminheader')
@section('content1')
<div class="container">
    <div class="col-lg-3 col-xs-6">

        <div class="btn-lg">


            <a href="{{URL('/choosecompany ')}}" class="btn btn-info"><i class="fa  fa-arrow-left"></i> <span></span>Bcak To List </a>
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
    <form method="post" action="{{ URL('/choosecompany/'.$choose_data->id )}}" enctype="multipart/form-data" class="border">

        @csrf
        @method('PATCH')
        <div class="row">
            <label class="col-md-2">Enter Title</label>
            <div class="col-md-7">
                <input type="text" name="title" value="{{ $choose_data->title }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />

        <div class="form-group text-right">
            <input type="submit" name="edit" class="btn btn-info input-lg" value="Edit" />
        </div>
    </form>
</div>









@endsection