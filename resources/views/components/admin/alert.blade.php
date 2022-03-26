<div id="alert" class="alert">
    <div class="alert__icon">
        <ion-icon name="{{ session('error') ? 'close' : 'checkmark' }}-outline"></ion-icon>
    </div>
    <div class="alert__text">
        @if (session('error'))
            {{ session('error') }}
        @endif
        @if (session('success'))
            {{ session('success') }}
        @endif
    </div>
</div>