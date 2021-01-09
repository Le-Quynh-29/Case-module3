<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function updateCart(Request $request)
    {
        foreach ($request->cart as $id => $qty) {
            foreach (Cart::content() as $rowid => $cart_item) {
                if ($id == $cart_item->id) {
                    Cart::update($cart_item->rowId, $qty);
                    return redirect()->route('page.cart');
                }
            }
        }
    }
    public function index(){
        $cart = Cart::content();
        $count = Cart::count();
        $totalprice = Cart::total();

        $total = Cart::subtotal();
        return view('frontend.cart',compact('cart','count','totalprice','total'));
    }
    public function addToCart($id){
        $product = Product::findOrFail($id);
//        dd($product->voucher);
        $cartInfo=[
          'id'=>$id,
          'name'=>$product->productName,
            'price' => $product->price,
          'voucher'=>$product->price * (1 - ($product->voucher/100)),
          'qty'=>'1',
            'options' =>['img'=> $product->img]
        ];
        Cart::add($cartInfo);

        return redirect()->back();
    }

    public function removeProductIntoCart($id)
    {
        $cart = Cart::content();
        foreach ($cart as $value) {
            if ($value->id == $id)
                $rowId = $value->rowId;
        }
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function showCheckout(){
        $cart = Cart::content();
        $count = Cart::count();
        return view('frontend.checkout',compact('cart','count'));
    }


}
