<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentInput extends Model
{
    protected $fillable = ['user_id', 'title', 'content'];

    // A content input belongs to a single user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A content input has many Content records
    public function contents()
    {
        return $this->hasMany(Content::class, 'content_input_id'); // Use consistent foreign key naming
    }
}
