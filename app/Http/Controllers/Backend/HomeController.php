<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\AccountUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;

class HomeController extends BackendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function edit(Request $request)
    {
        $user = $request->user();
        return view('home.edit', compact('user'));
    }

    public function update(AccountUpdateRequest $request)
    {
        $data = $request->all();
        if (empty($data['password'])) unset($data['password']);
        else $data['password'] = bcrypt($data['password']);

        $user = $request->user();
        $user->update($data);

        return redirect('/backend/users')->with('message', 'Account updated');
    }
}
