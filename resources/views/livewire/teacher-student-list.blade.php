<div class="bg-white shadow overflow-hidden sm:rounded-md">
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
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
