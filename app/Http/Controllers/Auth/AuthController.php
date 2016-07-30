<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            
             // GPARISH ADDITION FIELDS
            'photo'                    => $data['photo'],
            'dat_of_birth'             => $data['dat_of_birth'],
            'nationality'              => $data['nationality'],
            'sex'                      => $data['sex'],
            'children'                 => $data['children'],
            'civil_status'             => $data['civil_status'],
            'phone'                    => $data['phone'],
            'province'                 => $data['province'],
            'district'                 => $data['district'],
            'sector'                   => $data['sector'],
            'POBOX'                    => $data['POBOX'],
            'prayer_family'            => $data['prayer_family'],
            'section'                  => $data['section'],
            'address'                  => $data['address'],
            'baptism_in_water'         => $data['baptism_in_water'],
            'baptism_in_water_date'    => $data['baptism_in_water_date'],
            'baptism_in_spirit'        => $data['baptism_in_spirit'],
            'commission_ministry'      => $data['commission_ministry'],
            'principal_occupation'     => $data['principal_occupation'],
            'trainings_attendend'      => $data['trainings_attendend'],
            'four_principal_words'     => $data['four_principal_words'],
            'affermissement'           => $data['affermissement'],
            'spiritual_laws'           => $data['spiritual_laws'],
            'other_trainings'          => $data['other_trainings'],
            'languages'                => $data['languages'],
            'primary_school'           => $data['primary_school'],
            'secondary_school'         => $data['secondary_school'],
            'university'               => $data['university'],
            'unable_to_read_and_write' => $data['unable_to_read_and_write'],
            'signature'                => $data['signature'],
        ]);
    }
}
