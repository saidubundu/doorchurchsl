@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>Edit user</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> User</a></li>
                <li class="active">Edit user</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',$user->id], 'files'=> TRUE, 'id'=>'post-form']) !!}
        @include('backend.users.form')
        {!! Form::close() !!}
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
