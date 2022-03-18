<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    public static function convertMoney(int $zlote, int $grosze): int
    {
        return $zlote * 100 + $grosze;
    }
}
