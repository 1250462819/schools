@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h> ویرایش معلم های کلاس</h>
        </div>
        <form class="form-horizontal" action="{{route('classroom_teacher.update',['name'=>$name,'id'=>$id])}}" method="post">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>

            @endif

            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="classroom_id" class="control-label">کلاس</lable>
                    <select class="form-control" name="classroom_id" id="classroom_id">
                        @foreach(\App\Classroom::latest()->get()->where('school.name','=', $name) as $classroom)
                            <option value="{{$classroom->id}}" > {{$classroom->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="classroom_id" class="control-label">معلم</lable>
                    <select class="form-control" name="teacher_id" id="teacher_id">
                        @foreach(\App\Teacher::latest()->get()->where('school.name','=', $name) as $teacher)
                            <option value="{{$teacher->id}}" > {{$teacher->name}} {{$teacher->family}}</option>
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