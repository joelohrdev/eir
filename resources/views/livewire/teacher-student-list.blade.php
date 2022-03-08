<div>
    <ul role="list" class="bg-white shadow sm:rounded-md divide-y divide-gray-200 mb-5">
        @forelse($students as $student)
            <livewire:single-student :key="$student->id" :student="$student" />
        @empty
            <li>No Students added</li>
        @endforelse
    </ul>
    {{ $students->links() }}
</div>
