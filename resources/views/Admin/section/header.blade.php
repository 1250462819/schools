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
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li><a href="#">Dashboard</a></li>--}}
                {{--<li><a href="#">Settings</a></li>--}}
                {{--<li><a href="#">Profile</a></li>--}}
                {{--<li><a href="#">Help</a></li>--}}
            {{--</ul>--}}
            {{--<form class="navbar-form navbar-right">--}}
                {{--<input type="text" class="form-control" placeholder="Search...">--}}
            {{--</form>--}}

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
                <li class="active"><a href="/admin/panel">پنل اصلی</a></li>
                <li><a href="/admin/schools">مدرسه ها</a></li>
                <li><a href="#">کلاس ها</a></li>
                <li><a href="#">درس ها</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">کاربران <span class="badge">0</span></a></li>
                <li><a href="">معلم ها <span class="badge">0</span></a></li>
                <li><a href="">دانش آموزان <span class="badge">0</span></a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">همه نظرات</a></li>
                <li><a href="">نظرات تایید نشده <span class="badge">0</span></a></li>
                {{--<li><a href="">Another nav item</a></li>--}}
            </ul>
        </div>