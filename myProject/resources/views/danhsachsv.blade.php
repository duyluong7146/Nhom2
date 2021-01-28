<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title style="text-transform: uppercase;">Trường Đại Học Kinh Tế - Kỹ Thuật Công Nghiệp</title>
    <link rel="stylesheet" type="text/css" href="{{url('/frontend/css/luanvanTS.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <div id="menu">
            <li class="homepage-menu">
                <a href="http://localhost/myproject/public/" id="homepage">Trang chủ</a>
            </li>
            <li class="homepage-menu"><a href="http://localhost/myproject/public/dslop" id="homepage">Danh sách lớp</a></li>
            <li class="homepage-menu"><a href="" id="homepage">Danh sách đồ án</a>
                <ul class="sub-menu">
                    <button>
                        <li><a href="http://localhost/myproject/public/doan">Đồ án Môn học</a></li>
                    </button>
                    <button>
                        <li><a href="http://localhost/myproject/public/detai">Luận văn thạc sĩ</a></li>
                    </button>
                    <button>
                        <li><a href="http://localhost/myproject/public/lv">Luận văn tiến sĩ</a></li>
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
                    <!-- <button><li><a href="baocaokhoahoc.php">Báo cáo Khoa học</a></li></button> -->
                    <button>
                        <li><a href="http://localhost/myproject/public/dtnc">Đề tài nghiên cứu</a></li>
                    </button>
                    <!-- <button><li><a href="bangsangche.php">Bằng sáng chế/Giải pháp hữu ích</a></li></button> -->
                    <button>
                        <li><a href="http://localhost/myproject/public/giaotrinh">Sách/Giáo trình</a></li>
                    </button>

                </ul>
            </li>
            <li class="homepage-menu"><a href="" id="homepage">Danh Mục khác</a>
                <ul class="sub-menu">
                    <button>
                        <li><a href="http://localhost/myproject/public/dssv">Danh sách SV</a></li>
                    </button>
                    <button>
                        <li><a href="http://localhost/myproject/public/tailieu">Tài liệu</a></li>
                    </button>
                    <button>
                        <li><a href="http://localhost/myproject/public/quantri">lịch công việc</a></li>
                    </button>
                </ul>
            </li>


        </div>


    </div>
    <div style="min-height: 250px;">
        <div style="font-size: 16px;">
            <form action="timkiem" method="get">
                <input type="text" name="key" class="form-control" placeholder="Nhập mã lớp, mã môn hoặc tên môn" style="display: inline-block; vertical-align: middle; width: 250px;">
                <button type="submit">tìm kiếm</button>
            </form>
        </div>
        <table class="table table-bordered" style="font-size: 16px;">
            <thead>
                <tr>
                    <td>STT</td>

                    <td>Mã Sinh Viên</td>
                    <td>Tên Sinh Viên</td>
                    <td>Lớp</td>
                    <td>Ngày Sinh</td>
                    <td>Địa Chỉ</td>
                    <td>Số Điện Thoại</td>
                    <td>Giới Tính</td>
                </tr>
            </thead>
            <tbody">
                @foreach($db as $row)
                <tr>
                    <td>{{$row->idSinhvien}}</td>
                    <td>{{$row->MaSV}}</td>
                    <td class="====">{{$row->Ten}}</td>
                    <td>{{$row->Lop}}</td>
                    <td>{{$row->Ngaysinh}}</td>
                    <td>{{$row->Diachi}}</a></td>
                    <td>{{$row->SDT}}</td>
                    <td>{{$row->Gioitinh}}</td>

                </tr>
                @endforeach
                </tbody>

        </table>

    </div>
    <div class="text-center" style="margin-top: 10px; font-size: 16px;">
        {{ $db->onEachSide(1)->links() }}
    </div>
    <div class="poster" style="margin-top: 100px;">
        <div class="poster-content">
            <li style="width: 10%;height: 100%;list-style: none;display: inline; float:left;"><img src="../img/logo.PNG" style="width:70px;height: 80px"></li>
            <li style="float:left;width: 73%;list-style: none;font-size: 16px;">
                <div style="font-weight: bold;">HỆ THỐNG DO TRƯỜNG ĐẠI HỌC KINH TẾ - KỸ THUẬT CÔNG NGHIỆP HÀ NỘI THIẾT KẾ & PHÁT TRIỂN.</div>
                <div>Để hỗ trợ vui lòng gửi mail đến
                    <a href=""><b>uneti.edu.vn</b></a>
                    <p>Hotline : 0395679007</p>
                </div>
            </li>
        </div>
        <div class="poster-addpress">
            <a><b>Cơ Sở Lĩnh Nam :</b> Ngõ 218 Lĩnh Nam - Hoàng Mai - Hà Nội</a>
            <p><b>Cơ Sở Minh Khai :</b> Số 454 Minh Khai - Hoàng Mai - Hà Nội</p>
        </div>
    </div>
    <script type="text/javascript">
        var nav - item = document.querySelectorAll(".nav-item");
        var tabContent = document.querySelectorAll(".tab-panefade");

        nav - item.forEach(function(el) {
            el.addEventListener("click", openTabs);
        });

        function openTabs(el) {
            var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
            var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

            tabContent.forEach(function(el) {
                el.classList.remove("active");
            }); //lặp qua các tab content để remove class active

            nav - item.forEach(function(el) {
                el.classList.remove("active");
            }); //lặp qua các tab links để remove class active

            document.querySelector("#" + electronic).classList.add("active");
            // trả về phần tử đầu tiên có id="" được add class active

            btn.classList.add("active");
            // các button mà chúng ta click vào sẽ được add class active
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>