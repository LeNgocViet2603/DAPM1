<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeHoachThanhTra extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maKQTT', 'maKHTT', 'thoiGianThanhTra','ketQuaThanhTra','ghiChu'
    ];
    protected $primaryKey = 'maKQTT';
    
    protected $table = 'ketquathanhtra';

    public function nguoidung(){
      return $this->belongsTo('App\Models\KeHoachThanhTra','maKHTT','maKHTT');
   }
    
}