@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>Delete user</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> User</a></li>
                <li class="active">Delete user</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            {!! Form::model($user, ['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
            <div class="col-sm-9">
                <div class="body">
                    <p>
                        You Have specify this user for deletion
                    </p>
                    <p>
                        ID #{{$user->id}} : {{$user->name}}
                    </p>
                    <p>
                        What should be done with the user's contents?
                    </p>
                    <p>
                        <input type="radio" name="delete_option" value="delete" checked> Delete All Contents
                    </p>
                    <p>
                        <input type="radio" name="delete_option" value="attribute"> Attribute All User Contents to
                        {!! Form::select('selected_user', $users) !!}
                    </p>
                </div>

                <div class="footer">
                    <button type="submit" class="btn btn-danger"> Confirm Delete</button>
                    <a href="{{route('users.index')}}" class="btn btn-default"> Cancel</a>
                </div>
            </div>
            {!! Form::close() !!}
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
