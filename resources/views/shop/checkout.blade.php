@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <a href="{{ url('admin/product') }}">
                    <button class="btn btn-primary">{{ __('Kembali') }}</button>
                </a>
            </div>
        </div> --}}
        <div class="row justify-content-center my-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Checkout') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{-- route('product.update',$item->id) --}}">
                            @csrf
                            <div class="row mb-3">
                                <label for="product_name" class="col-md-2 col-form-label">{{ __('Nama Produk') }}</label>

                                <div class="col-md-10">
                                    <input id="product_name" type="text" class="form-control" name="product_name"
                                        value="{{ old('product_name', $item->product_name) }}" disabled readonly
                                        autocomplete="product_name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="product_desc"
                                    class="col-md-2 col-form-label text-md-end">{{ __('Catatan Produk') }}</label>

                                <div class="col-md-6">
                                    <textarea id="product_desc" class="form-control @error('product_desc', $item->product_desc) is-invalid @enderror"
                                        name="product_desc" required autocomplete="product_desc" autofocus>{{ old('product_desc', $item->product_desc) }}</textarea>

                                    @error('product_desc', $item->product_desc)
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
                                        name="product_price" value="{{ old('product_price', $item->product_price) }}"
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
                                        name="product_stock" value="{{ old('product_stock', $item->product_stock) }}"
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
