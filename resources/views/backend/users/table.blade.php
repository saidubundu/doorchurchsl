<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th width="100">Action</th>
            <th>Title</th>
            <th>Author</th>
            <th>Role</th>

        </tr>
        <?php $currentUser = auth()->user(); ?>
        @foreach($users as $user)
            <tr>
                <td>

                    <a title="Edit" class="btn btn-xs btn-default eit-row" href="{{route('users.edit',$user->id)}}">
                        <i class="fa fa-edit"></i>
                    </a>

                    @if($user->id == config("cms.default_user_id") || $user->id == $currentUser->id)
                    <button title="trash" type="submit" class="btn btn-xs btn-danger disabled">
                        <i class="fa fa-trash"></i>
                    </button>

                    @else
                        <a href="{{route('users.confirm',$user->id)}}"  class="btn btn-xs btn-danger delete-row">
                            <i class="fa fa-trash"></i>
                        </a>
                    @endif




                </td>

                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>-</td>

            </tr>
        @endforeach

    </table>
</div>
