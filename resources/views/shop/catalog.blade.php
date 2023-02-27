@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center d-flex">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col my-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://via.placeholder.com/188x188/777.png/fff?text=188x188" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->product_name }}</h5>
                                    <p class="card-text fw-bold text-success">Rp
                                        {{ number_format($item->product_price) }}</p>
                                    <a href="{{ route('detail', $item->product_name) }}" class="btn btn-primary">Go
                                        somewhere</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
