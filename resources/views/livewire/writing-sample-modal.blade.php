<div
    x-init="Livewire.on('firstWritingAdded')"
    class="p-10">
    <div>
        <h1 class="text-xl font-semibold">{{ $student->first_name }}'s Writing Sample</h1>
    </div>
    <form wire:submit.prevent="addFirstWriting" method="POST">
        @csrf
        <div class="mt-1">
            <input id="{{ $trixId }}" name="content" value="{{ $value }}" type="hidden">
            <trix-editor wire:ignore input="{{ $trixId }}" :value="$first_writing"></trix-editor>
        </div>
        <button type="submit" wire:click="$emit('closeModal')" class="mt-5 inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
    </form>
</div>

<script>
    var trixEditor = document.getElementById("{{ $trixId }}")

    addEventListener("trix-blur", function(event) {
        @this.set('value', trixEditor.getAttribute('value'))
    })
</script>
