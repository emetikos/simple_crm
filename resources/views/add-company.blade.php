<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between" >
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard / Add New Company') }}
            </h2>

            <x-returnTag class="bg-[#d5edda] hover:bg-[#ceeaae] text-[#1a5726]">
                {{ __('return') }}
            </x-returnTag>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center py-12">

                <form method="POST" action="{{ route('store-company') }}">
                    @csrf

                    @error('name') <span class="error text-sm text-[#701a26]">{{ $message }}</span> @enderror
                    <div class="mb-2">
                        <x-label for="company" value="{{ __('Company Name') }}" />
                        <x-input id="company" class="block mt-1 w-full" type="text" name="name"  autofocus />
                    </div>

                    @error('address') <span class="error text-sm text-[#701a26]">{{ $message }}</span> @enderror
                    <div class="mb-2">
                        <x-label for="address" value="{{ __('Company Address') }}" />
                        <x-input id="address" class="block mt-1 w-full" type="text" name="address"  autofocus />
                    </div>

                    @error('email') <span class="error text-sm text-[#701a26]">{{ $message }}</span> @enderror
                    <div class="mb-2">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"  autofocus />
                    </div>

                    <div class="mb-2">
                        <x-label for="website" value="{{ __('Website') }}" />
                        <x-input id="website" class="block mt-1 w-full" type="text" name="website" autofocus />
                    </div>


                    @error('logo') <span class="error text-sm text-[#701a26]">{{ $message }}</span> @enderror
                    <div class="mb-2">
                        <x-label for="logo" value="{{ __('Company Logo') }}" />
                        <x-input id="logo" class="block mt-1 w-full " type="file" name="logo" autofocus />
                    </div>

                    <x-button class="w-full flex items-center justify-center text-lg font-medium px-1 py-2 mt-2 bg-[#d5edda] hover:bg-[#ceeaae] text-[#1a5726]" type="submit">
                        {{ __('Add Company') }}
                    </x-button>

                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- <div class="flex justify-center mb-2">

    <div class="bg-gray-50 rounded p-10 border border-gray-600 mb-6">
        <form wire:submit.prevent="addCompany">
            @csrf

            @error('name') <span class="error text-sm text-[#701a26]">{{ $message }}</span> @enderror
            <div class="mb-2">
                <x-label for="company" value="{{ __('Company Name') }}" />
                <x-input id="company" class="block mt-1 w-full" type="text" wire:model="new_name"  autofocus />
            </div>


            @error('email') <span class="error text-sm text-[#701a26]">{{ $message }}</span> @enderror
            <div class="mb-2">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" wire:model="email"  autofocus />
            </div>

            @error('logo') <span class="error text-sm text-[#701a26]">{{ $message }}</span> @enderror
            <div class="mb-2">
                <x-label for="logo" value="{{ __('Company Logo') }}" />
                <x-input id="logo" class="block mt-1 w-full" type="file" wire:model="logo" autofocus />
            </div>

            <div class="mb-2">
                <x-label for="website" value="{{ __('Website') }}" />
                <x-input id="website" class="block mt-1 w-full" type="text" wire:model="website" autofocus />
            </div>

            <x-button class="p-1 mt-2" type="submit">
                {{ __('Add Company') }}
            </x-button>

        </form>
    </div>
</div> -->