<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Event extends Model
{
    use HasFactory;

    public function user() : belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function attendees() : hasMany
    {
        return $this->hasMany(Attendee::class);
    }

}
