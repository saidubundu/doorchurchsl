@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pastor
                <small> Add new pastor</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> Pastor</a></li>
                <li class="active">Add new pastor</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            {!! Form::model($pastor, ['method' => 'POST', 'route' => 'pastors.store', 'files'=> TRUE, 'id'=>'post-form']) !!}
            @include('backend.pastors.form')
            {!! Form::close() !!}
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
