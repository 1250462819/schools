@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h> ویرایش کاربر</h>
        </div>
        <form class="form-horizontal" action="{{route('users.update',['id'=>$user->id])}}" method="post">
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
                    <lable for="name" class="control-label">نام ونام خانوادگی</lable>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام و نام خانوادگی را وارد کنید" value="{{$user->name}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="birthday" class="control-label">تاریخ تولد</lable>
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="تاریخ تولد را وارد کنید" value="{{$user->birthday}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="code" class="control-label">کدملی</lable>
                    <input type="text" class="form-control" name="code" id="code" placeholder="اسلاگ را وارد کنید" value="{{$user->code}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="email" class="control-label">ایمیل</lable>
                    <input type="text" class="form-control" name="email" id="email" placeholder="ایمیل را وارد کنید" value="{{$user->email}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="password" class="control-label">پسورد</lable>
                    <input type="text" class="form-control" name="password" id="password" placeholder="پسورد را وارد کنید" value="{{$user->password}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="role" class="control-label">نقش</lable>
                    <input type="text" class="form-control" name="role" id="role" placeholder="نقش را وارد کنید" value="{{$user->role}}">
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