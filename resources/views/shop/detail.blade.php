@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-12">
                <div class="card">
                    @foreach ($item as $detail)
                        <div class="card-header">{{ __('Detail Barang') }}</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-3">

                                <img src="https://via.placeholder.com/500x500/777.png/fff?text=500x500" alt="">
                            </div>

                            <div>

                                <h4>{{ $detail->product_name }}</h4>
                                <p>Rp {{ number_format($detail->product_price, 2) }}</p>
                                <hr>
                                <p>{{ $detail->product_desc }}</p>
                                <p>Stock :</p>
                                <p>{{ $detail->product_stock }}</p>
                            </div>
                        </div>
                        <a href="{{ route('checkout', $detail->id) }}"
                            class="btn btn-dark btn-lg rounded-0 rounded-bottom text-center">
                            Beli
                        </a>
                    @endforeach
                </div>
            </div>
            {{-- <div class=""
        style="
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 70px 30px;
            gap: 114px;
            ">
        <div
            style="
                flex: none;
                order: 0;
                flex-grow: 0;
                width: 520px;
                height: 685px;

            ">
            <img src="https://via.placeholder.com/520x520/777.png/fff?text=520x520" alt="" style="
                ">
            <div
                style="
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                    padding: 0px;
                    gap: 20px;
                ">
                <img src="https://via.placeholder.com/144x128/777.png/fff?text=144x128" alt=""
                    style="
                        box-sizing: border-box;
                        border: 2px solid #000000;
                        flex: none;
                        order: 0;
                        flex-grow: 0;
                    ">
                <img src="https://via.placeholder.com/144x128/777.png/fff?text=144x128" alt=""
                    style="
                        box-sizing: border-box;
                        border: 2px solid #000000;
                        flex: none;
                        order: 1;
                        flex-grow: 0;
                    ">
                <img src="https://via.placeholder.com/144x128/777.png/fff?text=144x128" alt=""
                    style="
                        box-sizing: border-box;
                        border: 2px solid #000000;
                        flex: none;
                        order: 2;
                        flex-grow: 0;
                    ">
            </div>
        </div>
        <div
            style="
                width: 737px;
                height: 686px;
                flex: none;
                order: 3;
                flex-grow: 0;
            ">

        </div>
    </div> --}}
        </div>
    </div>
@endsection
{{-- pw efbe : SisKyaaa2434 --}}
