@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col">
                <h1 class="display-6">List Pemesanan</h1>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="">Kode Pembelian</th>
                                    <th scope="col" class="">Kode Produk</th>
                                    <th scope="col" class="">Total Harga</th>
                                    <th scope="col" class="">Pada Tanggal</th>
                                    <th scope="col" class="">Status</th>
                                    <th scope="col" class="">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr class="text-center">

                                        <td>{{ $order->uuid_code }}</td>
                                        <td>{{ $order->product_code }}</td>
                                        <td>Rp{{ number_format($order->total_harga, 2) }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td class="d-flex justify-content-center">
                                            @if ($order->status === 'Pending')
                                                <p class="btn btn-warning fw-bold">
                                                    {{ $order->status }}
                                                </p>
                                            @elseif($order->status === 'Confirmed')
                                                <p class="btn btn-success">
                                                    {{ $order->status }}
                                                </p>
                                            @elseif($order->status === 'Rejected')
                                                <p class="btn btn-secondary">
                                                    {{ $order->status }}
                                                </p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-flex"> --}}
                                            <a href="{{ route('order.check', $order->id) }}" class="btn btn-sm btn-dark mx-1"><i
                                                    class="fa fa-eye"></i></a>
                                            {{-- <a href="{{ route('product.edit', $product->id) }}"
                                                    class="btn btn-sm btn-primary mx-1"><i class="fa fa-pencil-alt"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mx-1"><i
                                                        class="fa fa-trash"></i></button> --}}
                                            {{-- </form> --}}
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
        {{ $orders->links() }}
    </div>
@endsection
