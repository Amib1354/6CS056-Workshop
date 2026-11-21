@props(['action', 'item'])
<form method="POST" action="{{ $action }}" onsubmit="return confirm('Delete this {{ $item }}?')">
    @csrf @method('DELETE')
    <button class="link-button" type="submit">Delete</button>
</form>
