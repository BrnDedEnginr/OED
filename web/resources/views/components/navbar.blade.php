<div class="navbar bg-base-100 shadow-sm">
    <div class="flex-none">
        <label for="side-drawer" class="btn btn-square btn-ghost drawer-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path> </svg>
        </label>
    </div>
    <div class="flex-1">
        <a href="/" class="btn btn-ghost text-xl">OED</a>
    </div>
    <div class="flex-none">
        @if(Auth::check())
            <p>Logged in as {{Auth::getUser()->character_name}}</p>
        @else
            <a href="/auth/login">
                <img src="/eve-login-dark.png" alt="Login with EVE Online"/>
            </a>
        @endif
    </div>
</div>
