@extends('adminlte::page')

@section('title', 'Update product')

@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">Update Role User</h1>
@stop

@section('content')
    <section class="container">

            <h5 class="text-center text-primary font-weight-bold">Do you to Update role of this user?</h5>
        <p class="text-c">1.Role = User Can Only Use View Wedsite (Frontend)</p>
        <p>2.Role = Admin Can CRUD(Post User)</p>

            <table  class="table">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->role}}</td>
                </tr>
            </table>
        <form action={{route('user.updaterole',$users->id)}} method='post' enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <input type="hidden" name="id" id="id" value="{{$users->id}}">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <div>

            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="admin" name="role" id="defaultCheck1">
                    <label class="form-check-label font-weight-bold" for="defaultCheck1">
                        Admin
                    </label><br><br>
                    <input class="form-check-input" type="radio" value="user" name="role" id="defaultCheck1">
                    <label class="form-check-label font-weight-bold" for="defaultCheck1">
                        User
                    </label>
                </div>
            </div>

                <a href="{{route('user.index')}}" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </section>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
