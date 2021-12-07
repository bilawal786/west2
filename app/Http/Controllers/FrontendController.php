<?php

namespace App\Http\Controllers;

use App\Content;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index(){
        $gs = Content::find(1);
        $gallery = Gallery::find(1);
        $response = Http::get('https://westindiescare.ikaedigital.com/api/products');
        $products = $response->json();
        return view('front.index', compact('products', 'gs', 'gallery'));
    }
    public function product($id){
        $response = Http::get('https://westindiescare.ikaedigital.com/api/product/'.$id);
        $product = $response->json();
        return view('front.product', compact('product'));
    }
    public function calender(){
        return view('front.calender');
    }
    public function addtocart(Request $request){
        $response = Http::get('https://westindiescare.ikaedigital.com/api/product/'.$request->product_id);
        $product = $response->json();
        \Cart::add($product['id'], $product['title'], $product['price'], $request->quantity);
        return redirect()->route('cartitems');
    }
    public function cartitems(){
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        $cartSubTotal = \Cart::getSubTotal();
        return view('front.cart', compact('cartitems', 'cartTotalQuantity', 'total', 'cartSubTotal'));
    }
    public function removecart(Request $request){
        \Cart::remove($request->id);
        return redirect()->back();
    }
    public function checkout(){
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        $user = Auth::user();
        if(isset($total)){
            \Stripe\Stripe::setApiKey (env('STRIPE_SECRET_KEY'));
            $payment_intent = \Stripe\PaymentIntent::create([
                'amount' => ($total) *100,
                'currency' => 'EUR'
            ]);
        }
        $intent = $payment_intent->client_secret;
        return view('front.checkout', compact('cartitems', 'cartTotalQuantity', 'total', 'user', 'intent'));

    }
    public function checkoutSubmit(Request $request){
        $user = Auth::user();
        $cartitems = \Cart::getContent();
        $cart = json_encode($cartitems);
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post('https://westindiescare.ikaedigital.com/api/websites/order', [
            'website' => 'Westindies Care Test Website 2',
            'user_id' => $user->user_id,
            'cfname' => $request->fname,
            'clname' => $request->lname,
            'cemail' => $request->email,
            'cphone' => $request->phone,
            'caddress' => $request->address,
            'notes' => $request->notes,
            'total' => $request->total,
            'postal' => '0000',
            'cartitems' => $cart,
        ]);
        $body = $response->body();
        $result  = json_decode($body);
        if($result->success == 'Success'){
            \Cart::clear();
            return view('front.paymentsuccess', compact('user'));
        }else {
            dd('Something wrong contact with administration');
        }

    }
}
