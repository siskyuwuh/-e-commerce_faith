@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <a href="{{ url('admin/product') }}">
                    <button class="btn btn-primary">{{ __('Kembali') }}</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Data Barang') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product.update', $product->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="product_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Produk') }}</label>

                                <div class="col-md-6">
                                    <input id="product_name" type="text"
                                        class="form-control @error('product_name') is-invalid @enderror" name="product_name"
                                        value="{{ old('product_name', $product->product_name) }}" required
                                        autocomplete="product_name" autofocus>

                                    @error('product_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kode Produk') }}</label>

                                <div class="col-md-6">
                                    <input id="product_code" type="text"
                                        class="form-control @error('product_code') is-invalid @enderror" name="product_code"
                                        value="{{ old('product_code', $product->product_code) }}" required
                                        autocomplete="product_code" autofocus>

                                    @error('product_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="product_desc"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi Produk') }}</label>

                                <div class="col-md-6">
                                    <textarea id="product_desc" class="form-control @error('product_desc', $product->product_desc) is-invalid @enderror"
                                        name="product_desc" required autocomplete="product_desc" autofocus>{{ old('product_desc', $product->product_desc) }}</textarea>

                                    @error('product_desc', $product->product_desc)
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="product_price"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Harga Produk') }}<small
                                        class="text-secondary"> * /unit</small></label>

                                <div class="col-md-6">
                                    <input id="product_price" type="number"
                                        class="form-control @error('product_price') is-invalid @enderror"
                                        name="product_price" value="{{ old('product_price', $product->product_price) }}"
                                        required autocomplete="product_price">

                                    @error('product_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product_stock"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Stock Produk') }}</label>

                                <div class="col-md-6">
                                    <input id="product_stock" type="number"
                                        class="form-control @error('product_stock') is-invalid @enderror"
                                        name="product_stock" value="{{ old('product_stock', $product->product_stock) }}"
                                        required autocomplete="product_stock">

                                    @error('product_stock')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="reset" class="btn btn-outline-danger me-1">
                                        {{ __('Reset') }}
                                    </button>
                                    <button type="submit" class="btn btn-dark ms-1">
                                        {{ __('Daftar Ulang') }}
                                    </button>
                                </div>
                                {{-- <div class="col-md-6 offset-md-4">
                                </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
