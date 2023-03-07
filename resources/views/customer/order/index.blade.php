@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-12">

                @foreach ($orders as $order)
                    <div class="card mb-3">
                        <div class="card-header">
                            <small class="my-1">
                                {{ $order->created_at->isoFormat('D MMMM Y') }}
                            </small>
                            @if ($order->status === 'Pending')
                                <span class="badge mx-2 my-1 text-bg-warning">
                                    {{ $order->status }}
                                </span>
                            @elseif($order->status === 'Confirmed')
                                <span class="badge mx-2 my-1 text-bg-success">
                                    {{ $order->status }}
                                </span>
                            @elseif($order->status === 'Rejected')
                                <span class="badge mx-2 my-1 text-bg-danger">
                                    {{ $order->status }}
                                </span>
                            @endif
                            <span class="text-muted">
                                {{ $order->uuid_code }}
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-md-10">

                                    @foreach ($products as $product)
                                    @if($product->product_code === $order->product_code)
                                        <h5 class="card-title">{{ $product->product_name }}</h5>
                                    @endif
                                        {{-- <h5 class="card-title">{{ $product->product_name }}</h5> --}}
                                    @endforeach
                                    {{-- <h5 class="card-tittle">{{$order->uuid_code}}</h5> --}}
                                    <h6 class="card-subtitle mb-2 text-muted">
                                    </h6>
                                </div>
                                <div class="col-md-2 border-start border-2 card-text text-center">
                                    <small>Total Belanja :</small>
                                    <p class="fw-bold">Rp {{ number_format($order->total_harga) }}</p>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-end">
                                <div class="col-md-2 text-center">
                                    <a href="{{ route('order.customer.detail', [$username, $order->id]) }}" class="text-success fw-bold text-decoration-none">Detail Transaksi</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
