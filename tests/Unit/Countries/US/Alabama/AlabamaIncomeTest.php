<?php

namespace Appleton\Taxes\Countries\US\Alabama\AlabamaIncome;

use Appleton\Taxes\Classes\Taxes;
use Appleton\Taxes\Models\Countries\US\Alabama\AlabamaIncomeTaxInformation;

class AlabamaIncomeTest extends \TestCase
{
    public function testAlabamaIncome()
    {
        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setWorkLocation(32.3182, -86.9023);
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setPayPeriods(260);
        });

        $this->assertSame(2.07, $results->getTax(AlabamaIncome::class));
    }

    public function testAlabamaIncomeNonNegative()
    {
        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setWorkLocation(32.3182, -86.9023);
            $taxes->setUser($this->user);
            $taxes->setEarnings(10);
            $taxes->setPayPeriods(260);
        });

        $this->assertSame(0.0, $results->getTax(AlabamaIncome::class));
    }

    public function testAlabamaIncomeWithNoPersonalExemption()
    {
        AlabamaIncomeTaxInformation::forUser($this->user)->update(['filing_status' => Taxes::resolve(AlabamaIncome::class)::FILING_ZERO]);

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setWorkLocation(32.3182, -86.9023);
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setPayPeriods(260);
        });

        $this->assertSame(2.84, $results->getTax(AlabamaIncome::class));
    }
}
