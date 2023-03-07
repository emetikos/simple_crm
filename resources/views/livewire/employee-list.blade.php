<div>
    <div>
        <x-app-layout>

            <x-slot name="header">
                <div class="flex justify-between" >
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard/employees') }}
                    </h2>

                    <a class="py-2 px-2 " href="{{ route('dashboard') }}" > < return </a>
                </div>
            </x-slot>


            <div x-data="{showForm: false}" class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="flex justify-start py-12">

                            <div class="p-6">
                                <button class="w-full bg-[#d5edda] text-[#1a5726] p-10 rounded font-medium text-lg"
                                        @click="showForm = !showForm"
                                >
                                    Add Employe
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>

</div>
