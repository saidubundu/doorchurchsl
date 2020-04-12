@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bible
                <small>Edit script</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> Bible</a></li>
                <li class="active">Edit script</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        {!! Form::model($bible, ['method' => 'PUT', 'route' => ['bible.update',$bible->id], 'files'=> TRUE, 'id'=>'post-form']) !!}
        @include('backend.bibles.form')
        {!! Form::close() !!}
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
