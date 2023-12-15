<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reporting extends Model
{
    use HasFactory;
    // use SoftDeletes;

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

    public function salary(): HasOne
    {
        return $this->hasOne(Payroll::class, 'id', 'total_salary');
    }
}


