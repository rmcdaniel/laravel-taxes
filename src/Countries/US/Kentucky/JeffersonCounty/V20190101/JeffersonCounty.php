<?php

namespace Appleton\Taxes\Countries\US\Kentucky\JeffersonCounty\V20190101;

use Appleton\Taxes\Classes\Payroll;
use Appleton\Taxes\Countries\US\Kentucky\JeffersonCounty\JeffersonCounty as BaseJeffersonCounty;
use Appleton\Taxes\Models\Countries\US\Kentucky\KentuckyIncomeTaxInformation;
use Illuminate\Database\Eloquent\Collection;

class JeffersonCounty extends BaseJeffersonCounty
{
    const TAX_RATE = 0.022;
    const NONRESIDENT_TAX_RATE = 0.0145;

    public function __construct(KentuckyIncomeTaxInformation $tax_information, Payroll $payroll)
    {
        parent::__construct($tax_information, $payroll);
    }

    public function getTaxBrackets()
    {
        return [[0, self::TAX_RATE, 0]];
    }

    public function compute(Collection $tax_areas)
    {
        if ($this->tax_information->exempt) {
            return 0.00;
        }

        $resident = $tax_areas->contains(function ($tax_area) {
            return $tax_area->homeGovernmentalUnitArea->id !== $tax_area->workGovernmentalUnitArea->id;
        });

        if ($resident) {
            $this->tax_total = $this->payroll->getEarnings() * static::TAX_RATE;
        } else {
            $this->tax_total = $this->payroll->getEarnings() * static::NONRESIDENT_TAX_RATE;
        }

        return round($this->tax_total, 2);
    }
}
