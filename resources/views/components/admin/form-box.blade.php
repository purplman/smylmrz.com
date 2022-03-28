<div class="form__box">
    <label class="form__label">
        <span>{{ $slot }}</span>
        @if ($required)
        <span class="required">*</span>
        @endif
    </label>
    <input 
        {{ $attributes->merge(['class' => 'form__input']) }} 
        type="{{ $type }}" 
        name="{{ $name }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}" 
        {{ isset($required) ? 'required' : '' }}
    >
</div>