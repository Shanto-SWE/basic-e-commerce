<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use\App\Models\productModel;
Use\App\Models\cartModel;
Use\App\Models\orderModel;
use Session;
use Illuminate\Support\Facades\DB;


class productController extends Controller
{
    function index(){

        $data=productModel::all();

        return view('product',['product'=>$data]);
    }
    function details($id){
        $data=productModel::find($id);
        return view('details',['product'=>$data]);


    }
    function addToCart(Request $req){
        if($req->session()->has('user'))
        {
          
            $cart= new cartModel;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
          $cart->save();
         
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return cartModel::where('user_id',$userId)->count();
    }

    function cartList()
    {
        $userId=Session::get('user')['id'];
       $product= DB::table('cart')
        ->join('product','cart.product_id','=','product.id')
        ->where('cart.user_id',$userId)
        ->select('product.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['product'=>$product]);
    }

    function removeCart($id){
        cartModel::destroy($id);
        return redirect('/cartlist');


    }
    function orderNow(){

        $userId=Session::get('user')['id'];
        $total= $product= DB::table('cart')
         ->join('product','cart.product_id','=','product.id')
         ->where('cart.user_id',$userId)
         ->sum('product.price');

         return view('ordernow',['total'=>$total]);
   
    }
    function orderPlace(Request $req){
        $userId=Session::get('user')['id'];
        $username=Session::get('user')['name'];
        $allCart= cartModel::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new orderModel;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->user_name=$username;
            $order->address=$req->address;
            $order->phone=$req->phone;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->save();
            cartModel::where('user_id',$userId)->delete(); 
        }
        $req->input();
        return redirect('/');


    }
    function myOrders(){
        $userId=Session::get('user')['id'];
         $orders= DB::table('orders')
         ->join('product','orders.product_id','=','product.id')
         ->where('orders.user_id',$userId)
         ->select('*','orders.id as order_id')
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }
    function removeorder($id){
        orderModel::destroy($id);
        return redirect('/myorders');
    }
}
