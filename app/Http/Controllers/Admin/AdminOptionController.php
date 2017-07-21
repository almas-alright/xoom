<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Option;
use Illuminate\Http\Request;

class AdminOptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

        $this->setOption('url_facebook', 'http://facebook.com/');
        $this->setOption('url_twitter', 'http://twitter.com/');
        $this->setOption('url_gplus', 'http://plus.google.com/');
        $this->setOption('url_linkedin', 'http://linkedin.com/');
    }

    public function socialLinks()
    {
        $social['facebook'] = Option::val('url_facebook');
        $social['twitter']  = Option::val('url_twitter');
        $social['gplus']    = Option::val('url_gplus');
        $social['linkedin'] = Option::val('url_linkedin');
        return view('admin.option.index', compact('social'));
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');        
        foreach($input as $key => $val){
            $option = Option::firstOrNew(array('option_name' => $key));
            $option->option_value = $val;
            $option->save();
        }
        return redirect('c-admin/social-links');
    }

    protected function setOption($option_name, $option_value){
    	$r = 'c';
    	if (Option::where('option_name', '=', $option_name)->count() > 0) {
   			
		} else {
			Option::firstOrCreate(['option_name'=> $option_name, 'option_value' => $option_value]);
		}		

    }

}
