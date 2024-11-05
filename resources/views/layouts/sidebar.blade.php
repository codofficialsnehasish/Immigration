<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">

    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('dashboard_asset/assets/images/logo-icon.png') }}" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">{{ config('app.name') }}</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>

    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li>
                <a href="{{ route('banner.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                    <div class="menu-title">Banner</div>
                </a>
            </li>

            <li>
                <a href="{{ route('testimonials.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                    <div class="menu-title">Testimonials</div>
                </a>
            </li>

            <li>
                <a href="{{ route('services.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                    <div class="menu-title">Services</div>
                </a>
            </li>

            <li>
                <a href="{{ route('team.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                    <div class="menu-title">Team's</div>
                </a>
            </li>

            <li>
                <a href="{{ route('contact.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">call</i></div>
                    <div class="menu-title">Contacts</div>
                </a>
            </li>

            <li>
                <a href="{{ route('legal-information.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">call</i></div>
                    <div class="menu-title">Legal Information</div>
                </a>
            </li>

            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">account_circle</i>
                    </div>
                    <div class="menu-title">Services</div>
                </a>
                <ul>
                    @can('Employee Create')
                    <li>
                        <a href="{{ route('employee.add') }}">
                            <i class="material-icons-outlined">arrow_right</i>Add Services
                        </a>
                    </li>
                    @endcan
                    @can('Employee Show')
                    <li>
                        <a href="{{ route('employee') }}">
                            <i class="material-icons-outlined">arrow_right</i>All Employees
                        </a>
                    </li>
                    @endcan
                </ul>
            </li> --}}
        </ul>
        <!--end navigation-->
    </div>

</aside>
<!--end sidebar-->