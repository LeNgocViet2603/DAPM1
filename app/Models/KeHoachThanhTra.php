<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeHoachThanhTra extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maKHTT', 'maCSKD', 'maNguoiLap', 'maVanBan','thoiGianLKHTT','thoiGianThanhTra',
        'maNguoiPheDuyet', 'maNhomThanhTra'
    ];
    protected $primaryKey = 'maKHTT';
    
    protected $table = 'kehoachthanhtra';

    public function nguoidung(){
      return $this->belongsTo('App\Models\NguoiDung','maNguoiDung','maNguoiPheDuyet');
   }
   public function nhomthanhtra(){
      return $this->belongsTo('App\Models\NhomThanhTra','maNhomThanhTra','maNhomThanhTra');
   }
    
}