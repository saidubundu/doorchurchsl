<div class="row">
    <!-- left column -->
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Cause</h3>
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

                    <div class="from-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                        {!! Form::label('excerpt') !!}
                        {!! Form::textarea('excerpt', null, ['class'=>'form-control']) !!}

                        @if($errors->has('excerpt'))
                            <span class="help-block">{{$errors->first('excerpt')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group {{ $errors->has('body') ? 'has-error' : '' }}">
                        {!! Form::label('body') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

                        @if($errors->has('body'))
                            <span class="help-block">{{$errors->first('body')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group  {{ $errors->has('goal') ? 'has-error' : '' }}">
                        {!! Form::label('goal', 'Amount Needed') !!}
                        {!! Form::number('goal', null, ['class'=>'form-control']) !!}

                        @if($errors->has('goal'))
                            <span class="help-block">{{$errors->first('goal')}}</span>
                        @endif
                    </div>
                    <br>

                    <div class="from-group  {{ $errors->has('initial') ? 'has-error' : '' }}">
                        {!! Form::label('initial', 'Amount Received') !!}
                        {!! Form::number('initial', null, ['class'=>'form-control']) !!}

                        @if($errors->has('initial'))
                            <span class="help-block">{{$errors->first('initial')}}</span>
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
    <div class="col-md-4">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Donation Details</h3>
            </div>
            <div class="box-boxy text-center">
                <div class="from-group  {{ $errors->has('orange') ? 'has-error' : '' }}">
                    {!! Form::label('orange', 'Orange Money') !!}
                    {!! Form::text('orange', null, ['class'=>'form-control']) !!}

                    @if($errors->has('orange'))
                        <span class="help-block">{{$errors->first('orange')}}</span>
                    @endif
                </div>
                <br>

                <div class="from-group  {{ $errors->has('africell') ? 'has-error' : '' }}">
                    {!! Form::label('africell', 'Africell Money') !!}
                    {!! Form::text('africell', null, ['class'=>'form-control']) !!}

                    @if($errors->has('africell'))
                        <span class="help-block">{{$errors->first('africell')}}</span>
                    @endif
                </div>
                <br>

                <div class="from-group  {{ $errors->has('account') ? 'has-error' : '' }}">
                    {!! Form::label('account', 'Account No') !!}
                    {!! Form::text('account', null, ['class'=>'form-control']) !!}

                    @if($errors->has('account'))
                        <span class="help-block">{{$errors->first('account')}}</span>
                    @endif
                </div>
                <br>
            </div>
        </div>

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Feature Image</h3>
            </div>
            <div class="box-body text-center">
                <div class="from-group {{ $errors->has('image')  ? 'has-error' : '' }}">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                            <img src="{{$cause->image_url}}"  alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                            <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>  {!! Form::file('image') !!}</span>
                            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>


                    @if($errors->has('image'))
                        <span class="help-block">{{$errors->first('image')}}</span>
                    @endif
                </div>

            </div>


        </div>
        <!-- Horizontal Form -->
        <div class="box box-info">


            <div class="box-footer clearfix">
                <div class="pull-left">
                    <a href="{{route('causes.index')}}" class="btn btn-default">Cancel</a>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">
                        {{ $cause->exits ? 'Update' : 'Save' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
