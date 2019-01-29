{{--@extends('Admin.master')--}}
{{--@section('content')--}}
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>وبسایت لاراول</title>

    <link rel="stylesheet" href="/css/admin.css">
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
                <li class="active"><a href="/admin/{{$name}}/classroom">کلاس ها</a></li>
                <li><a href="/admin/{{$name}}/students">دانش آموزها</a></li>
                <li><a href="/admin/{{$name}}/teachers">معلم ها</a></li>
            </ul>
        </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h>کلاس ها</h>

            <div class="btn-group">
               <a href="{{route('classroom.create',['name'=>$name])}}" class="btn btn-sm btn-primary">اضافه کردن کلاس</a>
            </div>

        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام کلاس</th>
                    <th>مقطع</th>
                    <th>رشته</th>
                    <th>مدرسه</th>
                    <th>وضعیت</th>
                </tr>
                </thead>
                <tbody>

                @foreach($classrooms as $classroom)
                    <tr>
                        <td><a href="../{{$classroom->name}}/{{$classroom->school->id}}/lesson">{{ $classroom->name }} </a></td>
                        <td>{{ $classroom->section }}</td>
                        <td>{{ $classroom->field }}</td>
                        <td>{{ $classroom->school->name }}</td>
                        <td>
                            {{--<form action="classroom/{{$classroom->id}}" method="post">--}}
                            <form action="{{route('classroom.destroy',['name'=>$classroom->school->name,'id'=>$classroom->id])}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                <div  class="btn-group btn-group-xs">
                                    <a href="{{route('classroom.edit',['name'=>$classroom->school->name,'id'=>$classroom->id])}}" class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>

                        </td>
                    </tr>


                @endforeach
                </tbody>
            </table>
        </div>
    </div>
{{--@endsection--}}

    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/admin.js"></script>
</body>
</html>

