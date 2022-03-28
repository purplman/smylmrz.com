<x-admin.layouts.main>
    <x-admin.card>
        <x-admin.card-title>Store settings</x-admin.card-title>

        <form action="{{ route('dashboard.store.update') }}" class="form">
            @csrf
            <x-admin.form-box class="form__input--dark" type="text" placeholder="" required="0" name="store_link">
                External Store URL
            </x-admin.form-box>
        </form>

        <div class="divider"></div>

        <x-admin.card-title>Copyright settings</x-admin.card-title>

        <form action="{{ route('dashboard.copyright.update') }}" class="form">
            @csrf
            <x-admin.form-box class="form__input--dark" type="text" placeholder="" required="true" name="copyright_text">
                Copyright text
            </x-admin.form-box>
        </form>

        <div class="divider"></div>

        <x-admin.card-title>Email settings</x-admin.card-title>

        <form action="{{ route('dashboard.email.update') }}" class="form">
            @csrf
            <x-admin.form-box class="form__input--dark" type="text" placeholder="" required="true" name="primary_email">
                Primary email
            </x-admin.form-box>
        </form>
    </x-admin.card>
</x-admin.layouts.main>