<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post('https://westindiescare.ikaedigital.com/api/register', [
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'role' => 2,
            'password' => $data['password'],
            'website' => 'Westindies Care Test Website 2',
        ]);
        $body = $response->body();
        $result  = json_decode($body);
       if ($result->success == 'true'){
           $user = User::create([
               'fname' => $data['fname'],
               'lname' => $data['lname'],
               'email' => $data['email'],
               'user_id' => $result->id,
               'password' => Hash::make($data['password']),
           ]);
           return $user;
       }else{
           dd('Something wrong contact with administration');
       }

    }
}
