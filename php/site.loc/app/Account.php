<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    $results = DB::select('SELECT * FROM project WHERE id = ?', [1]);
    	 var_dump($results);
}
