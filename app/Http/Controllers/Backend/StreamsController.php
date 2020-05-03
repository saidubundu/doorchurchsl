<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StreamRequest;
use App\Stream;
use Illuminate\Http\Request;

class StreamsController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $streams = Stream::latest()->simplePaginate(5);
        return view('backend.live.index', compact('streams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Stream $stream)
    {
        //
        return view('backend.live.create', compact('stream'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StreamRequest $request)
    {
        //
        $input = $request->all();
        Stream::create($input);

        return redirect('backend/live')->with('message', 'Script added');
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
        $stream = Stream::findOrFail($id);
        return view('backend.live.edit', compact('stream'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StreamRequest $request, $id)
    {
        //
        $stream = Stream::findOrFail($id);
        $input = $request->all();
        $stream->update($input);

        return redirect('backend/live')->with('message', 'Script added');
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
        Stream::findOrFail($id)->delete();
        return redirect('backend/live')->with('message', 'Script deleted');
    }
}
