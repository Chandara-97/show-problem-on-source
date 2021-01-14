@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">List All PhD Post</h1>
@stop

@section('content')
    <a href="{{route('phd.create')}}" class="btn btn-success float-right">Add New Post</a>
    <table class="table" id="dataTable">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Country Name</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            {{--            <th scope="col">Author_ID</th>--}}
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($phds as $phd)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$phd->id}}</td>
                <td>{{$phd->country_name}}</td>
                <td>{{$phd->category}}</td>
                <td width = 300px>
                    <img src="{{asset("ScholarshipphdImages/".$phd->image)}}" alt="Image" class="img-responsive" width="100">
                </td>
                {{--                <td><?php echo $phd->description ?></td>--}}
                <td>{{Str::limit($phd->description,$limit = 20)}}</td>
                <td>{{$phd->author}}</td>
                {{--                <td>{{$phd->author_id}}</td>--}}
                <td>{{$phd->created_at}}</td>
                <td width = 300px>
                    <a href="{{route('phd.show')}}" class="btn btn-primary">show</a>
                    <a href="{{route('phd.edit', $phd->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('phd.delete', $phd->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <script>
        function display_ct7() {
            var x = new Date()
            var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
            hours = x.getHours( ) % 12;
            hours = hours ? hours : 12;
            hours=hours.toString().length==1? 0+hours.toString() : hours;

            var minutes=x.getMinutes().toString()
            minutes=minutes.length==1 ? 0+minutes : minutes;

            var seconds=x.getSeconds().toString()
            seconds=seconds.length==1 ? 0+seconds : seconds;

            var month=(x.getMonth() +1).toString();
            month=month.length==1 ? 0+month : month;

            var dt=x.getDate().toString();
            dt=dt.length==1 ? 0+dt : dt;

            var x1=month + "/" + dt + "/" + x.getFullYear();
            x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
            document.getElementById('ct7').innerHTML = x1;
            display_c7();
        }
        function display_c7(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct7()',refresh)
        }
        display_c7()
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@stop
