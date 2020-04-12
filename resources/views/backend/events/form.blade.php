<div class="row">
    <!-- left column -->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Event</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="from-group  {{ $errors->has('title') ? 'has-error' : '' }}">
                        {!! Form::label('title') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}

                        @if($errors->has('title'))
                            <span class="help-block">{{$errors->first('title')}}</span>
                        @endif
                    </div>
                    <br>
                    <div class="from-group {{ $errors->has('body') ? 'has-error' : '' }}">
                        {!! Form::label('body') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control', 'id' => 'body']) !!}

                        @if($errors->has('title'))
                            <span class="help-block">{{$errors->first('body')}}</span>
                        @endif
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
        </div>

    </div>
    <!-- /.box -->


    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-3">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Feature Image</h3>
            </div>
            <div class="box-body text-center">
                <div class="from-group {{ $errors->has('eventImage')  ? 'has-error' : '' }}">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                            <img src="{{$event->event_image_url}}"  alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                            <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>  {!! Form::file('eventImage') !!}</span>
                            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>


                    @if($errors->has('eventImage'))
                        <span class="help-block">{{$errors->first('eventImage')}}</span>
                    @endif
                </div>

            </div>
        </div>

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Location</h3>
            </div>

            <div class="box-body">
                <div class="from-group  {{ $errors->has('location') ? 'has-error' : '' }}">
                    {!! Form::label('location') !!}
                    {!! Form::text('location', null, ['class'=>'form-control']) !!}

                    @if($errors->has('location'))
                        <span class="help-block">{{$errors->first('location')}}</span>
                    @endif
                </div>
            </div>
        </div>

        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Event</h3>
            </div>

            <div class="box-body">
                <div class="from-group {{ $errors->has('date')  ? 'has-error' : '' }}">
                    {!! Form::label('date','Event Date') !!}
                    <div class='input-group date' id='date'>
                        {!! Form::text('date', null, ['class'=>'form-control datepicker-here ', 'placeholder' => 'Y-m-d H:i:s', 'id'=>'published_at' ]) !!}
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>


                    @if($errors->has('date'))
                        <span class="help-block">{{$errors->first('date')}}</span>
                    @endif
                </div>
            </div>

            <div class="box-footer clearfix">
                <div class="pull-left">
                    <a href="{{route('events.index')}}" class="btn btn-default">Cancel</a>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">
                        {{ $event->exits ? 'Update' : 'Save' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
