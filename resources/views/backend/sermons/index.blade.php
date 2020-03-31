@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sermons
                <small>All sermon</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sermons</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Sermons</h3>

                            <div class="box-tools">
                                <a href="?status=all">All</a> |
                                <a href="?status=published">Published</a> |
                                <a href="?status=schedule">Schedule</a> |
                                <a href="?status=draft">Draft</a> |
                                <a href="?status=trash">Trash</a>
                            </div>
                        </div>

                        @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @endif
                        <!-- /.box-header -->
                        @if($onlyTrashed)
                        @include('backend.sermons.trash-table')
                        @else
                            @include('backend.sermons.table')
                            @endif
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-left">
                                {{$sermons->render()}}
                            </ul>

                            <div class="pull-right">
                                <?php $sermonCount =  $sermons->count()?>
                                <small>{{$sermonCount}} {{str_plural('Sermon', $sermonCount)}}</small>
                            </div>
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    @stop
