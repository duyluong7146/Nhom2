<?php

namespace App\Http\Controllers;

use App\Exports\lopExport;
use App\Exports\StudentExport;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Auth;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class HomeController extends Controller
{
    public function index()
    {

        $db = DB::table('lop')->select('*');
        $db = $db->get();
        $page = 'lop - new';
        return view('danhsachlop', compact('db', 'page'));
    }
    public function dem()
    {
        $dem = DB::table('lop')->count();
        return view('danhsachlop', compact('dem'));
    }
    public function dsdetai()
    {
        $db = DB::table('detainghiencuu')->select('*');
        $count = DB::table('detainghiencuu')->count();
        $db = $db->get();
        $page = 'lop - new';

        return view('danhsachdetai', compact('db', 'page'));
    }
    public function giaotrinh()
    {
        $db = DB::table('tailieu')->paginate(5);
        return view('sachgiaotrinh', compact('db'));
    }
    public function lvts()
    {
        return view('luanvanTiensy');
    }
    public function dssv()
    {

        $db = DB::table('sinhvien')->paginate(5);
        return view('danhsachsv', compact('db'));
    }
    public function doan()
    {
        $db = DB::table('doanmonhoc')->select('*');
        $count = DB::table('doanmonhoc')->count();
        $db = $db->get();
        $page = 'lop - new';

        return view('doanmonhoc', compact('db', 'page', 'count'));
    }
    public function lichcv()
    {
        return view('lichcongviec');
    }
    public function tailieu()
    {
        return view('tailieu');
    }
    public function dtnghiencuu()
    {
        $db = DB::table('detainghiencuu')->get();
        return view('detainghiencuu', compact('db'));
    }
    public function search(Request $request)
    {
        $db = DB::table('lop')->where('Giangvien', 'like', '%' . $request->key . '%')
            ->orWhere('malop', $request->key)
            ->get();

        return view('danhsachlop', compact('db'));
    }
    public function searchdoan(Request $request)
    {
        $db = DB::table('doanmonhoc')->where('Hocphan', 'like', '%' . $request->key . '%')
            ->orWhere('LoạiDA', $request->key)
            ->get();

        return view('doanmonhoc', compact('db'));
    }
    public function getlogin()
    {
        return view('login');
    }
    public function postlogin(Request $request)
    {
        $arr  = [
            'username' => $request->username,
            'password' => $request->password

        ];
        if (Auth::attempt($arr)) {
            return redirect()->intended('giangvien');
        } else {
            dd('đăng nhập thất bại');
            return redirect()->intended('login');
        }
    }

    public function header()
    {
        view('header');
    }


    public function qt()
    {

        $users = DB::table('sinhvien')->join('lop', 'sinhvien.Lop_idLop', '=', 'lop.idLop')->where('Mahocphan', 'abc')->get();
        $total = DB::table('sinhvien')->join('lop', 'sinhvien.Lop_idLop', '=', 'lop.idLop')->where('Mahocphan', 'abc')->count();
        $totals = DB::table('sinhvien')->join('lop', 'sinhvien.Lop_idLop', '=', 'lop.idLop')->where('Mahocphan', 'xyz')->count();
        $user = DB::table('sinhvien')->join('lop', 'sinhvien.Lop_idLop', '=', 'lop.idLop')->where('Mahocphan', 'xyz')->get();
        $db = DB::table('giangvien')->where('magiangvien', '123')->get();
        return view('quantri', compact('users', 'user', 'total', 'totals', 'db'));
    }

    public function export()
    {
        return Excel::download(new StudentExport, 'excel.xlsx');
    }
    public function timkiem(Request $request)
    {
        $db = DB::table('sinhvien')->where('Ten', 'like', '%' . $request->key . '%')
            ->orWhere('MaSV', $request->key)
            ->get();

        return view('danhsachsv', compact('db'));
    }
    public function thongke()
    {
            $user = DB::table('giangvien')->select('*');
            $db = $user->get();
            $use = DB::table('user')->select('*');
            $da = $use->get();
            return view('thongke',compact('db','da'));       
    }
}
