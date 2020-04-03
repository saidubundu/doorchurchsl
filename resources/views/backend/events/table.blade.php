<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Title</th>
            <th>location</th>
            <th>Date</th>

        </tr>
        @foreach($events as $event)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) !!}
                    <a title="Edit" class="btn btn-xs btn-default eit-row" href="{{route('events.edit',$event->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>

                    <button title="delete" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>


                    {!! Form::close() !!}
                    <a type="submit" title="View" class="btn btn-xs btn-success view-row" href="{{route('event.show',$event->id)}}">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>

                <td>{{$event->title}}</td>
                <td>{{$event->location}}</td>
                <td>{{$event->date}}</td>

            </tr>
        @endforeach

    </table>
</div>
