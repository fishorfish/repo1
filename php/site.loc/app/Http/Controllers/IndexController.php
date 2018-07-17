<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
class IndexController extends Controller
{
	public function index() {

		// $user = User::all();
		// $user = User::select(['id'])->get();
		// dump($user);
		$user = DB::connection('project')->select("SELECT * FROM User");
		dump($user);
		DB::insert("INSERT INTO `User` (`username`) VALUES (?)", [Irina]);
	
	}


 
}
