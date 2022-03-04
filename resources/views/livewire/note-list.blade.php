<div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
    <div class="flow-root">
        <ul role="list" class="-my-5 divide-y divide-gray-200">
            @forelse($notes as $note)
                <li class="py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">{{ $note->created_at->format('m/d/Y') }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 truncate">{{ str_word_count($note->meeting_note) }} Words</p>
                        </div>
                    </div>
                </li>
            @empty
                <li class="py-4">
                    No notes have been added
                </li>
            @endforelse
        </ul>
    </div>
</div>
