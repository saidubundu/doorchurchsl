<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>

        </tr>
        @foreach($posts as $post)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'PUT', 'route' => ['posts.restore', $post->id]]) !!}
                    <button title="Restore" class="btn btn-xs btn-default eit-row">
                        <i class="fa fa-refresh"></i>
                    </button>
                    {!! Form::close() !!}

                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['posts.force-destroy', $post->id]]) !!}
                    <button type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>

                    {!! Form::close() !!}


                </td>

                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td><abbr title="{{ $post->dateFormatted(true) }}">{{$post->dateFormatted()}}</abbr> | {!! $post->publicationLabel() !!}</td>
            </tr>
        @endforeach

    </table>
</div>
