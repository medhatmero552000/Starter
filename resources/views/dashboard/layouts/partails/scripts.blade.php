
 <!-- core:js -->
 <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>
 <script src="{{ asset('assets') }}/vendors/core/core.js"></script>
 <!-- endinject -->

 <!-- Plugin js for this page -->
 <script src="{{ asset('assets') }}/vendors/flatpickr/flatpickr.min.js"></script>
 <script src="{{ asset('assets') }}/vendors/apexcharts/apexcharts.min.js"></script>
 <!-- End plugin js for this page -->

 <!-- inject:js -->
 <script src="{{ asset('assets') }}/vendors/feather-icons/feather.min.js"></script>
 <script src="{{ asset('assets') }}/js/template.js"></script>
 <!-- endinject -->

 <!-- Custom js for this page -->
 <script src="{{ asset('assets') }}/js/dashboard-dark.js"></script>
 <!-- End custom js for this page -->

 <script src="{{ asset('assets') }}/js/jquery.repeater.min.js"></script>

 {{-- Start Custom Script to maxmize and minimize screen --}}

 <script>
     document.addEventListener('DOMContentLoaded', () => {
         const btnWrapper = document.getElementById('btnFullscreen');

         if (!btnWrapper) {
             console.warn('🚨 الزر btnFullscreen غير موجود!');
             return;
         }

         function updateIcon(isFullscreen) {
             btnWrapper.innerHTML =
                 `<i data-feather="${isFullscreen ? 'minimize' : 'maximize'}" class="me-3"></i>`;
             feather.replace();
         }

         function toggleFullscreen() {
             if (!document.fullscreenElement) {
                 document.documentElement.requestFullscreen()
                     .then(() => {
                         updateIcon(true);
                         localStorage.setItem('fullscreen', 'true');
                     })
                     .catch(err => alert('فشل الدخول لوضع ملء الشاشة: ' + err.message));
             } else {
                 document.exitFullscreen()
                     .then(() => {
                         updateIcon(false);
                         localStorage.setItem('fullscreen', 'false');
                     })
                     .catch(err => alert('فشل الخروج من وضع ملء الشاشة: ' + err.message));
             }
         }

         btnWrapper.addEventListener('click', toggleFullscreen);

         document.addEventListener('fullscreenchange', () => {
             const isFull = !!document.fullscreenElement;
             updateIcon(isFull);
             localStorage.setItem('fullscreen', isFull ? 'true' : 'false');
         });

         // استعادة الحالة من localStorage
         if (localStorage.getItem('fullscreen') === 'true') {
             document.documentElement.requestFullscreen()
                 .then(() => updateIcon(true))
                 .catch(() => updateIcon(false));
         }

         feather.replace();
     });
 </script>
 {{-- End Custom Script to maxmize and minimize screen --}}
 <script>
     feather.replace();
 </script>

 @yield('scripts')
