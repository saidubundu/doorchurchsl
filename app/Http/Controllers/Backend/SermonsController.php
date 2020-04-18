<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\SermonRequest;
use App\Sermon;
use Illuminate\Http\Request;

class SermonsController extends BackendController
{
    protected $imageUploadPath;
    protected $audioUploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->imageUploadPath = public_path(config('cms.images.directory'));
        $this->audioUploadPath = public_path(config('cms.audio.directory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $onlyTrashed = FALSE;
        if (($status = $request->get("status")) && $status == 'trash') {
            $sermons = Sermon::onlyTrashed()->latest()->paginate(5);
            $onlyTrashed = TRUE;
        }
        elseif ($status == 'published') {
            $sermons = Sermon::published()->latest()->paginate(5);
        }
        elseif ($status == 'scheduled') {
            $sermons = Sermon::scheduled()->latest()->paginate(5);
        }
        elseif ($status == 'draft') {
            $sermons = Sermon::draft()->latest()->paginate(5);
        }
        elseif ($status == 'own') {
            $sermons = $request->user()->sermons()->latest()->paginate(5);
        }
        else {
            $sermons = Sermon::latest()->paginate(5);
        }
        $statusList = $this->statusList($request);

        return view('backend.sermons.index', compact('sermons','onlyTrashed','statusList'));
    }

    private function statusList($request){
        return [
            'own' => $request->user()->posts()->count(),
            'all' =>  Sermon::count(),
            'published' => Sermon::published()->count(),
            'scheduled' => Sermon::scheduled()->count(),
            'draft' => Sermon::draft()->count(),
            'trash' => Sermon::onlyTrashed()->count()
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Sermon $sermon)
    {
        //

        return view('backend.sermons.create', compact('sermon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SermonRequest $request)
    {
        //
        $data = $this->handleRequest($request);

        $request->user()->sermons()->create($data);

        return redirect('backend/sermons')->with('message', 'Your sermon was created successfully!');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $sermonImage       = $request->file('image');
            $imageFileName    = $sermonImage->getClientOriginalName();
            $imageDestination = $this->imageUploadPath;
            $sermonImage->move($imageDestination, $imageFileName);
            $data['image'] = $imageFileName;

        }

        if ($request->hasFile('audio')){
            $sermonAudio       = $request->file('audio');
            $audioFileName    = $sermonAudio->getClientOriginalName();
            $audioDestination = $this->audioUploadPath;
            $sermonAudio->move($audioDestination, $audioFileName);
            $data['audio'] = $audioFileName;

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
        $sermon = Sermon::findOrFail($id);
        return view('backend.sermons.edit', compact('sermon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SermonRequest $request, $id)
    {
        //
        $sermon = Sermon::findOrFail($id);
        $oldImage = $sermon->image;
        $oldAudio = $sermon->audio;
        $data = $this->handleRequest($request);
        $sermon->update($data);

        if ($oldImage !== $sermon->image){
            $this->removeImage($oldImage);
        }

        if ($oldAudio !== $sermon->audio){
            $this->removeAudio($oldAudio);
        }

        return redirect('backend/sermons')->with('message', 'Your sermon was successfully updated');
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
        Sermon::findOrFail($id)->delete();

        return redirect('backend/sermons');
    }

    private function removeImage($sermonImage)
    {
        if (!empty($sermonImage)){
            $imagePath = $this->imageUploadPath . '/' . $sermonImage;
        }

        if ( file_exists($imagePath)) unlink($imagePath);
    }

    private function removeAudio($sermonAudio){
        if (!empty($sermonAudio)){
            $audioPath = $this->audioUploadPath . '/' . $sermonAudio;
        }

        if (file_exists($audioPath)) unlink($audioPath);
    }

    public function restore($id)
    {
        $sermon = Sermon::withTrashed()->findOrFail($id);
        $sermon->restore();
        return redirect()->back();
    }

    public function forceDestroy($id)
    {
        $sermon = Sermon::withTrashed()->findOrFail($id);
        $sermon->forceDelete();
        $this->removeAudio($sermon->audio);
        $this->removeImage($sermon->image);
        return redirect('backend/sermons');
    }
}
