<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','description', 'content','category_id','writer_id',
    ];

    public function category()
    {
        // belongsTo(RelatedModel, foreignKey = category_id, keyOnRelatedModel = id)
        return $this->belongsTo(Category::class);
    }

    public function writer()
    {
        // belongsTo(RelatedModel, foreignKey = category_id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class);
    }

}
