<div class="form-group">
    <label for="{{ $inputName }}">{{ $labelText }}</label>
    <input name="{{ $inputName }}" type="{{ $typeInput }}" value="{{ old($inputName) }}" placeholder="{{ $inputPlaceholder }}"
           class="form-control bg-light shadow rounded-pill
                @error($inputName) is-invalid @else border-0 @enderror">

    @error($inputName)
    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
    @enderror

</div>

