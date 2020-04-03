@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Event
                <small>Create new event</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('events.index')}}"> Event</a></li>
                <li class="active">Create new event</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            {!! Form::model($event, ['method' => 'POST', 'route' => 'events.store', 'files'=> TRUE, 'id'=>'post-form']) !!}
            @include('backend.events.form')
            {!! Form::close() !!}
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@include('script.scripts')
