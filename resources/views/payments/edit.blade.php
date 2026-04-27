<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Payment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('payments.update', $payment) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="amount" class="block text-gray-700 dark:text-gray-300">Amount</label>
                            <input type="number" step="0.01" name="amount" id="amount" value="{{ $payment->amount }}" class="w-full px-3 py-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-gray-700 dark:text-gray-300">Status</label>
                            <select name="status" id="status" class="w-full px-3 py-2 border rounded" required>
                                <option value="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="paid" {{ $payment->status == 'paid' ? 'selected' : '' }}>Paid</option>
                                <option value="failed" {{ $payment->status == 'failed' ? 'selected' : '' }}>Failed</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="payment_method" class="block text-gray-700 dark:text-gray-300">Payment Method</label>
                            <input type="text" name="payment_method" id="payment_method" value="{{ $payment->payment_method }}" class="w-full px-3 py-2 border rounded">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>