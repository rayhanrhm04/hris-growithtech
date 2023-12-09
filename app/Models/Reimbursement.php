<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reimbursement extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class, 'empl_id', 'empl_id');
    }

    public function department(): HasMany
    {
        return $this->hasMany(Department::class, 'id', 'department_id');
    }

    public function position(): HasMany
    {
        return $this->hasMany(Position::class, 'id', 'position_id');
    }
}
