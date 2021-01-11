<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function updateCart(Request $request)
    {
        foreach ($request->cart as $id => $qty) {
            foreach (Cart::content() as $rowid => $cart_item) {
                if ($id == $cart_item->id) {
                    Cart::update($cart_item->rowId, $qty);
                }
            }
        }
        return redirect()->route('page.cart');
    }
    public function index(){
        // Dat discount cho tung san pham o cart.
        foreach (Cart::content() as $cart_item){
            Cart::setDiscount($cart_item->rowId, $cart_item->options->discount);
        }
        $cart = Cart::content();
        $count = Cart::count();
//        $totalprice = Cart::total();
        $total = Cart::subtotal();
        return view('frontend.cart',compact('cart','count','total'));
    }
    public function addToCart($id){
        $product = Product::findOrFail($id);
        $cartInfo=[
          'id'=>$id,
          'name'=>$product->productName,
            'price' => $product->price,
          'qty'=>'1',
            'options' =>[
                'img'=> $product->img,
                'voucher'=>$product->price * (1 - ($product->voucher/100)),
                'discount'=>$product->voucher,
            ]
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
        $totalprice = Cart::subtotal();
        //$customer = Auth::guard('customer')->user();
        return view('frontend.checkout',compact('cart','count','totalprice'));
    }


    //controller trang yêu thích
    public function wishList(){
        $list = Cart::content();
        return view('frontend.wishlist',compact('list'));
    }

    public function addToWishList($id){
        $product = Product::findOrFail($id);
        $cartInfo=[
            'id'=>$id,
            'name'=>$product->productName,
            'price' => $product->price,
            'qty'=>'1',
            'options' =>[
                'img'=> $product->img,
                'voucher'=>$product->price * (1 - ($product->voucher/100)),
                'discount'=>$product->voucher,
            ]
        ];
        Cart::add($cartInfo);
        return redirect()->route('wish.list');
    }


}
