<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $student->first_name }} {{ $student->last_name }}
            </h2>
            <p>Writing Sample Two</p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <livewire:writing-sample-one :student="$student"/>
        </div>
    </div>
    <x-notification />
</x-app-layout>
