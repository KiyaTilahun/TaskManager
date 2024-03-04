<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800  border border-transparent rounded-md font-semibold text-xs text-white dark:text-gr ay-800 uppercase tracking-widest hover:bg-blue-700 dark:hover:blue-white focus:bg-gray-700 dark:focus:bg-white active:bg-blue-900 dark:active:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    
    {{ $slot }}
    {{-- <div wire:loading> 
        @include('loading')
    </div>  --}}
</button>
