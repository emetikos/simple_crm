<div>
    <div>
        <x-app-layout>
            <x-slot name="header">
                <div class="flex justify-between" >
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard / companies') }}
                    </h2>

                    <x-returnTag class="bg-[#cee5fe] hover:bg-[#b6d8fe] text-[#0f4083]">
                        {{ __('return') }}
                    </x-returnTag>
                </div>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
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



                        <div class="flex justify-end py-2">
                            <div class="p-6">
                                <a href="{{ route('add-company') }}" class="w-full bg-[#cee5fe] text-[#0f4083] p-2 px-4 rounded font-medium text-lg" >Add Company</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </x-app-layout>
    </div>

</div>
