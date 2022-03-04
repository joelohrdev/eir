<div class="bg-white shadow sm:rounded-md">
    <ul role="list" class="divide-y divide-gray-200">
        @forelse($students as $student)
            <livewire:single-student :key="$student->id" :student="$student" />
        @empty
            <li>No Students added</li>
        @endforelse
    </ul>
</div>
