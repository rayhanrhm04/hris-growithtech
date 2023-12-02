<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Position;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Timeoff extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'reqtimeoffs';

    public function position(): HasMany{
        return $this->hasMany(Position::class, 'id', 'position_id');
    }
}
