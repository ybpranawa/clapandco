<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AccountController extends Controller
{
    public function register(Request $request){
        $uname=$request->input('Username');
        $passwd=$request->input('Password');
        $email=$request->input('Email');
        $now=date('Y-m-d');
        $date = Carbon::createFromFormat('Y-m-d', $now);
        DB::insert('insert into login_user (user_id, user_passwd, login_time) values("'.$uname.'","'.md5($passwd).'", "'.$date.'")');
        DB::insert('insert into user_profile (user_id, user_email) values("'.$uname.'","'.$email.'")');
        echo "sukses";
    }
    
    public function login(Request $request){
        $uname=$request->input('Username');
        $passwd=$request->input('Password');
        $query=DB::select('select 1 from login_user where user_id="'.$uname.'" and user_passwd="'.md5($passwd).'" ');
        if($query!=NULL){
            $ipaddr=$request->ip();
            $now=date('Y-m-d H:i:s');
            DB::update('update login_user set login_ip="'.$ipaddr.'", login_time="'.$now.'"');
            $request->session()->put('username',$uname);
            echo  $request->session()->get('username');
            echo "berhasil";
        }
        else{
            echo "salah";
        }
    }
}
