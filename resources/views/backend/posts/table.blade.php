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
                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) !!}
                    @if(check_user_permissions($request, "Posts@edit", $post->id))
                    <a title="Edit" class="btn btn-xs btn-default eit-row" href="{{route('posts.edit',$post->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>
                    @else
                        <a title="" href="#" class="btn btn-xs btn-default eit-row disabled">
                            <i class="fa fa-edit"></i>
                        </a>
                    @endif

                    @if(check_user_permissions($request, "Posts@destroy", $post->id))
                    <button title="trash" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-trash"></i>
                    </button>
                    @else
                        <button title="trash" type="submit" class="btn btn-xs btn-danger delete-row disabled">
                            <i class="fa fa-trash"></i>
                        </button>
                    @endif


                    {!! Form::close() !!}
                    <a type="submit" title="View" class="btn btn-xs btn-success view-row" href="{{route('post.show',$post->slug)}}">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>

                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td><abbr title="{{ $post->dateFormatted(true) }}">{{$post->dateFormatted()}}</abbr> | {!! $post->publicationLabel() !!}</td>

            </tr>
        @endforeach

    </table>
</div>
