@php
    $dir = App::getLocale() == 'ar' ? 'rtl' : '';
@endphp
<!DOCTYPE html>

<html lang="en" dir="{{ $dir }} >





@include('dashboard.layouts.partails.head')

<body dir={{ $dir }} >
    @include('dashboard.alerts.success')
    @include('dashboard.alerts.error')
    @include('sweetalert::alert')


    <div class="main-wrapper">
        @include('dashboard.layouts.partails.sidebar')


        <div class="page-wrapper">

            @include('dashboard.layouts.partails.navbar')

            @yield('content')

            @include('dashboard.layouts.partails.footer')




        </div>
    </div>
    @include('dashboard.layouts.partails.scripts')




</body>

</html>
