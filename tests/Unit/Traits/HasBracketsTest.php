<?php

namespace Appleton\Taxes\Tests\Unit\Traits;

use Appleton\Taxes\Tests\Unit\Classes\WorkerTaxes\Taxes\StateTax1;
use Appleton\Taxes\Tests\Unit\UnitTestCase;
use Appleton\Taxes\Traits\HasBrackets;

class HasBracketsTest extends UnitTestCase
{
    /**
     * @dataProvider provideTestData
     */
    public function testHasBrackets($earnings, $ytd_earnings, $result)
    {
        $mock = new class {
            use HasBrackets;

            private const BRACKETS = [
                [0, 10000, 0.03],
                [10000, 20000, 0.02],
                [20000, null, 0.01],
            ];

            public $payroll;

            public function __construct()
            {
                $this->payroll = new class {
                    public $earnings = 0;
                    public $ytd_earnings = 0;
                    public function getEarnings()
                    {
                        return $this->earnings;
                    }
                    public function getYtdTaxableWages()
                    {
                        return $this->ytd_earnings;
                    }
                };
            }
        };

        $mock->payroll->earnings = $earnings;
        $mock->payroll->ytd_earnings = $ytd_earnings;

        $this->assertSame($result, $mock->getTaxAmountFromBrackets(StateTax1::class));
    }

    public static function provideTestData()
    {
        return [
            '0' => [
                100,
                0,
                3.0,
            ],
            '1' => [
                100,
                10000,
                2.0,
            ],
            '2' => [
                100,
                20000,
                1.0,
            ],
            '3' => [
                100,
                9950,
                2.5,
            ],
            '4' => [
                100,
                19950,
                1.5,
            ],
        ];
    }
}
