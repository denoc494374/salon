<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add New Appointment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('appointments.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="customer_id" class="block text-gray-700 dark:text-gray-300">Customer</label>
                            <select name="customer_id" id="customer_id" class="w-full px-3 py-2 border rounded" required>
                                <option value="">Select Customer</option>
                                @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="service_id" class="block text-gray-700 dark:text-gray-300">Service</label>
                            <select name="service_id" id="service_id" class="w-full px-3 py-2 border rounded" required>
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="appointment_datetime" class="block text-gray-700 dark:text-gray-300">Date & Time</label>
                            <input type="datetime-local" name="appointment_datetime" id="appointment_datetime" class="w-full px-3 py-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="notes" class="block text-gray-700 dark:text-gray-300">Notes</label>
                            <textarea name="notes" id="notes" class="w-full px-3 py-2 border rounded"></textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Appointment</button>
                        <a href="{{ route('appointments.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>