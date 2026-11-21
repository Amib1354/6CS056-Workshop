<form method="POST" action="{{ $action }}">
    @csrf
    @if ($method !== 'POST') @method($method) @endif
    <x-form-input id="name" label="Name" name="name" :value="old('name', $student->name)" maxlength="255" required autocomplete="name" />
    <x-form-input id="email" label="Email" name="email" type="email" :value="old('email', $student->email)" maxlength="255" required autocomplete="email" />
    <x-form-input id="phone" label="Phone" name="phone" type="tel" :value="old('phone', $student->phone)" maxlength="20" required autocomplete="tel" />
    <x-form-textarea id="address" label="Address (optional)" name="address" :value="old('address', $student->address)" maxlength="500" />
    <x-form-input id="date_of_birth" label="Date of birth (optional)" name="date_of_birth" type="date" :value="old('date_of_birth', $student->date_of_birth?->format('Y-m-d'))" />
    <div class="form-actions"><button type="submit">{{ $buttonText }}</button><a class="button secondary" href="{{ $cancelUrl }}">Cancel</a></div>
</form>
