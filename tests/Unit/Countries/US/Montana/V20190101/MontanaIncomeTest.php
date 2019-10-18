<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Montana\V20190101;

use Appleton\Taxes\Countries\US\Montana\MontanaIncome\MontanaIncome;
use Appleton\Taxes\Models\Countries\US\Montana\MontanaIncomeTaxInformation;
use Appleton\Taxes\Tests\Unit\Countries\IncomeParameters;
use Appleton\Taxes\Tests\Unit\Countries\IncomeParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;

class MontanaIncomeTest extends TaxTestCase
{
    private const DATE = '2019-01-01';
    private const LOCATION = 'us.montana';
    private const TAX_CLASS = MontanaIncome::class;
    private const TAX_INFO_CLASS = MontanaIncomeTaxInformation::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);

        MontanaIncomeTaxInformation::createForUser([
            'allowances' => 0,
            'exempt' => false,
        ], $this->user);
    }

    /**
     * @dataProvider provideTestData
     */
    public function testTax(IncomeParameters $parameters): void
    {
        $this->validate($parameters);
    }

    public function provideTestData(): array
    {
        $builder = new IncomeParametersBuilder();
        $builder
            ->setDate(self::DATE)
            ->setHomeLocation(self::LOCATION)
            ->setTaxClass(self::TAX_CLASS)
            ->setTaxInfoClass(self::TAX_INFO_CLASS)
            ->setPayPeriods(52);

        return [
            '00' => [
                $builder
                    ->setTaxInfoOptions(['exempt' => true])
                    ->setWagesInCents(30000)
                    ->setExpectedAmountInCents(null)
                    ->build()
            ],
            '01' => [
                $builder
                    ->setTaxInfoOptions(null)
                    ->setWagesInCents(30000)
                    ->setExpectedAmountInCents(1000)
                    ->build()
            ],
            '02' => [
                $builder
                    ->setTaxInfoOptions(['allowances' => 2])
                    ->setWagesInCents(70000)
                    ->setExpectedAmountInCents(3000)
                    ->build()
            ],
            '03' => [
                $builder
                    ->setTaxInfoOptions(null)
                    ->setWagesInCents(70000)
                    ->setExpectedAmountInCents(3400)
                    ->build()
            ],
        ];
    }
}
