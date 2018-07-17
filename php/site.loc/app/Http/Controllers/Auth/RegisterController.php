<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
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
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function postRegister() {
        $post = $_POST;
        $username = trim($post['username']);
        $password = $post['password'];
        $password2 = $post['password_confirmation'];
        $errors = array();

        if ($username == '') {
        $errors[] = 'Enter login';
    }
        if ($password == '') {
        $errors[] = 'Enter password';
    }
        if($password != $password2) {
            $errors[] = 'Passwords do not match';
    }

        
        $data = file_get_contents('data.txt');
        if (preg_match('/login='."$username".'/', $data)) {
            $errors[] = 'This login is already taken';
        }
        if (empty($errors)) {
            $hash_pass = password_hash($password, PASSWORD_DEFAULT);
            $pair = $username.";".$hash_pass.PHP_EOL;
            file_put_contents('data.txt', "$pair", FILE_APPEND);
            echo '<div style="color: green;">Registration succes</div><hr>';
        } else if(!empty($errors)) {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        } else {
            echo '<div style="color: red;">'."Operation not supported".'</div><hr>';
        }
}
}