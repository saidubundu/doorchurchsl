<div class="row">
    <!-- left column -->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Blog</h3>
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

                    <div class="from-group excerpt  {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                        {!! Form::label('excerpt') !!}
                        {!! Form::textarea('excerpt', null, ['class'=>'form-control', 'id'=>'excerpt']) !!}

                        @if($errors->has('title'))
                            <span class="help-block">{{$errors->first('excerpt')}}</span>
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
                <div class="from-group {{ $errors->has('image')  ? 'has-error' : '' }}">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                            <img src="{{$post->image_url}}"  alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                            <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>  {!! Form::file('image') !!}</span>
                            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>


                    @if($errors->has('title'))
                        <span class="help-block">{{$errors->first('image')}}</span>
                    @endif
                </div>

            </div>


        </div>
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Publish</h3>
            </div>

            <div class="box-body">
                <div class="from-group {{ $errors->has('published_at')  ? 'has-error' : '' }}">
                    {!! Form::label('published_at','Published Date') !!}
                    <div class='input-group date' id='published_at'>
                        {!! Form::text('published_at', null, ['class'=>'form-control datepicker-here ', 'placeholder' => 'Y-m-d H:i:s', 'id'=>'published_at' ]) !!}
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>


                    @if($errors->has('published_at'))
                        <span class="help-block">{{$errors->first('published_at')}}</span>
                    @endif
                </div>
            </div>

            <div class="box-footer clearfix">
                <div class="pull-left">
                    <a id="draft-btn" href="" class="btn btn-default">Draft</a>
                </div>
                <div class="pull-right">
                    {!! Form::submit('Publish', ['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
