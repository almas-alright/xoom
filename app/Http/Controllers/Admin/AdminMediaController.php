<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Requests\UploadRequest;

class AdminMediaController extends Controller
{
    public function __construct(){

    }

    public function index(){
    	return view('admin.media.new');
    }

    public function store(Request $request){

    	//var_dump($request->all());
    	// $request->file('m_files');
    	// return $request->m_files->store('public/media');
    	$size = count($request->file('m_files'));
    	foreach ($request->file('m_files') as $mfile) {
    		$name = $mfile->getClientOriginalName();
            $mfile->storeAs('public/media', $name);
        }

    }
}
