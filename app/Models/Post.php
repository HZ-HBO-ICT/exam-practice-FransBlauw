<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Returns a collection of all the foos related to this post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foos()
    {
        return $this->hasMany(Foo::class);
    }
}
