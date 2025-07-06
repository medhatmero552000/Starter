@extends('dashboard.layouts.master')
@section('title', __('keywords.stages_list'))

@section('content')
    <div class="page-content">

        {{-- العنوان وزر الإضافة --}}
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <h4 class="mb-0">{{ __('keywords.stages_list') }}</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stageModal">
                <i data-feather="plus"></i> {{ __('keywords.add_new_grade') }}
            </button>
        </div>

        {{-- جدول عرض البيانات --}}
        <div class="card">
            <div class="card-body">
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table text-center align-middle table-bordered table-striped w-100">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>{{ __('keywords.stage_name') }}</th>
                                <th>{{ __('keywords.stage_description') }}</th>
                                <th>{{ __('keywords.status') }}</th>
                                <th>{{ __('keywords.added_by') }}</th>
                                <th>{{ __('keywords.created_at') }}</th>
                                <th>{{ __('keywords.updated_by') }}</th>
                                <th>{{ __('keywords.lastupdate') }}</th>
                                <th>{{ __('keywords.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    {{-- الرقم التسلسلي --}}
                                    <td>{{ $loop->iteration + ($items->currentPage() - 1) * $items->perPage() }}</td>

                                    {{-- اسم المرحلة --}}
                                    <td>{{ $item->name }}</td>

                                    {{-- الوصف --}}
                                    <td>{{ $item->desc }}</td>

                                    {{-- الحالة --}}
                                    <td>
                                        <span class="badge {{ $item->is_active ? 'bg-success' : 'bg-danger' }}">
                                            {{ $item->is_active ? __('keywords.active') : __('keywords.inactive') }}
                                        </span>
                                    </td>

                                    {{-- أنشأه --}}
                                    <td>{{ $item->createdByAdmin?->name ?? ' غير متوفر' }}</td>

                                    {{-- تاريخ الإنشاء --}}
                                    <td>
                                        <span class="px-2 py-1 rounded text-success d-inline-block">
                                            {{ formatDateLocalized($item->created_at) }}
                                        </span>
                                    </td>

                                    {{-- القائم بالتحديث --}}
                                    <td>{{ $item->updatedByAdmin?->name ?? ' غير متوفر' }}</td>

                                    {{-- تاريخ التحديث --}}
                                    <td>
                                        <span class="px-2 py-1 rounded text-danger d-inline-block">
                                            {{ formatDateLocalized($item->updated_at) }}
                                        </span>
                                    </td>

                                    {{-- الإجراءات --}}
                                    <td>
                                        <div class="dropdown dropdown-hover">
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ __('keywords.actions') }}
                                            </button>
                                            <ul class="text-center dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item text-success"
                                                        href="{{ route('admin.stages.show', $item) }}">
                                                        <i data-feather="eye" class="me-1"></i> {{ __('keywords.show') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item text-primary"
                                                        href="{{ route('admin.stages.edit', $item) }}">
                                                        <i data-feather="edit" class="me-1"></i>
                                                        {{ __('keywords.edit') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <form action="#" method="POST"
                                                        onsubmit="return confirm('{{ __('keywords.confirm_delete') }}');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item text-danger" type="submit">
                                                            <i data-feather="trash-2" class="me-1"></i>
                                                            {{ __('keywords.delete') }}
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>



                                </tr>

                            @empty
                                <tr>
                                    <td colspan="9" class="text-danger">
                                        {{ __('keywords.no_data_available') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    {{-- مودال الإضافة --}}
    @include('dashboard.layouts.modals.create')
@endsection

@section('scripts')
    {{-- Feather Icons --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();
        });
    </script>
    
@endsection
