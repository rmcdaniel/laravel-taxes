<?php

namespace Appleton\Taxes\Unit\Countries\US\Indiana;

use Appleton\Taxes\Classes\WorkerTaxes\Taxes;
use Appleton\Taxes\Countries\US\Indiana\OrangeIncome\OrangeIncome;
use Appleton\Taxes\Countries\US\Indiana\IndianaIncome\IndianaIncome;
use Appleton\Taxes\Models\Countries\US\Indiana\IndianaIncomeTaxInformation;
use Carbon\Carbon;
use TestCase;

class OrangeIncomeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Carbon::setTestNow(Carbon::parse('2019-01-01'));
    }

    /**
     * from Indiana tax calculation: 300 taxable wages
     * round(300 * .0175) = 5.25 tax
     */
    public function testOrangeIncome(): void
    {
        IndianaIncomeTaxInformation::forUser($this->user)->update([
            'personal_exemptions' => 0,
            'dependent_exemptions' => 0,
            'exempt' => false,
            'additional_withholding' => 0,
            'county_lived' => 59,
            'county_worked' => 58,
        ]);

        $results = $this->taxes->calculate(function (Taxes $taxes) {
            $taxes->setHomeLocation($this->getLocation('us.indiana.orange'));
            $taxes->setWorkLocation($this->getLocation('us.indiana.orange'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertThat(5.25, self::identicalTo($results->getTax(OrangeIncome::class)));
    }

    public function testOrangeIncomeCountyWorked(): void
    {
        IndianaIncomeTaxInformation::forUser($this->user)->update([
            'personal_exemptions' => 0,
            'dependent_exemptions' => 0,
            'exempt' => false,
            'additional_withholding' => 0,
            'county_lived' => 0,
            'county_worked' => 59,
        ]);

        $results = $this->taxes->calculate(function (Taxes $taxes) {
            $taxes->setHomeLocation($this->getLocation('us.indiana.orange'));
            $taxes->setWorkLocation($this->getLocation('us.indiana.orange'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertThat(5.25, self::identicalTo($results->getTax(OrangeIncome::class)));
    }
}
