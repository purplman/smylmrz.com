<x-admin.layouts.main title="{{ $product->name }} - Edit">
    <x-admin.card>
        <x-admin.card-title>
            {{ $product->name }}
        </x-admin.card-title>
        <div class="card__body">
            <form action="{{ route('dashboard.products.update', $product->id) }}" method="post" class="form">
                @csrf
                @method('put')
                <div class="form__box">
                    <img class="form__image" src="{{ $product->image_link }}" alt="">
                </div>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="name" type="text" :value="$product->name">
                    Product name
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="category" type="text" :value="$product->category">
                    Category
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="link" type="text" :value="$product->link">
                    URL
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="image_link" type="text" :value="$product->image_link">
                    Image URL
                </x-admin.form-box>

                <x-admin.form-button>
                    <span>
                        Save product 
                    </span>
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-admin.form-button>
            </form>
        </div>
    </x-admin.card>
</x-admin.layouts.main>

