<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Record New Payment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('payments.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="appointment_id" class="block text-gray-700 dark:text-gray-300">Appointment</label>
                            <select name="appointment_id" id="appointment_id" class="w-full px-3 py-2 border rounded" required>
                                <option value="">Select Appointment</option>
                                @foreach($appointments as $appointment)
                                <option value="{{ $appointment->id }}">{{ $appointment->customer->name }} - {{ $appointment->service->name }} ({{ $appointment->appointment_datetime->format('Y-m-d H:i') }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="amount" class="block text-gray-700 dark:text-gray-300">Amount</label>
                            <input type="number" step="0.01" name="amount" id="amount" class="w-full px-3 py-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="payment_method" class="block text-gray-700 dark:text-gray-300">Payment Method</label>
                            <input type="text" name="payment_method" id="payment_method" class="w-full px-3 py-2 border rounded">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Record Payment</button>
                        <a href="{{ route('payments.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>