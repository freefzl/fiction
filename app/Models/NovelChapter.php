<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NovelChapter extends Model
{

    protected $fillable=['id','bid','chapter_id','title','chapterContent','is_pay','is_page','goId','pubdate'];

    public function book()
    {
        return $this->belongsTo(NovelBook::class, 'bid', 'id');
    }
}
