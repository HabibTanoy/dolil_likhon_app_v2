<!DOCTYPE html>
<html lang="en">
<head>
    @include('custom-layouts.header')
    @guest
        <style>
            .settingSidebar {
                top: 0;
            }
        </style>
    @endguest
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        @if(!Route::is('home') && auth()->check())
            @include('custom-layouts.navbar')
            @include('custom-layouts.sidebar')
            @include('custom-layouts.alert')

            <!-- Main Content -->
            <div class="main-content pb-5">
                <section class="section">
                    @yield('content')
                </section>

                @yield('modal')
            </div>
        @else
            @yield('content')
            @yield('modal')
        @endif
{{--        @include('custom-layouts.settings-sidebar')--}}
    </div>
</div>

@include('custom-layouts.footer')
</body>
</html>
