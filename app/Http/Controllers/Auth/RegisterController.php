<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $messages = [
            'name.required' => 'El Nombre es Requerido',     
            'name.max' => 'El Nombre debe contener maximo 66 caracteres',
            'email.required' => 'El Email es Requerido',     
            'email.unique' => 'El correo ya esta registrado',     
            'password.required' => 'La Contraseña es Requerida',
            'password.min' => 'Como Mínimo 6 caracteres',
            'password.confirmed' => 'Las contraseñas deben ser iguales',

        ];
        return Validator::make($data,[
            'name' => 'required | string  | max:66',
            'email' => 'required | email| unique:users',
            'password' => 'required | string | min:6 | max:64 | confirmed',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save(); 
        $user->assignRole('usuario');
        return $user;

    }
}
