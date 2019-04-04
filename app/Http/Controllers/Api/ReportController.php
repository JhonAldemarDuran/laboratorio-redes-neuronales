<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Net;



/**
 * Class ReportController.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:12:06am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $nets = Net::all()->where('completed', false)->first();

        if ($nets == ''){
            $nets=[];
        }
        return $nets;
    }   
}
