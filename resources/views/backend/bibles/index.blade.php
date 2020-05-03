@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bible
                <small>All scriptures</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Bible</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        @if($bibles->isEmpty())
                            <div class="box-header with-border">
                                <h3 class="box-title">No Bible Verse Found in the Database</h3>
                            </div>
                            <div class="box-body">
                                Start Adding Amazing Contents To The Website !
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <h4>Get Started</h4>

                                <p>
                                    <a href="{{route('bible.create')}}" class="btn btn-primary">
                                        Add Bible Verse
                                    </a>
                                </p>
                            </div>

                        @else
                        <div class="box-header">
                            <h3 class="box-title">Bible</h3>

                            <div class="box-tools">

                            </div>
                        </div>

                        @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @endif
                        <!-- /.box-header -->
                            @include('backend.bibles.table')
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-left">
                                {{$bibles->render()}}

                            </ul>

                            <div class="pull-right">
                                <?php $bibleCount =  $bibles->count()?>
                                <small>{{$bibleCount}} {{str_plural('Scripture', $bibleCount)}}</small>
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
