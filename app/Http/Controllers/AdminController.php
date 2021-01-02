<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\support\facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class AdminController extends Controller
{
    public function index(){
    	return view('admin');
    }
    public function dashboard(Request $request){
    	$email = $request->email;
    	$password = $request->password;
    	$result = DB::table('admin') 
    	->where('email', $email)
    	->where('password', $password)
    	->first();
    if($result){
    	return Redirect::to('dashboard');
    }	
    else {
    	return Redirect::to('/admin');
    }
    }
}
