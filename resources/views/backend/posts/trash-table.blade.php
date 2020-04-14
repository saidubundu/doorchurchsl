<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>

        </tr>
        <?php $request = request(); ?>
        @foreach($posts as $post)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'PUT', 'route' => ['posts.restore', $post->id]]) !!}
                    @if(check_user_permissions($request, "Posts@restore",$post->id))
                    <button title="Restore" class="btn btn-xs btn-default eit-row">
                        <i class="fa fa-refresh"></i>
                    </button>
                    @else
                        <button title="Restore" onclick="return false;" class="btn btn-xs btn-default eit-row disabled">
                            <i class="fa fa-refresh"></i>
                        </button>
                    @endif
                    {!! Form::close() !!}

                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['posts.force-destroy', $post->id]]) !!}
                    @if(check_user_permissions($request, "Posts@forceDestroy", $post->id))
                    <button title="Delete Permanent" type="submit" onclick="return confirm('You are about to delete this post permanently. Are you sure?')" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>
                    @else
                        <button title="Delete Permanent" type="submit" onclick="return false;" class="btn btn-xs btn-danger delete-row disabled">
                            <i class="fa fa-remove"></i>
                        </button>
                    @endif

                    {!! Form::close() !!}


                </td>

                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td><abbr title="{{ $post->dateFormatted(true) }}">{{$post->dateFormatted()}}</abbr> | {!! $post->publicationLabel() !!}</td>
            </tr>
        @endforeach

    </table>
</div>
