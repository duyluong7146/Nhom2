<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title style="text-transform: uppercase;">Trường Đại Học Kinh Tế - Kỹ Thuật Công Nghiệp</title>
    <link rel="stylesheet" type="text/css" href="{{url('/frontend/css/luanvanTS.css')}}">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
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
                    <li><a href="http://localhost/myproject/public/lv">Luận văn thạc sĩ</a></li>
                </button>
                <button>
                    <li><a href="http://localhost/myproject/public/lv">Luận văn tiến sĩ</a></li>
                </button>
                <button>
                    <li><a href="http://localhost/myproject/public/detai">Danh sách đề tài</a></li>
                </button>
            </ul>
        </li>
        <li class="homepage-menu"><a href="" id="homepage">Khoa Học CN</a>
            <ul class="sub-menu">
                <button>
                    <li><a href="http://localhost/myproject/public/dtnc">Đề tài nghiên cứu</a></li>
                </button>
                <button>
                    <li><a href="http://localhost/myproject/public/dtnc">Sách/Giáo trình</a></li>
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
                    <li><a href="http://localhost/myproject/public/quantri">Lịch Giảng Dạy</a></li>
                </button>
            </ul>
        </li>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item active" data-electronic="detai-gv">
                <a class="nav-link " href="#">Đề Tài Giảng Viên</a>
            </li>
            <li class="nav-item" data-electronic="detai-dn">
                <a class="nav-link" href="#">Đề Tài Doanh Nghiệp</a>
            </li>
            <li class="nav-item" data-electronic="detai-ht">
                <a class="nav-link" href="#">Đề Tài Hợp Tác</a>
            </li>
            <button>Thêm</button>
        </ul>
        <div class="conten-evb">
            <div class="EVB active" id="detai-gv">
                <div class="top-function-panel-in-data-table top-function-panel" style="">
                    <div class="icon-fa-filter-top-pager" style="display: inline-block; vertical-align: middle;">
                        <i class="fa fa-filter"></i>Bộ lọc
                    </div>
                    <div class="btn-group bootstrap-select form-control" style="width: 150px; display: none;">
                    </div>
                    <input type="text" class="form-control" placeholder="Nhập từ khoá để tìm kiếm" style="width: 250px; display: inline-block; vertical-align: middle;">
                </div>
                <table cellspacing="0" cellpadding="0" class="cellTablePanel">
                    <tbody>
                        <tr>
                            <td align="left" style="vertical-align: top;">
                                <div class="gwt-HTML">
                                    <h3>Danh sách định hướng đề tài<span></span></h3>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="vertical-align: top;">
                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="vertical-align: middle;"></td>
                                            <td align="right" width="150px" style="vertical-align: middle;">
                                                <table cellspacing="5" cellpadding="0" style="width: 150px;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="right" style="vertical-align: middle;">
                                                                <div class="gwt-HTML" style="padding: 0px 5px;">Số dòng</div>
                                                            </td>
                                                            <td align="left" style="vertical-align: middle;">
                                                                <select class="form-control" style="display: inline-block;">
                                                                    <option value="30">30</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                    <option value="300">200</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="vertical-align: top;">
                                <table class="table" cellspacing="0" style="width: 100%; table-layout: fixed;">
                                    <colgroup>
                                        <col style="width: 30px;">
                                        <col style="width: 400px;">
                                        <col style="width: 50px;">
                                        <col style="width: 100px;">
                                        <col style="width: 30px;">
                                        <col style="width: 30px;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th colspan="1" class="gwtb3-d gwtb3-d">#</th>
                                            <th colspan="1" class="gwtb3-d">Hướng đề tài</th>
                                            <th colspan="1" class="gwtb3-d gwtb3-d">Thứ tự</th>
                                            <th colspan="2" class="gwtb3-d">DN Hợp tác</th>
                                        </tr>
                                    </thead>
                                    <tbody style="display: none;"></tbody>
                                    <tbody style="">
                                        <tr>
                                            <td align="center" colspan="6">
                                                <div>
                                                    <div style="width: 100%; height: 100%; padding: 0px; margin: 0px;">
                                                        <div style="width: 100%; height: 100%;">
                                                            <div class="gwt-HTML">Không có dữ liệu ...</div>
                                                        </div>
                                                    </div>
                                                    <div aria-hidden="true" style="width: 100%; height: 100%; padding: 0px; margin: 0px; display: none;">
                                                        <div aria-hidden="true" class="gwtb3-d" style="width: 100%; height: 100%; display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot aria-hidden="true" style="display: none;"></tfoot>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="vertical-align: top;">
                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="vertical-align: top;">
                                                <table cellspacing="0" cellpadding="0" style="width: 250px;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" class="JH KH" style="vertical-align: middle;"></td>
                                                            <td align="left" class="JH KH" style="vertical-align: middle;"></td>
                                                            <td align="left" class="JH KH" style="vertical-align: middle;"></td>
                                                            <td align="left" class="JH KH" style="vertical-align: middle;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="EVB" id="detai-dn">
                <div class="top-function-panel-in-data-table top-function-panel" style="">
                    <div class="icon-fa-filter-top-pager" style="display: inline-block; vertical-align: middle;">
                        <i class="fa fa-filter"></i>Bộ lọc
                    </div>
                    <select style="height: 38px;border-radius: 3px;border: 1px solid #ddd;">
                        <option>Tất cả Doanh nghiệp</option>
                        <option>FPT</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Nhập từ khoá để tìm kiếm" style="width: 250px; display: inline-block; vertical-align: middle;">
                </div>
                <table cellspacing="0" cellpadding="0" class="cellTablePanel">
                    <tbody>
                        <tr>
                            <td align="left" style="vertical-align: top;">
                                <div class="gwt-HTML">
                                    <h3>Danh sách định hướng đề tài (0)</h3>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="vertical-align: top;">
                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="vertical-align: middle;"></td>
                                            <td align="right" width="150px" style="vertical-align: middle;">
                                                <table cellspacing="5" cellpadding="0" style="width: 150px;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="right" style="vertical-align: middle;">
                                                                <div class="gwt-HTML" style="padding: 0px 5px;">Số dòng</div>
                                                            </td>
                                                            <td align="left" style="vertical-align: middle;">
                                                                <select class="form-control" style="display: inline-block;">
                                                                    <option value="30">30</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                    <option value="300">200</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="vertical-align: top;">
                                <table class="table" cellspacing="0" style="width: 100%; table-layout: fixed;">
                                    <colgroup>
                                        <col style="width: 2%;">
                                        <col style="width: 15%;">
                                        <col style="width: 68%;">
                                        <col style="width:15%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th colspan="1" class="gwtb3-d gwtb3-d">#</th>
                                            <th colspan="1" class="gwtb3-d">Doanh Nghiệp</th>
                                            <th colspan="1" class="gwtb3-d gwtb3-d">Hướng đề tài</th>
                                            <th colspan="1" class="gwtb3-d">Đồng hướng dẫn</th>
                                        </tr>
                                    </thead>
                                    <tbody style="display: none;"></tbody>
                                    <tbody style="">
                                        <tr>
                                            <td align="center" colspan="6">
                                                <div>
                                                    <div style="width: 100%; height: 100%; padding: 0px; margin: 0px;">
                                                        <div style="width: 100%; height: 100%;">
                                                            <div class="gwt-HTML">Không có dữ liệu ...</div>
                                                        </div>
                                                    </div>
                                                    <div aria-hidden="true" style="width: 100%; height: 100%; padding: 0px; margin: 0px; display: none;">
                                                        <div aria-hidden="true" class="gwtb3-d" style="width: 100%; height: 100%; display: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot aria-hidden="true" style="display: none;"></tfoot>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="vertical-align: top;">
                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="vertical-align: top;">
                                                <table cellspacing="0" cellpadding="0" style="width: 250px;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" class="JH KH" style="vertical-align: middle;"></td>
                                                            <td align="left" class="JH KH" style="vertical-align: middle;"></td>
                                                            <td align="left" class="JH KH" style="vertical-align: middle;"></td>
                                                            <td align="left" class="JH KH" style="vertical-align: middle;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

        <div class="poster">
            <div class="poster-content">
                <li style="width: 10%;height: 100%;list-style: none;display: inline; float:left;"><img src="../public/frontend/img/logo.PNG" style="width:70px;height: 80px"></li>
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
            var tabLinks = document.querySelectorAll(".nav-item");
            var tabContent = document.querySelectorAll(".EVB");

            tabLinks.forEach(function(el) {
                el.addEventListener("click", openTabs);
            });


            function openTabs(el) {
                var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
                var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

                tabContent.forEach(function(el) {
                    el.classList.remove("active");
                }); //lặp qua các tab content để remove class active

                tabLinks.forEach(function(el) {
                    el.classList.remove("active");
                }); //lặp qua các tab links để remove class active

                document.querySelector("#" + electronic).classList.add("active");
                // trả về phần tử đầu tiên có id="" được add class active

                btn.classList.add("active");
                // các button mà chúng ta click vào sẽ được add class active
            }
        </script>
</body>

</html>