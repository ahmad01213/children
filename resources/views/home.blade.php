<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>مركز المفكر الصغير</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('icons.png')}}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap');        body {
            font-family: 'Cairo', sans-serif;
        }
        #parent{
            width: 80%;
            margin: 0 10%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            display: flex;
            text-align: right;
            min-height: 100vh;
            flex-direction: column;
            margin-left: auto;
        }
        body{
            height: 100%;
        }

        .child img{
            height: 20vh;
            width: 20vh;
            margin-left: auto;
            margin-right: 0;

        }
        input[type='submit']{
            height: 90px;
        }

        .child{
            height: 20vh;
            width: 96%;
            float: right;
            margin: 2%;
            text-align: right;
            display: flex;
            flex-direction: row;
        }
        #line {
            background-color: #587145;
            height: 0.4vh;
            width: 100%;
        }
        .child2  #carouselExampleIndicators{
            height: 60vh;
            border-radius: 5vw;
        }
        .child2{
            display: flex;
            flex-direction: column;
            text-align: center;
            margin-top: 10vh;
        }

        .child2 img{
            object-fit: cover;
            height: 60vh;

        }

        .carousel-inner .carousel-item > img{
            -webkit-animation: thing 50s;
            -o-animation:thing 50s;
            animation: thing 50s;
        }

        @keyframes thing {
            from{
                transform: scale(1,1);
            }
            to{
                transform: scale(1.3,1.3);
            }

        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .btn{
            margin: auto;
            width: 15vw;
            height: 7vh;
            text-align: center;
            font-size: 1.5vw;
            font-weight: bold;
            color: black;
            border: 1px solid #587145;
        }
        #reg:hover{
            background-color: #587145;
            color: white;
            cursor: pointer;
        }

        .registeration{
            display: flex;
        }
        #childd{
            width: 60%;
            margin: 2vw auto;
            border: 1px solid #ffe817;
            border-radius: 3vw ;
        }
        #childd input[type=text],input[type=number],input[type=date],textarea,#menu5 input[type=text]{
            height: 4vw;
            width: 60%;
            display: inline;
            margin: 2vw 20%;
            border: 1px solid black;
            outline: aqua;
            border-radius: 1vw ;
            background-color: white;
            text-indent: 3vw;
        }

        #menu5 input[type=text]{
            border-radius: 0.2vw ;
            border: 1px solid gray;
        }

        #menu5,#menu4{
            width: 70%;
            margin: 15%;
            padding: 2vw;
        }
        .registeration h6{
            width: 60%;
            margin: 2vw 20%;
            font-weight: bold;
            color: #587145;
        }
        .inputheader{
            background-color: #ffe817;
            width: 100%;
            text-align: center;
            border-radius: 3vw 3vw 0 0 ;
            color: black;
            font-weight: bold;
            font-size: 2vw;
            padding-top: 1vw;
            height: 6vw ;

        }
        .break{
            background-color: black;
            width: 90%;
            margin: 5%;
            height: .1vw;
        }



        input[type='radio'] {
            -webkit-appearance:none;
            width:1.5vw;
            height:1.5vw;
            margin-right: 20%;
            border:1px solid darkgray;
            border-radius:50%;
            outline:none;
            box-shadow:0 0 5px 0 gray inset;
        }

        input[type='radio']:hover {
            box-shadow:0 0 5px 0px orange inset;
        }
        input[type='submit']{
            font-size: 3vw;
            width: 20vw;
        }
        button[type='submit']{
            font-size: 3vw;
        }
        input[type='radio']:before {
            content:'';
            display:block;
            width:60%;
            height:60%;
            margin: 20% auto;
            border-radius:50%;
        }
        input[type='radio']:checked:before {
            background:green;
        }
        input[type=radio]:active{
            background-color: #587145;
        }

        .nav-item {
            border-radius: 2.3vw;
            height: 4vw;
            margin-left: 2vw;

        }
        .nav-item .active{
            border-radius: 2vw;
            height: 4vw;
            text-align: center;
            color: #587145;
            padding-left: 3vw;
            padding-right: 3vw
        }
        .nav-pills .nav-link.active{
            background-color: #587145;
            border: none;
        }

        .nav-pills .nav-link{
            color: gray;

        }
        .nav-pills .nav-link.active{
            color: white;
        }
        #menu3 h3{
            height: auto;
            width: 70%;
            line-height: 5vw;
            color: black;
            margin:5vw auto;
            border-radius: 3vw;
            background-color: #ffe817;
            padding: 2vw;
            text-align: center;
        }
        #home{
            background-color: white;
            border: none;
            margin: 1vw;
        }

        @media only screen and (min-width: 320px) and (max-width: 700px) {
            .nav-item{
                width: 80vw;
                margin: 3vw auto;
                height: 10vw;
            }
            #parent{
                width: 100vw;
                margin: 0;
            }

            .nav-item .active{
                border-radius: 2vw;
                height: 10vw;
                text-align: center;
                color: #587145;
                padding-left: 3vw;
                padding-right: 3vw
            }
            #childd input[type=text],input[type=number],input[type=date],textarea,#menu5 input[type=text]{
                height: 14vw;
                width: 90%;
                display: inline;
                margin: 2vw 5%;
                border: 1px solid black;
                outline: aqua;
                border-radius: 1vw ;
                background-color: white;
                text-indent: 3vw;
            }
            #childd{
                width: 90vw;
                margin: 3vw 5vw;
            }

            #menu5 input[type=text]{
                border-radius: 0.2vw ;
                border: 1px solid gray;
            }

            #menu5,#menu4{
                width: 70%;
                margin: 15%;
                padding: 2vw;
            }
            #menu4 h4{
                font-size: 3vw;
            }
            .registeration h6{

                font-weight: bold;
                color: #587145;
            }
            .registeration{
                width: 90vw;
                margin: 2vw 5vw;
            }
            .inputheader{
                background-color: #ffe817;
                width: 100%;
                text-align: center;
                border-radius: 3vw 3vw 0 0 ;
                color: black;
                font-weight: bold;
                font-size: 3vw;
                padding-top: 1vw;
                height: 10vw ;
            }
            #menu2{
                width: 100vw;
            }
            .break{
                background-color: black;
                width: 90%;
                margin: 5%;
                height: .1vw;
            }

            input[type='radio'] {
                -webkit-appearance:none;
                width:1.5vw;
                height:1.5vw;
                margin-right: 20%;
                border:1px solid darkgray;
                border-radius:50%;
                outline:none;
                box-shadow:0 0 5px 0 gray inset;
            }

            input[type='radio']:hover {
                box-shadow:0 0 5px 0px orange inset;
            }

            input[type='radio']:before {
                content:'';
                display:block;
                width:60%;
                height:60%;
                margin: 20% auto;
                border-radius:50%;
            }
            input[type='radio']:checked:before {
                background:green;
            }
            input[type=radio]:active{
                background-color: #587145;
            }


            .nav-pills .nav-link.active{
                background-color: #587145;
                border: none;
            }

            .nav-pills .nav-link{
                color: gray;

            }
            .nav-pills .nav-link.active{
                color: white;
            }
            #menu3 h3{
                height: auto;
                width: 90%;
                line-height: 5vw;
                color: black;
                margin:5vw auto;
                border-radius: 3vw;
                background-color: #ffe817;
                padding: 2vw;
                text-align: center;
                font-size: 3vw;
            }
            #home{
                background-color: white;
                border: none;
                margin: 1vw;
            }
        }
    </style>
