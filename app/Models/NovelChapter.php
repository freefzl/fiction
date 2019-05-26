<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NovelChapter extends Model
{

    protected $fillable=['id','title','novel_id','words','pubdate','is_page'];

    public function book()
    {
        return $this->belongsTo(NovelBook::class, 'novel_id', 'id');
    }
}
