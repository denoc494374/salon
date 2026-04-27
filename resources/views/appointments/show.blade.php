<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Appointment Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <p><strong>Customer:</strong> {{ $appointment->customer->name }}</p>
                    <p><strong>Service:</strong> {{ $appointment->service->name }}</p>
                    <p><strong>Date & Time:</strong> {{ $appointment->appointment_datetime->format('Y-m-d H:i') }}</p>
                    <p><strong>Price:</strong> ${{ number_format($appointment->service->price, 2) }}</p>
                    <p><strong>Status:</strong> {{ ucfirst($appointment->status) }}</p>
                    <p><strong>Notes:</strong> {{ $appointment->notes }}</p>
                    @if($appointment->payment)
                    <p><strong>Payment Status:</strong> {{ ucfirst($appointment->payment->status) }}</p>
                    @else
                    <p>No payment recorded.</p>
                    @endif
                    <a href="{{ route('appointments.index') }}" class="text-blue-500 hover:text-blue-700">Back to Appointments</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>