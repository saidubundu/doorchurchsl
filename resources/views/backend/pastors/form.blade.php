<div class="row">
    <!-- left column -->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Pastor</h3>
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

                    <div class="from-group  {{ $errors->has('position') ? 'has-error' : '' }}">
                        {!! Form::label('position') !!}
                        {!! Form::text('position', null, ['class'=>'form-control']) !!}

                        @if($errors->has('position'))
                            <span class="help-block">{{$errors->first('position')}}</span>
                        @endif
                    </div>
                    <br>


                    <div class="from-group {{ $errors->has('bio') ? 'has-error' : '' }}">
                        {!! Form::label('bio') !!}
                        {!! Form::textarea('bio', null, ['class'=>'form-control', 'id' => 'body']) !!}

                        @if($errors->has('bio'))
                            <span class="help-block">{{$errors->first('bio')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group  {{ $errors->has('address') ? 'has-error' : '' }}">
                        {!! Form::label('address') !!}
                        {!! Form::text('address', null, ['class'=>'form-control']) !!}

                        @if($errors->has('address'))
                            <span class="help-block">{{$errors->first('address')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group  {{ $errors->has('phone') ? 'has-error' : '' }}">
                        {!! Form::label('phone') !!}
                        {!! Form::text('phone', null, ['class'=>'form-control']) !!}

                        @if($errors->has('phone'))
                            <span class="help-block">{{$errors->first('phone')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email') !!}
                        {!! Form::email('email', null, ['class'=>'form-control']) !!}

                        @if($errors->has('email'))
                            <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <br>
                </div>
                <!-- /.box-bio -->
            </form>
        </div>

    </div>
    <!-- /.box -->


    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-3">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pastor Image</h3>
            </div>
            <div class="box-body text-center">
                <div class="from-group {{ $errors->has('image')  ? 'has-error' : '' }}">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                            <img src="{{$pastor->pastor_image_url}}"  alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                            <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>  {!! Form::file('pastorImage') !!}</span>
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


            <div class="box-footer clearfix">
                <div class="pull-left">
                    <a href="{{route('pastors.index')}}" class="btn btn-default">Cancel</a>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">
                        {{ $pastor->exits ? 'Update' : 'Save' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
