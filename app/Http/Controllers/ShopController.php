<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Item;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('shop.catalog', [
            'title' => 'Shop',
            'items' => Item::latest()
                ->paginate(9)
                ->withQueryString(),

        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        //
        return view('shop.detail', [
            'item' => Item::where('product_name', $name)->get(),
        ]);
    }

    public function checkout($id)
    {
        return view('shop.checkout', [
            'title' => 'Checkout',
            'item' => Item::find($id),

        ]);
    }

    // public function update(Request $request, $id)
    // {
    //     //
    //     $this->validate($request, [
    //         'product_name' => ['required', 'string', 'max:255'],
    //         'product_desc' => ['required', 'string', 'min:50'],
    //         'product_price' => ['required', 'integer'],
    //         'product_stock' => ['required', 'integer'],
    //     ]);

    //     // $product = Product::where('id', $id)->get();

    //     // get $id
    //     $product = Product::findOrFail($id);

    //     $product->update([
    //         'product_name' => $request->product_name,
    //         'product_desc' => $request->product_desc,
    //         'product_price' => $request->product_price,
    //         'product_stock' => $request->product_stock,
    //     ]);
    //     return redirect()
    //         ->route('product.index')
    //         ->with([
    //             'success' => 'Data berhasil disimpan',
    //         ]);
    //     }

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
