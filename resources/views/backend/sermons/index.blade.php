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
                        @if($sermons->isEmpty())
                            <div class="box-header with-border">
                                <h3 class="box-title">No Sermons Found in the Database</h3>
                            </div>
                            <div class="box-body">
                                Start Adding Amazing Contents To The Website !
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <h4>Get Started</h4>

                                <p>
                                    <a href="{{route('sermons.create')}}" class="btn btn-primary">
                                        Add new Sermon
                                    </a>
                                </p>
                            </div>

                         @else
                        <div class="box-header">
                            <h3 class="box-title">Sermons</h3>

                            <div class="box-tools">
                                <?php $links = [] ?>
                                @foreach($statusList as $key => $value)
                                    @if($value)
                                        <?php $selected = Request::get('status') == $key ? 'selected-status' : '' ?>
                                        <?php $links[] = "<a class=\"{$selected}\" href=\"?status={$key}\">" . ucwords($key) . "({$value})</a>" ?>
                                    @endif
                                @endforeach
                                {!! implode(' | ', $links) !!}
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
                                {{$sermons->appends( Request::query())->render()}}

                            </ul>

                            <div class="pull-right">
                                <?php $sermonCount =  $sermons->count()?>
                                <small>{{$sermonCount}} {{str_plural('Sermon', $sermonCount)}}</small>
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
