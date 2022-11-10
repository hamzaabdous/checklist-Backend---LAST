<?php

namespace App\Modules\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\User\Models\User;
use App\Modules\Damage\Models\Damage;
use App\Modules\Comment\Models\Photo;

class Comment extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function damage(){
        return $this->belongsTo(Damage::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
