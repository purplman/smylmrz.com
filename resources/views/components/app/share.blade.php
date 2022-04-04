<div class="social-share">
    <ul>
        @foreach ($sharing_platforms as $platform)
        <li>
            <a class="trigger" title="{{ $platform->name }}" target="_blank" href="{{ $platform->sharing_url.Request::url() }}">
                <img src="{{ asset($platform->icon) }}" alt="{{ $platform->name }} icon">
            </a>
        </li>
        @endforeach
    </ul>
</div>