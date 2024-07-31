<?php

namespace App\Models;

use App\Http\Controllers\ArticlesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'articles_sections');
    }

    public function getClassAttribute()
    {
        $classes = [
            'maty' => 'badge-maty',
            'krypto' => 'badge-krypto',
            'podvody' => 'badge-podvody',
        ];
        return $classes[$this->name] ?? 'badge-default';
    }
}
