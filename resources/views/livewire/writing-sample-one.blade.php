<div>
    <form wire:submit.prevent="save" wire:ignore>
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
