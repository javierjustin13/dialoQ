<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dialog extends Model
{
    protected $table = 'dialogues';
    protected $fillable = ['id', 'user_id', 'title', 'content', 'likes'];

}
