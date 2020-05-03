<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PastorsRequest;
use App\Pastor;
use Illuminate\Http\Request;

class PastorsController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('images/pastor');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pastors = Pastor::latest()->simplePaginate(5);
        return view('backend.pastors.index', compact('pastors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pastor $pastor)
    {
        //
        return view('backend.pastors.create', compact('pastor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PastorsRequest $request)
    {
        //
        $data = $this->handleRequest($request);
        Pastor::create($data);
        return redirect('backend/pastors')->with('message', 'Pastor Added');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('pastorImage')){
            $image = $request->file('pastorImage');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $image->move($destination, $fileName);

            $data['pastorImage'] = $fileName;
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
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $pastor = Pastor::findBySlugOrFail($slug);
        return view('backend.pastors.edit', compact('pastor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PastorsRequest $request, $id)
    {
        //
        $pastor = Pastor::findOrFail($id);
        $oldImage = $pastor->pastorImage;
        $data = $this->handleRequest($request);
        $pastor->update($data);

        if ($oldImage !== $pastor->pastorImage){
            $this->removeImage($oldImage);
        }

        return redirect('backend/pastors')->with('message', 'Pastor Updted');
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
        $pastor = Pastor::findOrFail($id);
        $pastor->delete();
        $this->removeImage($pastor->pastorImage);
        return redirect('backend/pastors')->with('message', 'Pastor Deleted');
    }

    private function removeImage($image)
    {
        if (!empty($image)){
            $imagePath = $this->uploadPath . '/' . $image;

            if (file_exists($imagePath)) unlink($imagePath);
        }
    }
}
