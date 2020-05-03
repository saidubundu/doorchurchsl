@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                LiveStream
                <small> Create new live stream</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> LiveStream</a></li>
                <li class="active">Create new live stream</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            {!! Form::model($stream, ['method' => 'POST', 'route' => 'live.store', 'files'=> TRUE, 'id'=>'post-form']) !!}
            @include('backend.live.form')
            {!! Form::close() !!}
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
