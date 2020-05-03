@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cause
                <small>Edit cause</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> Cause</a></li>
                <li class="active">Edit cause</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        {!! Form::model($cause, ['method' => 'PUT', 'route' => ['causes.update',$cause->id], 'files'=> TRUE, 'id'=>'post-form']) !!}
        @include('backend.causes.form')
        {!! Form::close() !!}
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
