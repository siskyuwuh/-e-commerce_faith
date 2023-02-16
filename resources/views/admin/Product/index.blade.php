@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-12 d-flex justify-content-end">
                <a href="{{ route('product.create') }}">
                    <button class="btn btn-outline-success">{{ __('Tambah') }}</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price <small>/unit</small></th>
                            <th scope="col">Stock</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>

                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_desc }}</td>
                                <td>Rp{{ number_format($product->product_price, 2) }}</td>
                                <td>{{ $product->product_stock }}</td>
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
        {{ $products->links() }}
    </div>
@endsection
