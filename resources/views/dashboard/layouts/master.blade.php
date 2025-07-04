@php
    $dir = App::getLocale() == 'ar' ? 'rtl' : '';
@endphp
<!DOCTYPE html>

<html lang="en">





@include('dashboard.layouts.partails.head')

<body dir={{ $dir }}>


    <div class="main-wrapper">
        @include('dashboard.layouts.partails.sidebar')


        <div class="page-wrapper">

            @include('dashboard.layouts.partails.navbar')
          
                @yield('content')
         
            @include('dashboard.layouts.partails.footer')




        </div>
    </div>
    @include('dashboard.layouts.partails.scripts')

    @include('sweetalert::alert')

</body>

</html>
