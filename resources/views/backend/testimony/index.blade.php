@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Live Stream
                <small>All scriptures</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Live Stream</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Live Stream</h3>

                            <div class="box-tools">

                            </div>
                        </div>

                        @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @endif
                        <!-- /.box-header -->
                            @include('backend.live.table')
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-left">
{{--                                {{$bibles->render()}}--}}

                            </ul>

{{--                            <div class="pull-right">--}}
{{--                                <?php $bibleCount =  $bibles->count()?>--}}
{{--                                <small>{{$bibleCount}} {{str_plural('Scripture', $bibleCount)}}</small>--}}
{{--                            </div>--}}
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    @stop
