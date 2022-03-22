<div class="form__box">
    <label class="form__label">
        <span>{{ $slot }}</span>
        <span class="required">({{ $required ? 'required' : 'optional' }})</span>
    </label>
    <input 
        class="form__input" 
        type="{{ $type }}" 
        name="{{ $name }}"
        placeholder="{{ $placeholder }}" 
        {{ $required ? 'required' : '' }}
    >
</div>