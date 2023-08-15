<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class GroupUser extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'group_user';
    protected $guarded = false;
}
