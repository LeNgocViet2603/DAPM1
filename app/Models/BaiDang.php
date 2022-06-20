<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'maBaiDang', 'maChuDe', 'anhBia', 'tieuDe', 'noiDung', 'dinhKem', 'maNguoiDang', 'ngayTao', 'ngayCapNhat', 'trangThai'
    ];
    protected $primaryKey = 'maBaiDang';
    protected $table = 'baidang';

    public function nguoidung()
    {
        return $this->belongsTo('App\Models\NguoiDung', 'maNguoiDang', 'maNguoiDung');
    }
}
