<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Oregon\V20200701;

use Appleton\Taxes\Countries\US\Oregon\EugeneEmployer\EugeneEmployer;
use Appleton\Taxes\Tests\Unit\Countries\TestParameters;
use Appleton\Taxes\Tests\Unit\Countries\TestParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;

class EugeneEmployerTest extends TaxTestCase
{
    private const DATE = '2020-07-01';
    private const OREGON_LOCATION = 'us.oregon';
    private const EUGENE_LOCATION = 'us.oregon.eugene';
    private const TAX_CLASS = EugeneEmployer::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
        $this->disableTestQueryRunner();
    }

    /**
     * @dataProvider provideTestData
     */
    public function testTax(TestParameters $parameters): void
    {
        $this->validate($parameters);
    }

    /**
     * @dataProvider provideNoTaxTestData
     */
    public function testNoTax(TestParameters $parameters): void
    {
        $this->validateNoTax($parameters);
    }

    public static function provideTestData(): array
    {
        $builder = new TestParametersBuilder();
        $builder
            ->setDate(self::DATE)
            ->setTaxClass(self::TAX_CLASS)
            ->setPayPeriods(52);

        return [
            '00' => [
                $builder
                    ->setHomeLocation(self::EUGENE_LOCATION)
                    ->setWorkLocation(self::EUGENE_LOCATION)
                    ->setWagesInCents(30000)
                    ->setExpectedAmountInCents(63)
                    ->build()
            ],
            '01' => [
                $builder
                    ->setHomeLocation(self::EUGENE_LOCATION)
                    ->setWorkLocation(self::EUGENE_LOCATION)
                    ->setWagesInCents(100000)
                    ->setExpectedAmountInCents(210)
                    ->build()
            ],
        ];
    }

    public static function provideNoTaxTestData(): array
    {
        $builder = new TestParametersBuilder();
        $builder
            ->setDate(self::DATE)
            ->setTaxClass(self::TAX_CLASS)
            ->setPayPeriods(52);

        return [
            '00' => [
                $builder
                    ->setHomeLocation(self::EUGENE_LOCATION)
                    ->setWorkLocation(self::OREGON_LOCATION)
                    ->setWagesInCents(30000)
                    ->build()
            ],
            '01' => [
                $builder
                    ->setHomeLocation(self::OREGON_LOCATION)
                    ->setWorkLocation(self::OREGON_LOCATION)
                    ->setWagesInCents(55000)
                    ->build()
            ],
        ];
    }
}
