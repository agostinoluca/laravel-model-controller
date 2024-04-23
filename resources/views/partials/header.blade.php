<header class="bg-dark mb-3">
    {{-- NAV PRINCIPALE --}}
    <nav class="nav justify-content-center fs-3 ">
        <a class="nav-link {{ Route::currentRouteName() === 'welcome' ? 'bg-primary text-light' : '' }}"
            href="{{ route('welcome') }}">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-primary text-light' : '' }}"
            href="{{ route('contacts') }}">Contacts</a>
        <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-primary text-light' : '' }}"
            href="{{ route('about') }}">About</a>
    </nav>

    {{-- NAV ALTRE QUERY --}}
    <nav class="nav justify-content-center bg-secondary">
        <a class="nav-link {{ Route::currentRouteName() === 'bestmovies' ? 'bg-primary text-light' : 'text-light' }}"
            href="{{ route('bestmovies') }}">Best Movies</a>
        <a class="nav-link {{ Route::currentRouteName() === 'americanmovies' ? 'bg-primary text-light' : 'text-light' }}"
            href="{{ route('americanmovies') }}">American Movies</a>
        <a class="nav-link {{ Route::currentRouteName() === 'britishmovies' ? 'bg-primary text-light' : 'text-light' }}"
            href="{{ route('britishmovies') }}">British Movies</a>
    </nav>
</header>
