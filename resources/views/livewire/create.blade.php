<<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">

    </h2>
</x-slot>

        <form>
            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                <div class="">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="block mb-2 text-sm font-bold text-gray-700">name:</label>
                        <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
<div class="mb-4">
                        <label for="exampleFormControlInput2" class="block mb-2 text-sm font-bold text-gray-700">password</label>
                        <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="exampleFormControlInput2" placeholder="Enter Last Name" wire:model="password">
                        @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

            <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                    <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow- outline-green sm:text-sm sm:leading-5">
                    edit
                    </button>
                </span>

                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
</div>
