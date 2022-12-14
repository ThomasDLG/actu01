<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'content',
        'when',
        'categorie_id',
        'user_id',
    ];

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
