<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use App\PasswordSet;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Notifications\SetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Session;
use Illuminate\Foundation\Auth\ResetsPasswords;

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

    //use RegistersUsers;
    use ResetsPasswords;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo ='/admin';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
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
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
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
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
        ]);

        return PasswordSet::create([
            'email' => $data['email'],
        ]);
    }


    //-----------RegisterUsers----------------//
    public function showRegistrationForm()
        {
            return view('auth.register');
        }

        /**
         * Handle a registration request for the application.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function register(Request $request)
        {
            $this->validator($request->all())->validate();


            event(new Registered($user = $this->create($request->all())));

            Session::flash('message', 'Succesvol een account aangemaakt');

            return $this->registered($request, $user)
                            ?: redirect("/admin");
        }

        /**
         * Get the guard to be used during registration.
         *
         * @return \Illuminate\Contracts\Auth\StatefulGuard
         */
        protected function guard()
        {
            return Auth::guard();
        }

        /**
         * The user has been registered.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  mixed  $user
         * @return mixed
         */
        protected function registered(Request $request, $user)
        {
            //stuurt mail
            // $user->notify(new SetPassword());

        }
}
