<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function postLogin() {

        $post = $_POST;
        $username = trim($post['username']);
        $password = $post['password'];
        $errors = array();

        if ($username == '') {
        $errors[] = 'Enter login';
    }
        if ($password == '') {
        $errors[] = 'Enter password';
    }
     
        function is_username_in_file($username) {
        $str = file_get_contents('data.txt');
        $from_file = explode(PHP_EOL, $str);
        foreach ($from_file as $val) {
            $item = explode(";", $val);
            if ($username == $item[0]) {
                return $item;
            }
        }
        return false;
    }
          if (empty($errors)) {
            $str = is_username_in_file($username);
            if (empty($str)) {
                echo '<div style="color: red;">'."This user is not exist".'</div><hr>';
            } else {
                
               if (password_verify($password, $str[1])){ 
                    $_SESSION['logged_user'] = $username;
                    echo '<div style="color: green;">Authorization succes</div><hr>';
                } else {
                    echo '<div style="color: red;">'."Uncorrect password!".'</div><hr>';
                }
            }
        } else {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
    }


   
    public function getLogout(Request $request) {
        Auth::logout();
        return redirect('/');

    }
}
