<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'article_id', 'order'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
