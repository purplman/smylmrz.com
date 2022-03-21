<x-layouts.admin.auth title="Login">
    <form class="auth__form" action="{{ route('login.handle') }}" method="post">
        <x-admin.errors />
        @csrf
        <x-admin.form-box placeholder="Your email" required="true" type="email" name="email">
            Email
        </x-admin.form-box>
        <x-admin.form-box placeholder="" required="true" type="password" name="password">
            Password
        </x-admin.form-box>
        
        <x-admin.form-button>Sign in</x-admin.form-button>

        <div class="form__link">
            <a href="{{ route('register.index') }}">Register a new account</a>
        </div>
    </form>
</x-layouts.admin.auth>