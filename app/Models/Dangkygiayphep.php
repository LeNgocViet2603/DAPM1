<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dangkygiayphep extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maDangKy', 'maCSKD', 'maVanBan', 'ngayDangKy','ghiChu', 'trangThai'
    ];
    protected $primaryKey = 'maDangKy';
    protected $table = 'dangkygpattp';

    public function cosokinhdoanh(){
      return $this->belongsTo('App\Models\Cosokinhdoanh','maCSKD','maCSKD');
   }

}