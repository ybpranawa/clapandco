<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function getcatalog(Request $request){
        $username=$request->session()->get('username');
        $query=DB::select('select * from product_cat where user_id="'.$username.'" ');
        /*if($query==NULL){
            echo "NULL";
        }
        else{
            echo "ISI";
        }*/
        return view('personal/catalog',['query'=>$query]);
    }
}
