<div>
    {{ Auth::User()->name }}<br />
   @foreach($details as $d)
       Email: {{ $d->email }}<br />
       Teacher ID: {{ $d->teacher_id }}<br />
       Grade: {{ $d->grade }}
   @endforeach
</div>
