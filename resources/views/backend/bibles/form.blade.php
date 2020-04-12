<div class="row">
    <!-- left column -->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Bible</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="from-group {{ $errors->has('script') ? 'has-error' : '' }}">
                        {!! Form::label('script') !!}
                        {!! Form::textarea('script', null, ['class'=>'form-control', 'id' => 'body']) !!}

                        @if($errors->has('script'))
                            <span class="help-block">{{$errors->first('script')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group  {{ $errors->has('verse') ? 'has-error' : '' }}">
                        {!! Form::label('verse') !!}
                        {!! Form::text('verse', null, ['class'=>'form-control']) !!}

                        @if($errors->has('verse'))
                            <span class="help-block">{{$errors->first('verse')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="box-footer clearfix">
                        <div class="pull-left">
                            <a href="{{route('bible.index')}}" class="btn btn-default">Cancel</a>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">
                                {{ $bible->exits ? 'Update' : 'Save' }}
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
