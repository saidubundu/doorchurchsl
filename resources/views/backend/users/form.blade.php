<div class="row">
    <!-- left column -->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="from-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}

                        @if($errors->has('name'))
                            <span class="help-block">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group excerpt  {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email') !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'id'=>'email']) !!}

                        @if($errors->has('email'))
                            <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <br>
                    <div class="from-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password') !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}

                        @if($errors->has('password'))
                            <span class="help-block">{{$errors->first('password')}}</span>
                        @endif
                    </div>

                    <br>
                    <div class="from-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        {!! Form::label('password_confirmation') !!}
                        {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}

                        @if($errors->has('password_confirmation'))
                            <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                        @endif
                    </div>
                </div>
                <div class="box-footer clearfix">
                    <div class="pull-left">
                        <a href="{{route('users.index')}}" class="btn btn-default">Cancel</a>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">
                            {{ $user->exits ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </div>
                <!-- /.box-password -->
            </form>
        </div>

    </div>
</div>
    <!-- /.box -->


    <!--/.col (left) -->
    <!-- right column -->
{{--    <div class="col-md-3">--}}
{{--        <div class="box box-info">--}}
{{--            <div class="box-header with-border">--}}
{{--                <h3 class="box-title">Select Audio</h3>--}}
{{--            </div>--}}
{{--            <div class="box-body">--}}
{{--                <div class="form-group {{$errors->has('audio') ? 'has-error' : ''}}">--}}
{{--                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">--}}
{{--                        <div class="fileinput fileinput-new" data-provides="fileinput">--}}
{{--                                  <span class="btn btn-outline-secondary btn-file">--}}
{{--                                    <span class="fileinput-new">Select file</span>--}}
{{--                                    <span class="fileinput-exists">Change</span>--}}
{{--                                    {!! Form::file('audio') !!}--}}
{{--                                  </span>--}}
{{--                            <span class="fileinput-filename">{{$sermon->audio}}</span>--}}
{{--                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @if($errors->has('audio'))--}}
{{--                        <span class="help-block">{{$errors->first('audio')}}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="box box-info">--}}
{{--            <div class="box-header with-border">--}}
{{--                <h3 class="box-title">Feature Image</h3>--}}
{{--            </div>--}}
{{--            <div class="box-body text-center">--}}
{{--                <div class="from-group {{ $errors->has('image')  ? 'has-error' : '' }}">--}}
{{--                    <div class="fileinput fileinput-new" data-provides="fileinput">--}}
{{--                        <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">--}}
{{--                            <img src="{{$post->image_url}}"  alt="">--}}
{{--                        </div>--}}
{{--                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>--}}
{{--                        <div>--}}
{{--                            <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>  {!! Form::file('image') !!}</span>--}}
{{--                            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    @if($errors->has('title'))--}}
{{--                        <span class="help-block">{{$errors->first('image')}}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}

{{--            </div>--}}


{{--        </div>--}}
{{--        <!-- Horizontal Form -->--}}
{{--        <div class="box box-info">--}}
{{--            <div class="box-header with-border">--}}
{{--                <h3 class="box-title">Publish</h3>--}}
{{--            </div>--}}

{{--            <div class="box-body">--}}
{{--                <div class="from-group {{ $errors->has('published_at')  ? 'has-error' : '' }}">--}}
{{--                    {!! Form::label('published_at','Published Date') !!}--}}
{{--                    <div class='input-group date' id='published_at'>--}}
{{--                        {!! Form::text('published_at', null, ['class'=>'form-control datepicker-here ', 'placeholder' => 'Y-m-d H:i:s', 'id'=>'published_at' ]) !!}--}}
{{--                        <span class="input-group-addon">--}}
{{--                        <span class="glyphicon glyphicon-calendar"></span>--}}
{{--                    </span>--}}
{{--                    </div>--}}


{{--                    @if($errors->has('published_at'))--}}
{{--                        <span class="help-block">{{$errors->first('published_at')}}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="box-footer clearfix">--}}
{{--                <div class="pull-left">--}}
{{--                    <a id="draft-btn" href="" class="btn btn-default">Draft</a>--}}
{{--                </div>--}}
{{--                <div class="pull-right">--}}
{{--                    {!! Form::submit('Publish', ['class'=>'btn btn-primary']) !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

