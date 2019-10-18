<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Ohio\V20190101;

use Appleton\Taxes\Countries\US\Ohio\Uhrichsville\Uhrichsville;
use Appleton\Taxes\Tests\Unit\Countries\IncomeParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;

class UhrichsvilleTest extends TaxTestCase
{
    private const DATE = '2019-01-01';
    private const LOCATION = 'us.ohio.uhrichsville';
    private const TAX_CLASS = Uhrichsville::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
    }

    public function testTax(): void
    {
        $this->validate(
            (new IncomeParametersBuilder())
                ->setDate(self::DATE)
                ->setHomeLocation(self::LOCATION)
                ->setTaxClass(self::TAX_CLASS)
                ->setPayPeriods(52)
                ->setWagesInCents(30000)
                ->setExpectedAmountInCents(600)
                ->build()
        );
    }
}
