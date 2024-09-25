<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Alabama\V20170101;

use Appleton\Taxes\Countries\US\Alabama\BirminghamOccupational\BirminghamOccupational;
use Appleton\Taxes\Tests\Unit\Countries\TestParameters;
use Appleton\Taxes\Tests\Unit\Countries\TestParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;

class BirminghamOccupationalTest extends TaxTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(BirminghamOccupational::class);
    }

    /**
     * @dataProvider provideTestData
     */
    public function testBirminghamOccupational(TestParameters $parameters): void
    {
        $this->validate($parameters);
    }

    public static function provideTestData():array
    {
        return [
            '01' => [
                (new TestParametersBuilder())
                    ->setDate('2017-01-01')
                    ->setHomeLocation('us.alabama.birmingham')
                    ->setTaxClass(BirminghamOccupational::class)
                    ->setWagesInCents(230000)
                    ->setPayPeriods(1)
                    ->setExpectedAmountInCents(2300)
                    ->build()
            ],
            '02' => [
                (new TestParametersBuilder())
                    ->setDate('2017-01-01')
                    ->setHomeLocation('us.alabama.birmingham')
                    ->setTaxClass(BirminghamOccupational::class)
                    ->setWagesInCents(6668)
                    ->setPayPeriods(1)
                    ->setExpectedAmountInCents(67)
                    ->build()
            ]
        ];
    }
}
