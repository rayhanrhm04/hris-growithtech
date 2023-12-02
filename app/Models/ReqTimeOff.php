<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Position;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;



class ReqTimeOff extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function position(): HasMany
    {
        return $this->hasMany(Position::class, 'id', 'position_id');
    } 
}
