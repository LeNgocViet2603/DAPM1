<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetQuaThanhTra extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maKQTT', 'maKHTT', 'thoiGianThanhTra','ketQuaThanhTra','ghiChu', 'trangThai'
    ];
    protected $primaryKey = 'maKQTT';
    
    protected $table = 'ketquathanhtra';
    protected $keyType = 'string';
    public function kehoachthanhtra(){
      return $this->belongsTo('App\Models\KeHoachThanhTra','maKHTT','maKHTT');
   }
    
}