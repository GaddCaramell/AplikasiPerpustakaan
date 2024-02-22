<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoribuku_relasi extends Model
{
    use HasFactory;

    protected $table = 'kategoribuku_relasi';

    protected $primaryKey = 'KategoriBukuID';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];
}
