<?php

namespace App\Exports;

use App\Models\lop;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class StudentExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(lop::getAll());
    } 
    public function headings():array{
        return [
            'idLop',
            'malop',
            'Mahocphan',
            'Tenhocphan',
            'Loaihinh',
            'HeDT',
            'lop',
            'lichhoc',
            'Giangvien',
            'ky'
        ];
    }
}
