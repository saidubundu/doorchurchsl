<?php

namespace App\Http\Controllers\Backend;

use App\Bible;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BibleController extends BackendController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bibles = Bible::simplePaginate(5);
        return view('backend.bibles.index', compact('bibles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bible $bible)
    {
        //
        return view('backend.bibles.create', compact('bible'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Bible::create($input);

        return redirect('backend/bible')->with('message', 'Script added');
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
        $bible = Bible::findOrFail($id);
        return view('backend.bibles.edit', compact('bible'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $bible = Bible::findOrFail($id);
        $input = $request->all();
        $bible->update($input);

        return redirect('backend/bible')->with('message', 'Script added');
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
        Bible::findOrFail($id)->delete();
        return redirect('backend/bible')->with('message', 'Script deleted');
    }
}
