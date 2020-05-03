<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Title</th>
            <th>Raised</th>
            <th>Goal</th>
            <th>Orange No.</th>
            <th>Africell No.</th>
            <th>Account No.</th>

        </tr>
        @foreach($causes as $cause)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['causes.destroy', $cause->id]]) !!}
                    <a title="Edit" class="btn btn-xs btn-default eit-row" href="{{route('causes.edit',$cause->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>

                    <button title="trash" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>


                    {!! Form::close() !!}
                    <a type="submit" title="View" class="btn btn-xs btn-success view-row" href="{{route('cause.show',$cause->slug)}}">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>

                <td>{{$cause->title}}</td>
                <td>Le {{$cause->initial}}</td>
                <td>Le {{$cause->goal}}</td>
                <td>{{$cause->orange}}</td>
                <td>{{$cause->africell}}</td>
                <td>{{$cause->account}}</td>
{{--                <td><abbr title="{{ $pastor->dateFormatted(true) }}">{{$pastor->dateFormatted()}}</abbr> | {!! $pastor->publicationLabel() !!}</td>--}}

            </tr>
        @endforeach

    </table>
</div>
