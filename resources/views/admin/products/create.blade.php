<x-admin.layouts.main title="New product">
    <x-admin.card>
        <x-admin.card-title>
            New product
        </x-admin.card-title>
        <div class="card__body">
            <form action="{{ route('dashboard.products.store') }}" method="post" class="form">
                @csrf
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="name" type="text">
                    Product name
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="category" type="text">
                    Category
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="link" type="text">
                    URL
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="image_link" type="text">
                    Image URL
                </x-admin.form-box>

                <x-admin.form-button>
                    <span>
                        Create product 
                    </span>
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-admin.form-button>
            </form>
        </div>
    </x-admin.card>
</x-admin.layouts.main>

