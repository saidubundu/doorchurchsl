@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Testimony
                <small>Edit script</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> Testimony</a></li>
                <li class="active">Edit testimony</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        {!! Form::model($testimony, ['method' => 'PUT', 'route' => ['testimonys.update',$testimony->id], 'files'=> TRUE, 'id'=>'post-form']) !!}
        @include('backend.testimony.form')
        {!! Form::close() !!}
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
