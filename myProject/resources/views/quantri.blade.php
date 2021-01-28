<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title style="text-transform: uppercase;">Trường Đại Học Kinh Tế - Kỹ Thuật Công Nghiệp</title>
    <link rel="stylesheet" type="text/css" href="{{url('/frontend/css/giangvien.css')}}">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <span>Tuần</span><span></span><span>(Tuần học thứ<span></span>):</span>
                    <a></a>
                </li>
            </div>
        </div>
    </div>
    <div id="menu">
        <li class="homepage-menu">
        <li class="homepage-menu">
            <a href="http://localhost/myproject/public/" id="homepage">Trang chủ</a></li>
        <li class="homepage-menu"><a href="http://localhost/myproject/public/dslop" id="homepage">Danh sách lớp</a></li>
        <li class="homepage-menu"><a href="" id="homepage">Danh sách đồ án</a>
            <ul class="sub-menu">
                <button><li><a href="http://localhost/myproject/public/doan">Đồ án Môn học</a></li></button>
                <button><li><a href="http://localhost/myproject/public/lv">Luận văn thạc sĩ</a></li></button>
                <button><li><a href="http://localhost/myproject/public/lv">Luận văn tiến sĩ</a></li></button>
                <button><li><a href="http://localhost/myproject/public/detai">Danh sách đề tài</a></li></button>
            </ul>
        </li>
        <li class="homepage-menu"><a href="" id="homepage">Khoa Học CN</a>
            <ul class="sub-menu">
                <button><li><a href="http://localhost/myproject/public/dtnc">Đề tài nghiên cứu</a></li></button>
                <button><li><a href="http://localhost/myproject/public/dtnc">Sách/Giáo trình</a></li></button>
            </ul>
        </li>
        <li class="homepage-menu"><a href="" id="homepage">Danh Mục khác</a>
            <ul class="sub-menu">
                <button><li><a href="http://localhost/myproject/public/dssv">Danh sách SV</a></li></button>
                <button><li><a href="http://localhost/myproject/public/tailieu">Tài liệu</a></li></button>
                <button><li><a href="http://localhost/myproject/public/quantri">Lịch Giảng Dạy</a></li></button>
            </ul>
        </li>
    </div>
    <div>
        <!-- <div>
    <form action="searchlich" method="get">
	<input type="text" name="key" class="form-control" placeholder="Nhập mã lớp, mã môn hoặc tên môn" style="display: inline-block; vertical-align: middle; width: 250px;">
	<button type="submit">tìm kiếm</button>
</form>
    </div> -->

        <table class="table" border="1" style="text-align: center;">

            <br>
            <tr class="col">
                <th>Giảng Viên</th>
            </tr>
            <thead>
                <tr class="col">
                   <td>Giảng Viên</td>
                    <td id="classCode">Mã Lớp</td>
                    <td id="courseCode">Mã HP</td>
                    <td id="courseName">Tên Học Phần</td>
                    <td id="type">Khoa</td>
                    <td id="class">Lớp</td>
                    <td id="schedule">Lịch Giảng Dạy</td>
                    <td>Tên Sinh Viên</td>
                 

                </tr>
            </thead>
            <tbody>
                @foreach($users as $row)
                <tr>
                    <td>{{$row->Giangvien}}</td>
                    <td>{{$row->malop}}</td>
                    <td>{{$row->Mahocphan}}</td>
                    <td class="status">{{$row->Tenhocphan}}</td>
                    <td>{{$row->Loaihinh}}</td>
                    <td>{{$row->Lop}}</td>
                    <td>{{$row->lichhoc}}</td>
                    <td>{{$row->Ten}}</td>
                    
                </tr>
                @endforeach
            </tbody>




        </table>
    </div>

    <div>
        <table class="table" border="1" style="text-align: center;">
            <br>
            <thead>
                <tr class="col">
                     <td id="lecturers">Giảng Viên</td>               
                    <td id="classCode">Mã Lớp</td>
                    <td id="courseCode">Mã HP</td>
                    <td id="courseName">Tên Học Phần</td>
                    <td id="type">Khoa</td>
                    <td id="trainingSystem">Hệ đào tạo</td>
                    <td id="class">Lớp</td>
                    <td id="schedule">Lịch Giảng Dạy</td>
                    <td>tên sinh viên</td>
                </tr>
            </thead>

            <tbody>
                @foreach($user as $row)
                <tr>
                    <td>{{$row->Giangvien}}</td>                
                    <td>{{$row->malop}}</td>
                    <td>{{$row->Mahocphan}}</td>
                    <td class="status">{{$row->Tenhocphan}}</td>
                    <td>{{$row->Loaihinh}}</td>
                    <td>{{$row->HeDT}}</td>
                    <td>{{$row->Lop}}</td>
                    <td>{{$row->lichhoc}}</td>
                    <td>{{$row->Ten}}</td>
                </tr>
                @endforeach
            </tbody>




        </table>
    </div>

</body>

</html>