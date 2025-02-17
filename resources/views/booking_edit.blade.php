<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit & Update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('booking.update', $booking->id) }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-2 gap-6 items-center">
                        <!-- Date -->
                        <label for="date" class="text-gray-700 dark:text-gray-300 font-semibold">Date:</label>
                        <input type="date" id="date" name="booking_date" value="{{ $booking->booking_date }}"
                            class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 w-full focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>

                        <!-- Community Name -->
                        <label for="community_name" class="text-gray-700 dark:text-gray-300 font-semibold">Community Name:</label>
                        <input type="text" id="Community_name" name="comminity_name" value="{{ $booking->comminity_name }}"
                            class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 w-full focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>

                        <!-- Event Name -->
                        <label for="event_name" class="text-gray-700 dark:text-gray-300 font-semibold">Event Name:</label>
                        <input type="text" id="event_name" name="event_name" value="{{ $booking->event_name }}"
                            class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 w-full focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>

                        <!-- Description -->
                        <label for="description" class="text-gray-700 dark:text-gray-300 font-semibold">Description:</label>
                        <textarea name="description" id="description" cols="30" rows="3"
                            class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 w-full focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ $booking->description }}</textarea>
                    </div>

                    <div class="flex justify-end mt-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                            Update Now
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
