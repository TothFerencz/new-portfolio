<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned when storing contact messages.
     */
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
