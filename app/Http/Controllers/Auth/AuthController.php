<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;

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
    protected $redirectPath = '/';
    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
       // $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    //}

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
        ]);
    }

    public function redirectToFacebook()
{
    return Socialite::with('facebook')->redirect();
}

public function getFacebookCallback()
{

    $data = Socialite::with('facebook')->user();
    $user = User::where('email', $data->email)->first();

    if(!is_null($user)) {
        Auth::login($user);
        $user->name = $data->user['name'];
        $user->facebook_id = $data->id;
        $user->save();
    } else {
        $user = User::where('facebook_id', $data->id)->first();
        if(is_null($user)){
            // Create a new user
            $user = new User();
            $user->name = $data->user['name'];
            $user->email = $data->email;
            $user->facebook_id = $data->id;
            $user->save();
        }

        Auth::login($user);
        
    }
    
    return redirect('/');
    //return redirect('/')->with('success', 'Successfully logged in!');

}

 public function getownstory(){

     $user=User::where('id',Auth::user()->id)->firstOrFail();
     

return view('ownstory',compact('user'));
    }






}
