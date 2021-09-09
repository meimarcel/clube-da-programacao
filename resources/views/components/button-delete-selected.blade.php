@props(['contents' => 'Excluir selecionados'])

<div {{ $attributes->merge(['class' => 'fixed bottom-12 right-20 hide', 'id' => 'delete-selected-btn']) }}>
    <button
        {{ $attributes->merge(['class' => 'text-white opacity-95 px-4 w-auto h-12 bg-red-600 rounded-full hover:bg-red-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none']) }}>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block mr-1 mb-1" viewBox="0 0 20 20"
            enable-background="new 0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                clip-rule="evenodd" />
        </svg>

        <span>{{ $contents }}</span>
    </button>
</div>
