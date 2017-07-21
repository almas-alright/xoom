<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Post;

class AdminPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
            'title' => 'required',            
            ]);
        
        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = str_slug($request->input('title'));
        $post->content = $request->input('content');        

        $post->save();

        return redirect('c-admin/post');
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
        $post = Post::find($id);
        return view('admin.post.edit', compact('post'));
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
        $this->validate($request,
            [
            'title' => 'required',            
            ]);
        
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = str_slug($request->input('title'));
        $post->content = $request->input('content');        

        $post->save();

        return redirect('c-admin/post');
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

    public function getAll()
    {
        $post = Post::orderBy('created_at', 'desc')->get();
        
         return Datatables::of($post)
         ->addIndexColumn()
         ->addColumn('operations','<a class="btn btn-xs btn-info" href="{{ route( \'post.edit\', [$id]) }}"><i class="fa fa-pencil-square-o"></i></a>
                    <a class="btn btn-xs btn-danger" href="{{ route( \'post.destroy\', [$id]) }}"><i class="fa fa-trash-o"></i></a>')
         ->rawColumns(['operations'])
         ->make(true);
    }
}
