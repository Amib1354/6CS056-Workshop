@if ($errors->any())
<div class="alert error" role="alert"><strong>Please fix the following errors:</strong><ul>
@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
</ul></div>
@endif