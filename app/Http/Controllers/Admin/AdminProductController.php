<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Training;
use Carbon\Carbon;

class AdminProductController extends Controller
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
        return view('admin.training.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.training.new');
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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            ]);

        $sa = Carbon::createFromFormat('m-d-Y',$request->input('start_at'))->toDateString();
        $ea = Carbon::createFromFormat('m-d-Y',$request->input('end_at'))->toDateString();
        $training = new Training;
        $training->slug = str_slug($request->input('name'));
        $training->name = $request->input('name');
        $training->description = $request->input('description');
        $training->price = $request->input('price');
        $training->start_at = $sa;
        $training->end_at = $ea;

        $training->save();

        return redirect('c-admin/training');

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
        $training = Training::find($id);
        $training->start_at = Carbon::createFromFormat('Y-m-d', $training->start_at)->format('m-d-Y');
        $training->end_at = Carbon::createFromFormat('Y-m-d', $training->end_at)->format('m-d-Y');
        return view('admin.training.edit', compact('training'));
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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            ]);

        $sa = Carbon::createFromFormat('m-d-Y',$request->input('start_at'))->toDateString();
        $ea = Carbon::createFromFormat('m-d-Y',$request->input('end_at'))->toDateString();
        $training = Training::find($id);
        $training->slug = str_slug($request->input('name'));
        $training->name = $request->input('name');
        $training->description = $request->input('description');
        $training->price = $request->input('price');
        $training->start_at = $sa;
        $training->end_at = $ea;

        $training->save();

        return redirect('c-admin/training');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }

    public function getAll()
    {
        $trainings = Training::all();
        
         return Datatables::of($trainings)
         ->removeColumn('description')
         ->addIndexColumn()
         ->editColumn('price','$ {{ $price }}')
         ->addColumn('operations','<a class="btn btn-xs btn-info" href="{{ route( \'training.edit\', [$id]) }}"><i class="fa fa-pencil-square-o"></i></a>
                    <a class="btn btn-xs btn-danger" href="{{ route( \'training.destroy\', [$id]) }}"><i class="fa fa-trash-o"></i></a>')
         ->rawColumns(['operations'])
         ->make(true);
    }
}
