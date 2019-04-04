<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Image.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:12:06am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Image extends Model
{
	
	
    protected $table = 'images';

	
	public function net()
	{
		return $this->belongsTo('App\Net','net_id');
	}

   

	
}
