<?php

namespace Tests\Unit;

use App\Models\Expense;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ConvertMoneyTest extends TestCase
{
    public function test_moreOrEqualToTenGrosze(): void
    {
        $this->assertEquals(110, Expense::convertMoney(1, 10));
        $this->assertEquals(9999, Expense::convertMoney(99, 99));
        $this->assertEquals(200, Expense::convertMoney(1, 100));
    }

    public function test_lessThanTenGrosze(): void
    {
        $this->assertEquals(100, Expense::convertMoney(1, 0));
        $this->assertEquals(101, Expense::convertMoney(1, 1));
    }

    public function test_invalidValues(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Expense::convertMoney(1, -1);
        Expense::convertMoney(1, -1);
        Expense::convertMoney(-1, -1);
    }
}
