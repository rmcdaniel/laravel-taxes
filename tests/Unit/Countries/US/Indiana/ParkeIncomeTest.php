<?php

namespace Appleton\Taxes\Unit\Countries\US\Indiana;

use Appleton\Taxes\Classes\WorkerTaxes\Taxes;
use Appleton\Taxes\Countries\US\Indiana\ParkeIncome\ParkeIncome;
use Appleton\Taxes\Countries\US\Indiana\IndianaIncome\IndianaIncome;
use Appleton\Taxes\Models\Countries\US\Indiana\IndianaIncomeTaxInformation;
use Carbon\Carbon;
use TestCase;

class ParkeIncomeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Carbon::setTestNow(Carbon::parse('2019-01-01'));
    }

    /**
     * from Indiana tax calculation: 300 taxable wages
     * round(300 * .0265) = 7.95 tax
     */
    public function testParkeIncome(): void
    {
        IndianaIncomeTaxInformation::forUser($this->user)->update([
            'personal_exemptions' => 0,
            'dependent_exemptions' => 0,
            'exempt' => false,
            'additional_withholding' => 0,
            'county_lived' => 61,
            'county_worked' => 60,
        ]);

        $results = $this->taxes->calculate(function (Taxes $taxes) {
            $taxes->setHomeLocation($this->getLocation('us.indiana.parke'));
            $taxes->setWorkLocation($this->getLocation('us.indiana.parke'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertThat(7.94, self::identicalTo($results->getTax(ParkeIncome::class)));
    }

    public function testParkeIncomeCountyWorked(): void
    {
        IndianaIncomeTaxInformation::forUser($this->user)->update([
            'personal_exemptions' => 0,
            'dependent_exemptions' => 0,
            'exempt' => false,
            'additional_withholding' => 0,
            'county_lived' => 0,
            'county_worked' => 61,
        ]);

        $results = $this->taxes->calculate(function (Taxes $taxes) {
            $taxes->setHomeLocation($this->getLocation('us.indiana.parke'));
            $taxes->setWorkLocation($this->getLocation('us.indiana.parke'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertThat(7.94, self::identicalTo($results->getTax(ParkeIncome::class)));
    }
}
