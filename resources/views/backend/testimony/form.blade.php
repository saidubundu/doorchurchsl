<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Testimony</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="from-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}

                        @if($errors->has('name'))
                            <span class="help-block">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group  {{ $errors->has('script') ? 'has-error' : '' }}">
                        {!! Form::label('script', 'Testimony') !!}
                        {!! Form::textarea('script', null, ['class'=>'form-control']) !!}

                        @if($errors->has('script'))
                            <span class="help-block">{{$errors->first('script')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="box-footer clearfix">
                        <div class="pull-left">
                            <a href="{{route('testimonys.index')}}" class="btn btn-default">Cancel</a>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">
                                {{ $testimony->exits ? 'Update' : 'Save' }}
                            </button>
                        </div>
                    </div>

                </div>
                <!-- /.box-bio -->
            </form>
        </div>

    </div>
    <!-- /.box -->
</div>
