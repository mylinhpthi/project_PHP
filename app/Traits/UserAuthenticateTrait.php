<?php
namespace App\Traits;
use App\Models\User;
trait UserAuthenticateTrait{
    public function authenticate($credentials){
        /**
         * Kiem tra thong tin user\
         * so khop voi password hash
         * @param array $credentials
         * @return \App\Models\User|mixed|null
         */
        
        $user = User::where(['username'=>$credentials['username']])->first();
        
        if($user){
            if(password_check($credentials['password'], $user->password)){
           
                return $user;
            }
            return null;
        }
        return null;
    }
    public function signout(){
        unset($_SESSION['user']);
        if(isset($_COOKIE['credentials'])){
            setcookie('credentials', null, time()-3600);
        }
    }
}