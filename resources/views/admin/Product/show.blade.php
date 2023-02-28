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
                    <div class="card-header">{{ __('Detail Data Barang') }}</div>
                    <div class="card-body">
                        @foreach ($products as $item)

                        <h4>{{ $item->product_code }}</h4>
                        <h4>{{ $item->product_name }}</h4>
                        <p>Rp {{ number_format($item->product_price, 2) }}</p>
                        <p>{{ $item->product_desc }}</p>
                        <p>Stock :</p>
                        <p>{{ $item->product_stock }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- pw efbe : SisKyaaa2434 --}}
