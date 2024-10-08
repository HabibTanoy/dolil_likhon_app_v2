<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="javascirpt:void(0)" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                    <i data-feather="align-justify"></i>
                </a>
            </li>
            <li>
                <a href="javascirpt:void(0)" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="javascirpt:void(0)" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="{{ auth()->user()->name }}" src="{{ asset(config('app.DEFAULT_IMAGES.AVATAR')) }}" class="user-img-radious-style">
                <span class="d-sm-none d-lg-inline-block"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">Hello  {{ auth()->check() ? auth()->user()->name : 'guest' }} </div>

{{--                <a href="#" class="dropdown-item has-icon">--}}
{{--                    <i class="far fa-user"></i>Profile--}}
{{--                </a>--}}

                <div class="dropdown-divider"></div>

                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item has-icon text-danger d-flex align-items-center" type="submit">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
