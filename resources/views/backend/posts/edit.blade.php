@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blog
                <small>Edit blog</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> Blog</a></li>
                <li class="active">Edit blog</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        {!! Form::model($post, ['method' => 'PUT', 'route' => ['posts.update',$post->id], 'files'=> TRUE, 'id'=>'post-form']) !!}
        @include('backend.posts.form')
        {!! Form::close() !!}
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
