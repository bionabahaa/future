@extends('layouts.adminheader')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

@section('content')
    <h1>
    Soical Media


    </h1>
    <ol class="breadcrumb">
        <li><a href="{{URL('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">soical media</li>
    </ol>
@endsection
@section('content1')

@endsection

@section('main')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="box">
        <div class="box-body">
           <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('soicalmedia_update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Address</label>
                            <input type="text" value="@if(isset($SoicalMedia_data->address)) {{ $SoicalMedia_data->address }} @endif" name="address" class="form-control" id="address">
                        </div>

                        <br>
                        
                        
                        <div class="form-group">
                            <label for="title">phone_number</label>
                            <input type="text" value="@if(isset($SoicalMedia_data->phone_number)) {{ $SoicalMedia_data->phone_number }} @endif" name="phone_number" class="form-control" id="phone_number">
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="title">WhatsUp</label>
                            <input type="text" value="@if(isset($SoicalMedia_data->whatsup)) {{ $SoicalMedia_data->whatsup }} @endif" name="whatsup" class="form-control" id="whatsup">
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="title">Massenger</label>
                            <input type="text" value="@if(isset($SoicalMedia_data->massenger)) {{ $SoicalMedia_data->massenger }} @endif" name="massenger" class="form-control" id="massenger">
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="title">Facebook</label>
                            <input type="text" value="@if(isset($SoicalMedia_data->facebook)) {{ $SoicalMedia_data->facebook }} @endif" name="facebook" class="form-control" id="facebook">
                        </div>

                        <br>


                        <div class="form-group">
                            <label for="title">Twitter</label>
                            <input type="text" value="@if(isset($SoicalMedia_data->twitter)) {{ $SoicalMedia_data->twitter }} @endif" name="twitter" class="form-control" id="twitter">
                        </div>

                        <br>


                        <div class="form-group">
                            <label for="title">Gmail</label>
                            <input type="text" value="@if(isset($SoicalMedia_data->gmail)) {{ $SoicalMedia_data->gmail }} @endif" name="gmail" class="form-control" id="gmail">
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> &nbsp; Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
















    </div>
    <script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $("#table_id").DataTable();

    </script>

{{--    <!-- Go to www.addthis.com/dashboard to customize your tools -->--}}
{{--    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e01fda43f5fde78"></script>--}}

@endsection