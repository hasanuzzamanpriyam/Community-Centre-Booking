<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Booking List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
                        <thead class="bg-gray-200 dark:bg-gray-700">
                            <tr class="text-left text-gray-700 dark:text-gray-300">
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">ID</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Booking Date</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Community Name</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Event Name</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Description</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-white">{{ $booking->id }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-white">{{ $booking->booking_date }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-white">{{ $booking->comminity_name }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-white">{{ $booking->event_name }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-white">{{ $booking->description }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-white">
                                        <a href="{{ route('booking.edit', $booking->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                        <span class="text-gray-400 mx-2">|</span>
                                        <a href="{{ route('booking.delete', $booking->id) }}" class="text-red-500 hover:text-red-700">Delete</a>
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
