<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ces Information') }}
        </h2>
    </x-slot>

    <!-- This is an example component -->
<div class="flex items-center justify-center px-4 mt-10">

    <div class="w-full max-w-4xl bg-white rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                Ces {{$data['ces']->ces_code}}
            </h2>
        </div>
        <div>
            <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                <p class="text-gray-600">
                    Name
                </p>
                <p>
                    {{$data['ces']->name}}
                </p>
            </div>
            <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                <p class="text-gray-600">
                    Email Address
                </p>
                <p>
                    {{$data['ces']->email}}
                </p>
            </div>
            <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                <p class="text-gray-600">
                    Company Name
                </p>
                <p>
                    {{$data['ces']->company_name}}
                </p>
            </div>
            <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                <p class="text-gray-600">
                    Website
                </p>
                <p>
                    {{$data['ces']->website}}
                </p>
            </div>
            <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                <p class="text-gray-600">
                    Question 1
                </p>
                <p>
                    {{$data['ces']->description_1}}
                </p>
            </div>
            <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                <p class="text-gray-600">
                    Question 2
                </p>
                <p>
                    {{$data['ces']->description_2}}
                </p>
            </div>

        </div>
    </div>
</div>
</x-app-layout>
