<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class NhomThanhTra extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maNhomThanhTra', 'maNguoiThanhTra'
    ];
    protected $primaryKey = ['maNhomThanhTra', 'maNguoiThanhTra'];
    
    protected $table = 'nhomthanhtra';

    public function nguoidung(){
      return $this->belongsTo('App\Models\NguoiDung','maNguoiDung','maNguoiThanhTra');
   }
    
}