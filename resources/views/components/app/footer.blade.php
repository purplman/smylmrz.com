<footer>
    <div class="container">
        <div class="footer">
            <div class="footer__row">
                <div class="footer__col">
                    <div class="footer__brand">
                        <a href="">
                            <img src="{{ asset($footer_logo) }}" alt="">
                        </a>
                    </div>
                    <div class="footer__socials">
                        <ul>
                            <li>
                                <a href="" title="Facebook"> Fb. </a>
                            </li>
                            <li>
                                <a href="" title="Instagram"> Ig. </a>
                            </li>
                            <li>
                                <a href="" title="Twitter"> Tw. </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__col">
                    <x-app.caption class="caption--light caption--sm">Work inquiries</x-app.caption>
                    <p>Interested in working with me?</p>
                    <div>
                        <a href="mailto:smylmrzpro@gmail.com">
                            {{ $email }}
                        </a>
                    </div>
                </div>
                <div class="footer__col">
                    <x-app.caption class="caption--light caption--sm">Take a look</x-app.caption>
                    <div>
                        <ul>
                            <li class="mb-2">
                                <a href="">Latest posts</a>
                            </li>
                            <li>
                                <a href="https://dev-tee-tops.creator-spring.com/" target="_blank" rel="noopener noreferrer">Visit online store</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__col">
                    <x-app.caption class="caption--light caption--sm">Sign up for newsletter</x-app.caption>
                    <x-app.newsletter-form></x-app.newsletter-form>
                </div>
            </div>
            <div class="footer__copyright">
                © {{ now()->year }} {{ $copyright_text }}
            </div>
        </div>
    </div>
</footer>