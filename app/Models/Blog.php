<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'blog_title',
        'blog_content',
    ];
}
