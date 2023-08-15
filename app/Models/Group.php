<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Group extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'groups';

    public function users(){
        return $this->belongsToMany(User::class);
    }


}
