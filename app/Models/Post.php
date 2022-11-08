<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Add this to access softdelete functionality
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content'];


    public function photos(){
        return $this->morphMany('App\Models\Photo','imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Models\tag','taggable');
    }

};

