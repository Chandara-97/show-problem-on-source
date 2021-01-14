@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">List All High School Post</h1>
@stop

@section('content')
    <a href="{{route('highschool.create')}}" class="btn btn-success float-right">Add New Post</a>
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
        <?php $k=0;?>
        @foreach($highschools as $highschool)
{{--            <?php $k++;?>--}}
{{--            @if($k<3)--}}
            <tr>
                <td>{{$i++}}</td>
                <td>{{$highschool->id}}</td>
                <td>{{$highschool->country_name}}</td>
                <td>{{$highschool->category}}</td>
                <td width = 300px>
                    <img src="{{asset("ScholarshiphighschoolImages/".$highschool->image)}}" alt="Image" class="img-responsive" width="100">
                </td>
                {{--                <td><?php echo $highschool->description ?></td>--}}
                {{--                <td>{{Str::limit($highschool->description,$limit = 20)}}</td>--}}
                <td><?php echo Str::limit($highschool->description,$limit = 20)?></td>
                <td>{{$highschool->author}}</td>
                {{--                <td>{{$highschool->author_id}}</td>--}}
                <td>{{$highschool->created_at}}</td>
                <td width = 300px>
                    <a href="{{route('highschool.show')}}" class="btn btn-primary">show</a>
                    <a href="{{route('highschool.edit', $highschool->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('highschool.delete', $highschool->id)}}" class="btn btn-danger"data-tr="tr_{{$highschool->id}}"
                       data-toggle="confirmation"
                       data-btn-ok-label="Delete" data-btn-ok-icon="fa fa-remove"
                       data-btn-ok-class="btn btn-sm btn-danger"
                       data-btn-cancel-label="Cancel"
                       data-btn-cancel-icon="fa fa-chevron-circle-left"
                       data-btn-cancel-class="btn btn-sm btn-default"
                       data-title="Are you sure you want to delete ?"
                       data-placement="left" data-singleton="true">Delete</a>
                </td>
            </tr>
{{--               // @endif--}}
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
