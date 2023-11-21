<button data-ripple-light="true" {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-3 bg-gradient-to-tr from-blue-700 to-blue-500 hover:from-blue-800 hover:to-blue-800 hover:shadow-lg hover:shadow-blue-500/40 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-800 focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
