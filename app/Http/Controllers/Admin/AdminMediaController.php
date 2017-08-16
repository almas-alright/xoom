<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Requests\UploadRequest;
use App\Media;
use App\Mail\Welcome;
class AdminMediaController extends Controller
{
    public function __construct(){

    }

    public function index(){
<<<<<<< HEAD
        \Mail::to('kutsnalmas@gmail.com')->send(new Welcome);
=======
        \Mail::to('milon@defttechltd.com','nazmul@defttechltd.com', 'shamol@defttechltd.com', 'kutsnalmas@gmail.com')->send(new Welcome);
>>>>>>> b38bfccec1db7edad2bf9a4d241372839277870b
    	return view('admin.media.new');


    }

    public function store(Request $request){
    	$index = date('Y-M');    	
    	$size = count($request->file('m_files'));
    	foreach ($request->file('m_files') as $mfile) {
    		$name = $mfile->getClientOriginalName();
    		$type = $this->getType($mfile);
    		$path = 'public/media/'.$index;
    		$media = new Media;
    		$media->name = $name;
    		$media->path = $path;
    		$media->type = $type;
    		$media->save();
            $mfile->storeAs($path, $name);
        }

    }

    private function getType($media){    	
    	// $ext = $media->getClientOriginalExtension();    	
    	$ext = $media->getMimeType();
    	$type = explode('/', trim($ext));
    	return $type[0];  	
    }
}
