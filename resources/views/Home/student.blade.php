<h1>
    @foreach($students as $student)
        <h>{{$student->user->name}}</h>
        <br>
    @endforeach
</h1>