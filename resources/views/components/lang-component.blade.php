<!-- Dropdown Menu -->
<div class="dropdown">
@php
    $marginClass = app()->getLocale() === 'ar' ? 'ms-2' : 'ms-2';
@endphp

<a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    {{ LaravelLocalization::getSupportedLocales()[LaravelLocalization::getCurrentLocale()]['native'] }}
<i data-feather="globe" class="fs-3 cursor-pointer {{ $marginClass }}"></i>
</a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="py-2 dropdown-item">

                <img src="{{ asset('vendor/blade-flags/language-' . $localeCode . '.svg') }}" width="20"
                    height="20" class="mx-2" />
                {{ $properties['native'] }}

            </a>
        @endforeach
    </div>
</div>
