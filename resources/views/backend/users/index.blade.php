@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>All users</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">User</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Users</h3>

                            <div class="box-tools">
{{--                                <?php $links = [] ?>--}}
{{--                                @foreach($statusList as $key => $value)--}}
{{--                                    @if($value)--}}
{{--                                        <?php $selected = Request::get('status') == $key ? 'selected-status' : '' ?>--}}
{{--                                        <?php $links[] = "<a class=\"{$selected}\" href=\"?status={$key}\">" . ucwords($key) . "({$value})</a>" ?>--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                                {!! implode(' | ', $links) !!}--}}
                            </div>
                        </div>

                        @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @endif
                        <!-- /.box-header -->
                            @include('backend.users.table')
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-left">
                                {{$users->render()}}

                            </ul>

                            <div class="pull-right">
{{--                                <?php $postCount =  $posts->count()?>--}}
{{--                                <small>{{$postCount}} {{str_plural('Post', $postCount)}}</small>--}}
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
