@if (session()->has('error'))
    <div role="alert" class="alert alert-danger d-flex align-items-center" aria-label="error:">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="error:">
            <use xlink:href="#check-circle-fill" />
        </svg>

        <div>
            {{ session('error') }}
        </div>
    </div>
@endif