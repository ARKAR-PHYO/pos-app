@csrf
<div class="form-group">
    <label for="name">{{ __('EverList Name') }}</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autofocus>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="everlisttypename">{{ __('EverList Type Name') }}</label>
    <select name="everlisttypename" id="everlisttypename" class="form-control">
        @foreach ($everlistmaster as $name)
            <option value="{{ $name->everlisttype->everlist_type_name }}">{{ $name->everlisttype->everlist_type_name }}</option>
        @endforeach
    </select>
    @error('everlisttype')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="phno">{{ __('EverList Phone Number') }}</label>
    <input type="text" class="form-control @error('phno') is-invalid @enderror" id="phno" name="phno" value="{{ old('phno') }}" autofocus>
    @error('phno')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="ownername">{{ __('EverList Owner Name') }}</label>
    <input type="text" class="form-control @error('ownername') is-invalid @enderror" id="ownername" name="ownername" value="{{ old('ownername') }}" autofocus>
    @error('ownername')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="address" id="address">{{ __('Everlist Address') }}</label>
    <textarea name="address" id="address" rows="3" class="form-control @error('address') is-invalid @enderror" autocomplete="address" autofocus>{{ old('address') }}</textarea>
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
