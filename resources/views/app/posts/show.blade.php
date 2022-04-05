<x-app.layouts.posts>
    <div class="container">
        <div class="posts">
            <div class="posts__header">
                <div class="posts__header__left">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="posts__header__right">
                    <div>
                        <h4>Sign up and get notified when something interesting happens!</h4>
                        <x-app.newsletter-form class="newsletter-form--light"></x-app.newsletter-form>
                    </div>
                </div>
            </div>
        </div>

        <div class="article">
            <div class="article__container">
                <x-app.share></x-app.share>
                <div class="article__content">
                    <div class="article__image">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/ohio-demo-25/clb_blog_2-1024x1024.jpg" alt="">
                    </div>
                    <div>
                        {!! $post->content !!}
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</x-app.layouts.posts>