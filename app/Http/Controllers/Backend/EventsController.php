<?php

namespace App\Http\Controllers\Backend;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventsRequest;
use Illuminate\Http\Request;

class EventsController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('images/event');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::simplePaginate(5);
        return view('backend.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Event $event)
    {
        //
        return view('backend.events.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventsRequest $request)
    {
        //
        $data = $this->handleRequest($request);
        Event::create($data);
        return redirect('backend/events')->with('message', 'Even created');

    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('eventImage')){
            $image = $request->file('eventImage');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $image->move($destination, $fileName);
            $data['eventImage'] = $fileName;

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
        $event = Event::findOrFail($id);
        return view('backend.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventsRequest $request, $id)
    {
        //
        $event = Event::findOrFail($id);
        $oldImage = $event->eventImage;
        $data = $this->handleRequest($request);
        $event->update($data);

        if ($oldImage !== $event->eventImage){
            $this->removeImage($oldImage);
        }

        return redirect('backend/events')->with('message', 'Event updated');
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
        $event = Event::findOrFail($id);
        $event->delete();
        $this->removeImage($event->eventImage);

        return redirect('backend/events')->with('message', 'Event Deleted');
    }

    private function removeImage($image)
    {
        if (!empty($image)){
            $imagePath = $this->uploadPath . '/' . $image;

            if (file_exists($imagePath)) unlink($imagePath);
        }
    }
}
