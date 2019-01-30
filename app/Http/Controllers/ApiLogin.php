<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLogin extends Controller
{
    public function login(Request $request){
        // validate the info, create rules for the inputs
        $request->validate([
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3', // password can only be alphanumeric and has to be greater than 3 characters
        ]);

        // create our user data for the authentication
        $userdata = array(
            'email'     => $request->email,
            'password'  =>  $request->password
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            $token = Auth::user()->id;
            return response()->json($token, 200);;

        } else {

            // validation not successful, send back to form
            return response()->json('Ya esta logueado', 422);

        }

    }

}
