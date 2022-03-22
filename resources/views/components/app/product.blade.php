<div {{ $attributes->merge(['class' => 'product']) }}>
    <div class="product__img">
        <a target="_blank" href="{{ $product->link }}" rel="noopener noreferrer">
            <img src="{{ $product->image }}" alt="">
        </a>
    </div>
    <div class="product__content">
        <h3>
            <a target="_blank" href="" rel="noopener noreferrer">{{ $product->name }}</a>
        </h3>
        <h5>
            <a href="">{{ $product->category }}</a>
        </h5>
    </div>
</div>