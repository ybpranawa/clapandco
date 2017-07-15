<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function home(Request $request){
        $username=$request->session()->get('username');
        $newproduct=DB::select('SELECT * FROM product_cat ORDER BY product_added DESC LIMIT 8');
        return view('homepage',['query'=>$newproduct]);
    }
}
