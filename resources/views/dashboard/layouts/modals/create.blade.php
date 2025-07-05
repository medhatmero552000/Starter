<!-- Modal -->
<div class="modal fade" id="stageModal" tabindex="-1" aria-labelledby="stageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- كبرت العرض -->
        <div class="modal-content">

            <div class=" modal-header">
                <h5 class="modal-title" id="stageModalLabel">{{ __('keywords.add_new_stages') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>

            <form method="POST" action="{{ route('admin.stages.store') }}" data-repeater-list="stages">
                @csrf
                <div class="modal-body">
                    <div class="repeater">
                        <div data-repeater-list="stages">
                            <div data-repeater-item class="mb-3 row">
                                <div class="col-md-4">
                                    <label>{{ strtoupper(__('keywords.name')) }}</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ strtoupper(__('keywords.decreption')) }}</label>
                                    <textarea name="desc" class="form-control" rows="1"></textarea>
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    <button type="button" data-repeater-delete class="mb-10 btn btn-danger btn-sm">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button type="button" data-repeater-create class="btn btn-primary btn-sm">
                            <i data-feather="plus"></i>{{ strtoupper(__('keywords.add_new_row')) }}
                        </button>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ strtoupper(__('keywords.close')) }}</button>
                    <button type="submit" class="btn btn-success">{{ strtoupper(__('keywords.save_data')) }}</button>
                </div>
            </form>

        </div>
    </div>
</div>
@section('scripts')
    {{-- For Form Repeter --}}
    <script>
        $(document).ready(function() {
            $('.repeater').repeater({
                // خيارات إذا احتجت
                initEmpty: false,

                defaultValues: {
                    'name': '',
                    'description': '',
                    'slug': ''
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    if (confirm('هل أنت متأكد من حذف هذا الصف؟')) {
                        $(this).slideUp(deleteElement);
                    }
                }
            });
        });
    </script>
@endsection
