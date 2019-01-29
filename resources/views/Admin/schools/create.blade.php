@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h>ایجاد مدرسه</h>
            <a href="{{ route('schools.create') }}" class="btn btn-sm btn-primary">اضافه کردن مدرسه</a>
        </div>
        <form class="form-horizontal" action="{{route('schools.store')}}" method="post">
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
                <lable for="name" class="control-label">نام مدرسه</lable>
                <input type="text" class="form-control" name="name" id="name" placeholder="نام را وارد کنید" value="{{old('name')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                <lable for="phone" class="control-label">شماره تلفن</lable>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="شماره را وارد کنید" value="{{old('phone')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="slug" class="control-label">اسلاگ</lable>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="اسلاگ را وارد کنید" value="{{old('slug')}}">
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