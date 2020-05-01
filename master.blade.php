<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
          integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <!-- font-->

    <link href="/files/fonts/css/fontiran.css" rel="stylesheet">

    <!-- menu & css*-->
    <link href="/files/css/menu.css" rel="stylesheet">
    <link href="/files/css/mastercss.css" rel="stylesheet">

    <!-- logo-->
    <link rel='icon' href='/files/img/logo3.png'>
    <!-- icon-->


    <link rel="stylesheet" type="text/css" href="/files/style/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href=" /files/style/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">


    @yield('css')
    <title>آبانتل | @yield('title')</title>
</head>
<body>

<div class="row topbox">

    {{--        <div class="col-md-6 text-right "  style="font-size: 15px" >--}}
    {{--       شنبه 12 اردیبهشت 1399 ،12:00--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6 text-left" style="font-size: 15px">--}}
    {{--            مریم خانی--}}
    {{--        </div>--}}
</div>
<div id="menu_area" class="menu-area" style="padding-left: 100px;margin-top: 20px" >
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu" style="padding: 0px;margin: 0px">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="active"><a href="#">خانه <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">کزارش ها</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class=""><a href="#">گزارش اصلی</a></li>
                                <li><a href="#">نظرسنجی</a></li>
                                <li><a href="#">انتقاد و پیشنهاد</a></li>
                                <li><a href="#">تیکتینگ</a></li>
                                <li><a href="#">پست صوتی</a></li>
                                <li><a href="#">صدورقبض</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">مانیتورینگ</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">وضعیت کانال</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">نمودارها</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">عملکرد داخلی ها</a></li>
                                <li><a href="#">مقایسه داخلی ها</a></li>
                                <li><a href="#">ساعت کاری</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">کاربران</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="{{route('user.create')}}">ثبت کاربر جدید</a></li>
                                <li><a href="{{route('user.index')}}">لیست کاربران</a></li>
                                <li><a href="{{route('user.group')}}">گروه کاربران</a></li>
                                <li><a href="{{route('user.authorisation')}}">افزودن سطح دسترسی</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">دفترتلفن</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="{{route('contacts.index')}}">دفترتلفن</a></li>
                                <li><a href="#">شماره های ویژه</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">نمابر</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">ارسال نمابر</a></li>
                                <li><a href="#">نمابرهای دریافتی</a></li>
                                <li><a href="#">نمابرهای ارسالی</a></li>
                                <li><a href="#">بایگانی</a></li>
                                <li><a href="#">داخلی نمابر</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">سیستم تلفنی</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">گزارش وضعیت</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">شماره های
                                        داخلی</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">SIP</a></li>
                                        <li><a href="#">IAX</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">تماس های ورودی</a></li>
                                <li><a href="#">تماس های خروجی</a></li>
                                <li><a href="#">IVR</a></li>
                                <li><a href="#">Trunk</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">گروه بندی</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">گروه داخلی</a></li>
                                        <li><a href="#">گروه کارت های شهری</a></li>
                                        <li><a href="#">گروه زنگ</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">فایل های صوتی</a></li>
                                <li><a href="#">آهنگ انتظار</a></li>
                                <li><a href="#">صف انتظار</a></li>
                                <li><a href="#">کدساز</a></li>
                                <li><a href="#">کدهای غیرمجاز</a></li>
                                <li><a href="#">ساعت های کاری</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">تنظیمات</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">شخصی سازی صفحه اصلی</a></li>
                                <li><a href="#">پشتیبان گیری</a></li>
                                <li><a href="#">قیمت گذاری</a></li>
                                <li><a href="#">برچسب گذاری امتیازات</a></li>
                                <li><a href="#">متغیر های سیستمی</a></li>
                                <li><a href="#">ساعت سیستم</a></li>

                            </ul>
                        </li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">تماس با ما</a></li>


                    </ul>
                    <form action="{{route('logout')}}" method="post" style="padding: 0px 50px">
                        @csrf
                        <button type="submit" class="btn btn-darkblue ">
                            <img src="/files/img/logout.png">
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid containerstyle ">
    <div class="row">

        <div class="col-md-12">
            <div class="card  cardstyle">

                <div class="row">
                    <div class="col-md-6">
                        <div class="pdbutton text-right">

                            @yield('headbutton')
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h5 class="title">
                            @yield('title')

                        </h5>

                    </div>
                </div>
                <hr>

                @yield('content')

            </div>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
            {{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
            {{--        crossorigin="anonymous"></script>--}}
            {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"--}}
            {{--        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"--}}
            {{--        crossorigin="anonymous"></script>--}}
            {{--<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"--}}
            {{--        integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k"--}}
            {{--        crossorigin="anonymous"></script>--}}


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
            <script src="/files/js/bootstrap-select.js"></script>


            <script type="text/javascript" charset="utf8" src="/files/style/jquery.dataTables.js"></script>
            <script type="text/javascript" charset="utf8" src="/files/style/jquery.dataTables.min.js"></script>
            <script type="text/javascript" charset="utf8" src="/files/style/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript" charset="utf8"
                    src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
            <script>

                $(document).ready(function () {
                    $('#dt').DataTable({

                        "language": {
                            select: {
                                rows: {
                                    _: "",
                                    1: ""
                                },
                            },
                            "sProcessing": "Procesando...",
                            "sLengthMenu": " _MENU_ ",
                            "sZeroRecords": "",
                            "sEmptyTable": "رکوردی برای نمایش وجود ندارد",
                            "sInfo": "",
                            "sInfoEmpty": "",
                            "sInfoFiltered": "",
                            "sInfoPostFix": "",
                            "sSearch": "جستجو:",
                            "sUrl": "",
                            "sInfoThousands": ",",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                "sNext": "بعدی",
                                "sPrevious": "قبلی"
                            },
                            "oAria": {
                                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            }
                        }

                    });
                });
                // $(document).ready(function () {
                //     $('#dt').DataTable({
                //         responsive: true,
                //
                //         "language": {
                //             "sProcessing": "Procesando...",
                //             "sLengthMenu": " _MENU_ ",
                //             "sZeroRecords": "",
                //             "sEmptyTable": "رکوردی برای نمایش وجود ندارد",
                //             "sInfo": "",
                //             "sInfoEmpty": "",
                //             "sInfoFiltered": "",
                //             "sInfoPostFix": "",
                //             "sSearch": "جستجو:",
                //             "sUrl": "",
                //             "sInfoThousands": ",",
                //             "sLoadingRecords": "Cargando...",
                //             "oPaginate": {
                //                 "sFirst": "Primero",
                //                 "sLast": "Último",
                //                 "sNext": "بعدی",
                //                 "sPrevious": "قبلی"
                //             },
                //             "oAria": {
                //                 "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                //                 "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                //             }
                //         }
                //     })
                // });
            </script>
            <script>

                $(document).ready(function () {
                    $('#dttt').DataTable({
                        columnDefs: [{
                            orderable: false,
                            className: 'select-checkbox',
                            targets: 0
                        }],
                        select: {
                            style: 'multi',
                            selector: 'td:not(:last-child)'
                            // selector: 'td:first-child'
                        },
                        order: [[1, 'asc']],
                        "language": {
                            select: {
                                rows: {
                                    _: "",
                                    1: ""
                                },


                            },
                            "sProcessing": "Procesando...",
                            "sLengthMenu": " _MENU_ ",
                            "sZeroRecords": "",
                            "sEmptyTable": "رکوردی برای نمایش وجود ندارد",
                            "sInfo": "",
                            "sInfoEmpty": "",
                            "sInfoFiltered": "",
                            "sInfoPostFix": "",
                            "sSearch": "جستجو:",
                            "sUrl": "",
                            "sInfoThousands": ",",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                "sNext": "بعدی",
                                "sPrevious": "قبلی"
                            },
                            "oAria": {
                                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            }
                        }

                    });
                });
                // $(document).ready(function () {
                //     $('#dt').DataTable({
                //         responsive: true,
                //
                //         "language": {
                //             "sProcessing": "Procesando...",
                //             "sLengthMenu": " _MENU_ ",
                //             "sZeroRecords": "",
                //             "sEmptyTable": "رکوردی برای نمایش وجود ندارد",
                //             "sInfo": "",
                //             "sInfoEmpty": "",
                //             "sInfoFiltered": "",
                //             "sInfoPostFix": "",
                //             "sSearch": "جستجو:",
                //             "sUrl": "",
                //             "sInfoThousands": ",",
                //             "sLoadingRecords": "Cargando...",
                //             "oPaginate": {
                //                 "sFirst": "Primero",
                //                 "sLast": "Último",
                //                 "sNext": "بعدی",
                //                 "sPrevious": "قبلی"
                //             },
                //             "oAria": {
                //                 "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                //                 "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                //             }
                //         }
                //     })
                // });
            </script>

@yield('js')


</body>
</html>
