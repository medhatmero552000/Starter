{{-- @if(session()->has('flasher'))
  <script>
    @foreach(session('flasher') as $notification)
      toastr.options.closeButton = true;
      toastr.{{ $notification['type'] ?? 'info' }}("{!! $notification['message'] !!}");
    @endforeach
  </script>
@endif --}}
@if(session()->has('flasher'))
  <script>
    @foreach(session('flasher') as $notification)
      toastr.options.closeButton = true;
      toastr["{{ $notification['type'] ?? 'info' }}"]("{!! $notification['message'] !!}");
    @endforeach
  </script>
@endif