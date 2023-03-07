<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center py-12">

                    <div class="p-6">
                        <a href="{{ route('companies') }}" class="w-full bg-[#cee5fe] text-[#0f4083] p-10 rounded font-medium text-lg">Companies</a>
                    </div>

                    <div class="p-6">
                        <a href=" {{ route('employees') }}" class="w-full bg-[#d5edda] text-[#1a5726] p-10 rounded font-medium text-lg">Employees</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
