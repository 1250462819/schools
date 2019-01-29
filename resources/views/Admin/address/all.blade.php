@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h>آدرس</h>
            <a href="{{ route('address.create') }}" class="btn btn-sm btn-primary">اضافه کردن آدرس</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>شهر</th>
                    <th>خیابان</th>
                    <th>کوچه</th>
                    <th>مدرسه</th>
                    <th>تنظیمات</th>

                </tr>
                </thead>
                <tbody>
                @foreach($addresses as $address)

                    <tr>
                        <td>{{ $address->city }}</td>
                        <td>{{ $address->street }}</td>
                        <td>{{ $address->province }}</td>
                        <td>{{ $address->school->name}}</td>
                        <td>
                            <form action="{{route('address.destroy',['id'=>$address->id])}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                <div  class="btn-group btn-group-xs">
                                    <a href="{{route('address.edit',['id'=>$address->id])}}" class="btn btn-primary">ویرایش</a>
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
@endsection