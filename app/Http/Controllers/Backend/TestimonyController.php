<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonyRequest;
use App\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonies = Testimony::paginate(5);
        return view('backend.testimony.index', compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Testimony $testimony)
    {
        //
        return view('backend.testimony.create', compact('testimony'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonyRequest $request)
    {
        //
        $input = $request->all();
        Testimony::create($input);

        return redirect('backend/testimonys')->with('message', 'Script added');
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
        $testimony = Testimony::findOrFail($id);
        return view('backend.testimony.edit', compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonyRequest $request, $id)
    {
        //
        $testimony = Testimony::findOrFail($id);
        $input = $request->all();
        $testimony->update($input);

        return redirect('backend/testimonys')->with('message', 'Script added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Testimony::findOrFail($id)->delete();
        return redirect('backend/testimonys')->with('message', 'Script deleted');
    }
}
