<?php
 
namespace Modules\Website\Http\Controllers;

use Modules\Website\Cart;
use Modules\Website\CartItem;
use Illuminate\Support\Facades\Auth;
 
 
use Illuminate\Http\Request;
use View;
use  Response;
use Html;
use Modules\Website\Http\Requests;
use Modules\Website\Http\Controllers\Controller;
 
class CartController extends Controller
{
 
    public function __construct()
    {
       // $this->middleware('auth');
    }
 
    public function addItem ($productId){
 
        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
 
        $cartItem  = new Cartitem();
        $cartItem->product_id=$productId;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();
 
        return redirect('/cart');
 
    }
 
    public function showCart(){
        $cart = Cart::where('user_id',1)->first();
  
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id= 1; //Auth::user()->id;
            $cart->save();
        }
 
        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            $total+=$item->product->price;
        } 

	  return view('ecart.index',compact('items','total'));


    }
 
    public function removeItem($id){
 
        CartItem::destroy($id);
        return redirect('/cart');
    }
 
}