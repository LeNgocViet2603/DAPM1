<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maVanBan ', 'soKiHieu', 'loaiVanBan', 'tieuDe', 'noiDung',
         'maNguoiLap', 'ngayTao', 'ngayCapNhat'
    ];
    protected $primaryKey = 'maVanBan';
    protected $table = 'vanban';
    
}