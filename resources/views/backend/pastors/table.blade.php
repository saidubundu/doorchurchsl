<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Name</th>
            <th>Position</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>

        </tr>
        @foreach($pastors as $pastor)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['pastors.destroy', $pastor->id]]) !!}
                    <a title="Edit" class="btn btn-xs btn-default eit-row" href="{{route('pastors.edit',$pastor->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>

                    <button title="trash" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>


                    {!! Form::close() !!}
                    <a type="submit" title="View" class="btn btn-xs btn-success view-row" href="{{route('pastor.show',$pastor->id)}}">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>

                <td>{{$pastor->name}}</td>
                <td>{{$pastor->position}}</td>
                <td>{{$pastor->address}}</td>
                <td>{{$pastor->phone}}</td>
                <td>{{$pastor->email}}</td>
{{--                <td><abbr title="{{ $pastor->dateFormatted(true) }}">{{$pastor->dateFormatted()}}</abbr> | {!! $pastor->publicationLabel() !!}</td>--}}

            </tr>
        @endforeach

    </table>
</div>
