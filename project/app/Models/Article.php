<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name'];

    public function sections()
    {
        return $this->hasMany(Sections::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'articles_categories');
    }
}

