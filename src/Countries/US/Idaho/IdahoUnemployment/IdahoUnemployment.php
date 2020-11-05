<?php

namespace Appleton\Taxes\Countries\US\Idaho\IdahoUnemployment;

use Appleton\Taxes\Classes\WorkerTaxes\Payroll;
use Appleton\Taxes\Classes\WorkerTaxes\Taxes\BaseStateUnemployment;

class IdahoUnemployment extends BaseStateUnemployment
{
    const TYPE = 'state';
    const WITHHELD = false;
    const STATE = 'ID';

    public function __construct(Payroll $payroll)
    {
        parent::__construct($payroll);
        $this->tax_rate = $payroll->getSutaRate(self::STATE);
    }
}
