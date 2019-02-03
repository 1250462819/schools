<h1>
    @foreach($classrooms as $classroom)
        <h>{{$classroom->name}}-{{$classroom->section}}-{{$classroom->field}}</h>
        <br>
    @endforeach
</h1>