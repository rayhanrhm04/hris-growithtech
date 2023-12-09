<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use App\Models\Typestimeoff;


class Timeoff extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'empl_id');
    }

    public function department(): HasMany
    {
        return $this->hasMany(Department::class, 'id', 'department_id');
    }

    public function position(): HasMany
    {
        return $this->hasMany(Position::class, 'id', 'position_id');
    }

    public function typestimeoff(): HasMany
    {
        return $this->hasMany(TypesTimeOff::class, 'id', 'typetimeoff_id');
    }
}
