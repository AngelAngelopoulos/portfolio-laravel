<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'url', 'description', 'image', 'category_id'];
    //protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url'; // TODO: Change the autogenerated stub
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
