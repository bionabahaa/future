@extends('layouts.adminheader')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

@section('content')
<div class="container">
    <h1>
        FAQ


    </h1>
    <ol class="breadcrumb">
        <li><a href="{{URL('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">faq</li>
    </ol>
</div>
@endsection
@section('content1')
<div class="container">
    <div class="col-lg-3 col-xs-6">

        <div class="btn-lg">


            <a href="{{URL('/faq/create ')}}" class="btn btn-block btn-info btn-lg"><i class="fa fa-plus-circle"></i> <span></span>Add New </a>
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
                    <th width="10%">Title</th>
                    <th width="30%">Description</th>
                    <th width="30%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($faq_data as $data)
                    <tr>
                        <td>{{ $data->title }}</td>

                        <td>{{ $data->description }}</td>
                        <td>
                            <form action="{{ URL('/faq/'.$data->id )}}" method="post" >

                                <a href="{{ URL('/faq/'.$data->id )}}" class="btn btn-success">Show</a>
                                <a href="{{ URL('/faq/'.$data->id.'/edit')}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                <a href="{{URL('/questions')}}" class="btn btn-primary">view</a>
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