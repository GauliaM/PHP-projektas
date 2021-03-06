<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $fillable = ['user_id', 'title', 'description', 'image', 'start_date'];

    public function eventUsers()
    {
        return $this->hasMany(EventUsers::class);
    }
}
