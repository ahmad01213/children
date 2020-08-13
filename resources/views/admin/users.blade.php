@extends('layouts.admin')
@section('content')
    @if(session()->has('message'))
        <div  class="alert alert-success"  style="text-align: right; margin: 50px 50px 50px 50px;">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="d-flex flex-column h-100 w-100  ">
        <div class="container text-center">
            <table class="table table-light table-bordered table-striped">
                <thead>
                <tr>
                    <th>الاسم</th>
                    <th>السجل</th>
                    <th>الميلاد</th>
                    <th>الجنسية</th>
                    <th>العنوان</th>
                    <th>الهاتف</th>
                    <th>الاب</th>
                    <th>الأم</th>
                    <th>إجراء</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->birth}}</td>
                        <td>{{$row->nationality}}</td>
                        <td>{{$row->address}}</td>
                        <td>056265465</td>
                        <td>{{$row->f_name}}</td>
                        <td>{{$row->m_name}}</td>
                        <td style="height: 30px">
                            <!-- Call to action buttons -->
                            <ul class="list-inline mx-auto container">

                                <li class="list-inline-item m-0">
                                    <button class="btn btn-success btn-sm rounded-0" onclick="window.location='{{ url('admin/users/edite' , ['id' => $row->id]) }}'" type="button" data-toggle="tooltip"
                                            data-placement="top" title="تعديل"><i class="fa fa-edit"></i></button>
                                </li>
                                <li class="list-inline-item m-0">
                                    <form action="{{ url('admin/users/delete' , ['id' => $row->id]) }}"
                                          method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    <button value=""  class="btn  btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip"
                                            data-placement="top" title="حذف"><i class="fa fa-trash"></i>
                                    </button>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
