<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['content', 'content_input_id'];

    // A content belongs to a single ContentInput
    public function contentInput()
    {
        return $this->belongsTo(ContentInput::class, 'content_input_id');
    }
}
