<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class Expense extends Model
{
    use HasFactory;

    public static function convertMoney(int $zlote, int $grosze = 0): int
    {
        if ($zlote < 0 || $grosze < 0) {
            throw new InvalidArgumentException('Arguments must not be negative');
        }

        return $zlote * 100 + $grosze;
    }
}
