<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;

class BackController extends Controller
{
    public function index() {
    	 $results = DB::select('select * from Users where id = ?', [1]);
    	 var_dump($results);
    }
    // public function account() {
    // 	return redirect()->route('/account', 'AccountController@checkUser');
    // }
}
