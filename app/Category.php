<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'link';
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
