<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart_items = Cart::content();
        $saved_items = Cart::instance('saveForLater')->content();
        $recommended = Product::recommended(4)->get();
        return view('cart', compact(['recommended', 'cart_items', 'saved_items']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = $this->searchForDuplicates($request->id);

        if($duplicates){
            return redirect()
                ->route('cart.index')
                ->with('message', 'This item is already in your cart!');
        }

        Cart::add(request('id'), request('name'), 1, request('price'))
            ->associate(Product::class);

        return redirect()->route('cart.index')->with('message', 'Item was added to cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $validator = Validator::make($request->all(), [
            'qty' => 'required|numeric|between:1,5'
        ]);

        if($validator->fails()){
            session()->flash('errors', collect(['errors' => 'Quantity should be between 1 and 5']));
            return response()->json(['success' => false]);
        }

        Cart::update($rowId, $request->qty);

        session()->flash('message', 'Cart was updated!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return redirect()->route('cart.index')->with('message', 'Item was removed from cart!');
    }

    public function saveForLater($rowId, Request $request)
    {
        $item = Cart::instance('default')->get($rowId);
        $duplicates = $this->searchForDuplicates($item->id, 'saveForLater');

        if($duplicates){
            return redirect()
                ->route('cart.index')
                ->with('message', 'This item is already saved for later!');
        }

        $item = Cart::instance('default')->get($rowId);
        Cart::instance('default')->remove($rowId);

        Cart::instance('saveForLater')->add($item);
        return redirect()->route('cart.index')->with('message', 'Item was saved for later!');
    }


    protected function searchForDuplicates($needle, $cartInstance = 'default'){
        return Cart::instance($cartInstance)->content()->search(function($item) use ($needle){
            return $needle === $item->id;
        });
    }
}
