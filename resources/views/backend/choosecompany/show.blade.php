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
    <a href="{{URL('/choosecompany ')}}" class="btn btn-info"><i class="fa  fa-arrow-left"></i> <span></span>Bcak To List </a>

    <div class="card">
     

            <div class="card-body">
                <h2 class="card-title">{{ $choose_data->title }}</h2>



         
        </div>
</div>
    </div>
@endsection