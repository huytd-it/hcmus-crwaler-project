<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoiNghi extends Model
{
    use HasFactory;

    //Khai báo tên Table trong Database
    protected $table = 'hoi_nghi';

    //Tùy chỉnh lại tên cột ngày tạo và ngày sửa cuối
    const CREATED_AT = 'ngay_tao';
    const UPDATED_AT = 'ngay_sua_cuoi';

    //Khai báo tên cột trong Table
    protected $fillable = [
        'hoi_nghi_id',
        'ten_hoi_nghi',
        'dia_diem',
        'lien_ket',
        'anh_dai_dien',
        'thoi_gian_bat_dau',
        'thoi_gian_ket_thuc',
        'nguoi_tao',
        'nguoi_sua',
        'ngay_xoa',

    ];


}
