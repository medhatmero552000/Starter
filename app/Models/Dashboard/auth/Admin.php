<?php

namespace App\Models\Dashboard\Auth;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Dashboard\Stage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='admins';
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
       public function createdByAdmin()
    {
        return $this->hasMany(Stage::class, 'created_by');
    }
    public function updatedStages()
{
    return $this->hasMany(Stage::class, 'updated_by');
}

}
