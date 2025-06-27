@extends('dashboard.layouts.master')
@section('title', 'Dashboard')
@section('style')
@stop

@section('content')
    <div class="page-content">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> وسائل التوصيل</h6>

                    <form action="{{ route('admin.setting.updateshipping', $data->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="colFormLabelSm" class="form-label">
                                    وسيلة التوصيل
                                </label>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="text" name="value" class="form-control form-control-sm"
                                    id="colFormLabelSm" placeholder="form-control-sm" value="{{ $data->value }}">
                                    <x-input-error :messages="$errors->get('value')" class="mt-2" />
                            </div>


                            <div class="mb-3 col-6">
                                <label for="colFormLabel" class="form-label">قيمة التوصيل</label>
                                <input type="number" value="{{ $data->plain_value }}" name="plain_value" class="form-control"
                                    id="colFormLabel" placeholder="قيمة التوصبل">
                                    <x-input-error :messages="$errors->get('plain_value')" class="mt-2" />
                            </div>

                            <div>
                                <label for="colFormLabelLg" class="form-label">حالة التفعيل</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is_active" value="{{ $data->is_active}}"
                                     id="flexCheckDefault" 
                                       {{ $data->is_active == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        تفعيل أو عدم تفعيل وسيلة التوصيل </label>
                                </div>
                            </div>
                            
                        </div>
                            <button type="submit" class="mt-3 btn btn-primary">حفظ التعديل</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@stop