<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Product as Item;
use App\Models\Order;
// use App\Request\StoreRequest;
use App\Http\Requests\OrderProductRequest;
use App\Http\Requests\StoreRequest as RequestsStoreRequest;
use App\Models\User;
use Illuminate\Support\Str;

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
            'items' => Item::latest()->paginate(12)->withQueryString(),

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
    // public function store(Request $request)
    // {

    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_code)
    {
        //
        return view('shop.detail', [
            'item' => Item::where('product_code', $product_code)->get(),
        ]);
    }

    public function checkout($product_code)
    {
        return view('shop.checkout', [
            'title' => 'Checkout',
            'item' => Item::where('product_code', $product_code)->get(),

        ]);
    }

    public function order(OrderProductRequest $request, Order $order, Item $item, $product_code)
    {

        $basePrice = $item->where('product_code', $product_code)->get();


        $this->validate($request, [
            'product_code' => ['required'],
            'order_note' => ['required', 'string'],
            'address' => ['required'],
        ]);

        // $validatedData['uuid_code'] = Str::orderedUuid();
        // $validatedData['total_harga'] = $basePrice[0]->harga * $validatedData['total_harga'];
        // $validatedData['status'] = 'waitConfirmation';

        Order::create([
            'product_code' => $request->product_code,
            'user_id' => auth()->user()->id,
            'uuid_code' => Str::orderedUuid(),
            'order_note' => $request->order_note,
            'address' => $request->address,
            'total_harga' => $basePrice[0]->product_price,
            'status' => 'Pending',
        ]);

        return redirect()->route('shop')->with(
            'success',
            'Your order has been added'
        );
    }

    public function adminOrderList(Order $order)
    {
        return view('admin.CheckOrder.index', [
            'title' => 'Check Order',
            'orders' => $order->latest()->paginate(8)->withQueryString(),
        ]);
    }

    public function adminConfirmationShow(Order $order, Item $item, User $user, $id)
    {
        $orders = $order->find($id);
        $items = $item->where('product_code', $orders->product_code)->first();
        $users = $user->where("id", $orders->user_id)->first();
        return view('admin.CheckOrder.edit', [
            'title' => 'Confirmation',
            'orders' => $orders,
            'items' => $items,
            'users' => $users,
        ]);
    }

    public function adminConfirmation(RequestsStoreRequest $request, Order $order,  $id)
    {

        $this->validate($request, [
            'status' => ['required'],
        ]);

        $order = $order->find($id);

        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('order.list')->with(
            'success',
            'Your order has been added'
        );
    }
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
    // public function update(Request $request, $id)
    // {

    // }

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
