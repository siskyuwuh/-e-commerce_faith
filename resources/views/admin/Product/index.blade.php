@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col">
                <h1 class="display-6">List Produk</h1>
            </div>
            <div class="col-md-3 d-flex mt-3 mb-0 justify-content-end">
                <a href="{{ route('product.create') }}">
                    <button class="btn btn-outline-success">{{ __('Tambah') }}</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Kode Produk</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga Produk <small>/unit</small></th>
                                    <th scope="col">Stok Barang</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>

                                        <td class="text-center">{{ $product->product_code }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td class="text-center">Rp{{ number_format($product->product_price, 2) }}</td>
                                        <td class="text-center">{{ $product->product_stock }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-flex">
                                                <a href="{{ route('product.show', $product->id) }}"
                                                    class="btn btn-sm btn-dark mx-1"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('product.edit', $product->id) }}"
                                                    class="btn btn-sm btn-primary mx-1"><i class="fa fa-pencil-alt"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mx-1"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                            {{-- <div class="row">
                                                <div class="col">
                                                    <a href="{{ route('admin.product.edit') }}" class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col">
                                                    <a href="{{ route('admin.product.delete') }}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div> --}}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{ $products->links() }}
    </div>
@endsection
