<aside class="sidebar">
    <div class="sidebar__top">
        <div class="sidebar__avatar">
            <div class="sidebar__avatar__img">
                <img src="{{ asset('img/avatar.jpg') }}">
            </div>
            <div class="sidebar__avatar__text">
                Hi, {{ auth()->user()->name }}
            </div>
        </div>
        <div class="sidebar__menu">
            <div class="sidebar__section">
                <div class="sidebar__section__title">
                    Menu
                </div>
                <ul>
                    <li>
                        <a class="sidebar__link {{ Route::current()->getName() == 'dashboard.index' ? 'sidebar__link--active' : '' }}" href="{{ route('dashboard.index') }}">
                            <ion-icon name="planet-outline"></ion-icon>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidebar__link {{ Route::current()->getName() == 'dashboard.projects.index' ? 'sidebar__link--active' : '' }}" href="{{ route('dashboard.projects.index') }}">
                            <ion-icon name="layers-outline"></ion-icon>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidebar__link" href="">
                            <ion-icon name="storefront-outline"></ion-icon>
                            <span>Store</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidebar__link" href="">
                            <ion-icon name="albums-outline"></ion-icon>
                            <span>Posts</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar__section">
                <div class="sidebar__section__title">
                    General
                </div>
                <ul>
                    <li>
                        <a class="sidebar__link" href="">
                            <ion-icon name="planet-outline"></ion-icon>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidebar__link" href="{{ route('logout') }}">
                            <ion-icon name="exit-outline"></ion-icon>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>