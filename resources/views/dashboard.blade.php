<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Management Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Management Sections</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('services.index') }}" class="text-blue-500 hover:text-blue-700">Manage Services</a></li>
                        <li><a href="{{ route('customers.index') }}" class="text-blue-500 hover:text-blue-700">Manage Customers</a></li>
                        <li><a href="{{ route('appointments.index') }}" class="text-blue-500 hover:text-blue-700">Manage Appointments</a></li>
                        <li><a href="{{ route('payments.index') }}" class="text-blue-500 hover:text-blue-700">Manage Payments</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
