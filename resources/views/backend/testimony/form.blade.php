<div class="row">
    <!-- left column -->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Live stream</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="from-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        {!! Form::label('title') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}

                        @if($errors->has('title'))
                            <span class="help-block">{{$errors->first('title')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group  {{ $errors->has('link') ? 'has-error' : '' }}">
                        {!! Form::label('link') !!}
                        {!! Form::text('link', null, ['class'=>'form-control']) !!}

                        @if($errors->has('link'))
                            <span class="help-block">{{$errors->first('link')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="box-footer clearfix">
                        <div class="pull-left">
                            <a href="{{route('live.index')}}" class="btn btn-default">Cancel</a>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">
                                {{ $stream->exits ? 'Update' : 'Save' }}
                            </button>
                        </div>
                    </div>

                </div>
                <!-- /.box-bio -->
            </form>
        </div>

    </div>
    <!-- /.box -->


    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-3">


        <!-- Horizontal Form -->
        <div class="box box-info">



        </div>
    </div>
</div>
