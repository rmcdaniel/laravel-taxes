<?php

namespace Appleton\Taxes\Unit\Countries\US\Colorado\V20190101;

use Appleton\Taxes\Classes\WorkerTaxes\TaxResults;
use Appleton\Taxes\Countries\US\Colorado\DenverOccupationalPrivilegeEmployer\DenverOccupationalPrivilegeEmployer;
use Carbon\Carbon;
use TestCase;

class DenverOccupationalPrivilegeEmployerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Carbon::setTestNow(Carbon::parse('2019-01-01'));
    }

    public function testDenverOccupationalPrivilege_no_local_wages(): void
    {
        $results = $this->calculateTaxes(0, 0, 55000, 0);
        $this->assertNull($results->getTax(DenverOccupationalPrivilegeEmployer::class));
    }

    public function testDenverOccupationalPrivilege_local_wages_already_taken(): void
    {
        $results = $this->calculateTaxes(10000, 55000, 10000, 55000);
        $this->assertNull($results->getTax(DenverOccupationalPrivilegeEmployer::class));
    }

    public function testDenverOccupationalPrivilege_local_wages_at_limit(): void
    {
        $results = $this->calculateTaxes(50000, 0, 50000, 0);
        $this->assertSame(4.0, $results->getTax(DenverOccupationalPrivilegeEmployer::class));
    }

    public function testDenverOccupationalPrivilege_local_wages_cross_limit(): void
    {
        $results = $this->calculateTaxes(60000, 0, 60000, 0);
        $this->assertSame(4.0, $results->getTax(DenverOccupationalPrivilegeEmployer::class));
    }

    public function testDenverOccupationalPrivilege_other_wages_at_limit(): void
    {
        $results = $this->calculateTaxes(0, 10000, 40000, 10000);
        $this->assertSame(4.0, $results->getTax(DenverOccupationalPrivilegeEmployer::class));
    }

    public function testDenverOccupationalPrivilege_other_wages_cross_limit(): void
    {
        $results = $this->calculateTaxes(0, 10000, 45000, 10000);
        $this->assertSame(4.0, $results->getTax(DenverOccupationalPrivilegeEmployer::class));
    }

    public function testDenverOccupationalPrivilege_local_wages_not_enough(): void
    {
        $results = $this->calculateTaxes(10000, 10000, 10000, 10000);
        $this->assertNull($results->getTax(DenverOccupationalPrivilegeEmployer::class));
    }

    private function calculateTaxes(
        int $local_earnings,
        int $previous_local_earnings,
        int $colorado_earnings,
        int $previous_colorado_earnings
    ): TaxResults {
        return $this->taxes->calculate(function ($taxes) use ($local_earnings, $previous_local_earnings, $colorado_earnings, $previous_colorado_earnings) {
            $taxes->setHomeLocation($this->getLocation('us.colorado'));
            $taxes->setWorkLocation($this->getLocation('us.colorado'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(10000);
            $taxes->setPayPeriods(52);
            $taxes->setMtdEarnings(static function ($governmental_unit_area, $include_current) use ($local_earnings, $previous_local_earnings, $colorado_earnings, $previous_colorado_earnings) {
                if ($governmental_unit_area->name === 'Denver, CO') {
                    return $include_current ? $local_earnings + $previous_local_earnings : $previous_local_earnings;
                }

                if ($governmental_unit_area->name === 'Colorado') {
                    return $include_current ? $colorado_earnings + $previous_colorado_earnings : $previous_colorado_earnings;
                }

                return 0.0;
            });
        });
    }
}
