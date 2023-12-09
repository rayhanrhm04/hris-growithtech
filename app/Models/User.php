<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;
use App\Models\Religion;
use App\Models\Gender;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class, 'id', 'empl_id');
    }

    public function department(): HasMany
    {
        return $this->hasMany(Department::class, 'id', 'department_id');
    }

    public function position(): HasMany
    {
        return $this->hasMany(Position::class, 'id', 'position_id');
    }

    public function religion(): HasOne
    {
        return $this->hasOne(Religion::class, 'id', 'religion_id');
    }

    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class, 'id', 'gender_id');
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

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
}
