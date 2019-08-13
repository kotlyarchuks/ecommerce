<?php

namespace App\Http\Controllers;

use App\Coupons\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::getByCode(request('code'));

        if(!$coupon) {
            return redirect()->route('cart.index')->withErrors('Coupon was not found. Try again.');
        }

        session()->put('coupon', [
            'code' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal())
        ]);

        return redirect()->route('cart.index')->with('message', 'Coupon was applied!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');

        return redirect()->route('cart.index')->with('message', 'Coupon was removed.');
    }
}
