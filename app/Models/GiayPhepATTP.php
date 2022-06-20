<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiayPhepATTP extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'maGiayPhepATTP', 'maCSKD ', 'ngayCap','thoiHan', 'ngayThuHoi', 'trangThai'
    ];
    protected $primaryKey = 'maCSKD';
    protected $table = 'giayphepattp';

    public function cosokinhdoanh(){
      return $this->belongsTo('App\Models\Cosokinhdoanh','maCSKD','maCSKD');
   }
}
