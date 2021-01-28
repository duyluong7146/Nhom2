<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{url('/public/frontend/boostrap/css/boostrap.min.css')}}">
    <title>search</title>
</head>
<body>

<form action="">
<input type="text" name="key">
<input type="submit" value="submit">
    <table class="table"> 

    <thead>
					<th class="col">	
						<!-- <td style="width:2%;"></td> -->
						<td id="classCode">Mã Lớp</td>
						<td id="courseCode">Mã HP</td>
						<td id="courseName">Tên Học Phần</td>
						<td id="type">Loại Hình</td>
						<td id="trainingSystem">Hệ đào tạo</td>
						<td id="studentList">Danh Sách SV</td>
						<td id="class">Lớp</td>
						<td id="schedule">Lịch Học</td>
						<!-- <td id="unit">Đơn Vị</td> -->
						<td id="lecturers">Giảng Viên</td>
						<!-- <td id="function">Chức Năng</td> -->
						<td id="periodX">Kỳ</td>
					</th>					
				</thead>
                <tbody>
				@foreach($db as $row)
					<td>
						<!-- <td><input type="checkbox" id="" name="all" value="All"></td> -->
						<td>{{$row->malop}}</td>
						<td>{{$row->Mahocphan}}</td>
						<td class="status">{{$row->Tenhocphan}}</td>
						<td>{{$row->Loaihinh}}</td>
						<td>{{$row->HeDT}}</td>
						<td><a href="">{{$row->DanhsachSV}}</a></td>
						<td>{{$row->Lop}}</td>
						<td>{{$row->lichhoc}}</td>
						<td>{{$row->Giangvien}}</td>
						<td>{{$row->Ky}}</td>	
						<td><a href="">Sửa</a></td>
						<td><a href="">xoá</a></td>
					</tr>	
						@endforeach	
				</tbody>
    </table>
</form>

</body>
</html>