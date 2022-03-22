<div class="products">
    <div class="container">
        <div class="products__grid">
            @foreach ($products as $product)
            <x-app.product :product="$product"></x-app.product>
            @endforeach
        </div>
    </div>
</div>