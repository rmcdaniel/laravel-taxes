<?php

namespace Appleton\Taxes\Countries\US\Ohio\HillsboroCSD;

use Appleton\Taxes\Classes\WorkerTaxes\Payroll;
use Appleton\Taxes\Classes\WorkerTaxes\Taxes\BaseOccupational;
use Appleton\Taxes\Models\Countries\US\Ohio\OhioIncomeTaxInformation;

abstract class HillsboroCSDTax extends BaseOccupational
{
    protected $tax_information;
    protected $payroll;

    public function __construct(OhioIncomeTaxInformation $tax_information, Payroll $payroll)
    {
        parent::__construct($payroll);
        $this->tax_information = $tax_information;
    }
}
