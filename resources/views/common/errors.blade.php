@if (count($errors) > 0)
<div>
    <div class="font-medium text-red-600">
        {{ __('Whoops! Something wend wrong.')}}
    </div>
    
    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    </ul>
</div>
@endif
