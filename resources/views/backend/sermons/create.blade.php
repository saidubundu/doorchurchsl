@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sermon
                <small>Create new sermon</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"> Sermon</a></li>
                <li class="active">Create new sermon</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            {!! Form::model($sermon, ['method' => 'POST', 'route' => 'sermons.store', 'files'=> TRUE, 'id'=>'post-form']) !!}
            @include('backend.sermons.form')
            {!! Form::close() !!}
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@section('script')
    <script type="text/javascript">
        $('#draft-btn').click(function (e) {
            e.preventDefault();
            $('#published_at').val("");
            $('#post-form').submit();
        });

        $('#excerpt').wysihtml5();
        $('#body').wysihtml5();
        </script>
    @stop
