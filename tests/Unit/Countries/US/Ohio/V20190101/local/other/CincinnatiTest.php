<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Ohio\V20190101\local\other;

use Appleton\Taxes\Countries\US\Ohio\Cincinnati\Cincinnati;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;
use Appleton\Taxes\Tests\Unit\Countries\TestParameters;
use Appleton\Taxes\Tests\Unit\Countries\TestParametersBuilder;
use Carbon\Carbon;

class CincinnatiTest extends TaxTestCase
{
    private const DATE = '2019-02-01';
    private const LOCATION = 'us.ohio.cincinnati';
    private const TAX_CLASS = Cincinnati::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
    }

    /** @dataProvider dataProvider */
    public function testTax(TestParameters $parameters): void
    {
        $this->validate($parameters);
    }

    public function testTax_under_18(): void
    {
        $this->validateNoTax((new TestParametersBuilder())
            ->setDate(self::DATE)
            ->setHomeLocation(self::LOCATION)
            ->setTaxClass(self::TAX_CLASS)
            ->setPayPeriods(52)
            ->setBirthDate(Carbon::now()->subYears(17))
            ->setWagesInCents(30000)
            ->setExpectedAmountInCents(0)
            ->setExpectedEarningsInCents(30000)
            ->build()
        );
    }

    public static function dataProvider(): array
    {
        Carbon::setTestNow(Carbon::parse(self::DATE));
        $builder = new TestParametersBuilder();
        $builder
            ->setDate(self::DATE)
            ->setHomeLocation(self::LOCATION)
            ->setTaxClass(self::TAX_CLASS)
            ->setPayPeriods(52);

        return [
            'no birth date' => [
                $builder
                    ->setBirthDate(null)
                    ->setWagesInCents(30000)
                    ->setExpectedAmountInCents(630)
                    ->setExpectedEarningsInCents(30000)
                    ->build()
            ],
            'over 18' => [
                $builder
                    ->setBirthDate(Carbon::now()->subYears(19))
                    ->setWagesInCents(30000)
                    ->setExpectedAmountInCents(630)
                    ->setExpectedEarningsInCents(30000)
                    ->build()
            ],
            'exactly 18' => [
                $builder
                    ->setBirthDate(Carbon::now()->subYears(18))
                    ->setWagesInCents(30000)
                    ->setExpectedAmountInCents(630)
                    ->setExpectedEarningsInCents(30000)
                    ->build()
            ],
        ];
    }
}
