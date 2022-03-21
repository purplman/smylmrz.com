@if (session('error'))
    {{ session('error') }}
@endif
<ul class="errors">
    @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
    @endforeach
</ul>