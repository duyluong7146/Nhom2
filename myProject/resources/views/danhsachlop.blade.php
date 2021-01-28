<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
<head>
	<meta charset="utf-8">
	<title style="text-transform: uppercase;">Trường Đại Học Kinh Tế - Kỹ Thuật Công Nghiệp</title>
	<link rel="stylesheet" type="text/css" href="{{url('/frontend/css/danhsachlop.css')}}">
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
			<div id="name-manage">Hệ Thống quản lí giảng dạy và  dịch vụ trực tuyến</div>
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
            <li class="homepage-menu" style="margin-left: 180px;font-size: 16px;">
                <a href="http://localhost/myproject/public/giangvien" id="homepage">Trang chủ</a></li>
            <li class="homepage-menu"><a href="http://localhost/myproject/public/dslop" id="homepage">Danh sách lớp</a></li>
            <li class="homepage-menu"><a href="" id="homepage">Danh sách đồ án</a>
			<ul class="sub-menu">
                <button><li><a href="http://localhost/myproject/public/doan">Đồ án Môn học</a></li></button>
                <button><li><a href="luanvanTS.php">Luận văn thạc sĩ</a></li></button>
                <button><li><a href="http://localhost/myproject/public/lv">Luận văn tiến sĩ</a></li></button>
                <button><li><a href="http://localhost/myproject/public/detai">Danh sách đề tài</a></li></button>
            </ul>
            </li>
            <li class="homepage-menu"><a href="" id="homepage">Khoa Học CN</a>
                <ul class="sub-menu">
                <button><li><a href="http://localhost/myproject/public/dtnc">Đề tài nghiên cứu</a></li></button>
                <button><li><a href="http://localhost/myproject/public/giaotrinh">Sách/Giáo trình</a></li></button>
                </ul>
            </li>
            <li class="homepage-menu"><a href=""id="homepage">Danh Mục khác</a>
			<ul class="sub-menu">
                <button><li><a href="http://localhost/myproject/public/dssv">Danh sách SV</a></li></button>
                <button><li><a href="http://localhost/myproject/public/tailieu">Tài liệu</a></li></button>
				<button><li><a href="http://localhost/myproject/public/quantri">Lịch Giảng Dạy</a></li></button>
            </ul>
                </ul>
            </li>
	</div>
<div class="mid">
		<div class="filter">
			<li>Bộ lọc</li>
		</div>
		<div style="width: 130px;height: 30px;float:left;margin-right: 10px;">
			<select class="selectpicker form-control" data-dropup-auto="false" data-width="100px" title="[Chọn Kỳ]" tabindex="-98">
				<option class="bs-title-option" value="">[Chọn Kỳ]</option>
				<option value="20161" data-tokens="20161" id="20161">20161</option>
				<option value="20162" data-tokens="20162" id="20162">20162</option>
				<option value="20163" data-tokens="20163" id="20163">20163</option>
				<option value="20171" data-tokens="20171" id="20171">20171</option>
				<option value="20172" data-tokens="20172" id="20172">20172</option>
				<option value="20173" data-tokens="20173" id="20173">20173</option>
				<option value="20181" data-tokens="20181" id="20181">20181</option>
				<option value="20182" data-tokens="20182" id="20182">20182</option>
				<option value="20183" data-tokens="20183" id="20183">20183</option>
				<option value="20191" data-tokens="20191" id="20191">20191</option>
				<option value="20192" data-tokens="20192" id="20192">20192</option>
				<option value="20193" data-tokens="20193" id="20193">20193</option>
				<option value="20201" data-tokens="20201" id="20201">20201</option>
			</select>
		</div>
