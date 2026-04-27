<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Payment Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <p><strong>Appointment:</strong> {{ $payment->appointment->service->name }} for {{ $payment->appointment->customer->name }}</p>
                    <p><strong>Amount:</strong> ${{ number_format($payment->amount, 2) }}</p>
                    <p><strong>Status:</strong> {{ ucfirst($payment->status) }}</p>
                    <p><strong>Payment Method:</strong> {{ $payment->payment_method }}</p>
                    <p><strong>Transaction ID:</strong> {{ $payment->transaction_id }}</p>
                    <a href="{{ route('payments.index') }}" class="text-blue-300 hover:text-blue-100">Back to Payments</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>