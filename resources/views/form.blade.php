<div class="col-xs-9">
    <div class="box">
        <!-- form start -->
        <div class="box-body">
            <div class="from-group  {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('title') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}

                @if($errors->has('title'))
                    <span class="help-block">{{$errors->first('title')}}</span>
                @endif
            </div>

            <div class="from-group  {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                {!! Form::label('excerpt') !!}
                {!! Form::textarea('excerpt', null, ['class'=>'form-control', 'row'=>'20']) !!}

                @if($errors->has('excerpt'))
                    <span class="help-block">{{$errors->first('excerpt')}}</span>
                @endif
            </div>

            <div class="from-group  {{ $errors->has('body') ? 'has-error' : '' }}">
                {!! Form::label('body') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control', 'row' => '30']) !!}

                @if($errors->has('body'))
                    <span class="help-block">{{$errors->first('body')}}</span>
                @endif
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

    </div>
</div>
<div class="col-md-3">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Publish</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label for="published_at">Publish date</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="box-footer clearfix">
            <div class="pull-left">
                <a href="#" class="btn btn-default">Save Draft</a>
            </div>
            <div class="pull-right">
                <a href="#" class="btn btn-primary">Publish</a>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Category</h3>
        </div>
        <div class="box-body">
            <div class="radio">
                <label>
                    <input type="radio" name="category" id="category-1" value="option1">
                    Web Programming
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="category" id="category-2" value="option1">
                    Web Design
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="category" id="category-3" value="option1">
                    Java
                </label>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Feature Image</h3>
        </div>
        <div class="box-body text-center">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="http://placehold.it/200x200" width="100%" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                            <input type="file" name="...">
                            </span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
            </div>
        </div>
    </div>
</div>
