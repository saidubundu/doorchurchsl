<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Script</th>
            <th>Verse</th>

        </tr>
        @foreach($streams as $stream)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['live.destroy', $stream->id]]) !!}
                    <a title="Edit" class="btn btn-xs btn-default eit-row" href="{{route('live.edit',$stream->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>

                    <button title="trash" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>


                    {!! Form::close() !!}
                </td>

                <td>{{$stream->title}}</td>
                <td>{{$stream->link}}</td>
            </tr>
        @endforeach

    </table>
</div>
