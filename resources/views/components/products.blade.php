<div class="products">
    <div class="container">
        <div class="products__grid">
            @foreach ($products as $product)
            <x-product :product="$product"></x-product>
            @endforeach
        </div>
    </div>
</div>