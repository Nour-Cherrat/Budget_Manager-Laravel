<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }

    public function spendings()
    {
        return $this->hasMany(Spending::class);
    }

    // Custom
    private static function randomColorPart()
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }

    public static function randomColor()
    {
        return self::randomColorPart() . self::randomColorPart() . self::randomColorPart();
    }
}
