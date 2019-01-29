@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h> ویرایش مدرسه</h>
        </div>
        <form class="form-horizontal" action="{{route('schools.update',['id'=>$school->id])}}" method="post">
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
                    <lable for="name" class="control-label">نام مدرسه</lable>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام را وارد کنید" value="{{$school->name}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="phone" class="control-label">شماره تلفن</lable>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="شماره را وارد کنید" value="{{$school->phone}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="slug" class="control-label">اسلاگ</lable>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="اسلاگ را وارد کنید" value="{{$school->slug}}">
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