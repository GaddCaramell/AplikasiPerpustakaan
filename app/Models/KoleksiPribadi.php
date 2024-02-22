<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiPribadi extends Model
{
    use HasFactory;

    protected $table = 'koleksipribadi';

    protected $primaryKey = 'KoleksiId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];
}
