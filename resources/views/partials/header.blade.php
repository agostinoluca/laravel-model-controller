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
        <a class="nav-link {{ Route::currentRouteName() === 'query1' ? 'bg-primary text-light' : 'text-light' }}"
            href="{{ route('query1') }}">Best Movies</a>
        <a class="nav-link {{ Route::currentRouteName() === 'query2' ? 'bg-primary text-light' : 'text-light' }}"
            href="{{ route('query2') }}">American Movies</a>
        <a class="nav-link {{ Route::currentRouteName() === 'query3' ? 'bg-primary text-light' : 'text-light' }}"
            href="{{ route('query3') }}">British Movies</a>
    </nav>
</header>
