@extends('layouts.admin')
@section('content')
    <form action="{{url('admin/users/update',['id'=>$row->id])}}"  method="POST" >
  @csrf
    <div id ="editeuser" class="d-flex flex-column h-100 w-80 " style="width: 900px;margin:  auto ; margin-top: 50px">
        <form>
            <div class="inputheader">
                بيانات الطفل / الطفلة
            </div>
            <div class="row">
                <div class="col">
                    <input required type="text" class="form-control" id="email" placeholder="اسم الطفل / الطفلة " name="name" value="{{$row->name}}">
                </div>
                <div class="col">
                    <input required type="text" class="form-control" placeholder=" السجل المدني " name="registry" value="{{$row->registry}}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input required type="text" class="form-control" id="email" placeholder=" تاريح الميلاد" name="birth" value="{{$row->birth}}">
                </div>
                <div class="col">
                    <input required type="text" class="form-control" placeholder=" الجنسية " name="nationality" value="{{$row->nationality}}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input required type="text" class="form-control" id="email" placeholder="العنوان " name="address" value="{{$row->address}}">
                </div>
                <div class="col">
                    <input required type="text" class="form-control" placeholder="  هاتف المنزل" name="phone" value="{{$row->phone}}">
                </div>
            </div>
            <div class="inputheader">
                بيانات الأب
            </div>
            <div class="row">
                <div class="col">
                    <input required type="text" class="form-control" id="email" placeholder=" اسم الأب" name="f_name" value="{{$row->f_name}}">
                </div>
                <div class="col">
                    <input required type="text" class="form-control" placeholder=" جواله " name="f_phone" value="{{$row->f_phone}}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input required type="text" class="form-control" id="email" placeholder="عمله " name="f_work" value="{{$row->f_work}}">
                </div>
                <div class="col">
                    <input required type="text" class="form-control" placeholder=" المستوي التعليمي " name="f_qualfications" value="{{$row->f_qualifications}}">
                </div>
            </div>
            <div class="inputheader">
                بيانات الأم
            </div>
            <div class="row">
                <div class="col">
                    <input required type="text" class="form-control" id="email" placeholder=" اسم الأم " name="m_name" value="{{$row->m_name}}">
                </div>
                <div class="col">
                    <input required type="text" class="form-control" placeholder=" جوالها " name="m_phone" value="{{$row->m_phone}}">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <input required type="text" class="form-control" placeholder=" عملها " name="m_work" value="{{$row->m_work}}">
                </div>
                <div class="col">
                </div>

            </div>

            <div class="row">

                <div class="col">
                    <textarea type="text" class="form-control h-30" style="height: 100px" placeholder=" الأمراض التي يعاني منها الطفل " name="diseases" >{{$row->diseases}}</textarea>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <select class="form-control m-3" name="status" id="sel1">
                        <option value="1" selected="{{$row->status == "1"? 'selected':''}}">مؤكد</option>
                        <option value="0" selected="{{$row->status == "0"? 'selected':''}}">غير مؤكد</option>
                    </select>
                </div>
            </div>
            <input required  type="submit" value=" تعديل" class="btn" style="margin: 3vw;background-color: #6F1E51;color: white;border-radius: 1vw;padding:1vw;font-weight: normal;font-size: 1.5vw">

        </form>
    </div>
    </form>
    <style>
       #editeuser input,#editeuser textarea{
            margin: 20px;
        }
       .inputheader{
           background-color: #6F1E51;
           text-align: center;
           color: white;
           width: 15vw;
           margin: auto;
           font-weight: bold;
           border-radius: 1.5vw;
           padding: 10px;
           font-size: 1vw;
           height: 3vw ;
       }
        option{
            outline: none;
            border: none;
            -webkit-appearance: none;
        }
    </style>
    @endsection
