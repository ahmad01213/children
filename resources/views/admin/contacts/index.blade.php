@extends('layouts.admin')
@section('content')
    <div class="card-body align-content-center" style="justify-content: space-around">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-4"></div>
                <div class="col-sm-12 col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-light table-bordered table-striped" role="grid"
                           aria-describedby="example2_info">
                        <thead>
                        <tr role="row" align="center" bgcolor="#696969">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                id                                aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">
                                الاسم
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">
                                الهاتف
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">
                                الايميل
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">
                                الرسالة
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">
                                التاريخ
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">
                                إجراءات
                            </th>







                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rows as $row)
                            <tr role="row" class="table table-light table-bordered table-striped" align="center">
                                <td tabindex="0" class="sorting_1">{{($row->id)}}</td>
                                <td tabindex="0" class="sorting_1">{{$row->name}}</td>
                                <td tabindex="0" class="sorting_1">{{$row->phone}}</td>

                                <td tabindex="0" class="sorting_1">{{$row->email}}</td>




                                <td tabindex="0" class="sorting_1">{{$row->message}}</td>

                                <td tabindex="0" class="sorting_1">{{$row->created_at}}</td>
                                <td align="center" tabindex="0" class="sorting_1" style="text-align: center;width: 200px;">
                                    <div class="container" style=" display: flex;justify-content:center;">

                                        <form action="{{ url('admin/messages/delete' , ['id' => $row->id]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit"  class="btn btn-danger order-delete" style="margin-right: 10px; height: 30px;font-size: 12px; " >
                                                حذف
                                            </button>
                                        </form>

                                        {{--                                        <a class="btn btn-danger order-delete" href="{{ route('users.destroy', ['user'=>$row->id]) }}" id="2" style="margin-right: 10px; height: 40px; border-radius: 15px">--}}
                                        {{--                                            حذف--}}
                                        {{--                                        </a>--}}

                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
