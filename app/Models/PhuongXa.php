<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuongXa extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'maPhuongXa', 'tenPhuongXa', 'maQuanHuyen'
    ];
    protected $primaryKey = 'maPhuongXa';
    protected $table = 'phuongxa';

    public function quanhuyen(){
      return $this->belongsTo('App\Models\QuanHuyen','maQuanHuyen','maQuanHuyen');
   }

}