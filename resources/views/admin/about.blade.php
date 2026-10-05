<x-admin.layout>
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
            {{ $githubUsername ?? 'l4rferiand-ops' }}
        </h1>
        <p class="text-gray-600 dark:text-gray-400 mb-4">
            {{ $content ?? 'Coba tebak' }}
        </p>

        <a href="{{ $githubUrl ?? 'https://github.com/l4rferiand-ops' }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-lg hover:bg-gray-900 dark:bg-gray-700 dark:hover:bg-gray-600">
            Lihat Repository di GitHub
        </a>
    </div>
</x-admin.layout>
