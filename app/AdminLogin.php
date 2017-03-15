<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminLogin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     *
     */

 
    protected $primaryKey = 'ID';

    public function getAuthPassword()
    {
        return $this->Security;
    }

    protected $table = "AdminLogin";

    protected $fillable = [
        'Login', 'Security',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Security',
    ];
}
