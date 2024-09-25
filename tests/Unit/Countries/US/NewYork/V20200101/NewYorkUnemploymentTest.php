<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\NewYork\V20200101;

use Appleton\Taxes\Countries\US\NewYork\NewYorkUnemployment\NewYorkUnemployment;
use Appleton\Taxes\Tests\Unit\Countries\UnemploymentTaxTestCase;
use Appleton\Taxes\Tests\Unit\Countries\TestParameters;

class NewYorkUnemploymentTest extends UnemploymentTaxTestCase
{
    private const DATE = '2020-01-01';
    private const LOCATION = 'us.new_york';
    private const TAX_CLASS = NewYorkUnemployment::class;
    private const TAX_RATE = 0.036;
    private const WAGE_BASE = 1160000;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
    }

    /**
     * @dataProvider provideData
     */
    public function testWageBase(TestParameters $parameters): void
    {
        $this->validateWageBase($parameters);
    }

    public function testWorkDifferentState(): void
    {
        $this->validateWorkDifferentState(
            self::DATE,
            self::LOCATION,
            self::TAX_CLASS,
            self::TAX_RATE
        );
    }

    public function testTaxRate(): void
    {
        $this->validateTaxRate(
            self::DATE,
            self::LOCATION,
            self::TAX_CLASS,
            0.0321
        );
    }

    public static function provideData(): array
    {
        return self::wageBaseBoundariesTestCases(
            self::DATE,
            self::LOCATION,
            self::TAX_CLASS,
            self::WAGE_BASE,
            self::TAX_RATE);
    }
}
