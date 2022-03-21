<div {{ $attributes->merge(['class' => 'project']) }}>
    <div class="project__expander trigger">
        <ion-icon name="scan-outline"></ion-icon>
    </div>
    <div class="project__img">
        <img src="{{ $size ? 'http://placehold.jp/2000x1000.png' : 'http://placehold.jp/1000x1000.png' }}" alt="">
    </div>
    <div class="project__content">
        <h2>
            <a href="{{ route('projects.show', 1) }}">Project title</a>
        </h2>
        <ul>
            <li>
                <a href="">tag-1</a>
            </li>
            <li>
                <a href="">tag-2</a>
            </li>
        </ul>
    </div>
</div>