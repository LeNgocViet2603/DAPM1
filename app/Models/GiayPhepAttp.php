<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiayPhepAttp extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maGiayPhepATTP ', 'maCSKD ', 'maVanBan', 'ngayCap','thoiHan', 'ngayThuHoi'
    ];
    protected $primaryKey = 'maCSKD';
    protected $table = 'giayphepattp';

    public function cosokinhdoanh(){
      return $this->belongsTo('App\Models\Cosokinhdoanh','maCSKD','maCSKD');
   }
   public function vanban(){
      return $this->belongsTo('App\Models\VanBan','maVanBan','maVanBan');
   }
}