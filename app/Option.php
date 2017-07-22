<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'option_name', 'option_value',
    ];

    public function scopeVal($query, $option_name)
    {
        $value = collect($query->where('option_name', $option_name)->first());
        return $value['option_value'];
    }

    public static function keyChain(){
    	$options;
    	$option = Option::select('option_name', 'option_value')->get();
    	foreach ($option as $opt) {
    		$options[$opt['option_name']] = $opt['option_value'];
    	}

    	return $options;
    }


}
