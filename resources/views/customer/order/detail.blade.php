@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <a href="/{{ $username }}/order">
                    <button class="btn btn-primary">{{ __('Kembali') }}</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-8 my-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-header">
                        Detail Transaksi
                    </div>
                    <div class="card-body row">
                        {{-- <h5 class="card-title">Card title</h5> --}}
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p> --}}
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Kode Produk
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control">
                                        {{ $item[0]->product_code }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Kode Transaksi
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control">
                                        {{ $item[0]->uuid_code }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Alamat Pengiriman
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control">
                                        {{ $item[0]->address }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Total Harga
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control">
                                        Rp {{ number_format($item[0]->total_harga) }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Note Pembeli
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control">
                                        {{ $item[0]->order_note }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Status Pembelian
                                    </p>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    @if ($item[0]->status === 'Pending')
                                        <p class="btn w-100 btn-warning fw-bold">
                                            {{ $item[0]->status }}
                                        </p>
                                    @elseif($item[0]->status === 'Confirmed')
                                        <p class="btn w-100 btn-success">
                                            {{ $item[0]->status }}
                                        </p>
                                    @elseif($item[0]->status === 'Rejected')
                                        <p class="btn w-100 btn-secondary">
                                            {{ $item[0]->status }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Tanggal Pembelian
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control">
                                        {{ $item[0]->created_at }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
