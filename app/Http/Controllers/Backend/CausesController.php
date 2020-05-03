<?php

namespace App\Http\Controllers\Backend;

use App\Cause;
use App\Http\Controllers\Controller;
use App\Http\Requests\CausesRequest;
use Illuminate\Http\Request;

class CausesController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('images/causes');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $causes = Cause::latest()->simplePaginate(5);
        return view('backend.causes.index',compact('causes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cause $cause)
    {
        //
        return view('backend.causes.create', compact('cause'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CausesRequest $request)
    {
        //
        $data = $this->handleRequest($request);
        Cause::create($data);
        return redirect('backend/causes')->with('message', 'Causes Added');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $image->move($destination, $fileName);

            $data['image'] = $fileName;
        }

        return $data;
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
        $cause = Cause::findOrFail($id);
        return view('backend.causes.edit',compact('cause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CausesRequest $request, $id)
    {
        //
        $cause = Cause::findOrFail($id);
        $oldImage = $cause->image;
        $data = $this->handleRequest($request);
        $cause->update($data);

        if ($oldImage !== $cause->image){
            $this->removeImage($oldImage);
        }

        return redirect('backend/causes')->with('message', 'Cause Updated');
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
    }

    private function removeImage($image)
    {
        if (!empty($image)){
            $imagePath = $this->uploadPath . '/' . $image;

            if (file_exists($imagePath)) unlink($imagePath);
        }
    }
}
