@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <a href="{{ route('admin.product.create') }}">
                    <button class="btn btn-primary">{{ __('Tambah') }}</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>

                                <th>{{ $product->product_name }}</th>
                                <th>{{ $product->product_desc }}</th>
                                <th>{{ $product->product_price }}</th>
                                <th>{{ $product->product_stock }}</th>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
