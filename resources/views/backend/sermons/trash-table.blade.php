<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>

        </tr>
        @foreach($sermons as $sermon)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'PUT', 'route' => ['sermons.restore', $sermon->id]]) !!}
                    <button title="Restore" class="btn btn-xs btn-default eit-row">
                        <i class="fa fa-refresh"></i>
                    </button>
                    {!! Form::close() !!}

                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['sermons.force-destroy', $sermon->id]]) !!}
                    <button type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>

                    {!! Form::close() !!}


                </td>

                <td>{{$sermon->title}}</td>
                <td>{{$sermon->user->name}}</td>
                <td><abbr title="{{ $sermon->dateFormatted(true) }}">{{$sermon->dateFormatted()}}</abbr> | {!! $sermon->publicationLabel() !!}</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
        @endforeach

    </table>
</div>
