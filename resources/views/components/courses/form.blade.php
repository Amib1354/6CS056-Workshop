<form method="POST" action="{{ $action }}">
    @csrf
    @if ($method !== 'POST') @method($method) @endif
    <x-form-input id="name" label="Course name" name="name" :value="old('name', $course->name)" maxlength="255" required />
    <x-form-textarea id="description" label="Description (optional)" name="description" :value="old('description', $course->description)" maxlength="2000" />
    <x-form-input id="duration" label="Duration (weeks)" name="duration" type="number" :value="old('duration', $course->duration)" min="1" max="520" required />
    <x-form-input id="fee" label="Fee" name="fee" type="number" :value="old('fee', $course->fee)" min="0" max="99999999.99" step="0.01" required />
    <div class="field"><label for="difficulty">Difficulty</label><select id="difficulty" name="difficulty" required><option value="">Choose difficulty</option>
        @foreach (['easy' => 'Easy', 'medium' => 'Medium', 'hard' => 'Hard'] as $value => $label)<option value="{{ $value }}" @selected(old('difficulty', $course->difficulty) === $value)>{{ $label }}</option>@endforeach
    </select></div>
    <div class="field check-row"><input type="hidden" name="is_active" value="0"><input id="is_active" name="is_active" type="checkbox" value="1" @checked(old('is_active', $course->exists ? $course->is_active : true))><label for="is_active">This course is currently offered</label></div>
    <div class="form-actions"><button type="submit">{{ $buttonText }}</button><a class="button secondary" href="{{ $cancelUrl }}">Cancel</a></div>
</form>
