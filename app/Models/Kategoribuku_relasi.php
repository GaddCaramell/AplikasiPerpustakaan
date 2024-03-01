<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategoribuku_relasi extends Model
{
    use HasFactory;

    protected $table = 'kategoribuku_relasi';

    protected $primaryKey = 'KategoriBukuID';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];

    public function Kategoribuku(): HasMany
    {
        return $this->hasMany(Kategoribuku::class,'KategoriID','KategoriID');
    }

    public function Buku(): HasMany
    {
        return $this->hasMany(Buku::class,'BukuID','BukuID');
    }

}
