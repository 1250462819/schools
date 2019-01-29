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
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="page-header head-section">
                <h>معلم ها</h>
                @foreach($results as $result)
                @endforeach
                <div class="btn-group">
                     <a href="{{route('teacher.create',['name'=>$result->school_name,'class'=>$class])}}" class="btn btn-sm btn-primary">اضافه کردن معلم ها</a>

            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>نام معلم</th>
                        <th>نام خانوادگی معلم</th>
                        <th>شماره پرسنلی</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($results as $result)
                        <tr>
                            <td>{{ $result->teacher_name }}</td>
                            <td>{{ $result->family }}</td>
                            <td>{{ $result->PersonnelCode }}</td>
                            {{--<td>{{ $result->classroom}}</td>--}}
                            <td>
                                <form action="{{route('classroom_teacher.destroy',['name'=>$result->school_name,'id'=>$result->id])}}" method="post">
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <div  class="btn-group btn-group-xs">
                                        {{--<a href="{{route('classroom_teacher.edit',['name'=>$name,'id'=>$result->id])}}" class="btn btn-primary">ویرایش</a>--}}
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

