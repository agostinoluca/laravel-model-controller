<header class="bg-dark mb-3">
    <nav>
        <nav class="nav justify-content-center  ">
            <a class="nav-link {{ Route::currentRouteName() === 'welcome' ? 'bg-primary text-light' : '' }}"
                href="{{ route('welcome') }}">Home</a>
            <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-primary text-light' : '' }}"
                href="{{ route('contacts') }}">Contacts</a>
            <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-primary text-light' : '' }}"
                href="{{ route('about') }}">About</a>
        </nav>

    </nav>
</header>
