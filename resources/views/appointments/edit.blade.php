<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Appointment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('appointments.update', $appointment) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="customer_id" class="block text-gray-700 dark:text-gray-300">Customer</label>
                            <select name="customer_id" id="customer_id" class="w-full px-3 py-2 border rounded" required>
                                @foreach($customers as $customer)
                                <option value="{{ $customer->id }}" {{ $appointment->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="service_id" class="block text-gray-700 dark:text-gray-300">Service</label>
                            <select name="service_id" id="service_id" class="w-full px-3 py-2 border rounded" required>
                                @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ $appointment->service_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="appointment_datetime" class="block text-gray-700 dark:text-gray-300">Date & Time</label>
                            <input type="datetime-local" name="appointment_datetime" id="appointment_datetime" value="{{ $appointment->appointment_datetime->format('Y-m-d\TH:i') }}" class="w-full px-3 py-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-gray-700 dark:text-gray-300">Status</label>
                            <select name="status" id="status" class="w-full px-3 py-2 border rounded" required>
                                <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="notes" class="block text-gray-700 dark:text-gray-300">Notes</label>
                            <textarea name="notes" id="notes" class="w-full px-3 py-2 border rounded">{{ $appointment->notes }}</textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>