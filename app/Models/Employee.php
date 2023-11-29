<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Department;
use App\Models\Position;
use App\Models\Religion;
use App\Models\Gender;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

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
}