<div
    class="w-86 mx-auto mt-8 scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
    <div class="flex flex-col items-center mx-auto text-center">
        <h1 class="px-8 py-4 text-4xl font-bold text-white">User Search</h1>

        <div class="flex justify-center">
            <input wire:model="search" wire:keyup="refreshSearch" type="text" placeholder="Search by name or email"
                class="p-2 mb-4 border rounded">
        </div>

        @if (empty($users))
        @else
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="{{ $loop->odd ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="px-4 py-2 border-b">{{ $user->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif

    </div>
</div>
