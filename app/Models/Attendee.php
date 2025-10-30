<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Attendee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_id',
    ];

    public function event(): belongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
