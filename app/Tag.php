<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'title'
    ];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags', 'tag_id', 'post_id');
    }
}
