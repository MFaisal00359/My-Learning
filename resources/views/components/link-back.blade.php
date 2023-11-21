<a {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-3 text-blue-700 text-xs uppercase tracking-widest font-semibold hover:text-white border border-blue-700 rounded-md hover:bg-blue-100 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
