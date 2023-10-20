<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'body',
        'user',
    ];

    public function user()
    {
        return $this->hasOne(User::class,'_id','user');
    }
}
