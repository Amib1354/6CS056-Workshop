@props(['type' => 'success', 'message' => null])
@if ($message || ($type === 'error' && $errors->any()))
    <div class="alert {{ $type }}" role="{{ $type === 'error' ? 'alert' : 'status' }}">
        @if ($message){{ $message }}@else
            <strong>Please correct the following:</strong>
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        @endif
    </div>
@endif
