<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
	public function index() {

    return view('FrontEnd.test');
    }

    public function page1() {
    	return view('FrontEnd.eng');
    }
    public function page2() {
    	return view('FrontEnd.gem');
    }
    public function page3() {
    	return view('FrontEnd.rus');
    }
    public function page4() {
    	return view('FrontEnd.fran');
    }
    public function page5() {
    	return view('FrontEnd.ukr');
    }
     public function description() {
    	return view('FrontEnd.about');
    }


    public function redir() {
        $post = $_POST;
        $operation = $post['operation'];
        if($operation == "register") {
        return redirect()->action('RegisterController');
         
       if ($operation == "authorization") {
        return redirect()->action('LoginController');

    }
}

}
}