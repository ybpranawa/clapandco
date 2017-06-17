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
        return view('personal/catalog',['query'=>$query]);
    }
    
    public function removeproduct(Request $request){
        $product_id=$request->input('product_id');
        DB::delete('delete from product_cat where product_id="'.$product_id.'" ');
        return redirect()->action('ProductController@getcatalog');
    }
    
    public function addproduct(Request $request){
        $username=$request->session()->get('username');
        $query=DB::select('select type_id, type_name from type_prod');
        return view('personal/addproduct',['query'=>$query]);
    }
    
    public function orderlist(Request $request){
        $username=$request->session()->get('username');
        $query=DB::select('select * from transaction where seller_id="'.$username.'" ');
        return view('personal/orderlist',['query'=>$query]);
    }
    
    public function doupload(Request $request){
        $username=$request->session()->get('username');
        $prodid='product'.$username.date('Y').date('m').date('d').date('H').date('i').date('s');
        $prodname=$request->input('product_name');
        $proddesc=$request->input('product_desc');
        $prodstock=$request->input('product_stock');
        $prodtime=$request->input('product_timedev');
        $prodtype=$request->input('product_type');
        $prodprice=$request->input('product_price');
        if($prodstock>0)
            $prodstat='prodstat1';
        
        $req=$request->file('product_pict');
        if (!empty($req)){
            $counter=0;
            foreach ($req as $image){
                $extension[$counter]=$image->getClientOriginalExtension();
                $image->move('product_pict/'.$username,'product_pict'.$counter.'_'.$prodname.'.'.$extension[$counter]);
                $imglocation[]='product_pict'.$counter.'_'.$prodname.'.'.$extension[$counter];
                $counter++;
            }
        }
    }
}
