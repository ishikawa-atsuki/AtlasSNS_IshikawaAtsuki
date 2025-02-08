<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post'
    ];

    // ユーザー⇒投稿（1対多）のリレーション
    public function User(){
        return $this->belongTo('App\Models\User');
    }
}
