<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 'products' => DB::table('products')->paginate(5),
        // dd(DB::table('products')->paginate(5));
        //
        // $products = Product::latest()->paginate(5)->withQueryString();
        return view('admin.product.index', [
            'products' => Product::latest()
                ->paginate(15)
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
        return view('admin.product.create');
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
        $this->validate($request, [
            'product_name' => ['required', 'string', 'max:255'],
            'product_code' => ['required', 'string', 'max:7'],
            'product_desc' => ['required', 'string'],
            'product_price' => ['required', 'integer'],
            'product_stock' => ['required', 'integer'],
        ]);
        Product::create([
            'product_name' => $request->product_name,
            'product_code' => $request->product_code,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_stock' => $request->product_stock,
        ]);
        return redirect()
            ->route('product.index')
            ->with([
                'success' => 'Data berhasil disimpan',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.product.show', [
            'title' => 'ahhahaha',
            'products' => Product::where('id', $id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.product.edit', [
            'title' => 'Edit Data Barang',
            'product' => Product::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'product_name' => ['required', 'string', 'max:255'],
            'product_code' => ['required', 'string', 'max:7'],
            'product_desc' => ['required', 'string', 'min:50'],
            'product_price' => ['required', 'integer'],
            'product_stock' => ['required', 'integer'],
        ]);

        // $product = Product::where('id', $id)->get();

        // get $id
        $product = Product::findOrFail($id);

        $product->update([
            'product_name' => $request->product_name,
            'product_code' => $request->product_code,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_stock' => $request->product_stock,
        ]);
        return redirect()
            ->route('product.index')
            ->with([
                'success' => 'Data berhasil disimpan',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('product.index')->with([
            'success' => 'Data Berhasil di Hapus',
        ]);
    }
}
