<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
   public function index($status){
       $response = Http::get('https://westindiescare.ikaedigital.com/api/website/orders/'.$status.'/Westindies Care Test Website 2');
       $data = $response->body();
       $orders = json_decode($data);
       return view('admin.order.index', compact('orders'));
   }
   public function view($id){
       $response = Http::get('https://westindiescare.ikaedigital.com/api/order/details/'.$id);
       $data = $response->body();
       $order = json_decode($data);
       return view('admin.order.view', compact('order'));
   }
   public function status($id){
       $response = Http::get('https://westindiescare.ikaedigital.com/api/order/status/'.$id);
       $data = $response->body();
       $order = json_decode($data);
       $notification = array(
           'messege' => 'Ajouté avec succès!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
}
