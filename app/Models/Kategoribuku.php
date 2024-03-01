<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategoribuku extends Model
{
    use HasFactory;

    protected $table = 'kategoribuku';

    protected $primaryKey = 'KategoriID';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];

    public function Buku(): HasMany
    {
        return $this->hasMany(Buku::class,'BukuID', 'BukuID');
    }

    public function Kategoribuku_relasi(): BelongsTo{
        return $this->belongsTo(Kategoribuku_relasi::class,'KategoriRelasiID','KategoriRelasiID');
    }
}
