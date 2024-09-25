<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Oklahoma\V20210101;

use Appleton\Taxes\Countries\US\Oklahoma\OklahomaUnemployment\OklahomaUnemployment;
use Appleton\Taxes\Tests\Unit\Countries\UnemploymentTaxTestCase;
use Appleton\Taxes\Tests\Unit\Countries\TestParameters;

class OklahomaUnemploymentTest extends UnemploymentTaxTestCase
{
    private const DATE = '2021-01-01';
    private const LOCATION = 'us.oklahoma';
    private const TAX_CLASS = OklahomaUnemployment::class;
    private const TAX_RATE = 0.015;
    private const WAGE_BASE = 2400000;

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
        $this->roundedValidateWorkDifferentState(
            self::DATE,
            self::LOCATION,
            self::TAX_CLASS,
            self::TAX_RATE
        );
    }

    public function testTaxRate(): void
    {
        $this->roundedValidateTaxRate(
            self::DATE,
            self::LOCATION,
            self::TAX_CLASS,
            0.0321
        );
    }

    public static function provideData(): array
    {
        return self::roundedWageBaseBoundariesTestCases(
            self::DATE,
            self::LOCATION,
            self::TAX_CLASS,
            self::WAGE_BASE,
            self::TAX_RATE
        );
    }
}
