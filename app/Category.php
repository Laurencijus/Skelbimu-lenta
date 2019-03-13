<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Mass assigned
    protected $fillable = ['title', 'id'];
    // Mutators
    protected $table = 'category';

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
