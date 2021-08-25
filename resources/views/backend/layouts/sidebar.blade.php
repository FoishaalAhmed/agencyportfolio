<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset(auth()->user()->photo) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{ route('profile') }}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ URL::to('/dashboard') }}" class="nav-link @if (request()->is('admin/dashboard') || request()->is('blogger/dashboard')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            @hasrole('Admin')

            <li class="nav-item @if (request()->is('admin/users') || request()->is('admin/users/*')) {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (request()->is('admin/users') || request()->is('admin/users/*')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.create') }}" class="nav-link @if (request()->is('admin/users/create')) {{ 'active' }} @endif">
                            <i class="fas fa-plus-square nav-icon"></i>
                            <p>New Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link @if (request()->is('admin/users')) {{ 'active' }} @endif">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Users</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->is('admin/services') || request()->is('admin/services/*')) {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (request()->is('admin/services') || request()->is('admin/services/*')) {{ 'active' }} @endif">
                    <i class="nav-icon fab fa-servicestack"></i>
                    <p>
                        Services
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.services.create') }}" class="nav-link @if (request()->is('admin/services/create')) {{ 'active' }} @endif">
                            <i class="fas fa-plus-square nav-icon"></i>
                            <p>New Service</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.services.index') }}" class="nav-link @if (request()->is('admin/services')) {{ 'active' }} @endif">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Services</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->is('admin/events') || request()->is('admin/events/*')) {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (request()->is('admin/events') || request()->is('admin/events/*')) {{ 'active' }} @endif">
                    <i class="fas fa-calendar-week nav-icon"></i>
                    <p>
                        Event Wall
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.events.create') }}" class="nav-link @if (request()->is('admin/events/create')) {{ 'active' }} @endif">
                            <i class="fas fa-plus-square nav-icon"></i>
                            <p>New Event Wall</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.events.index') }}" class="nav-link @if (request()->is('admin/events')) {{ 'active' }} @endif">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Event Walls</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->is('admin/walls') || request()->is('admin/walls/*')) {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (request()->is('admin/walls') || request()->is('admin/walls/*')) {{ 'active' }} @endif">
                    <i class="fas fa-business-time nav-icon"></i>
                    <p>
                        Business Wall
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.walls.create') }}" class="nav-link @if (request()->is('admin/walls/create')) {{ 'active' }} @endif">

                            <i class="fas fa-plus-square "></i>
                            <p>New Business Wall</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.walls.index') }}" class="nav-link @if (request()->is('admin/walls')) {{ 'active' }} @endif">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Business Walls</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @if (request()->is('admin/careers') || request()->is('admin/careers/*') || request()->is('admin/applications') || request()->is('admin/applications/*')) {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (request()->is('admin/careers') || request()->is('admin/careers/*') || request()->is('admin/applications') || request()->is('admin/applications/*')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        Careers
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.careers.create') }}" class="nav-link @if (request()->is('admin/careers/create')) {{ 'active' }} @endif">
                            <i class="fas fa-plus-square nav-icon"></i>
                            <p>New Career</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.careers.index') }}" class="nav-link @if (request()->is('admin/careers')) {{ 'active' }} @endif">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Careers</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.applications.index') }}" class="nav-link @if (request()->is('admin/applications')) {{ 'active' }} @endif">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Job Applications</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->is('admin/pages') || request()->is('admin/pages/*')) {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (request()->is('admin/pages') || request()->is('admin/pages/*')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        Pages
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.pages.create') }}" class="nav-link @if (request()->is('admin/pages/create')) {{ 'active' }} @endif">
                            <i class="fas fa-plus-square nav-icon"></i>
                            <p>New Page</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.pages.index') }}" class="nav-link @if (request()->is('admin/pages')) {{ 'active' }} @endif">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Pages</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.portfolios.index') }}" class="nav-link @if (request()->is('admin/portfolios')) {{ 'active' }} @endif">
                    <i class="fas fa-list-alt nav-icon"></i>
                    <p>Portfolios</p>
                </a>
            </li>
            {{-- <li class="nav-item">
                    <a href="{{ route('admin.testimonials.index') }}" class="nav-link @if (request()->is('admin/testimonials')) {{ 'active' }} @endif">
                        <i class="nav-icon fas fa-quote-left"></i>
                        <p>
                            Testimonials
                        </p>
                    </a>
                </li> --}}
            <li class="nav-item">
                <a href="{{ route('admin.queries.index') }}" class="nav-link @if (request()->is('admin/queries')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-question-circle"></i>
                    <p>
                        Queries
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.clients.index') }}" class="nav-link @if (request()->is('admin/clients')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-user-secret"></i>
                    <p>
                        Clients
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.awards.index') }}" class="nav-link @if (request()->is('admin/awards')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-award"></i>
                    <p>
                        Awards
                    </p>
                </a>
            </li>
            {{-- <li class="nav-item">
                    <a href="{{ route('admin.generals.index') }}" class="nav-link @if (request()->is('admin/generals')) {{ 'active' }} @endif">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Generals
                        </p>
                    </a>
                </li> --}}
            <li class="nav-item">
                <a href="{{ route('admin.galleries.index') }}" class="nav-link @if (request()->is('admin/galleries')) {{ 'active' }} @endif">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Gallery
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.contacts') }}" class="nav-link @if (request()->is('admin/contacts')) {{ 'active' }} @endif">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        Contact
                    </p>
                </a>
            </li>
            @endhasrole
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
