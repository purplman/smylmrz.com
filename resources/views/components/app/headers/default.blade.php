<section {{ $attributes }}>
    <div class="container">
        <div class="header">
            <div class="header__col">
                <x-app.menu-opener></x-app.menu-opener>
            </div>
            <div class="header__col">
                <div class="header__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset($logo) }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="header__col">
                <div class="header__cta">
                    <x-app.buttons.primary href="{{ route('contact') }}">Get a quote</x-app.buttons.primary>
                </div>
            </div>
        </div>
    </div>
</section>