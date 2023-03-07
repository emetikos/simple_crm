<div>
    <div>
        <x-app-layout>
            <x-slot name="header">
                <div class="flex justify-between" >
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard/companies') }}
                    </h2>

                    <a class="py-2 px-2 " href="{{ route('dashboard') }}" > < return </a>
                </div>
            </x-slot>

            <div x-data="{showForm: false}" class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Company Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Address
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Website
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Logo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($compData as $company)
                                    <livewire:company-item :company="$company" :key="$company->id"/>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div x-collapse x-show="showForm" class="flex justify-center mb-2">

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
                        </div>

                        <div class="flex justify-end py-2">

                            <div class="p-6">
                                <button class="w-full bg-[#cee5fe] text-[#0f4083] p-2 px-4 rounded font-medium text-lg"
                                        @click="showForm =! showForm"
                                >
                                    Add Company</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </x-app-layout>
    </div>

</div>
