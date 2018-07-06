<?php

namespace Restaurant\Http\Controllers\Auth;

use Restaurant\User;
use Restaurant\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Restaurant\Notifications\UserRegisteredSuccessfully;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    
   
   protected function register(Request $request)
    {
       
        /** @var User $user */
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:30',
            'email'    => 'required|string|email|max:255|unique:mysql.users',
            'password' => 'required|string|min:6|confirmed'
            
        ]); 
        try { 
            $validatedData['password']        = bcrypt(array_get($validatedData, 'password'));
            $validatedData['activation_code'] = str_random(30).time();
            $user                             = User::create($validatedData);
            //$user                             = app(User::class)->create($validatedData);
            
        } catch (\Exception $exception) {
            logger()->error($exception);
            return redirect()->back()->with('message', 'No se puede crear nuevo usuario');
        }
      $user->notify(new UserRegisteredSuccessfully($user));
 
        return redirect()->back()->with('message',
               'Nueva cuenta exitosamente creada. Por favor verifique su email y active su cuenta.');
 
        }
    
    
    
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\V  alidation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Restaurant\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    
     
    public function activateUser(string $activationCode)
    {
    
    try {
            $user = app(User::class)->where('activation_code', $activationCode)->first();
            if (!$user) {
                return "El codigo no existe para ningun usuario en nuestro sistema.";
            }
            $user->status          = 1;//boolean
            $user->activation_code = null;//a null, ya luego no se usa, solo una vez se necesita
            $user->save();
            
            auth()->login($user);
            
        } catch (\Exception $exception) {
            logger()->error($exception);
            return "Whoops! algo anda mal.";
        }
        return redirect()->to('/home');
    }
}
