@props(['contents' => 'Voltar'])

<a {{ $attributes->merge(['class' => 'inline-flex items-center gap-1 border shadow-md rounded-md p-1 px-3']) }}>
    <span>{{ $contents }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 28 28">
        <g fill="none">
            <path d="M21.218 19.977C20.01 21.222 18.242 22 16 22H9a1 1 0 1 1 0-2h7c1.758 0 2.99-.597 3.782-1.415c.804-.83 1.218-1.948 1.218-3.085s-.414-2.256-1.218-3.085C18.99 11.597 17.758 11 16 11H8.414l3.293 3.293a1 1 0 1 1-1.414 1.414l-5-5a1 1 0 0 1 0-1.414l5-5a1 1 0 1 1 1.414 1.414L8.414 9H16c2.242 0 4.01.778 5.218 2.023C22.414 12.256 23 13.887 23 15.5c0 1.613-.586 3.244-1.782 4.477z" fill="currentColor"/>
        </g>
    </svg>
</a>
