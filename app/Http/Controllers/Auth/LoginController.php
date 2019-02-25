<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        
      
        
        
  
        $authUser = User::where('email',$user->getEmail())->first();
        
  if($authUser)
  {
    Auth::login(User::find($authUser->id), true);
    $users=User::find($authUser->id);
    return redirect($this->redirectTo); 

  }else
  {
     
    
//print_r($user->user['gender']);



    // echo  $user->token ."<br>".$user->getId()."<br>".$user->getName()."<br>".$user->getEmail()."<br>"
        
    // ."<img src='".$user->getAvatar()."'/>"."<br>";


        $r=explode(" ",$user->getName());
        echo $r[0] . $r[count($r)-1];
        $usera=new User;
   $usera->name=$r[0];
   $usera->last_name=$r[count($r)-1];
   $usera->email=$user->getEmail();
   $usera->password=$user->token;
   $usera->email_verified_at=date('Y-m-d H:m:s');
   $usera->gender= $user->user['gender'];
        $usera->save();
    Auth::login($usera, true);
     
       return redirect($this->redirectTo); 
  }
        
 
      
    }

    
//    public function findOrCreateUser($providerUser, $provider)
//    {
//        $account = User::where('email',$provider)
//                   ->whereProviderId($providerUser->getId())
//                   ->first();

//        if ($account) {
//            return $account->user;
//        } else {
//            $user = User::whereEmail($providerUser->getEmail())->first();

        //    if (! $user) {
        //        $user = User::create([
        //            'email' => $providerUser->getEmail(),
        //            'name'  => $providerUser->getName(),
        //        ]);
        //    }

        //    $user->identities()->create([
        //        'provider_id'   => $providerUser->getId(),
        //        'provider_name' => $provider,
        //    ]);

    //        return $user;
    //    }
   
}
