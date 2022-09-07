<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'band_id',
        'year'
    ];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
