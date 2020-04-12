<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Script</th>
            <th>Verse</th>

        </tr>
        @foreach($bibles as $bible)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['bible.destroy', $bible->id]]) !!}
                    <a title="Edit" class="btn btn-xs btn-default eit-row" href="{{route('bible.edit',$bible->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>

                    <button title="trash" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>


                    {!! Form::close() !!}
                    <a type="submit" title="View" class="btn btn-xs btn-success view-row" href="{{route('bible.show',$bible->id)}}">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>

                <td>{{str_limit($bible->script, 40)}}</td>
                <td>{{$bible->verse}}</td>
{{--                <td>{{$bible->address}}</td>--}}
{{--                <td>{{$bible->phone}}</td>--}}
{{--                <td>{{$bible->email}}</td>--}}
{{--                <td><abbr title="{{ $pastor->dateFormatted(true) }}">{{$pastor->dateFormatted()}}</abbr> | {!! $pastor->publicationLabel() !!}</td>--}}

            </tr>
        @endforeach

    </table>
</div>
