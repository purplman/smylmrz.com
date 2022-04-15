<section {{ $attributes }}>
    <div class="container">
        <div class="header">
            <div class="header__logo header__logo--posts">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/blog-logo.PNG') }}" alt="logo">
                </a>
            </div>
            <x-app.menu-opener></x-app.menu-opener>
        </div>
    </div>
</section>