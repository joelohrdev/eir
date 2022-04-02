<div>
    <form wire:submit.prevent="save" wire:ignore>
        <div class="mt-2 grid grid-cols-3">
{{--            @foreach($teachers as $teacher)--}}
{{--                <div class="flex">--}}
{{--                    <div class="mr-3 flex items-center h-5">--}}
{{--                        <input wire:model="selectedTeachers.{{ $teacher->id }}" value="{{ $teacher->id }}" id="teacher{{ $teacher->id }}" name="teacher[]" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">--}}
{{--                    </div>--}}
{{--                    <div class="min-w-0 text-sm">--}}
{{--                        <label for="teacher{{ $teacher->id }}" class="font-medium text-gray-700 select-none">{{ $teacher->name }}</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
        </div>
        <div
            wire:ignore
            x-data
            @trix-blur="$dispatch('change', $event.target.value)"
            wire:model.lazy="body"
        >
            <input id="x" value="editor content" type="hidden">
            <trix-editor input="x" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></trix-editor>
        </div>
        <x-button class="mt-5" type="submit">{{ __('Save') }}</x-button>
    </form>
</div>
