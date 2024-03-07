<header>
    <div class="logo-and-menu">
        <a href="{{ route('home') }}">
            {{-- <img src="{{ asset('images/logo.png') }}" alt="Laravel Starter Logo"> --}}
            <h1>Vocation Vault</h1>
        </a>
        <ul>
            <li>
                <a class="{{ Request::is('home') || Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                    <i class="fa-solid fa-house"></i> Home
                </a>
            </li>
            <li>
                <a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">
                    <i class="fa-solid fa-circle-info"></i> About
                </a>
            </li>
            <li>
                <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                    <i class="fa-solid fa-envelope"></i> Contact
                </a>
            </li>
        </ul>
    </div>
    <div class="toggle-btn">
        <button id="theme-mode-toggler" class="theme-mode-toggler tooltip" type="button">
            <i id="theme-icon" class="fa fa-toggle-off"></i>
            <span class="tooltiptext">Toggle Dark Mode</span>
        </button>
    </div>
</header>
