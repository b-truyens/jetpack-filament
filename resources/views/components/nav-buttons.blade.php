<div class="inline-flex" role="group">
<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
    @auth
        <div class="navigation-link">
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            <a href="{{ url('/admin') }}">Admin</a>
        </div>
    @else
        <div class="navigation-link">
            @if (Route::has('login'))
                <a href="{{ route('login') }}">Log in</a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        </div>
    @endauth
    </div>
</div>
