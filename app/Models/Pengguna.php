<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $primaryKey = 'UserId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];
}
