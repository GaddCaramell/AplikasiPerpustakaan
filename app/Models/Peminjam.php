<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $primaryKey = 'PeminjamanId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];

    
}
