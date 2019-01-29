@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h>درس های هر معلم را مشخص کنید</h>
        </div>
        <form class="form-horizontal" action="{{route('lesson_teacher.store',['name'=>$name])}}" method="post">
            {{csrf_field()}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>

            @endif


            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="lesson_id" class="control-label">درس</lable>
                    <select class="form-control" name="lesson_id" id="lesson_id">

                        @foreach(\App\Lesson::latest()->get()->where('classroom.school.name','=', $name) as $lesson)
                            <option value="{{$lesson->id}}" >{{$lesson->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="classroom_id" class="control-label">معلم</lable>
                    <select class="form-control" name="teacher_id" id="teacher_id">
                        @foreach(\App\Teacher::latest()->get()->where('school.name','=', $name) as $teacher)
                            <option value="{{$teacher->id}}" > {{$teacher->user->name}} </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger"> ارسال</button>
                </div>
            </div>
        </form>
    </div>
@endsection