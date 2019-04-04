<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Net.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:08:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Net extends Model
{
	
	
    protected $table = 'nets';
    protected $guarded = [];

	
	public function plant()
	{
		return $this->belongsTo('App\Plant','plant_id');
	}


    public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}
    
    /**
     * Get the nets for the Plant.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

	
}
