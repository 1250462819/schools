<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>وبسایت لاراول</title>

    <link rel="stylesheet" href="/css/admin.css">
    <link href="multiple-select.css" rel="stylesheet"/>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">پنل ادمین</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-left">
                <a href="/logout" class="btn btn-sm btn-warning" style="margin: 15px">خروج از پنل کاربری</a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">

            </ul>
        </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h>ایجاد معلم</h>
        </div>
        <form class="form-horizontal" action="{{route('teachers.store',['name'=>$name])}}" method="post">
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
                    <lable for="user_id" class="control-label">معلم</lable>
                    <select class="form-control" name="user_id" id="user_id">
                        @foreach(\App\User::latest()->get()->where( 'role','=','معلم' )->where( 'school.name','=', $name ) as $classroom)
                            <option value="{{$classroom->id}}" > {{$classroom->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{--<div class="form-group">--}}
                {{--<div class="col-sm-12">--}}
                    {{--<lable for="family" class="control-label">نام خانوادگی معلم</lable>--}}
                    {{--<input type="text" class="form-control" name="family" id="family" placeholder="نام خانوادگی معلم را وارد کنید" value="{{old('family')}}">--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="form-group">
                <div class="col-sm-12">
                    <lable for="PersonnelCode" class="control-label">کد پرسنلی</lable>
                    <input type="text" class="form-control" name="PersonnelCode" id="PersonnelCode" placeholder=" کد پرسنلی را وارد کنید" value="{{old('PersonnelCode')}}">
                </div>
            </div>
            {{--<div class="form-group">--}}
                {{--<div class="col-sm-12">--}}
                    {{--<lable for="birthday" class="control-label">تاریخ تولد معلم</lable>--}}
                    {{--<input type="text" class="form-control" name="birthday" id="birthday" placeholder="تاریخ تولد معلم را وارد کنید" value="{{old('birthday')}}">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="col-sm-12">--}}
                    {{--<lable for="PersonalCode" class="control-label"> کد ملی معلم</lable>--}}
                    {{--<input type="text" class="form-control" name="PersonalCode" id="PersonalCode" placeholder="کد ملی معلم را وارد کنید" value="{{old('PersonalCode')}}">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="col-sm-12">--}}
                    {{--<lable for="classroom_id" class="control-label">کلاس</lable>--}}
                    {{--<select class="form-control" name="classroom_id" id="classroom_id">--}}
                        {{--@foreach(\App\Classroom::latest()->get()->where('school.name','=', $name) as $classroom)--}}
                            {{--<option value="{{$classroom->id}}" > {{$classroom->name}}</option>--}}
                            {{--<select multiple="multiple">--}}
                                {{--<option value="{{$classroom->id}}" selected="selected">{{$classroom->name}}</option>--}}
                            {{--</select>--}}

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


    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/admin.js"></script>
<script src="multiple-select.js"></script>
<script>
    $('select').multipleSelect();
</script>
</body>
</html>
