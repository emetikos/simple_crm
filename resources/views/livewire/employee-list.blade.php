<div>
    <div>
        <x-app-layout>

            <x-slot name="header">
                <div class="flex justify-between" >
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard / employees') }}
                    </h2>

                    <x-returnTag class="bg-[#d5edda] hover:bg-[#ceeaae] text-[#1a5726]">
                        {{ __('return') }}
                    </x-returnTag>
                </div>
            </x-slot>



            <div x-data="{showForm: false}" class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                        <div class="flex justify-end py-2">
                            <div class="p-6">
                                <a href="{{ route('add-employee') }}" class="w-full bg-[#d5edda] hover:bg-[#ceeaae] text-[#1a5726] p-2 px-4 rounded font-medium text-lg" >Add Employee</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>

</div>
