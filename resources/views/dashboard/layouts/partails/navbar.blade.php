 <!-- partial:partials/_navbar.html -->
 <nav class="navbar">
     <a href="#" class="sidebar-toggler">
         <i data-feather="menu"></i>
     </a>
     <div class="navbar-content">
         <form class="search-form">
             <div class="input-group">
                 <div class="input-group-text">
                     <i data-feather="search"></i>
                 </div>
                 <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
             </div>
         </form>
         <ul class="navbar-nav">
             <li class="nav-item dropdown">

                 {{-- زرار الدراك للصفحة --}}
                 <button id="darkModeToggle" class="p-0 bg-transparent border-0 shadow-none me-3 btn no-hover-bg">
                     <i id="darkModeIcon" data-feather="moon"></i>
                 </button>



                 {{-- نهاية الزرار --}}
                 {{-- زرار ريلود للصفحة --}}
                 <span id="" style="cursor: pointer;" onclick="location.reload();">
                     <i data-feather="refresh-ccw" class="me-3"></i>
                 </span>
                 {{-- نهاية الزرار --}}



                 {{-- زرار تكبير وتصغير الشاشة --}}
                 <span id="btnFullscreen" style="cursor: pointer;">
                     <i data-feather="maximize" class="me-3"></i>
                 </span>
                 {{-- نهاية الزرار --}}






                 <x-lang-component></x-lang-component>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img class="wd-30 ht-30 rounded-circle" src="{{ asset('assets/images/companies_logo/logo3.png') }}"
                         alt="">
                 </a>
                 <div class="p-0 dropdown-menu" aria-labelledby="profileDropdown">
                     <div class="px-5 py-3 d-flex flex-column align-items-center border-bottom">
                         <div class="mb-3">
                             <img class="wd-80 ht-80 rounded-circle"
                                 src="{{ asset('assets/images/companies_logo/logo3.png') }}" alt="">

                         </div>
                         <div class="text-center">
                             <p class="tx-16 fw-bolder"> {{ Auth()->user()->name }}</p>
                             <p class="tx-12 text-muted">{{ Auth()->user()->email }}</p>
                         </div>
                     </div>
                     <ul class="p-1 list-unstyled">
                         <li class="py-2 dropdown-item">
                             <a href="" class="text-body ms-0">
                                 <i class="me-2 icon-md" data-feather="user"></i>
                                 <span>الملف الشخصى</span>
                             </a>
                         </li>
                         <li class="py-2 dropdown-item">
                             <a href="javascript:;" class="text-body ms-0">
                                 <i class="me-2 icon-md" data-feather="edit"></i>
                                 <span>Edit Profile</span>
                             </a>
                         </li>
                         <li class="py-2 dropdown-item">
                             <a href="javascript:;" class="text-body ms-0">
                                 <i class="me-2 icon-md" data-feather="repeat"></i>
                                 <span>Switch User</span>
                             </a>
                         </li>
                         <li class="py-2 dropdown-item">
                             <a href="#" class="text-body ms-0"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 <i class="me-2 icon-md" data-feather="log-out"></i>
                                 <span>تسجيل الخروج</span>
                             </a>
                             <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                 @csrf

                             </form>
                         </li>
                     </ul>
                 </div>
             </li>
         </ul>
     </div>
 </nav>
 <!-- partial -->
