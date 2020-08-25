<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_name', 'client_name', 'city'];
    public function images() 
    {
        return $this->morphToMany(Image::class, 'imageables');
    }

    public function categories() 
    {
        return $this->morphToMany(Category::class, 'taggables');
    }
}
