@props(['modalTitle' => 'Tem certeza?', 'modalMessage' => 'Tem certeza que deseja excluir esse trabalho?', 'modalCancelButton' => 'Cancelar', 'modalConfirmButton' => 'Excluir',
        'onConfirmEvent' => NULL])

<div
    {{ $attributes->merge(['id' => 'modal-delete', 'data-modal' => 'delete-modal-confirm', 'class' => 'invisible inset-0 opacity-0 min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover overflow-x-hidden overflow-y-auto transition']) }}>
    <div
        {{ $attributes->merge(['data-modal-toggle' => 'delete-modal-confirm', 'data-modal-action' => 'close', 'class' => 'inset-0 absolute bg-black opacity-80 inset-0 z-0']) }}>
    </div>
    <div
        {{ $attributes->merge(['data-modal-main' => 'delete-modal-confirm', 'class' => 'transform -translate-y-full modal w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white']) }}>
        <div {{ $attributes->merge(['class' => 'text-center p-5 flex-auto justify-center']) }}>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 -m-1 flex items-center text-red-500 mx-auto"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h2 {{ $attributes->merge(['class' => 'text-xl font-bold py-4']) }}>{{ $modalTitle }}</h2>
            <p {{ $attributes->merge(['class' => 'text-base text-gray-700 px-8 font-semibold']) }}>{{ $modalMessage }}
            </p>
        </div>
        <div {{ $attributes->merge(['class' => 'p-3 mt-2 text-center space-x-4 md:block']) }}>
            <button
                {{ $attributes->merge(['id' => 'btn-modal-close', 'type' => 'button', 'class' => 'mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-semibold tracking-wider border text-gray-800 rounded-full hover:shadow-lg hover:bg-gray-100', 'data-modal-toggle' => 'delete-modal-confirm', 'data-modal-action' => 'close']) }}>{{ $modalCancelButton }}</button>
            <button @isset($onConfirmEvent) onclick="{{$onConfirmEvent}}" @endisset
                {{ $attributes->merge(['id' => 'btn-modal-confirm', 'type' => 'button', 'class' => 'mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-semibold tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600', 'data-modal-toggle' => 'delete-modal-confirm']) }}>
                {{ $modalConfirmButton }}
            </button>
        </div>
    </div>
</div>