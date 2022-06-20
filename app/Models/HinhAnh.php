<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'maAnh', 'tenAnh', 'linkAnh'
    ];
    protected $primaryKey = 'maAnh';
    protected $table = 'hinhanh';

}
