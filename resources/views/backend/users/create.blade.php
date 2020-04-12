@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>Create new user</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> User</a></li>
                <li class="active">Create new user</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            {!! Form::model($user, ['method' => 'POST', 'route' => 'users.store', 'files'=> TRUE, 'id'=>'post-form']) !!}
            @include('backend.users.form')
            {!! Form::close() !!}
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
