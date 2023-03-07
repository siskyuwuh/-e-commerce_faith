{{-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
        <path
            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
</svg> --}}
@if ($message = Session::get('success'))
    <div class="position-absolute col-md-12 d-flex justify-content-center" style="z-index: 1000">

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{-- <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg> --}}
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
