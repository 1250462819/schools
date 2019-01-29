@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h>ایجاد درس</h>
        </div>
        <form class="form-horizontal" action="{{route('lesson.store',['class'=>$class,'name'=>$name])}}" method="post">
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
                    <lable for="name" class="control-label">نام درس</lable>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام درس را وارد کنید" value="{{old('name')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="unit" class="control-label">تعداد واحد</lable>
                    <input type="text" class="form-control" name="unit" id="unit" placeholder=" تعداد واحد را وارد کنید" value="{{old('unit')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="classroom_id" class="control-label">کلاس</lable>
                    <select class="form-control" name="classroom_id" id="classroom_id">
                        @foreach(\App\Classroom::latest()->get()->where('name','=', $class)
                                        ->where('school_id','=',$name) as $classroom)
                            <option value="{{$classroom->id}}" > {{$classroom->name}}</option>
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