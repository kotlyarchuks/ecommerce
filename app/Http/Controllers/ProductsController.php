<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductsIndexRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function index(ProductsIndexRequest $request)
    {
        $categories = Category::all();
        $categoryName = 'Featured';

        if (request()->has('category'))
        {
            $category = Category::where('slug', $request->category)->first();
            $products = $category->products()->get();
            $categoryName = $category->name;
        } else
        {
            $products = Product::inRandomOrder()->take(12)->get();
        }

        return view('products.index', compact(['products', 'categories', 'categoryName']));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $recommended = Product::where('slug', '!=', $slug)->recommended(4)->get();

        return view('products.show', compact(['product', 'recommended']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
