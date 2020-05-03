<?php

namespace App\Http\Controllers;

use App\Bible;
use App\Event;
use App\Photo;
use App\Post;
use App\Sermon;
use App\Stream;
use App\Testimony;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $time = "2020-4-5 05:06:01";
//        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->shortMonthName;
//        dd($year);
        $bibles = Bible::latest()->paginate(4);
        $events = Event::latest()->paginate(4);
        $sermons = Sermon::latest()->paginate(4);
        $photos = Photo::latest()->paginate(8);
        $posts = Post::published()->latest()->paginate(4);
        $galleries = Photo::take(8)->get();
        $testimonies = Testimony::take(3)->get();
        return view('frontend.index', compact('events','bibles', 'sermons','photos','posts','galleries', 'testimonies'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function search()
    {
        return view('frontend.search');
    }

    public function online()
    {
        $streams = Stream::latest()->take(4)->get();
        $newStream = $streams->shift();
        return view('frontend.online', compact('streams', 'newStream'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
