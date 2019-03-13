<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];
    // Mutators

    public function up()
    {
        $table->timestamps = false;

    }
};

// public function user()
// {
//     return $this->belongsTo('App\User');
// }
