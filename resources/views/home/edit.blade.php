@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Account
                <small>Edit account</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> Account</a></li>
                <li class="active">Edit account</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        {!! Form::model($user, ['method' => 'PUT', 'url' => '/edit-account', 'files'=> TRUE, 'id'=>'post-form']) !!}
        @include('home.form', ['hideRoleDropdown' => true])
        {!! Form::close() !!}
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
