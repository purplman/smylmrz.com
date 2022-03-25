<x-admin.layouts.auth title="Register">
    <form class="auth__form" action="{{ route('register.handle') }}" method="post">
        <x-admin.errors />
        @csrf
        <x-admin.form-box placeholder="Your name" required="true" type="text" name="name">
            Name
        </x-admin.form-box>
        <x-admin.form-box placeholder="Your email" required="true" type="email" name="email">
            Email
        </x-admin.form-box>
        <x-admin.form-box placeholder="" required="true" type="password" name="password">
            Password
        </x-admin.form-box>
        <x-admin.form-box placeholder="" required="true" type="password" name="password_confirmation">
            Confirm password
        </x-admin.form-box>
        
        <x-admin.form-button>Sign up</x-admin.form-button>

        <a class="form__link" href="{{ route('login.index') }}">Login here</a>
    </form>
</x-admin.layouts.auth>