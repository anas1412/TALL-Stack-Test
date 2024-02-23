<div
    class="w-64 mx-auto  mt-8 scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
    <div class="mx-auto text-center ">
        <h1 class="px-8 py-4 text-4xl font-bold text-white">Counter</h1>
        <h1 class="w-24 px-4 py-2 mx-auto text-4xl font-bold text-black bg-white rounded">{{ $count }}</h1>

        <div class="flex justify-center mt-4">
            <button wire:click="increment" class="px-4 py-2 font-semibold text-white bg-green-500 rounded">+</button>
            <button wire:click="decrement" class="px-4 py-2 ml-2 font-semibold text-white bg-red-500 rounded">-</button>
            <button wire:click="resetCounter"
                class="px-4 py-2 ml-2 font-semibold text-white bg-gray-500 rounded">Reset</button>
        </div>
    </div>
</div>
