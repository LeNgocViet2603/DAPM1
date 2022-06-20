<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'maNguoiDung', 'maQuyen', 'matKhau','ho', 'ten', 'avatar','ngaySinh',
       'gioiTinh','email','sodt', 'diaChi', 'maPhuongXa', 'trangThai', 'ngayTao'
    ];
    protected $primaryKey = 'maNguoiDung';
    protected $table = 'nguoidung';

    public function avatar(){
      return $this->belongsTo('App\Models\HinhAnh','avatar','maAnh');
   }

}
