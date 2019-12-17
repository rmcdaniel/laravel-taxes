<?php

namespace Appleton\Taxes\Countries\US\Missouri\MissouriUnemployment\V20200101;

use Appleton\Taxes\Classes\WorkerTaxes\Payroll;
use Appleton\Taxes\Countries\US\Missouri\MissouriUnemployment\MissouriUnemployment as BaseMissouriUnemployment;

class MissouriUnemployment extends BaseMissouriUnemployment
{
    const FUTA_CREDIT = 0.054;
    const NEW_EMPLOYER_RATE = 0.027;
    const WAGE_BASE = 11500;


    public function __construct(Payroll $payroll)
    {
        parent::__construct($payroll);
        $this->tax_rate = config('taxes.rates.us.missouri.unemployment', static::NEW_EMPLOYER_RATE);
    }
}
