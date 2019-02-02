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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">پنل ادمین</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-left">
                <a href="/logout" class="btn btn-sm btn-warning" style="margin:15px">خروج از پنل کاربری</a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="/admin/schools">مدرسه ها</a></li>
                <li><a href="/admin/users">کاربران</a></li>

            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="page-header head-section">
                <div class="well">
                    <h>جست و جو</h>
                    <div class="input-group">
                        <form class="search-form" action="/search" method="get">
                            <input type="text" style="width:79%" name="search" class="form-control">
                            <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="btn-group">
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">اضافه کردن افراد</a>
                </div>

            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>نام و خانوادگی</th>
                        <th>تاریخ تولد</th>
                        <th>کدملی</th>
                        <th>مدرسه</th>
                        <th>ایمیل</th>
                        <th>پسورد</th>
                        <th>نقش</th>
                        <th>تنظیمات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr>
                            <td><a href="#">{{ $user->name }} </a></td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->code }}</td>
                            <td>{{ $user->school->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->role}}</td>
                            <td>
                                <form action="{{route('users.destroy',['id'=>$user->id])}}" method="post">
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <div class="btn-group btn-group-xs">
                                        <a href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-primary">ویرایش</a>
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

    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/admin.js"></script>
</body>
</html>






















