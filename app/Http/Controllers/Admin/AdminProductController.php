<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\product;
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
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // var_dump($request->all());
        // exit();
        $this->validate($request,
            [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',            
            ]);

        $product = new product;
        $product->slug = str_slug($request->input('name'));
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');     

        $product->save();
         return $product->id;

        //return redirect('c-admin/product');

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
        $product = product::find($id);
        $product->start_at = Carbon::createFromFormat('Y-m-d', $product->start_at)->format('m-d-Y');
        $product->end_at = Carbon::createFromFormat('Y-m-d', $product->end_at)->format('m-d-Y');
        return view('admin.product.edit', compact('product'));
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
        $product = product::find($id);
        $product->slug = str_slug($request->input('name'));
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->start_at = $sa;
        $product->end_at = $ea;

        $product->save();

        return redirect('c-admin/product');
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
        $products = product::all();
        
         return Datatables::of($products)
         ->removeColumn('description')
         ->addIndexColumn()
         ->editColumn('price','$ {{ $price }}')
         ->addColumn('operations','<a class="btn btn-xs btn-info" href="{{ route( \'product.edit\', [$id]) }}"><i class="fa fa-pencil-square-o"></i></a>
                    <a class="btn btn-xs btn-danger" href="{{ route( \'product.destroy\', [$id]) }}"><i class="fa fa-trash-o"></i></a>')
         ->rawColumns(['operations'])
         ->make(true);
    }
}
