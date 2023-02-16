@extends('layouts.app')

@section('content')
    <div class="container-fluid">
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
                            <th scope="col">Handle</th>
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
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{-- route('posts.destroy',$post->id) --}}" method="POST">
                                        <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                        <a href="{{-- route('admin.product.edit',$product->id) --}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
