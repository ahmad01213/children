<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <title>إدارة الموقع</title>
</head>
<body style="width: 100vw;height: 100vh;direction: rtl">
<div class="container-fluid  d-flex flex-row  h-100 w-100">
    <div class="w-75 float-left" style="margin-right: 25vw">
        @yield('content')
    </div>
    <div class="d-flex flex-column h-100 w-25 bg-dark  " style="position:fixed">
        <img class="w-100 h-20"  src="{{asset('assets/img/side_header.png')}}">
        <button type="button" onclick="window.location='{{ url('admin/users') }}'"  class="btn btn-light  m-3 ">الأعضاء</button>

        <button type="button" onclick="window.location='{{ url('admin/messages')}}'"  class="btn btn-outline-light  m-3 ">الرسائل</button>
        <button type="button" class="btn btn-outline-light m-3" onclick="window.location='{{ url('logoutUser')}}'">تسجيل الخروج</button>
    </div>
</div>
<script src="https://use.fontawesome.com/0164207e52.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
