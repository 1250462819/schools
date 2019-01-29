@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h> ویرایش کلاس</h>
        </div>
        <form class="form-horizontal" action="{{route('classroom.update',['name'=>$name,'id'=>$classroom->id])}}" method="post">
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
                    <lable for="name" class="control-label">نام کلاس</lable>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام کلاس را وارد کنید" value="{{$classroom->name}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="section" class="control-label">نام مقطع</lable>
                    <input type="text" class="form-control" name="section" id="section" placeholder="مقطع را وارد کنید" value="{{$classroom->section}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="field" class="control-label">رشته</lable>
                    <input type="text" class="form-control" name="field" id="field" placeholder=" رشته تحصیلی را وارد کنید" value="{{$classroom->field}}">
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