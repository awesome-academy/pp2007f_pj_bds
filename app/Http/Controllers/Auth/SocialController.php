<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;


class SocialController extends Controller
{
        /**
     * Chuyển hướng người dùng sang OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        if(!Session::has('pre_url')){
            Session::put('pre_url', URL::previous());
        }else{
            if(URL::previous() != URL::to('login')) Session::put('pre_url', URL::previous());
        }
        
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Lấy thông tin từ Provider, kiểm tra nếu người dùng đã tồn tại trong CSDL
     * thì đăng nhập, ngược lại nếu chưa thì tạo người dùng mới trong SCDL.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        
        $user = Socialite::driver('google')->stateless()->user();
        // dd($user);
        $authUser = $this->findOrCreateUser($user);
                
        if(!$authUser){

            return redirect('login')->with('error', 'Email does not exits!');

        } else {
            Auth::login($authUser, true);
            if (Auth::user()->inRole('admin'))
            {
                return redirect('/admin/index');
            }
            else
            {
                return redirect('/member/index');
            }
         }   
    }

        /**
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
            } else {
            return false;
        
          }	        
        // return User::create([
        //     'name'     => $user->name,
        //     'email'    => $user->email,
        //     'provider' => $provider,
        //     'provider_id' => $user->id
        // ]);
    }


    public function fbCallback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('/');
    }
    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
    
    protected $redirectTo = '';
   
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
   
    public function googleCallback()
    {
        try {
  
            $user = Socialite::driver('google')->user();
   
            $finduser = User::where('google_id', $user->id)->first();
   
            if($finduser){
   
                Auth::login($finduser);
  
                return redirect('/home');
   
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id
                ]);
  
                Auth::login($newUser);
   
                return redirect()->back();
            }
  
        } catch (Exception $e) {
            return redirect('/home');
        }
    }
}
