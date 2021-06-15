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

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ URL::to('/dashboard') }}" class="nav-link @if (request()->is('admin/dashboard') || request()->is('blogger/dashboard')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            @hasrole('Admin')
                <li class="nav-item @if (request()->is('admin/news') || request()->is('admin/news/*')) {{ 'menu-open' }} @endif">
                    <a href="#" class="nav-link @if (request()->is('admin/news') || request()->is('admin/news/*')) {{ 'active' }} @endif">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            News
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.news.create') }}" class="nav-link @if (request()->is('admin/news/create')) {{ 'active' }} @endif">
                                <i class="fas fa-plus-square nav-icon"></i>
                                <p>New News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.news.index') }}" class="nav-link @if (request()->is('admin/news')) {{ 'active' }} @endif">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>News</p>
                            </a>
                        </li>
                    </ul>
                </li>
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
                                <p>services</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if (request()->is('admin/teams') || request()->is('admin/teams/*')) {{ 'menu-open' }} @endif">
                    <a href="#" class="nav-link @if (request()->is('admin/teams') || request()->is('admin/teams/*')) {{ 'active' }} @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Teams
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.teams.create') }}" class="nav-link @if (request()->is('admin/teams/create')) {{ 'active' }} @endif">
                                <i class="fas fa-plus-square nav-icon"></i>
                                <p>New Team</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.teams.index') }}" class="nav-link @if (request()->is('admin/teams')) {{ 'active' }} @endif">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Teams</p>
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
                <li class="nav-item">
                    <a href="{{ route('admin.testimonials.index') }}" class="nav-link @if (request()->is('admin/testimonials')) {{ 'active' }} @endif">
                        <i class="nav-icon fas fa-quote-left"></i>
                        <p>
                            Testimonials
                        </p>
                    </a>
                </li>
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
                    <a href="{{ route('admin.generals.index') }}" class="nav-link @if (request()->is('admin/generals')) {{ 'active' }} @endif">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Generals
                        </p>
                    </a>
                </li>
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
            @hasrole('Editor')
                <li class="nav-item @if (request()->is('editor/news') || request()->is('editor/news/*')) {{ 'menu-open' }} @endif">
                    <a href="#" class="nav-link @if (request()->is('editor/news') || request()->is('editor/news/*')) {{ 'active' }} @endif">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            News
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('editor.news.create') }}" class="nav-link @if (request()->is('editor/news/create')) {{ 'active' }} @endif">
                                <i class="fas fa-plus-square nav-icon"></i>
                                <p>New News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('editor.news.index') }}" class="nav-link @if (request()->is('editor/news')) {{ 'active' }} @endif">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>News</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('editor.galleries.index') }}" class="nav-link @if (request()->is('editor/galleries')) {{ 'active' }} @endif">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
            @endhasrole
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
