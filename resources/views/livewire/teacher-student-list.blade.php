<div>
    @foreach($students as $student)
        {{ $student->last_name }}, {{ $student->first_name }} | Word Count: {{ str_word_count($student->first_writing) }}<br />
    @endforeach
</div>
