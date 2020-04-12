@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pastor
                <small>Edit blog</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> Pastor</a></li>
                <li class="active">Edit pastor</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        {!! Form::model($pastor, ['method' => 'PUT', 'route' => ['pastors.update',$pastor->id], 'files'=> TRUE, 'id'=>'post-form']) !!}
        @include('backend.pastors.form')
        {!! Form::close() !!}
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
