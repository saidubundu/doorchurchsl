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
                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['sermons.destroy', $sermon->id]]) !!}
                    <a title="Edit" class="btn btn-xs btn-default eit-row" href="{{route('sermons.edit',$sermon->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>

                    <button title="trash" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-trash"></i>
                    </button>


                    {!! Form::close() !!}
                    <a type="submit" title="View" class="btn btn-xs btn-success view-row" href="{{route('sermon.show',$sermon->slug)}}">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>

                <td>{{$sermon->title}}</td>
                <td>{{$sermon->user->name}}</td>
                <td><abbr title="{{ $sermon->dateFormatted(true) }}">{{$sermon->dateFormatted()}}</abbr> | {!! $sermon->publicationLabel() !!}</td>

            </tr>
        @endforeach

    </table>
</div>
