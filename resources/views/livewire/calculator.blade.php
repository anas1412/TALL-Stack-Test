<div
    class="w-86 mx-auto mt-8 scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
    <div class="flex flex-col items-center mx-auto text-center">
        <h1 class="px-8 py-4 text-4xl font-bold text-white">Calculator</h1>
        <div class="flex justify-center">
            <input wire:model="operand1" type="number" class="w-24 py-2 ml-2 border border-gray-300 rounded px-30 "
                placeholder="Operand 1">
            <input wire:model="operand2" type="number" class="w-24 px-2 py-2 ml-2 border border-gray-300 rounded "
                placeholder="Operand 2">
        </div>
        <div class="flex justify-center mt-4">
            <button wire:click="add" class="px-4 py-2 font-semibold text-white bg-green-500 rounded">+</button>
            <button wire:click="subtract" class="px-4 py-2 ml-2 font-semibold text-white bg-red-500 rounded">-</button>
            <button wire:click="multiply" class="px-4 py-2 ml-2 font-semibold text-white bg-blue-500 rounded">*</button>
            <button wire:click="divide" class="px-4 py-2 ml-2 font-semibold text-white bg-yellow-500 rounded">/</button>
            <button wire:click="resetResult"
                class="px-4 py-2 ml-2 font-semibold text-white bg-gray-500 rounded">Reset</button>
        </div>
        <div class="flex justify-center">
            <h1 class="px-8 py-2 mt-4 text-2xl font-bold text-white ">Result: </h1>
            <h1 class="px-8 py-2 mt-4 text-4xl font-bold text-black bg-white rounded">{{ $result }}</h1>
        </div>
    </div>
</div>
