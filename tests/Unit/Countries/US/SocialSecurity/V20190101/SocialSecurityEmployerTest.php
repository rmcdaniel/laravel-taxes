<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\SocialSecurity\V20190101;

use Appleton\Taxes\Countries\US\SocialSecurity\SocialSecurityEmployer;
use Appleton\Taxes\Tests\Unit\Countries\IncomeParameters;
use Appleton\Taxes\Tests\Unit\Countries\IncomeParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;

class SocialSecurityEmployerTest extends TaxTestCase
{
    private const DATE = '2019-01-01';
    private const LOCATION = 'us';
    private const TAX_CLASS = SocialSecurityEmployer::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
    }

    /**
     * @dataProvider provideData
     */
    public function testWageBase(IncomeParameters $parameters): void
    {
        $this->validate($parameters);
    }

    public function provideData(): array
    {
        $builder = new IncomeParametersBuilder();
        $builder
            ->setDate(self::DATE)
            ->setHomeLocation(self::LOCATION)
            ->setTaxClass(self::TAX_CLASS)
            ->setPayPeriods(52);

        return [
            'case study A' => [
                $builder
                    ->setWagesInCents(64000)
                    ->setYtdWagesInCents(0)
                    ->setExpectedAmountInCents(3968)
                    ->build()
            ],
            'case study B' => [
                $builder
                    ->setWagesInCents(77428)
                    ->setYtdWagesInCents(0)
                    ->setExpectedAmountInCents(4801)
                    ->build()
            ],
            'case study C' => [
                $builder
                    ->setWagesInCents(64000)
                    ->setYtdWagesInCents(13300000)
                    ->setExpectedAmountInCents(null)
                    ->build()
            ],
            'case study D' => [
                $builder
                    ->setWagesInCents(77428)
                    ->setYtdWagesInCents(13300000)
                    ->setExpectedAmountInCents(null)
                    ->build()
            ],
        ];
    }
}
