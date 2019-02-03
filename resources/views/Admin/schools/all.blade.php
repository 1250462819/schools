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
            <div class="topheader">
            time
            </div>

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
                <h>مدارس</h>

                <div class="btn-group">
                    <a href="{{ route('schools.create') }}" class="btn btn-sm btn-primary">اضافه کردن مدرسه ها</a>
                    <a href="{{ route('address.create') }}" class="btn btn-sm btn-info">اضافه کردن آدرس</a>
                </div>

            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>نام مدرسه</th>
                        <th>تلفن</th>
                        <th>تنظیمات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schools as $school)

                        <tr>
                            {{--<td><a href="{{$school->name}}/classroom">{{ $school->name }} </a></td>--}}
                            <td><a href="school/{{$school->name}}">{{ $school->name }} </a></td>
                            <td>{{ $school->phone }}</td>
                            <td>
                                <form action="{{route('schools.destroy',['id'=>$school->id])}}" method="post">
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <div  class="btn-group btn-group-xs">
                                        <a href="{{route('schools.edit',['id'=>$school->id])}}" class="btn btn-primary">ویرایش</a>
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
<script>
week= new Array("يكشنبه","دوشنبه","سه شنبه","چهارشنبه","پنج شنبه","جمعه","شنبه")
months = new Array("فروردين","ارديبهشت","خرداد","تير","مرداد","شهريور","مهر","آبان","آذر","دي","بهمن","اسفند");
a = new Date();
d= a.getDay();
day= a.getDate();
month = a.getMonth()+1;
year= a.getYear();
year = (year== 0)?2000:year;
(year<1000)? (year += 1900):true;
year -= ( (month < 3) || ((month == 3) && (day < 21)) )? 622:621;
switch (month) {
case 1: (day<21)? (month=10, day+=10):(month=11, day-=20); break;
case 2: (day<20)? (month=11, day+=11):(month=12, day-=19); break;
case 3: (day<21)? (month=12, day+=9):(month=1, day-=20); break;
case 4: (day<21)? (month=1, day+=11):(month=2, day-=20); break;
case 5: 
case 6: (day<22)? (month-=3, day+=10):(month-=2, day-=21); break;
case 7:
case 8:
case 9: (day<23)? (month-=3, day+=9):(month-=2, day-=22); break;
case 10:(day<23)? (month=7, day+=8):(month=8, day-=22); break;
case 11:
case 12:(day<22)? (month-=3, day+=9):(month-=2, day-=21); break;
default: break;
}
document.getElementsByClassName('topheader')[0].innerHTML = " "+week[d]+" "+day+" "+months[month-1]+" "+ year
console.log(" "+week[d]+" "+day+" "+months[month-1]+" "+ year);
</script>

</body>
</html>






















