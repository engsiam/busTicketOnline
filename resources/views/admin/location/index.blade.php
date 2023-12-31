<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Locations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto mb-5 max-w-7xl sm:px-6 lg:px-8">
            <x-link-button :href="route('location.create')" active="true">Add New</x-link-button>
        </div>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                @if (Session::has('success'))
                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                        role="alert">
                        <span class="font-bold">Info: </span> {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('error'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-bold">Info: </span> {{ Session::get('error') }}
                    </div>
                @endif
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    SL
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Place Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Distance in KM
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stopage Order
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                                <tr
                                    class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-900">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $location->place_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $location->distance_km }} km
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $location->stopage_order }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ \Carbon\Carbon::parse($location->created_at)->format('d M Y') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-link-button :href="route('location.edit', $location->id)" active="true">Edit</x-link-button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
