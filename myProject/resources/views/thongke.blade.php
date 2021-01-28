<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <title style="text-transform: uppercase;">Trường Đại Học Kinh Tế - Kỹ Thuật Công Nghiệp</title>
    <link rel="stylesheet" type="text/css" href="{{url('/frontend/css/danhsachlop.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend/css/thongke.css')}}">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    <div class="top">
        <div class="top-bar">
            <a href="http://localhost/myproject/public/"><img src="../public/frontend/img/logo.PNG" id="logouneti"></a>
            <div id="name-manage">Hệ Thống quản lí giảng dạy và dịch vụ trực tuyến</div>
            <div id="school-name">Trường đại học kinh tế - kỹ thuật công nghiệp</div>
        </div>
        <div class="top-contact">
            <div class="top-contact-mxh">
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <a href="google.com"><i class="fa fa-google fa-stack-1x"></i></a>
                        <ul class="lk-facebook">
                            <li><a>Đăng nhập Google để liên kết với tài khoản hiện tại và đăng nhập vào hệ thống sử dụng tài khoản Google</a></li>
                        </ul>
                    </span>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <a href="facebook.com">
                            <i class="fa fa-facebook fa-stack-1x"></i>
                        </a>
                        <ul class="lk-facebook">
                            <li>
                                <a>Đăng nhập Facebook để liên kết với tài khoản hiện tại và đăng nhập vào hệ thống sử dụng tài khoản Facebook</a>
                            </li>
                        </ul>
                    </span>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <a href="#"><i class="fa fa-calendar fa-stack-1x"></i></a>
                        <ul class="lk-facebook">
                            <li><a>Lịch công việc</a></li>
                        </ul>
                    </span>

                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <a href=""><i class="fa fa-user fa-stack-1x"></i></a>
                    </span>
                </li>
                <li>
                    <span>Tuần</span><span></span><span>(Tuần học thứ<span></span>):</span><a></a>
                </li>
            </div>
        </div>
    </div>
    <div id="menu">
        <li class="homepage-menu" style="margin-left: 180px;">
            <a href="http://localhost/myproject/public/giangvien" id="homepage">Trang chủ</a>
        </li>
        <li class="homepage-menu"><a href="http://localhost/myproject/public/dslop" id="homepage">Danh sách lớp</a></li>
        <li class="homepage-menu"><a href="" id="homepage">Danh sách đồ án</a>
            <ul class="sub-menu">
                <button>
                    <li><a href="http://localhost/myproject/public/doan">Đồ án Môn học</a></li>
                </button>
                <button>
                    <li><a href="luanvanTS.php">Luận văn thạc sĩ</a></li>
                </button>
                <button>
                    <li><a href="luanvanTiensy.php">Luận văn tiến sĩ</a></li>
                </button>
                <button>
                    <li><a href="http://localhost/myproject/public/detai">Danh sách đề tài</a></li>
                </button>
                <!-- <button><li><a href="nguyenvongdoan.php">Nguyện vọng đồ án</a></li></button>
                <button><li><a href="kiemtratrunglap.php">Kiểm tra trùng lặp</a></li></button> -->
            </ul>
        </li>
        <li class="homepage-menu"><a href="" id="homepage">Khoa Học CN</a>
            <ul class="sub-menu">
                <button>
                    <li><a href="http://localhost/myproject/public/dtnc">Đề tài nghiên cứu</a></li>
                </button>
                <!-- <button><li><a href="bangsangche.php">Bằng sáng chế/Giải pháp hữu ích</a></li></button> -->
                <button>
                    <li><a href="sachgiaotrinh.php">Sách/Giáo trình</a></li>
                </button>
            </ul>
        </li>
        <li class="homepage-menu"><a href="" id="homepage">Danh Mục khác</a>
            <ul class="sub-menu">
                <ul class="sub-menu">
                    <button>
                        <li><a href="http://localhost/myproject/public/dssv">Danh sách SV</a></li>
                    </button>
                    <button>
                        <li><a href="http://localhost/myproject/public/tailieu">Tài liệu</a></li>
                    </button>
                </ul>
            </ul>
        </li>
    </div>
    <div class="containers">
        <h5>Danh sách user</h5>
        <span>Tổng số user</span>
        <table class="table" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col">a</th>
                    <th scope="col">b</th>
                    <th scope="col">b</th>
                    <th scope="col">b</th>
                    <th scope="col">b</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($da as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->username}}</td>
                    <td>{{$row->password}}</td>
                    <td>{{$row->role}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

        <h5>Danh sách giảng viên</h5>
        <span>Tổng số giảng viên</span>
        <table class="table" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col">id giảng viên</th>
                    <th scope="col">tên Giảng viên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện Thoại</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($db as $row)
                <tr>
                    <td>{{$row->idgiangvien}}</td>
                    <td>{{$row->TenGV}}</td>
                    <td>{{$row->Diachi}}</td>
                    <td>{{$row->SDT}}</td>
                    <td>{{$row->Emailcanhan}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>