<div class="btn-group">
  <button type="button" class="btn btn-info">Chương Trình</button>
  <button type="button" class="btn btn-info style="background: cadetblue;"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only"></span>
  </button>
   <div class="dropdown-menu">
    <input type="checkbox" id="" name="all" value="All"/>
		<span>Chọn tất cả</span><br><hr>
	<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
		<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-info">Loại Lớp</button>
  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only"></span>
  </button>
   <div class="dropdown-menu">

	<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
		<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-info">Loại GD</button>
  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only"></span>
  </button>
  <div class="dropdown-menu">
    <input type="checkbox" id="" name="all" value="All"/>
		<span>Chọn tất cả</span><br><hr>
	<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
		<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-info">Học Kỳ</button>
  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only"></span>
  </button>
   <div class="dropdown-menu">
    <input type="checkbox" id="" name="all" value="All"/>
		<span>Chọn tất cả</span><br><hr>
	<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
		<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-info">Trạng thái</button>
  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only"></span>
  </button>
  <div class="dropdown-menu">
    <input type="checkbox" id="" name="all" value="All"/>
		<span>Chọn tất cả</span><br><hr>
	<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
		<input type="checkbox" id="" name="cntt" value="CNTT">
		<span>CNTT</span><br>
  </div>
  <div class="btn-group">
	<form action="search" method="get">
	<input type="text" name="key" class="form-control" placeholder="Nhập mã lớp, mã môn hoặc tên môn" style="display: inline-block; vertical-align: middle; width: 250px;">
	<button type="submit">tìm kiếm</button>
</form>
  </div>
</div>


<div class="btn-group" style="float:right;margin-right: 100px;">
  <button type="button" class="btn btn-info">:</button>
  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only"></span>
  </button>
  <div class="dropdown-menu">
    <!-- <button >
    	<li><a>Đổi giờ dạy</a></li>
    </button> -->
     <button style="border: 1px solid #ddd;height: 35px;"
>
    	<li>
			<a href="http://localhost/myproject/public/export">xuất excel</a>

		</li>
    </button>
     <!-- <button>
    	<li><a>Đồng bộ DS SV</a></li>
    </button> -->
  </div>
</div>
</div>
<div class="content-mid">
		<p style="text-align: center;font-size: 22px;">Danh sách lớp : <a> </a></p>
		<div style="width: auto;height: 80px;">
		
			<table class="table">
				<br>
				<thead>
					<tr class="col"> 	
						<td id="classCode">Mã Lớp</td>
						<td id="courseCode">Mã HP</td>
						<td id="courseName">Tên Học Phần</td>
						<td id="type">Khoa</td>
						<td id="trainingSystem">Hệ đào tạo</td>
						<td id="class">Lớp</td>
						<td id="schedule">Lịch Học</td>
						<td id="lecturers">Giảng Viên</td>
						<td id="periodX">Kỳ</td>
					</tr>					
				</thead>
					
				<tbody>
				@foreach($db as $row)
					<tr>
						<!-- <td><input type="checkbox" id="" name="all" value="All"></td> -->
						<td>{{$row->malop}}</td>
						<td>{{$row->Mahocphan}}</td>
						<td class="status">{{$row->Tenhocphan}}</td>
						<td>{{$row->Loaihinh}}</td>
						<td>{{$row->HeDT}}</td>
						<td>{{$row->Lop}}</td>
						<td>{{$row->lichhoc}}</td>
						<!-- <td>{{$row->Donvi}}</td> -->
						<td>{{$row->Giangvien}}</td>
						<!-- <td><div class="dropdown-1">
	  							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">:
	  							</button>
	  						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    						<a class="dropdown-item" href="#">Đổi Giờ</a>
	    						<a class="dropdown-item" href="#">Phản Hồi</a>
	    						<a class="dropdown-item" href="#">Vào Lớp</a>
	  						</div>
						</div>
					</td>	 -->
					<td>{{$row->Ky}}</td>	

					</tr>	
						@endforeach	
				</tbody>

				
				
			</table>
		</div>
		<div>
		</div>
</div>
 <div class="poster">
		<div class="poster-content">
			<li style="width: 10%;height: 100%;list-style: none;display: inline; float:left;">
				<img src="../public/frontend/img/logo.PNG" style="width:80px;height: 110px;" ></li>
			<li style="float:left;width: 73%;list-style: none;font-size: 16px; margin-left: 34px;">
				<div style="font-weight: bold;">HỆ THỐNG DO TRƯỜNG ĐẠI HỌC KINH TẾ - KỸ THUẬT CÔNG NGHIỆP HÀ NỘI.</div>
				<div>Để hỗ trợ vui lòng gửi mail đến 
					<a href="" ><b>uneti.edu.vn</b></a>
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