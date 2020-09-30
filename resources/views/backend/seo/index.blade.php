@extends('layouts.adminheader')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

@section('content')
    <h1>
       SEO


    </h1>
    <ol class="breadcrumb">
        <li><a href="{{URL('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">seo</li>
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
                    @if(isset($seo_data->title))
                        <img src="{{ asset('seo/'.$seo_data->logo) }}" class="img-responsive img-thumbnail" style="display: block;margin-left: auto;margin-right: auto;width: 300px;" alt="">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('seo_update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" value="@if(isset($seo_data->title)) {{ $seo_data->title }} @endif" name="title" class="form-control" id="title">
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="title">Keywords</label>
                            <input type="text" value="@if(isset($seo_data->keywords)) {{ $seo_data->keywords }} @endif" name="keywords" class="form-control" id="title">
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="title">Subject</label>
                            <input type="text" value="@if(isset($seo_data->subject)) {{ $seo_data->subject }} @endif" name="subject" class="form-control" id="title">
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="title">CopyRight</label>
                            <input type="text" value="@if(isset($seo_data->footer)) {{ $seo_data->footer }} @endif" name="footer" class="form-control" id="footer">
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" name="logo" class="form-control" id="logo">
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="descriptions">Descriptions</label>
                            <textarea name="descriptions" class="form-control" id="descriptions" cols="30" rows="10">@if(isset($seo_data->descriptions)) {{ $seo_data->descriptions }} @endif</textarea>
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