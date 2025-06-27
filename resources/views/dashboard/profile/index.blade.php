@extends('dashboard.layouts.master')
@section('title', 'Dashboard')
@section('style')
@stop

@section('content')
    <div class="page-content">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> تعديل الملف الشخصى</h6>

                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="colFormLabelSm" class="form-label">
                                    الإسم
                                </label>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="text" name="name" class="form-control form-control-sm"
                                    id="colFormLabelSm" placeholder="type ypur name" value="{{ $data->name }}">
                            </div>

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            <div class="mb-3 col-6">
                                <label for="colFormLabelSmة" class="form-label">
                                    البريد الإلكترونى
                                </label>
                                <input type="text" name="email" class="form-control form-control-sm"
                                    id="colFormLabelSm" placeholder="type ypur email " value="{{ $data->email }}">
                            </div>

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary">حفظ التعديل</button>

                    </form>
                </div>
            </div>
        </div>
        {{-- password Update --}}
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> تعديل كلمة المرور</h6>

                    <form id="updatepassword" action="{{ route('admin.password.update') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="colFormLabelSm" class="form-label">
                                    كلمة المرور
                                </label>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="password" name="password" class="form-control form-control-sm"
                                    id="colFormLabelSm" placeholder="enter new password" value="">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>


                            <div class="mb-3 col-6">
                                <label for="colFormLabelSmة" class="form-label">
                                    تأكيد كلمة المرور 
                                </label>
                                <input type="password" name="password_confirmation" class="form-control form-control-sm"
                                    id="colFormLabelSm" placeholder="confirmed password " value="">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                        </div>
                        <button form="updatepassword" type="submit" class="mt-3 btn btn-primary">حفظ كلمة المرور الجديدة</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@stop
