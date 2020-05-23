@csrf
<div class="form-group">
    <label for="everlisttypenames">EverList Type</label>
    <input type="text" class="form-control @error('everlisttypenames') is-invalid @enderror" id="everlisttypenames" name="everlisttypenames" value="{{ old('everlisttypenames', $everlisttypes->everlisttypenames) }}" autofocus>
    @error('everlisttypenames')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $buttonText }}</button>
    <a href="{{ route('everlisttype.index') }}" class="btn btn-danger ml-3">Cancel</a>
</div>
