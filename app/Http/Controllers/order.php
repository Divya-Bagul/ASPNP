<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\User;

use App\Models\order_detail;
use App\Models\contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use Auth;

use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\email_log;
use RealRashid\SweetAlert\Facades\Alert;


class order extends Controller
{
    //
    function set_order(Request $req){

      

        $products = product::where("product_id",'=',1)->get();
        
        $data1=[];
        $userEmail;
        $nameofProduct=[];
      
        $date = date('Y-m-d H:i'); 
        $order = new orders;
        $order->user_id = $req->user;
        $order->paymentType = $req->paymentType;
        $order->paidAmount = $req->paidAmount;
        $order->AfterPaidAmount = $req->AfterPaidAmount;
        $order->Total = $req->Total;
        $order->time  = $date;
        $order->save();


        

    //order detail
        $orderdata = DB::table('orders')->orderBy('order_id','desc')->first();
        $id =$orderdata->order_id;

       
            foreach($req->product as $data ) {  
                $orderDetail = new order_detail;
                $orderDetail->user_id = $req->user;
                $orderDetail->orders_id =$id;
                $orderDetail->products_id = $data;
                
                foreach($products as $product){
                    $productId = $product->product_id;
                    if($data == $productId){
                                $orderDetail->p_qty =$req->qty1;
                                $orderDetail->priceTotal =$req->product1Total;

                            }else{
                                $orderDetail->p_qty =$req->qty2;
                                $orderDetail->priceTotal =$req->product2Total;
                            
                            }
                }
                 $orderDetail->save();
                
            }
        //for mail
        $productname = [];
        $userData = DB::table('users')->where('id',$req->user)->select('name','email')->get();
        $products = DB::table('order_detail')
        ->join('products' ,'order_detail.products_id',"=","products.product_id")
        ->where('orders_id',$id)->get();
        foreach($products as $productName ){
           
            $productname[] = $productName->product_name;
        }
        foreach($userData as $dataname ){

         $data1 = array(
             'name'      => $dataname->name,
             'product' => implode(',',$productname),
             'qty1' =>$req->qty1,
             'qty2'=>$req->qty2,
             'paymentType'=>$req->paymentType,
             'total'=>$req->Total,
             'paidAmount'=>$req->paidAmount,
             'AfterPaidAmount'=>$req->AfterPaidAmount,
             
          );
          $userEmail = $dataname->email;

        }
        Mail::to($userEmail)->send(new SendMail($data1));
   
     Alert::success('Success', 'Your Form Successfully Submitted');
        return back();
     //return back()->with('Success',"Your Data Successfully");
    }
    
function get_product(){
    $products = product::all();
    $users = user::all();
    
    
    return view('userform',compact('products','users'));
}
function get_form(){
    $product = product::all();
    $order = orders::paginate(4);
    $order_detail = order_detail::all();
    $user = user::all();

    // $products = DB::table('order_detail')
    //     ->join('products','order_detail.product_id',"=","products.product_id")
    //     ->join('orders','order_detail.order_id',"=","orders.order_id")->get();

    //     return $products;
    return view('showForm',compact('product','order','order_detail','user'));

}
function form($order_id){
    $products = DB::table('order_detail')
        ->join('products','order_detail.products_id',"=","products.product_id")
        ->join('users','order_detail.user_id',"=","users.id")
        ->join('orders','order_detail.orders_id',"=","orders.order_id")->where('order_id',$order_id)->get();
   // dd($products);
   $productData = DB::table('order_detail')
   ->join('products','order_detail.products_id',"=","products.product_id")->where('orders_id',$order_id)->get();
   //dd($product);   
   //dd($productData);  
   return view('display_form',compact('products', 'productData'));
}


function getdata($search){
    print_r($search);
    $order = orders::where('order_id',$req)->get();
    return $order;


}

function contact(Request $req){



    $contactdata = new contact;
    $contactdata->name  = $req->name;
    $contactdata->email  = $req->email;

    $contactdata->subject  = $req->subject;

    $contactdata->message  = $req->message;
    $contactdata->save();
    Alert::success('Success', 'Thank you for your Message.');
    
    return back();


}


}
