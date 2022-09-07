<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'opd_id',
        'password',
    ];
    protected $appends = ['all_roles'];
    protected $with = ['opds'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'opd_id' => 'string',
    ];

    public static $rulesCreate = [
        'name' => 'required',
        'username' => 'required|unique:users',
        'email' => 'required|unique:users',
        'password' => 'required',
        'opd_id' => 'required',
    ];

    public static function rulesEdit(User $data)
    {
        return [
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'opd_id' => 'required',
        ];
    }

    public function isHasRole($role)
    {
        foreach ($this->roles as $r) {
            if ($role == $r->name)
                return true;
        }
        return false;
    }

    public function getAllRolesAttribute()
    {
        $a = "";
        foreach ($this->roles as $role) {
            $a .= $role->name . ", ";
        }
        return ($a == "") ? "" : substr($a, 0, strlen($a) - 2);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($name)
    {
        foreach ($this->roles as $role) {
            if ($role->name == $name)
                return true;
        }
        return false;
    }

    public function opds()
    {
        return $this->belongsTo(Opd::class, 'opd_id', 'kode');
    }
}
