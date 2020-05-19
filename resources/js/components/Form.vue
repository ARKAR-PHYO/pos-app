<template>
    <div>
        <div class="form-group">
            <label for="everlisttype">EverList Type</label>
            <input type="text" class="form-control @error('everlisttype') is-invalid @enderror" id="everlisttype" name="everlisttype" value="{{ old('everlisttype', $everlisttype->everlisttype) }}" autofocus>
            @error('everlisttype')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">{{ buttonText }}</button>
            <a href="{{ route('everlisttype.index') }}" class="btn btn-danger ml-3">Cancel</a>
        </div>
    </div>

</template>