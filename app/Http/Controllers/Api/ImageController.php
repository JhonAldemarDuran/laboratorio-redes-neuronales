<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Net;
use Pusher\Laravel\Facades\Pusher;

/**
 * Class ImageController.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:13:23am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ImageController extends Controller
{
    
    public function store(Request $request, Net $net){
       
        $this->_validate($request,$net->id);  
          
        foreach($request->image as $image)
        {
            
            $this->_saveImage($image,$net->id);
        };
        $net->completed = true;
        $net->save();

        return response()->json(['success' => 'ok', 200]);
    }

    public function _validate($request, $net){
        $request->validate([
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg',
        ]);
    }
    
    public function _saveImage($image,$net){       

        $input['imagename'] = $image->getClientOriginalName();
        $destinationPath = public_path('/images/reports');
        $image->move($destinationPath, $input['imagename']);
        $img = new Image;
        $img->timestamps = false;
        $img->url_name = $input['imagename'];
        $img->net_id = $net;
        $img->save();
        return ;
    }
}
