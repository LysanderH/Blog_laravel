<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use App\Scopes\PublishedScope;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'owner_id', 'slug'];
    protected $dates = ['created_at', 'published_at', 'updated_at', 'deleted_at'];

//    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PublishedScope());
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
