<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Georgia\V20180101;

use Appleton\Taxes\Countries\US\Georgia\GeorgiaIncome\GeorgiaIncome;
use Appleton\Taxes\Models\Countries\US\Georgia\GeorgiaIncomeTaxInformation;
use Appleton\Taxes\Tests\Unit\Countries\IncomeParameters;
use Appleton\Taxes\Tests\Unit\Countries\IncomeParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;

class GeorgiaIncomeTest extends TaxTestCase
{
    private const DATE = '2018-01-01';
    private const LOCATION = 'us.georgia';
    private const TAX_CLASS = GeorgiaIncome::class;
    private const TAX_INFO_CLASS = GeorgiaIncomeTaxInformation::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);

        GeorgiaIncomeTaxInformation::createForUser([
            'additional_withholding' => 0,
            'allowances' => 0,
            'dependents' => 0,
            'personal_allowances' => 0,
            'filing_status' => GeorgiaIncome::FILING_SINGLE,
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
            ->setTaxInfoClass(self::TAX_INFO_CLASS);

        return [
            '01' => [
                $builder
                    ->setTaxInfoOptions(null)
                    ->setWagesInCents(6668)
                    ->setPayPeriods(260)
                    ->setExpectedAmountInCents(273)
                    ->build()
            ],
            '02' => [
                $builder
                    ->setTaxInfoOptions(null)
                    ->setWagesInCents(68000)
                    ->setPayPeriods(52)
                    ->setExpectedAmountInCents(3449)
                    ->build()
            ],
            'additional withholding 01' => [
                $builder
                    ->setTaxInfoOptions([
                        'additional_withholding' => 10,
                    ])
                    ->setWagesInCents(0)
                    ->setPayPeriods(260)
                    ->setExpectedAmountInCents(null)
                    ->build()
            ],
            'additional withholding 02' => [
                $builder
                    ->setTaxInfoOptions([
                        'additional_withholding' => 10,
                    ])
                    ->setWagesInCents(6668)
                    ->setPayPeriods(260)
                    ->setExpectedAmountInCents(1273)
                    ->build()
            ],
            'supplemental' => [
                (new IncomeParametersBuilder())
                    ->setDate(self::DATE)
                    ->setHomeLocation(self::LOCATION)
                    ->setTaxClass(self::TAX_CLASS)
                    ->setWagesInCents(10000)
                    ->setSupplementalWagesInCents(10000)
                    ->setPayPeriods(1)
                    ->setExpectedAmountInCents(200)
                    ->build()
            ],
            'not enough wages' => [
                $builder
                    ->setTaxInfoOptions(null)
                    ->setWagesInCents(900)
                    ->setPayPeriods(260)
                    ->setExpectedAmountInCents(null)
                    ->build()
            ],
            'no wages' => [
                $builder
                    ->setTaxInfoOptions(null)
                    ->setWagesInCents(0)
                    ->setPayPeriods(260)
                    ->setExpectedAmountInCents(null)
                    ->build()
            ],
            '08' => [
                $builder
                    ->setTaxInfoOptions(null)
                    ->setWagesInCents(6668)
                    ->setPayPeriods(260)
                    ->setExpectedAmountInCents(273)
                    ->build()
            ],
            'exempt' => [
                $builder
                    ->setTaxInfoOptions([
                        'exempt' => true,
                    ])
                    ->setWagesInCents(6668)
                    ->setPayPeriods(260)
                    ->setExpectedAmountInCents(null)
                    ->build()
            ],
            'married with allowance' => [
                $builder
                    ->setTaxInfoOptions([
                        'filing_status' => GeorgiaIncome::FILING_MARRIED_JOINT_BOTH_WORKING,
                        'personal_allowances' => 1,
                    ])
                    ->setWagesInCents(41250)
                    ->setPayPeriods(52)
                    ->setExpectedAmountInCents(1625)
                    ->build()
            ],
        ];
    }
}
