<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserDestroyRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UsersController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('name')->simplePaginate(5);
        $usersCount = User::count();
       return view('backend.users.index', compact('users','usersCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
        $roles = Role::pluck('display_name','id')->all();
        return view('backend.users.create', compact('user','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        //
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $user->attachRole($request->role);

        return redirect('backend/users')->with('message', 'New User Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $roles = Role::pluck('display_name','id')->all();
        $user = User::findOrFail($id);
        return view('backend.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);
        $user->update(!isset($request->password) ? $request->except(['password']) : $request->all());

        $user->detachRole($user->role);
        $user->attachRole($request->role);

        return redirect('backend/users')->with('message', 'User Added Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDestroyRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);
        $deleteOptions = $request->delete_option;
        $selectedUser = $request->selected_user;

        if ($deleteOptions == "delete"){
            $user->posts()->withTrashed()->forceDelete();
            $user->sermons()->withTrashed()->forceDelete();
        }
        elseif ($deleteOptions == "attribute"){
            $user->posts()->update(['user_id' => $selectedUser]);
            $user->sermons()->update(['user_id' => $selectedUser]);
        }
        $user->delete();
        return redirect('backend/users')->with('message', 'User deleted');
    }

    public function confirm($id)
    {
        $user = User::findOrFail($id);
        $users = User::where('id', '!=', $user->id)->pluck('name','id');

        return view('backend.users.confirm',compact('user','users'));
    }
}
