<x-admin.layout>
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
                Students
            </h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Daftar data siswa.
            </p>
        </div>

        <button
            type="button"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
            </svg>
            Add Student
        </button>
    </div>

    <div class="relative overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">NIS</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Classroom</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                        <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $student['no'] }}
                        </td>
                        <td class="px-6 py-4">{{ $student['nis'] }}</td>
                        <td class="px-6 py-4">{{ $student['name'] }}</td>
                        <td class="px-6 py-4">{{ $student['classroom'] }}</td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <button type="button" class="rounded-lg bg-yellow-400 px-3 py-2 text-xs font-medium text-gray-900 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300">
                                    Edit
                                </button>
                                <button type="button" class="rounded-lg bg-red-600 px-3 py-2 text-xs font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
