<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Service Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold">{{ $service->name }}</h3>
                    <p><strong>Price:</strong> ${{ number_format($service->price, 2) }}</p>
                    <p><strong>Duration:</strong> {{ $service->duration }} minutes</p>
                    <p><strong>Description:</strong> {{ $service->description }}</p>
                    <a href="{{ route('services.index') }}" class="text-blue-500">Back to Services</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>