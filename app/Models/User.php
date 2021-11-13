<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 class User extends Model{
    use SoftDeletes; //Sd phuong thuc xoa mem
    /**
     * Ten bang, neu khong co thuoc tinh nay
     * Eloquent se lay ten theo ten cua Model o dang so nhieu
     * 
     * @var string
     */
    public $table = 'users';

    /**
     * sd cac thuoc tinh created_at va update_at bang
     * @var boolean
     */
   public $timestamps = true;
   public $errors=[];
    /**
     * 
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password'
    ];
    /**
     * @param array $data
     * @param \App\Models\User|boolean|mixed
     */
    public function validate($data = []){
        //validate username
        $pattern = '/^[a-zA-Z0-9_]{6,20}$/';
        if (!preg_match($pattern, $data['username'])) {
            $this->errors['username'] = "Only letters, numbers, underscore and at least 6 characters long allowed!";
        }
        //validate email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Invalid email format";
        }
    
        $pattern = '/^(?=.*\d)(?=.*[.*@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z.*@#\-_$%^&+=§!\?]{8,20}$/';
        if (!preg_match($pattern, $data['password'])) {
            $this->errors['password'] = "Password must contains at least one capitalize letter, number and special character.";
        }
        
         if ($data['confirm_password'] != $data['password']) {
            $this->errors['confirm_password'] = "Password does not match";
        }
        //validate username exist
        $user = User::where(['username'=>$data['username']])->first();
        if($user){
            $this->errors['username']="This username is already taken. Please choose another one";
        }
        if(count($this->errors)){
            return false;
        }
        return true;
        
    }
 }