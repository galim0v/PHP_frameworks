<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'Title',
        'Description',
        'Completed',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
