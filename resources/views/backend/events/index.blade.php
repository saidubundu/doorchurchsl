@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Event
                <small>All events</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Event</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        @if($events->isEmpty())
                            <div class="box-header with-border">
                                <h3 class="box-title">No Events Found in the Database</h3>
                            </div>
                            <div class="box-body">
                                Start Adding Amazing Contents To The Website !
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <h4>Get Started</h4>

                                <p>
                                    <a href="{{route('events.create')}}" class="btn btn-primary">
                                        Add Event
                                    </a>
                                </p>
                            </div>

                        @else
                        <div class="box-header">
                            <h3 class="box-title">Event</h3>

                            <div class="box-tools">
                            </div>
                        </div>

                        @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @endif
                        <!-- /.box-header -->


                            @include('backend.events.table')

                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-left">
                                {{$events->render()}}

                            </ul>

                            <div class="pull-right">
                                <?php $eventCount =  $events->count()?>
                                <small>{{$eventCount}} {{str_plural('Event', $eventCount)}}</small>
                            </div>
                        </div>
                    @endif
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    @stop
