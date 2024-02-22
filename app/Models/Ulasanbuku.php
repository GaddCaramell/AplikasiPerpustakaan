<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasanbuku extends Model
{
    use HasFactory;

    protected $table = 'ulasan_buku';

    protected $primaryKey = 'UlasanId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];
}
