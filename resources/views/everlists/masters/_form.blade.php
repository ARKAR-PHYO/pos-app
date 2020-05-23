@csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">{{ __('EverList Master Name') }}</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $everlistmaster->name) }}" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="type">{{ __('EverList Type') }}</label>
        <select name="type" id="type" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $everlistmaster->everlisttypenames) }}" autofocus>
            @foreach ( $everlisttypes as $type)
                <option value="{{ $type->id }}">{{ $type->everlisttypenames }}</option>
            @endforeach
        </select>
        @error('type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="ownername">{{ __('Owner Name') }}</label>
        <input type="text" class="form-control @error('ownername') is-invalid @enderror" id="ownername" name="ownername" value="{{ old('ownername', $everlistmaster->ownername) }}" autofocus>
        @error('ownername')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="phno">{{ __('Phone No') }}</label>
        <input type="text" class="form-control @error('phno') is-invalid @enderror" id="phno" name="phno" value="{{ old('phno', $everlistmaster->phno) }}" autofocus>
        @error('phno')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="address">{{ __('Address') }}</label>
    <textarea name="address" id="address" cols="3" rows="3" class="form-control @error('address') is-invalid @enderror" autofocus>{{ old('address', $everlistmaster->address) }}</textarea>
    @error('address')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $buttonText }}</button>
    <a href="{{ route('everlistmasters.index') }}" class="btn btn-danger ml-3">Cancel</a>
</div>
