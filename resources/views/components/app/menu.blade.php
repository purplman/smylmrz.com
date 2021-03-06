<!-- Menu -->
<div id="menu">
    <div class="menu" :class="menuOpen ? 'menu--active' : ''">

        <div @click="menuOpen = false" class="menu__closer trigger">
          <ion-icon name="close-outline"></ion-icon>
        </div>
      
        <div class="menu__nav">
            <ul class="menu__list">
                <li class="menu__list-item">
                    <a href="{{ route('home') }}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="menu__list-item">
                    <a href="{{ route('projects.index') }}">
                        <span>Portfolio</span>
                    </a>
                </li>
                <li class="menu__list-item">
                    <a role="button" href="{{ route('posts.index') }}">
                        <span>Blog</span>
                    </a>
                </li>
                <li class="menu__list-item">
                    <a role="button" href="#">
                        <span>Store</span>
                        <ion-icon name="add-outline"></ion-icon>
                    </a>
                    <ul class="dropdown">
                        <li>
                            <a href="https://dev-tee-tops.creator-spring.com/" target="_blank" rel="noopener noreferrer">
                                <span>
                                    Visit store
                                    <ion-icon name="open-outline"></ion-icon>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('store') }}">
                                <span>View products</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__list-item">
                    <a href="{{ route('contact') }}">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu__footer">asd</div>
    </div>
</div>