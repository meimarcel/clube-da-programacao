@if ($errors->any() || session()->has('success') )
    <div {{ $attributes->merge(['class' => 'bg-gray-100']) }} >
        @if($errors->any())
            <ul class="py-3 bg-red-100 list-none list-inside font-medium text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @if(session()->has('success'))
            <ul class="py-3 bg-green-100 list-none list-inside font-medium text-green-600">
                <li>{{ session()->get('success') }}</li>
            </ul>
        @endif
    </div>
@endif