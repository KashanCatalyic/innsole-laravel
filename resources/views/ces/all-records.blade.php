@push('css')
    <style>
        th{
            text-align: left;
        }
    </style>
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ces All Records') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full border border-collapse border-gray-400 table-fixed">
                        <thead>
                            <tr>
                                <th class="bg-gray-300 border border-gray-300">Ces Code</th>
                                <th class="bg-gray-300 border border-gray-300">Name</th>
                                <th class="bg-gray-300 border border-gray-300">Email</th>
                                <th class="bg-gray-300 border border-gray-300">Company Name</th>
                                <th class="bg-gray-300 border border-gray-300">Website</th>
                                <th class="bg-gray-300 border border-gray-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['ces'] as $ces)
                            <livewire:ces :ces="$ces" :key="$ces['id']" />
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-4">
                        {{$data['ces']->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
