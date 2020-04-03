<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('images/blog');
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
            $posts = Post::onlyTrashed()->latest()->paginate(5);
            $onlyTrashed = TRUE;
        }
        elseif ($status == 'published') {
            $posts = Post::published()->latest()->paginate(5);
        }
        elseif ($status == 'scheduled') {
            $posts = Post::scheduled()->latest()->paginate(5);
        }
        elseif ($status == 'draft') {
            $posts = Post::draft()->latest()->paginate(5);
        }
        elseif ($status == 'own') {
            $posts = $request->user()->sermons()->latest()->paginate(5);
        }
        else {
            $posts = Post::latest()->paginate(5);
        }
        $statusList = $this->statusList($request);

        return view('backend.posts.index', compact('posts', 'onlyTrashed', 'statusList'));
    }

    private function statusList($request)
    {
        return [
            'own' => $request->user()->posts()->count(),
            'all' => Post::count(),
            'published' => Post::published()->count(),
            'scheduled' => Post::scheduled()->count(),
            'draft' => Post::draft()->count(),
            'trash' => Post::onlyTrashed()->count(),
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        //
        return view('backend.posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $data = $this->handleRequest($request);

        $request->user()->posts()->create($data);

        return redirect('/backend/posts')->with('message', 'Your post was created successfully!');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $image       = $request->file('image');
            $fileName    = $image->getClientOriginalName();
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
        $post = Post::findOrFail($id);
        return view('backend.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        //
        $post = Post::findOrFail($id);
        $oldImage = $post->image;
        $data = $this->handleRequest($request);
        $post->update($data);
        if ($oldImage !== $post->image){
            $this->removeImage($oldImage);
        }

        return redirect('backend/posts')->with('messages', 'Your post was updated successfully');
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
        Post::findOrFail($id)->delete();
        return redirect('backend/posts')->with('message', 'Your post was move to the trash');
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();
        return redirect('backend/posts')->with('message', 'Your post was successfully restored');
    }

    public function forceDestroy($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->forceDelete();
        $this->removeImage($post->image);
        return redirect('backend/posts')->with('message', 'Post successfully deleted from database');
    }

    private function removeImage($image)
    {
        if (!empty($image)){
            $imagePath = $this->uploadPath . '/' . $image;

            if (file_exists($imagePath)) unlink($imagePath);
        }
    }
}
