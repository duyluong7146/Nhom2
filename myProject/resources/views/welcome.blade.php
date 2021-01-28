<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title style="text-transform: uppercase;">Trường Đại Học Kinh Tế - Kỹ Thuật Công Nghiệp</title>
    <link rel="stylesheet" type="text/css" href="{{url('/frontend/css/trangchu.css')}}">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../public/frontend/bootstrap/css/bootstrap.min.css">
    <script src="../public/frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="../css/fontawesome-free-5.15.1-web/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('/public/frontend/css/trangchu.css')}}">
</head>

<body>
    <div class="top">
        <div class="top-bar">
            <img src="../public/frontend/img/logo.PNG" id="logouneti">
            <div id="name-manage">Hệ Thống quản lí giảng dạy và dịch vụ trực tuyến</div>
            <div id="school-name">Trường đại học kinh tế - kỹ thuật công nghiệp</div>
        </div>
    </div>
    <div id="menu" style="background-color: cadetblue;">
        <ul class="menu_menu">
            <li style="margin-left: 180px;" class="homepage-menu"><a href="http://localhost/myproject/public/" id="homepage">Trang chủ</a></li>
            <li class="homepage-menu"><a href="http://localhost/myproject/public/giangvien" id="homepage">Giảng Viên</a></li>
            <li class="homepage-menu"><a href="" id="homepage">Sinh Viên</a></li>
            <li class="homepage-menu"><a href="http://localhost/myproject/public/Login">Đăng Nhập</a></li>
        </ul>

    </div>
    <div class="view">
        <img src="../public/frontend/img/logouneti.PNG">
    </div>
    <div class="content">
        <div style="width: 100%;height: 600px;
        background: white;">
            <div class="service-lecturers">
                <h2>Dịch vụ cho giảng viên</h2>
                <div class="content-bottom"></div>
                <div class="information">
                    <a class="content-a-icon" href="">
                        <div class="content-icon">
                            <li><img src="../public/frontend/img/thoikhoabieu.PNG"></li>
                            <li>
                                <p>Thời khoá biểu, phân công giảng dạy các lớp Lý thuyết, Thực hành, Thí nghiệm</p>
                            </li>
                        </div>
                    </a>
                    <a class="content-a-icon" href="">
                        <div class="content-icon">
                            <li><img src="../public/frontend/img/phanbodoan.PNG"></li>
                            <li>
                                <p>Phân công Đồ án tốt nghiệp và Đồ án môn học</p>
                            </li>
                        </div>
                    </a>
                    <a class="content-a-icon" href="http://localhost/myproject/public/search">
                        <div class="content-icon">
                            <li><img src="../public/frontend/img/tracuusv.PNG"></li>
                            <li>
                                <p>Tra cứu thông tin Sinh viên</p>
                            </li>
                        </div>
                    </a>
                    <a class="content-a-icon" href="">
                        <div class="content-icon">
                            <li><img src="../public/frontend/img/tracuuhp.PNG"></li>
                            <li>
                                <p>Tra cứu thông tin học phần</p>
                            </li>
                        </div>
                    </a>
                    <a class="content-a-icon" href="">
                        <div class="content-icon">
                            <li><img src="../public/frontend/img/phanbodoan.PNG"></li>
                            <li>
                                <p>Quản lý tài liệu, biểu mẫu</p>
                            </li>
                        </div>
                    </a>
                    <a class="content-a-icon" href="">
                        <div class="content-icon">
                            <li><img src="../public/frontend/img/kekhai.PNG"></li>
                            <li>
                                <p>Kê khai khối lượng giảng dạy</p>
                            </li>
                        </div>
                    </a>
                    <a class="content-a-icon" href="">
                        <div class="content-icon">
                            <li><img src="../public/frontend/img/thongke.PNG"></li>
                            <li>
                                <p>Thống kê, tổng hợp số liệu</p>
                            </li>
                        </div>
                    </a>
                    <a class="content-a-icon" href="">
                        <div class="content-icon">
                            <li><img src="../public/frontend/img/dongbolb.PNG"></li>
                            <li>
                                <p>Đồng bộ Thời khoá biểu với Google Calendar</p>
                            </li>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="service">
            <h2>
                <p style="margin-left: 25px;">dịch vụ cho Sinh Viên</p>
            </h2>
            <div class="content-bottom content_botom-botom"></div>
            <div class="service-student-center">
                <div class="information">
                    <li><img src="../public/frontend/img/tracuudoan.PNG"></li>
                    <li>
                        <p><b>Tra cứu thông tin đồ án</b></p>
                    </li>
                    <li>
                        <p>Tra cứu thông tin phân công đồ án, tham khảo các Đồ án được nộp và lưu trữ online</p>
                    </li>
                </div>
            </div>
            <div class="service-student-center">
                <div class="information">
                    <li style="padding-top: 40px;"><img src="../public/frontend/img/bieumauon.PNG"></li>
                    <li>
                        <p><b>Yêu cầu biểu mẫu online</b></p>
                    </li>
                    <li>
                        <p>Điền thông tin và gửi yêu cầu các loại biểu mẫu online. Viện sẽ xử lý và thông báo qua email cho Sinh viên khi hoàn thành, Sinh viên chỉ lên một lần để nhận kết quả</p>
                    </li>
                </div>
            </div>
            <div class="service-student-center">
                <div class="information">
                    <li style="padding-top: 40px;"><img src="../public/frontend/img/nguyenvongda.PNG"></li>
                    <li>
                        <p><b>Đăng ký nguyện vọng Đồ án</b></p>
                    </li>
                    <li>
                        <p>Tham khảo các hướng đề tài của Giáo viên, đăng ký nguyện vọng là Đồ án với giáo viên và đề
                            <table></table>ài mong muốn</p>
                    </li>
                </div>
            </div>
        </div>
        <div class="foter-tutorial">
            <h2>hướng dẫn sử dụng dịch vụ trực tuyến</h2>
            <div class="content-bottom" style="margin-left: 150px;"></div>
            <div class="tutorial-treatment">
                <div class="tutorial-treatment-one">
                    <div class="receive-account">
                        <li>01</li>
                    </div>
                    <div class="nhantaikhoan">
                        <p style="text-transform: uppercase;font-size: 18px;font-weight: 600;color:#9966FF;">Nhận tài khoản</p>
                        <p style="font-size: 16px;">Mỗi sinh viên được cấp một tài khoản với tài khoản và mật khẩu mặc định là mã số sinh viên</p>
                    </div>
                </div>
                <div class="tutorial-treatment-one">
                    <div class="receive-account">
                        <li>03</li>
                    </div>
                    <div style="float:left;width: 50%;height: 100%;padding-left: 10px;">
                        <p style="text-transform: uppercase;font-size: 18px;font-weight: 600;color:#9966FF;">Xử lý yêu cầu</p>
                        <p style="font-size: 16px;">Giáo vụ Viện nhận yêu cầu online, xử lý và thông báo qua email khi hoàn thành</p>
                    </div>
                </div>
                <div class="tutorial-treatment-one">
                    <div class="receive-account">
                        <li>02</li>
                    </div>
                    <div style="float:left;width: 51%;height: 100%;padding-left: 10px;">
                        <p style="text-transform: uppercase;font-size: 18px;font-weight: 600;color:#9966FF;">GỬI YÊU CẦU</p>
                        <p style="font-size: 16px;">Sinh viên đăng nhập, điền biểu mẫu yêu cầu và nộp trên hệ thống Online</p>
                    </div>
                </div>
                <div class="tutorial-treatment-one">
                    <div class="receive-account">
                        <li>04</li>
                    </div>
                    <div style="float:left;width: 51%;height: 100%;padding-left: 10px;">
                        <p style="text-transform: uppercase;font-size: 18px;font-weight: 600;color:#9966FF;">NHẬN KẾT QUẢ</p>
                        <p style="font-size: 16px;">Khi nhận được thông báo yêu cầu xử lý thành công, Sinh viên lên Văn phòng Viện để nhận kết quả.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="contact-content">
                <h2>liên hệ</h2>
                <p>Nếu bạn có câu hỏi/đề xuất/vấn đề gì, hãy <a href="">Gửi phản hồi</a> cho chúng tôi.</p>
            </div>
        </div>
    </div>
    <div class="poster">
        <div class="poster-content">
            <li style="width: 10%;height: 100%;list-style: none;display: inline; float:left;">
                <img src="public/frontend/img/logo.PNG" style="width:70px;height: 80px"></li>
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
</body>

</html>