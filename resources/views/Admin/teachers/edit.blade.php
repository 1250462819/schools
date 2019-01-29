@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h> ویرایش معلم ها</h>
        </div>
        <form class="form-horizontal" action="{{route('teachers.update',['name'=>$name,'id'=>$teacher->id])}}" method="post">
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
                    <lable for="name" class="control-label">نام معلم</lable>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام معلم را وارد کنید" value="{{$teacher->name}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="PersonnelCode" class="control-label">کد پرسنلی</lable>
                    <input type="text" class="form-control" name="PersonnelCode" id="PersonnelCode" placeholder=" کد پرسنلی را وارد کنید" value="{{$teacher->PersonnelCode}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="family" class="control-label">نام خانوادگی معلم</lable>
                    <input type="text" class="form-control" name="family" id="family" placeholder="نام خانوادگی معلم را وارد کنید" value="{{$teacher->family}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="birthday" class="control-label">تاریخ تولد معلم</lable>
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="تاریخ تولد معلم را وارد کنید" value="{{$teacher->birthday}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="PersonalCode" class="control-label"> کد ملی معلم</lable>
                    <input type="text" class="form-control" name="PersonalCode" id="PersonalCode" placeholder="کد ملی معلم را وارد کنید" value="{{$teacher->PersonalCode}}">
                </div>
            </div>
            {{--<div class="form-group">--}}
                {{--<div class="col-sm-12">--}}
                    {{--<lable for="classroom_id" class="control-label">کلاس</lable>--}}
                    {{--<select class="form-control" name="classroom_id" id="classroom_id">--}}
                        {{--@foreach(\App\Classroom::latest()->get()->where('school.name','=', $name) as $classroom)--}}
                            {{--<option value="{{$classroom->id}}" > {{$classroom->name}}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}
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