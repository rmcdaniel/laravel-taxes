<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Medicare\V20170101;

use Appleton\Taxes\Countries\US\Medicare\Medicare;
use Appleton\Taxes\Tests\Unit\Countries\TestParameters;
use Appleton\Taxes\Tests\Unit\Countries\TestParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;

class MedicareTest extends TaxTestCase
{
    private const DATE = '2017-01-01';
    private const LOCATION = 'us.alabama';
    private const TAX_CLASS = Medicare::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
    }

    /**
     * @dataProvider provideTestData
     */
    public function testTax(TestParameters $parameters): void
    {
        $this->validate($parameters);
    }

    public static function provideTestData(): array
    {
        $parameters = new TestParametersBuilder();
        $parameters
            ->setDate(self::DATE)
            ->setHomeLocation(self::LOCATION)
            ->setTaxClass(self::TAX_CLASS)
            ->setPayPeriods(1);

        return [
            '01' => [
                $parameters
                    ->setWagesInCents(230000)
                    ->setYtdLiabilitiesInCents(0)
                    ->setExpectedAmountInCents(3335)
                    ->build()
            ],
            'with additional tax 01' => [
                $parameters
                    ->setWagesInCents(10000)
                    ->setYtdLiabilitiesInCents(0)
                    ->setExpectedAmountInCents(145)
                    ->build()
            ],
            'with additional tax 02' => [
                $parameters
                    ->setWagesInCents(10000)
                    ->setYtdLiabilitiesInCents(19995000)
                    ->setExpectedAmountInCents(190)
                    ->build()
            ],
            'with additional tax 03' => [
                $parameters
                    ->setWagesInCents(10000)
                    ->setYtdLiabilitiesInCents(20000000)
                    ->setExpectedAmountInCents(235)
                    ->build()
            ],
            'with additional tax 04' => [
                $parameters
                    ->setWagesInCents(10000)
                    ->setYtdLiabilitiesInCents(20005000)
                    ->setExpectedAmountInCents(235)
                    ->build()
            ],
            'case study A' => [
                $parameters
                    ->setWagesInCents(6668)
                    ->setYtdLiabilitiesInCents(0)
                    ->setExpectedAmountInCents(97)
                    ->build()
            ],
        ];
    }
}
