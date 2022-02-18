<div class="bg-white shadow sm:rounded-md">
    <ul role="list" class="divide-y divide-gray-200">
        @foreach($students as $student)
        <li>
            <div class="block hover:bg-gray-50">
                <div class="flex items-center px-4 py-4 sm:px-6">
                    <div class="min-w-0 flex-1 flex items-center">
                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                            <div>
                                <p class="text-sm font-medium text-indigo-600 truncate">{{ $student->last_name }}, {{ $student->first_name }}</p>
                            </div>
                            <div class="hidden md:block">
                                <div>
                                    <p class="text-sm text-gray-900">
                                        Word Count: {{ str_word_count($student->first_writing) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        @if($student->first_writing)
                            <div x-data="{ tooltip: false }" class="relative inline-flex">
                                <button x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="flex-shrink-0 pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </button>
                                <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                                    <div class="absolute top-0 z-10 w-56 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-orange-500 rounded-lg shadow-lg">
                                        Writing Sample One  {{ $student->first_writing ? 'Complete' : '' }}
                                    </div>
                                    <svg class="absolute z-10 w-6 h-6 text-orange-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                        <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                    </svg>
                                </div>
                            </div>
                        @else
                            <div x-data="{ tooltip: false }" class="relative inline-flex">
                                <button onclick="Livewire.emit('openModal', 'writing-sample-modal')" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="flex-shrink-0 pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  {{ $student->first_writing ? 'text-green-500' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                                    <div class="absolute top-0 z-10 w-56 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-orange-500 rounded-lg shadow-lg">
                                        Writing Sample One  {{ $student->first_writing ? 'Complete' : '' }}
                                    </div>
                                    <svg class="absolute z-10 w-6 h-6 text-orange-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                        <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                    </svg>
                                </div>
                            </div>
                        @endif
                        @if($student->second_writing)
                                <div x-data="{ tooltip: false }" class="relative inline-flex">
                                    <button x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="flex-shrink-0 pr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                    </button>
                                    <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute top-0 z-10 w-40 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-orange-500 rounded-lg shadow-lg">
                                            Writing Sample Two  {{ $student->second_writing ? 'Complete' : '' }}
                                        </div>
                                        <svg class="absolute z-10 w-6 h-6 text-orange-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                        </svg>
                                    </div>
                                </div>
                            @else
                                <div x-data="{ tooltip: false }" class="relative inline-flex">
                                    <button onclick="Livewire.emit('openModal', 'writing-sample-modal')" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="flex-shrink-0 pr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 {{ $student->second_writing ? 'text-green-400' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </button>
                                    <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute top-0 z-10 w-40 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-orange-500 rounded-lg shadow-lg">
                                            Writing Sample Two  {{ $student->second_writing ? 'Complete' : '' }}
                                        </div>
                                        <svg class="absolute z-10 w-6 h-6 text-orange-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                        </svg>
                                    </div>
                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
