<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'birth_date',
        'address',
        'classe_id',
    ];

    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class);
    }
}
