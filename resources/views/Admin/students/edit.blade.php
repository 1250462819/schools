@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h> ویرایش دانش آموز</h>
        </div>
        <form class="form-horizontal" action="{{route('students.update',['name'=>$name,'id'=>$student->id])}}" method="post">
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
                    <lable for="name" class="control-label">نام دانش آموز</lable>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام دانش آموز را وارد کنید" value="{{$student->name}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="section" class="control-label">کد دانش آموزی</lable>
                    <input type="text" class="form-control" name="StudentCode" id="StudentCode" placeholder=" کد دانش آموزی را وارد کنید" value="{{$student->StudentCode}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="family" class="control-label">نام خانوادگی دانش آموز</lable>
                    <input type="text" class="form-control" name="family" id="family" placeholder="نام خانوادگی دانش آموز را وارد کنید" value="{{$student->family}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="birthday" class="control-label">تاریخ تولد دانش آموز</lable>
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="تاریخ تولد دانش آموز را وارد کنید" value="{{$student->birthday}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="PersonalCode" class="control-label"> کد ملی دانش آموز</lable>
                    <input type="text" class="form-control" name="PersonalCode" id="PersonalCode" placeholder="کد ملی دانش آموز را وارد کنید" value="{{$student->PersonalCode}}">
                </div>
            </div>
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
                    <lable for="school_id" class="control-label">مدرسه</lable>
                    <select class="form-control" name="school_id" id="school_id">
                        @foreach(\App\School::latest()->get()->where('name','=', $name) as $school)
                            <option value="{{$school->id}}" > {{$school->name}}</option>
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