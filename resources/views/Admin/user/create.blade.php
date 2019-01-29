@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h>ایجادکاربر</h>
           </div>
        <form class="form-horizontal" action="{{route('users.store')}}" method="post">
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
                    <lable for="name" class="control-label">نام و نام خانوادگی</lable>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام ونام خانوادگی را وارد کنید" value="{{old('name')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="birthday" class="control-label">تاریخ تولد</lable>
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="تاریخ تولد را وارد کنید" value="{{old('birthday')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="code" class="control-label">کدملی</lable>
                    <input type="text" class="form-control" name="code" id="code" placeholder="کدملی را وارد کنید" value="{{old('code')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="school_id" class="control-label">مدرسه</lable>
                    <select class="form-control" name="school_id" id="school_id">
                        @foreach(\App\School::latest()->get() as $school)
                            <option value="{{$school->id}}" > {{$school->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="email" class="control-label">ایمیل</lable>
                    <input type="text" class="form-control" name="email" id="email" placeholder="ایمیل را وارد کنید" value="{{old('email')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="password" class="control-label">پسورد</lable>
                    <input type="text" class="form-control" name="password" id="password" placeholder="پسورد را وارد کنید" value="{{old('password')}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="role" class="control-label">نقش</lable>
                    <input type="text" class="form-control" name="role" id="role" placeholder="نقش را وارد کنید" value="{{old('role')}}">
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