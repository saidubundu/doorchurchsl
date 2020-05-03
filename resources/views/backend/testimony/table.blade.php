<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Name</th>
            <th>Testimony</th>

        </tr>
        @foreach($testimonies as $testimony)
            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block','method' => 'DELETE', 'route' => ['testimonys.destroy', $testimony->id]]) !!}
                    <a title="Edit" class="btn btn-xs btn-default eit-row"
                       href="{{route('testimonys.edit',$testimony->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>

                    <button title="trash" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-remove"></i>
                    </button>


                    {!! Form::close() !!}

                </td>

                <td>{{$testimony->name}}</td>
                <td>{{$testimony->script}}</td>

            </tr>
        @endforeach

    </table>
</div>
