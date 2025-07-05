@extends('dashboard.layouts.master')
@section('title', 'Dashboard')
@section('style')
@stop
@section('content')
    <div class="page-content">


        <div class="flex-wrap d-flex justify-content-between align-items-center grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">{{ strtoupper(__('keywords.Welcome to Dashboard')) }}</h4>
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow-1">
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="mb-0 card-title">إجمالى الطلبات</h6>
                                    <div class="mb-2 dropdown">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">$3,897</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">


                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- =========================================================== --}}
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="mb-0 card-title">إجمالى المبيعات</h6>
                                    <div class="mb-2 dropdown">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">$35,084</h3>
                                        <div class="d-flex align-items-baseline">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="ordersChart2" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ====================================================================== --}}
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="mb-0 card-title">New Orders</h6>

                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">35,084</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-danger">
                                                <span>-2.8%</span>
                                                <i data-feather="arrow-down" class="mb-1 icon-sm"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="mb-0 card-title">عدد المنتجات</h6>
                                    <div class="mb-2 dropdown">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">$35,084</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-danger">


                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="ordersChart4" class="mt-3 mt-xl-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
        {{-- Start DataTable --}}
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">أحدث الطلبات </h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table text-center">
                                <thead>
                                    <tr>
                                        <th>رقم الطلب</th>
                                        <th>العميل</th>
                                        <th>السعر</th>
                                        <th>حالة الطلب</th>
                                        <th>الإجمالى</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">أخر التقييمات</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table text-center ">
                                <thead>
                                    <tr>
                                        <th>العميل</th>
                                        <th>المنتج</th>
                                        <th>التقييم</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End DataTable --}}


@endsection
@section('script')
@if(session('alert-message'))
    <script>
        Swal.fire({
            icon: '{{ session('alert-type', 'error') }}',
            title: '{{ session('alert-message') }}',
            timer: 4000,
            showConfirmButton: false,
        });
    </script>
    @if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const myModal = new bootstrap.Modal(document.getElementById('stageModal'));
            myModal.show();
        });
    </script>
@endif

@endif



@endsection
