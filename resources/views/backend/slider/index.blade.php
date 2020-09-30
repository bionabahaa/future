@extends('layouts.adminheader')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

@section('content')
<div class="container">

    <h1>
        Slider


    </h1>
    <ol class="breadcrumb">
        <li><a href="{{URL('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">slider</li>
    </ol>
</div>
@endsection
@section('content1')
<div class="container">
    <div class="col-lg-3 col-xs-6">

        <div class="btn-lg">


            <a href="{{URL('/slider/create ')}}" class="btn btn-block btn-info btn-lg"><i class="fa fa-plus-circle"></i> <span></span>Add New </a>
        </div>
    </div>
</div>
@endsection

@section('main')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
    <div class="box">
        <div class="box-body">
            <table id="table_id" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width:">Title</th>
                    <th style="width:">Image</th>
                    <th style="width:">Description</th>
                    <th style="width:200px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slider_data as $data)
                    <tr>
                        <td>{{ $data->title }}</td>
                        <td><img src="{{ URL::to('/') }}/images/slider/{{ $data->image }}" class="img-thumbnail" width="200" /></td>
                        <td style="width:400px">{{ $data->description }}</td>
                        <td style="width:300px">
                            <form action="{{ URL('/slider/'.$data->id )}}" method="post" >

                                <a href="{{ URL('/slider/'.$data->id )}}" class="btn btn-success">Show</a>
                                <a href="{{ URL('/slider/'.$data->id.'/edit')}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                <a href="{{URL('/website')}}" class="btn btn-primary">view</a>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>

            </table>
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
@endsection
