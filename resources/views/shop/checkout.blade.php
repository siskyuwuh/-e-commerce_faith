@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center my-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Checkout') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/shop/{{ $item[0]->product_code }}/order">
                            @csrf
                            <div class="row mb-4">

                                {{-- Kolom Form --}}

                                <div class="col-8">
                                    {{-- Nama Produk --}}

                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">{{ __('Nama Produk') }}</label>

                                        <div class="col-md-10">
                                            <p class="form-control">{{ $item[0]->product_name }}</p>
                                        </div>
                                    </div>

                                    {{-- Note Order --}}

                                    <div class="row mb-3">
                                        <label for="order_note"
                                            class="col-md-2 col-form-label">{{ __('Catatan Produk') }}</label>

                                        <div class="col-md-10">
                                            <textarea id="order_note" class="form-control" name="order_note" autocomplete="order_note" autofocus></textarea>
                                        </div>
                                    </div>

                                    {{-- Alamat --}}

                                    <div class="row mb-3">
                                        <label for="address" class="col-md-2 col-form-label">{{ __('Alamat') }}</label>

                                        <div class="col-md-10">
                                            <textarea id="address" class="form-control" name="address" required autocomplete="address" autofocus></textarea>
                                        </div>
                                    </div>

                                    {{-- Harga --}}

                                    <div class="row mb-3">
                                        <label for="product_price"
                                            class="col-md-2 col-form-label">{{ __('Total Harga') }}</label>

                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <span class="input-group-text">Rp</span>
                                                <span
                                                    class="form-control">{{ number_format($item[0]->product_price) }}</span>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- Kode Produk  --}}

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input id="product_code" type="hidden" class="form-control" name="product_code"
                                                value="{{ $item[0]->product_code }}" required autocomplete="product_code">
                                        </div>
                                    </div>
                                </div>

                                {{-- Kolom btn,img  --}}

                                <div class="col row d-block">
                                    <div class="col d-flex justify-content-center mb-2">

                                        <img src="https://via.placeholder.com/240x240/777.png/fff?text=240x240"
                                            alt="" class="border rounded-2 border-0" width="240" height="240">
                                    </div>

                                    <div class="row mt-2 col">
                                        <div class="col-md-12 d-flex">
                                            <button type="submit" class="btn btn-lg btn-dark w-100">
                                                {{ __('Checkout') }}
                                            </button>
                                        </div>
                                        {{-- <div class="col-md-6 offset-md-4">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
