<?php

namespace Appleton\Taxes\Models\Countries\US\Michigan;

use Appleton\Taxes\Classes\BaseTaxInformationModel;
use Appleton\Taxes\Countries\US\Michigan\MichiganIncome\MichiganIncome;

class MichiganIncomeTaxInformation extends BaseTaxInformationModel
{
    protected $config_name = 'taxes.tables.us.michigan.michigan_income_tax_information';

    public static function getDefault()
    {
        $tax_information = new self();
        $tax_information->dependents = 0;
        $tax_information->filing_status = MichiganIncome::FILING_SINGLE;
        $tax_information->exempt = false;
        $tax_information->additional_withholding = 0;

        return $tax_information;
    }

    public function getAdditionalWithholding($value)
    {
        return $value * 100;
    }

    public function setAdditionalWithholding($value)
    {
        $this->attributes['additional_withholding'] = round($value / 100);
    }

    public static function getTax()
    {
        return MichiganIncome::class;
    }
}
