<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //Eader loading permet de faire un précharge lorsqu'on appelle cette class
    //protected $with = ['tasks'];

    protected $fillable = ['name'];

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
