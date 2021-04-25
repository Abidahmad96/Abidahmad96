<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Contact extends Controller
{
    //
     function listing(){
    	$data['result']= DB::table('contacts')->get();
    	return view('admin.contact.list',$data);
    }

}
