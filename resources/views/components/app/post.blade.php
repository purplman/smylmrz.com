<div class="post">
    <a href="{{ route('posts.show', $post) }}" class="post__link">
        <div class="post__image">
            <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/ohio-demo-25/clb_blog_2-1024x1024.jpg" alt="">
        </div>
        <div class="post__content">
            <h3 class="post__title">
                {{ $post->title }} 
            </h3>
            <div class="post__btn">
                <span>Read more</span>
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
        </div>
    </a>
</div>