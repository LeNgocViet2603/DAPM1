<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cosokinhdoanh extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maCSKD', 'tenCSKD', 'maNguoiDung', 'maLoaiCSKD','diaChi', 'maPhuongXa', 'trangThai'
    ];
    protected $primaryKey = 'maCSKD';
    protected $table = 'cosokinhdoanh';
    protected $keyType = 'string';

    public function nguoidung(){
      return $this->belongsTo('App\Models\NguoiDung','maNguoiDung','maNguoiDung');
   }
   public function linhvuc(){
      return $this->belongsTo('App\Models\LoaiCSKD','maLoaiCSKD','maLoaiCSKD');
   }
   public function phuongxa(){
      return $this->belongsTo('App\Models\PhuongXa','maPhuongXa','maPhuongXa');
   }
}