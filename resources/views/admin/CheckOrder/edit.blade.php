@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <a href="{{ url('order/admin') }}">
                    <button class="btn btn-primary">{{ __('Kembali') }}</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-8 my-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-header">
                        Detail Barang
                    </div>
                    <div class="card-body row">
                        {{-- <h5 class="card-title">Card title</h5> --}}
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p> --}}
                        <div class="col-md-9">

                            <p>{{ $items->product_name }}</p>
                            <p>{{ $items->product_desc }}</p>
                            <p>Rp {{ number_format($items->product_price) }}</p>
                            <p>{{ $items->product_code }}</p>
                        </div>
                        <div class="col d-flex justify-content-end">
                            {{-- <img src="https://via.placeholder.com/144x144/777.png/fff?text=144x144" alt=""
                                class="rounded-2" width="144" height="144"> --}}
                        </div>


                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-8 my-2">
                <div class="card">
                    <div class="card-header">{{ __('Konfirmasi Pesanan') }}</div>

                    <div class="card-body row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Email Pembeli
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control my-1">
                                        {{ $users->email }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Username Pembeli
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control my-1">
                                        {{ $users->username }}
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
                                    <p class="form-control my-1">
                                        {{ $orders->uuid_code }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Alamat Pembeli
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control my-1">
                                        {{ $orders->address }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Catatan Pembeli
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control my-1">
                                        {{ $orders->order_note }}
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
                                    <p class="my-1">
                                        Rp {{ number_format($orders->total_harga) }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="my-1">
                                        Dibuat pada
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="form-control my-1">
                                        {{ $orders->created_at }}
                                    </p>
                                </div>
                            </div>



                            <form method="POST" action="{{ route('order.update', $orders->id) }}">
                                @csrf
                                @method('PUT')

                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option selected>{{ $orders->status }}</option>
                                    @if ($orders->status === 'Pending')
                                        <option value="Rejected">Reject</option>
                                        <option value="Confirmed">Confirm</option>
                                    @elseif($orders->status === 'Confirmed')
                                        <option value="Rejected">Reject</option>
                                        <option value="Pending">Wait for Confirmation</option>
                                    @elseif($orders->status === 'Rejected')
                                        <option value="Confirmed">Confirm</option>
                                        <option value="Pending">Wait for Confirmation</option>
                                    @endif
                                </select>
                                {{-- <img src="https://via.placeholder.com/240x240/777.png/fff?text=240x240" alt=""
                                class="" width="240" height="240"> --}}


                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-dark w-100">
                                            {{ __('Submit') }}
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
    </div>
@endsection
