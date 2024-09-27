<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $fillable = ['title', 'image', 'content', 'section_id', 'author_id', 'published_at'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
