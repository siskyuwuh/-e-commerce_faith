@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- @yield('carousel') --}}
    <div class="banner mb-3">
        <img src="https://via.placeholder.com/1440x563/777.png/fff?text=1440x563" class="d-block w-100">
    </div>

    <div id="carouselExampleIndicators" class="carousel slide my-3">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div
                    style="
                    display: flex;
                    flex-direction: row;
                    justify-content: center;

                    padding: 0px 16px;
                    gap: 16px;">
                    <img src="https://via.placeholder.com/480x560/777.png/fff?text=480x560" class=""
                        style="flex: none;
                    order: 0;
                    flex-grow: 0;">
                    <img src="https://via.placeholder.com/800x560/777.png/fff?text=880x560" class=""
                        style="
                    flex: none;
                    order: 1;
                    flex-grow: 0;">
                </div>
            </div>
            <div class="carousel-item">
                <div
                    style="
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    padding: 0 16px;
                    gap: 16px;
                ">
                    <img src="https://via.placeholder.com/310x560/777.png/fff?text=310x560" alt=""
                        style="
                    flex: none;
                    order: 0;
                    flex-grow: 0;
                    ">
                    <img src="https://via.placeholder.com/310x560/777.png/fff?text=310x560" alt=""
                        style="
                        flex: none;
                        order: 1;
                        flex-grow: 0;
                    ">
                    <img src="https://via.placeholder.com/310x560/777.png/fff?text=310x560" alt=""
                        style="
                        flex: none;
                        order: 2;
                        flex-grow: 0;
                    ">
                    <img src="https://via.placeholder.com/310x560/777.png/fff?text=310x560" alt=""
                        style="
                        flex: none;
                        order: 3;
                        flex-grow: 0;
                    ">
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1440x563/777.png/fff?text=1440x563" class="d-block w-100"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- <div class="container-fluid"> --}}

    {{-- </div> --}}

    {{-- <div
        style="
            display: flex;
            flex-direction: row;
            justify-content: center;

            padding: 0px 16px;
            gap: 16px;">
        <img src="https://via.placeholder.com/480x560/777.png/fff?text=480x560" class=""
            style="flex: none;
            order: 0;
            flex-grow: 0;">
        <img src="https://via.placeholder.com/800x560/777.png/fff?text=880x560" class=""
            style="
            flex: none;
            order: 1;
            flex-grow: 0;">
    </div> --}}

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        {{-- <div class="row">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img" width="275" height="275" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 275x275" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                        dy=".3em">275x275</text>
                </svg>
                <h2 class="fw-normal">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                    first column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img" width="275" height="275" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 275x275" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                        dy=".3em">275x275</text>
                </svg>
                <h2 class="fw-normal">Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                    column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img" width="275" height="275" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 275x275" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                        dy=".3em">275x275</text>
                </svg>
                <h2 class="fw-normal">Heading</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row --> --}}



        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll
                        blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose
                    here.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for
                        yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how
                    this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                        fill="#aaa" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                        class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really
                    intended to be actually read, simply here to give you a better view of what this would look like with
                    some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                        fill="#aaa" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
