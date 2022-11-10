<?php

namespace App\Modules\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Comment\Models\Comment;

class Photo extends Model
{
    use HasFactory;
    public function Comment(){
        return $this->belongTo(Comment::class);
    }
}
