<?php

namespace Appleton\Taxes\Unit\Countries\US\Indiana;

use Appleton\Taxes\Classes\WorkerTaxes\Taxes;
use Appleton\Taxes\Countries\US\Indiana\HenryIncome\HenryIncome;
use Appleton\Taxes\Countries\US\Indiana\IndianaIncome\IndianaIncome;
use Appleton\Taxes\Models\Countries\US\Indiana\IndianaIncomeTaxInformation;
use Carbon\Carbon;
use TestCase;

class HenryIncomeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Carbon::setTestNow(Carbon::parse('2019-01-01'));
    }

    /**
     * from Indiana tax calculation: 300 taxable wages
     * round(300 * .015) = 4.50 tax
     */
    public function testHenryIncome(): void
    {
        IndianaIncomeTaxInformation::forUser($this->user)->update([
            'personal_exemptions' => 0,
            'dependent_exemptions' => 0,
            'exempt' => false,
            'additional_withholding' => 0,
            'county_lived' => 33,
            'county_worked' => 32,
        ]);

        $results = $this->taxes->calculate(function (Taxes $taxes) {
            $taxes->setHomeLocation($this->getLocation('us.indiana.henry'));
            $taxes->setWorkLocation($this->getLocation('us.indiana.henry'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertThat(4.50, self::identicalTo($results->getTax(HenryIncome::class)));
    }

    public function testHenryIncomeCountyWorked(): void
    {
        IndianaIncomeTaxInformation::forUser($this->user)->update([
            'personal_exemptions' => 0,
            'dependent_exemptions' => 0,
            'exempt' => false,
            'additional_withholding' => 0,
            'county_lived' => 0,
            'county_worked' => 33,
        ]);

        $results = $this->taxes->calculate(function (Taxes $taxes) {
            $taxes->setHomeLocation($this->getLocation('us.indiana.henry'));
            $taxes->setWorkLocation($this->getLocation('us.indiana.henry'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertThat(4.50, self::identicalTo($results->getTax(HenryIncome::class)));
    }
}
