<x-admin.layouts.auth title="Login">
    <form class="auth__form" action="{{ route('login.handle') }}" method="post">
        <x-admin.errors />
        @csrf
        <x-admin.form-box placeholder="Your email" required="true" type="email" name="email">
            Email
        </x-admin.form-box>
        <x-admin.form-box placeholder="New password" required="true" type="password" name="password">
            Password
        </x-admin.form-box>
        
        <x-admin.form-button>Sign in</x-admin.form-button>

        <a class="form__link" href="{{ route('register.index') }}">Register a new account</a>
    </form>
</x-admin.layouts.auth>