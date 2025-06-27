@extends('dashboard.layouts.master')

@section('title', 'إضافة قسم جديد')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4 card-title">إضافة قسم جديد</h4>

                        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">اسم القسم</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div class="col-md-6">
                                    <label for="description" class="form-label">وصف القسم</label>
                                    <input type="text" name="description" class="form-control"
                                        value="{{ old('description') }}">
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>
                            <div class="roe">
                                <div class="col-md-6">
                                    <label for="name" class="form-label"> االإسم بالرابط (slug)</label>
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                                    <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="is_active" class="form-label">حالة التفعيل</label>
                                    <div class="mt-2 form-check">
                                        <input class="form-check-input" type="checkbox" name="is_active" value="1"
                                            {{ old('is_active') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">مفعل</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="img" class="form-label">صورة القسم</label>
                                    <input type="file" name="img" class="form-control">
                                    <x-input-error :messages="$errors->get('img')" class="mt-2" />
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-success">حفظ القسم</button>
                            </div>
                        </form>

                    </div> <!-- /.card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.page-content -->
@endsection
