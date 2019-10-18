<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\California\V20190101;

use Appleton\Taxes\Countries\US\California\CaliforniaDisabilityInsurance\CaliforniaDisabilityInsurance;
use Appleton\Taxes\Tests\Unit\Countries\WageBaseParameters;
use Appleton\Taxes\Tests\Unit\Countries\WageBaseTaxTestCase;

class CaliforniaDisabilityInsuranceTest extends WageBaseTaxTestCase
{
    private const DATE = '2019-01-01';
    private const LOCATION = 'us.california';
    private const TAX_CLASS = CaliforniaDisabilityInsurance::class;
    private const TAX_RATE = 0.01;
    private const WAGE_BASE = 11837100;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
    }

    /**
     * @dataProvider provideData
     */
    public function testTax(WageBaseParameters $parameters): void
    {
        $this->validateWageBase($parameters);
    }

    public function provideData(): array
    {
        return $this->wageBaseBoundariesTestCases(
            self::DATE,
            self::LOCATION,
            self::TAX_CLASS,
            self::WAGE_BASE,
            self::TAX_RATE);
    }
}
