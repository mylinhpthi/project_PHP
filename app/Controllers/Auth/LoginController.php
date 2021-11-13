<?php
namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\User;
use App\Traits\UserAuthenticateTrait;

class LoginController extends BaseController{

    use UserAuthenticateTrait;

    public function showLoginForm(){
        //neu da login redirect sang home
        
        if (!check_login()){
            $encryptedCredentials = $_COOKIE['credentials'] ?? null;
            if ($encryptedCredentials){
                $decryptedCredentials = decrypt($encryptedCredentials, ENCRYPTION_KEY);
        
                $credentials = unserialize($decryptedCredentials);
                $user = $this->authenticate($credentials);
                echo "<pre>";
                echo var_dump($user);
                if ($user) {
                    $_SESSION['user'] = serialize($user);
                }
            }
            
        }
        if(check_login() == true) {
            redirect("/home");
        }
        $error = [];
        return $this->render('auth/login');
    }
    public function login(){
        $credentials = $this->getCredentials();
        $user = $this->authenticate($credentials);
       if ($user){
            $user->password = null; //remove password
            $_SESSION['user'] = serialize($user);
            echo $user;
            if (isset($_POST['remember_me'])){
                // chuyen mang sang chuoi de ma hoa
                $str = serialize($credentials);
                // ham ma hoa chuoi dc dinh nghia trong helpers
                $encrypted = encrypt($str, ENCRYPTION_KEY);
                //setcookie het han 10/12/2021 23.59.59
                setcookie('credentials', $encrypted, mktime(23, 59, 59, 12, 10, 2021));
            }

            redirect('/home');
        }
        $errors[] = "Username or password is invalid!";
        //neu login sai show form login va hien thi loi
        return $this->render('auth/login', ['errors' => $errors]);
    }

    public function logout(){
        $this->signout();
        redirect('/home');
    }

    public function getCredentials(){
        return [
            'username' => $_POST['username'] ?? null,
            'password' => $_POST['password'] ?? null
        ];
    }
}