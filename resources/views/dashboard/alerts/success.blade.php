@if (session()->has('success'))
    <div role="alert" class="alert alert-success d-flex align-items-center" aria-label="Success:">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>

        <div>
            {{ session('success') }}
        </div>
    </div>
@endif




