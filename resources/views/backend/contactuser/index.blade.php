@extends('layouts.adminheader')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

@section('content')
    <h1>
        Contact Users


    </h1>
    <ol class="breadcrumb">
        <li><a href="{{URL('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">contactuser</li>
    </ol>
@endsection


@section('main')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="box">
        <div class="box-body">
            <table id="table_id" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th width="10%">Name</th>
                    <th width="25%">Email</th>
                    <th width="30%">Message</th>
                    <th width="30%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contactuser_data as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td><{{ $data->email }}</td>
                        <td>{{ $data->message }}</td>
                        <td>
                            <form action="{{ URL('/contactuser/'.$data->id )}}" method="post" >

                                <a href="{{ URL('/contactuser/'.$data->id )}}" class="btn btn-success">Show</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                <a href="{{URL('/contactus')}}" class="btn btn-primary">view</a>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>

            </table>
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