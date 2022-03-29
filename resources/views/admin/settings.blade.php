<x-admin.layouts.main>
    <x-admin.card>
        <x-admin.card-title>Store settings</x-admin.card-title>

        <form action="{{ route('dashboard.store.update') }}" method="post" class="form">
            @csrf
            <x-admin.form-box class="form__input--dark" type="text" placeholder="" required="0" name="store_link" :value="$settings->store_link">
                External Store URL
            </x-admin.form-box>
            <x-admin.form-button>
                Save link
            </x-admin.form-button>
        </form>

        <div class="divider"></div>

        <x-admin.card-title>Copyright settings</x-admin.card-title>

        <form action="{{ route('dashboard.copyright.update') }}" method="post" class="form">
            @csrf
            <x-admin.form-box class="form__input--dark" type="text" placeholder="" required="true" name="copyright_text" :value="$settings->copyright_text">
                Copyright text
            </x-admin.form-box>
            <x-admin.form-button>
                Save text
            </x-admin.form-button>
        </form>

        <div class="divider"></div>

        <x-admin.card-title>Email settings</x-admin.card-title>

        <form action="{{ route('dashboard.email.update') }}" method="post" class="form">
            @csrf
            <x-admin.form-box class="form__input--dark" type="text" placeholder="" required="true" name="email" :value="$settings->email">
                Primary email
            </x-admin.form-box>
            <x-admin.form-button>
                Save email
            </x-admin.form-button>
        </form>
        <div class="divider"></div>

        <x-admin.card-title>Logo settings</x-admin.card-title>

        <div class="form__row">
            <form action="{{ route('dashboard.email.update') }}" method="post" class="form">
                @csrf
                <img class="form__image" src="{{ asset($settings->logo) }}" alt="">
                <x-admin.form-box class="form__input--dark" type="file" placeholder="" required="true" name="logo">
                    Primary logo
                </x-admin.form-box>
                <x-admin.form-button>
                    Save logo
                </x-admin.form-button>
            </form>
    
            <form action="{{ route('dashboard.email.update') }}" method="post" class="form">
                @csrf
                <img class="form__image" src="{{ asset($settings->footer_logo) }}" alt="">
                <x-admin.form-box class="form__input--dark" type="file" placeholder="" required="true" name="footer_logo">
                    Footer logo
                </x-admin.form-box>
                <x-admin.form-button>
                    Save logo
                </x-admin.form-button>
            </form>
    
            <form action="{{ route('dashboard.email.update') }}" method="post" class="form">
                @csrf
                <img class="form__image" src="{{ asset($settings->favicon) }}" alt="">
                <x-admin.form-box class="form__input--dark" type="file" placeholder="" required="0" name="favicon">
                    Favicon
                </x-admin.form-box>
                <x-admin.form-button>
                    Save icon
                </x-admin.form-button>
            </form>
        </div>
        
    </x-admin.card>
</x-admin.layouts.main>