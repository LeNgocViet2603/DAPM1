<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiCSKD extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = [
        'maLoaiCSKD', 'tenLoaiCSKD'
    ];
    protected $primaryKey = 'maLoaiCSKD';
    protected $table = 'loaicskd';
    
}