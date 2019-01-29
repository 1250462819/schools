@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h> ویرایش آدرس</h>
        </div>
        <form class="form-horizontal" action="{{route('address.update',['id'=>$address->id])}}" method="post">
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
                    <lable for="city" class="control-label">شهر</lable>
                    <input type="text" class="form-control" name="city" id="city" placeholder="شهر را وارد کنید" value="{{$address->city}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="street" class="control-label">خیابان</lable>
                    <input type="text" class="form-control" name="street" id="street" placeholder="خیابان را وارد کنید" value="{{$address->street}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="province" class="control-label">کوچه</lable>
                    <input type="text" class="form-control" name="province" id="province" placeholder="کوچه را وارد کنید" value="{{$address->province}}">
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
                    <button type="submit" class="btn btn-danger"> ارسال</button>
                </div>
            </div>
        </form>
    </div>
@endsection