@props(['contents' => 'Filtrar'])

<button {{ $attributes->merge(['class' => 'inline-flex items-center gap-1 border shadow-md rounded-md p-1 px-3']) }}>
    <span>{{ $contents }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 18 18" fill="currentColor">
    <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z" clip-rule="evenodd" />
    </svg>
</button>