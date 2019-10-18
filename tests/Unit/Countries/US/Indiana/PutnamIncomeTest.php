<?php

namespace Appleton\Taxes\Unit\Countries\US\Indiana;

use Appleton\Taxes\Classes\WorkerTaxes\Taxes;
use Appleton\Taxes\Countries\US\Indiana\PutnamIncome\PutnamIncome;
use Appleton\Taxes\Countries\US\Indiana\IndianaIncome\IndianaIncome;
use Appleton\Taxes\Models\Countries\US\Indiana\IndianaIncomeTaxInformation;
use Carbon\Carbon;
use TestCase;

class PutnamIncomeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Carbon::setTestNow(Carbon::parse('2019-01-01'));
    }

    /**
     * from Indiana tax calculation: 300 taxable wages
     * round(300 * .02) = 6.00 tax
     */
    public function testPutnamIncome(): void
    {
        IndianaIncomeTaxInformation::forUser($this->user)->update([
            'personal_exemptions' => 0,
            'dependent_exemptions' => 0,
            'exempt' => false,
            'additional_withholding' => 0,
            'county_lived' => 67,
            'county_worked' => 66,
        ]);

        $results = $this->taxes->calculate(function (Taxes $taxes) {
            $taxes->setHomeLocation($this->getLocation('us.indiana.putnam'));
            $taxes->setWorkLocation($this->getLocation('us.indiana.putnam'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertThat(6.00, self::identicalTo($results->getTax(PutnamIncome::class)));
    }

    public function testPutnamIncomeCountyWorked(): void
    {
        IndianaIncomeTaxInformation::forUser($this->user)->update([
            'personal_exemptions' => 0,
            'dependent_exemptions' => 0,
            'exempt' => false,
            'additional_withholding' => 0,
            'county_lived' => 0,
            'county_worked' => 67,
        ]);

        $results = $this->taxes->calculate(function (Taxes $taxes) {
            $taxes->setHomeLocation($this->getLocation('us.indiana.putnam'));
            $taxes->setWorkLocation($this->getLocation('us.indiana.putnam'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertThat(6.00, self::identicalTo($results->getTax(PutnamIncome::class)));
    }
}
