<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'owner_id', 'slug'];
    protected $dates = ['created_at', 'published_at', 'updated_at', 'deleted_at'];

//    protected $guarded = [];

    public function scopePublished($query)
    {
//        if ($this->owner_id){
//
//        }
        return $query->where('published_at', '<', NOW());
    }
//    public function scopeOwned($query){
//        return $query->
//    }
    public function author()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
