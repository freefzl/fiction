<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NovelBook extends Model
{
    protected $fillable=['id','name','author','protagonist','cover_img','status','synopsis','chapter_number','type_id','channel_id','tag_id','pubdate','is_delete'];

    public function Chapters()
    {
        return $this->hasMany(NovelChapter::class);
    }

    public function try(){
        return $this->hasMany(NovelChapter::class,'id','try_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'id','comment_id');
    }


    public function type(){
        return $this->hasMany(NovelType::class,'id','type_id');
    }

    public function getAllBooks(){
        return $this->where(['is_delete'=>0])->get();
    }
}