</head>
<body style="direction: rtl">
<div id="parent">
    <div class="child">
        <div>
            <img src="{{asset('logo.JPG')}}"></div>
        <div style="color:#587145;margin-right: 2vw;margin-top: 1vw">
            <h3>مركز المفكر الصغير</h3>
            <div style="color:#587145;margin-right: 2vw">
                Al Mofakeer Center
            </div>
        </div>
        <img src="{{asset('back1.jpg')}}" style="width: 10vw;height: 10vw;margin-right: auto;margin-left: 0;border-radius: 5vw">
    </div>
    @if(session()->has('message'))
        <div  class="alert alert-success"  style="text-align: right; margin: 50px 50px 50px 50px;">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container ">
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills text-center" role="tablist" style="text-align: center">

            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#menu1"><h3>الرئيسية</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " data-toggle="pill" href="#menu2"><h3>التسجيل</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " data-toggle="pill" href="#menu3"><h3>رؤيتنا</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu4"><h3>من نحن</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu5"><h3>تواصل معنا</h3></a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="menu1" class="container tab-pane active"><br>
                <div class="child2">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('assets/img/1.jpeg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/img/2.jpeg')}}" alt="Socond slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/img/3.jpeg')}}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/img/4.jpeg')}}" alt="Forth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/img/5.jpeg')}}" alt="Fifth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/img/6.jpeg')}}" alt="First slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu2" class="container tab-pane "><br>
                <div id="child3">
                    <form action="{{url('admin/users/store')}}"  method="POST" >
                        @csrf
                        <div >
                            <div class="registeration">
                                <div id="childd">
                                    <div class="inputheader">
                                        بيانات الطفل / الطفلة
                                    </div>`
                                    <input required type="text" name="name" placeholder="اسم الطفل / الطفلة">
                                    <input required type="number" name="registry" placeholder="السجل المدني">
                                    <input required placeholder="تاريخ الميلاد" name="birth" class="textbox-n" type="text" onfocus="(this.type='date')" id="date">
                                    <input required type="text" name="nationality" placeholder="الجنسية">
                                    <input required type="text" name="address" placeholder="العنوان ( مكان السكن )">
                                    <input required type="number" name="phone" placeholder="هاتف المنزل">
                                </div>
                            </div>
                            <div class="registeration">
                                <div id="childd">
                                    <div class="inputheader">
                                        بيانات الوالدين
                                    </div>
                                    <input required type="text" name="f_name" placeholder="اسم الأب ">
                                    <input required type="number" name="f_phone" placeholder="جواله">
                                    <input required type="text"  name="f_work" placeholder="عمله" >
                                    <input required type="text" name="f_qualifications" placeholder="المستوى التعليمي ">
                                    <div class="break"></div>
                                    <input required type="text" name="m_name" placeholder="اسم الأم ">
                                    <input required type="number" name="m_phone" placeholder="جوالها">
                                    <input required type="text" name="m_work" placeholder="عملها">
                                    <h6>
                                        هل يعاني الطفل / الطفلة من أمراض ؟
                                    </h6>
                                    <div>
                                        <input  type="radio" id="no" name="status" value="1">
                                        <label for="no" >لا</label><br>
                                        <input  type="radio" id="yes" name="status" value="0">
                                        <label for="yes">نعم</label><br>
                                    </div>

                                    <textarea id="ills" type="text" style="height: 10vw;width:80%;margin:2vw 10%;display: none" placeholder="اكتب الامراض التي يعاني منها الطفل / الطفلة" ></textarea>

                                </div>
                            </div>
                            <div class="registeration">
                                <div id="childd">
                                    <div class="inputheader">
                                        الموافقة علي الشروط
                                    </div>
                                    <div style="color:black">
                                        <p style="margin: 1vw;text-align: center">"سداد رسوم التسجيل بالمركز ( 3500 ريال ) تكون على ثلاث دفعات الأولى عند التسجيل ومقدارها ( 1000 ريال ) والثانية مع بداية الدراسة ومقدارها ( 1250 ريال ) والثالثة بعد شهر من بداية الدراسة وقدارها ( 1250 ريال ) ويحق للمستفيد استرجاع مبلغ الرسوم كاملاً قبل بدء الدراسة وفي حال انسحابه بعد مضي أسبوع من الدراسة يحق له استرجاع نصف المبلغ وبعد ذلك لا يحق له استرجاع أي مبلغ من المركز . *"</p>
                                    </div>
                                </div>
                            </div>
                            <input  type="submit" value="إنهاء التسجيل" class="btn" style="margin: 3vw;background-color: #587145;color: white;border-radius: 3vw;font-weight: normal;font-family: 'Akhbar MT';font-size: 3vw">
                        </div>
                    </form>
                </div>
            </div>
            <div id="menu3" class="container tab-pane fade text-center"><br>
                <h3 class="shadow">حلمي أن يكون لي جيل مختلف بكل تفاصيله جيل يطمح ولا يمل جيل يسعي أن يكون في المركز الأول دائما                </h3>
            </div>
            <div id="menu4" class="container tab-pane fade text-center border"><br>
                <h4 style="line-height: 5vw">
                    حلمي أن يكون لي جيل مختلف بكل تفاصيله جيل يطمح ولا يمل جيل يسعي أن يكون في المركز الأول دائما
                    حلمي أن يكون لي جيل مختلف بكل تفاصيله جيل يطمح ولا يمل جيل يسعي أن يكون في المركز الأول دائما
                    حلمي أن يكون لي جيل مختلف بكل تفاصيله جيل يطمح ولا يمل جيل يسعي أن يكون في المركز الأول دائما
                    حلمي أن يكون لي جيل مختلف بكل تفاصيله جيل يطمح ولا يمل جيل يسعي أن يكون في المركز الأول دائما
                </h4>
            </div>
            <div id="menu5" class="container tab-pane fade text-center border"><br>
                <form action="{{url('admin/messages/store')}}" autocomplete="off" method="POST">
                    @csrf
                    <input required type="text"  name="name" placeholder="الاسم" >
                    <input required type="text"  name="phone" placeholder="الجوال" >
                    <input required type="text"  name="email" placeholder="البريد الالكتروني" >
                    <input required type="text"  name="message" placeholder="الرسالة" >
                    <input  type="submit" class="btn btn-success text-white" style="margin: 3vw" name="f_work" value="إرسال">
                </form>
            </div>
        </div>

    </div>
</div>
</body>
<script >
    $('.carousel').carousel({
        pause: "false"
    });
    $('#reg').click(function () {
        $('.child2').css({"display":"none"});
        $('#home').css({"display":"flex"});
        $('#child3').css({"display":"flex","flex-direction":"column"});
        $('#reg').css({"display":"none"});
    });
    $('#home').click(function () {
        $('.child2').css({"display":"inline"});
        $('#home').css({"display":"none"});
        $('#child3').css({"display":"none","flex-direction":"column"});
        $('#reg').css({"display":"inline"});
    });

    $('#yes').click(function () {
        $('#ills').css({"display":"block"});
    });
    $('#no').click(function () {
        $('#ills').css({"display":"none"});
    });
</script>
</html>
