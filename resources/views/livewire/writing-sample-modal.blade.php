<div class="p-10">
    <h1 class="text-6xl font-semibold">Hello Modal</h1>
    <form method="POST" >
        @csrf
        @trix(\App\Student::class, 'content')
        <input type="submit">
    </form>
</div>
