<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">
                <img alt="image" src="{{ asset(config('app.DEFAULT_IMAGES.LOGO')) }}" class="header-logo" />
                <span class="logo-name">{{ config('app.name') }}</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Route::is('dashboard') ? 'active': '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i data-feather="monitor"></i>
                    <span>Dashboard</span>
                </a>
            </li>



{{--            <li class="dropdown {{ Route::is('ground*') ? 'active' : '' }}">--}}
{{--                <a href="javascirpt:void(0)" class="menu-toggle nav-link has-dropdown">--}}
{{--                    <i data-feather="square"></i>--}}
{{--                    <span>Ground</span>--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li class="{{ Route::is('ground.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('ground.index') }}">All Grounds</a></li>--}}
{{--                    <li class="{{ Route::is('ground.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('ground.create') }}">Add New Ground</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </aside>
</div>
