@extends('dashboard.layouts.master')
@section('title','Dashboard')
@section('style')
@stop

@section('content')
<div class="page-content">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">أحدث الطلبات</h6>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table text-center table-bordered">
                        <thead>
                            <tr>
                                <th>رقم الطلب</th>
                                <th>العميل</th>
                                <th>السعر</th>
                                <th>حالة الطلب</th>
                                <th>الإجمالى</th>
                            </tr>
                        </thead>
                     
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@stop
