<aside class="sidebar">
    <div class="sidebar__top">
        <div class="sidebar__logo">
            <img src="{{ asset('img/logo.PNG') }}" alt="">
        </div>
        <div class="sidebar__menu">
            <ul>
                <li>
                    <a class="sidebar__link" href="">
                        <ion-icon name="planet-outline"></ion-icon>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="sidebar__link" href="">
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
                        <ion-icon name="settings-outline"></ion-icon>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar__bottom">
        <div class="sidebar__logout">
            <a class="sidebar__link" href="{{ route('logout') }}">
                <ion-icon name="exit-outline"></ion-icon>
                <span>Logout</span>    
            </a>
        </div>
    </div>
</aside>