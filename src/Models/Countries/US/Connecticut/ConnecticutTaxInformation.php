<?php

namespace Appleton\Taxes\Models\Countries\US\Connecticut;

use Appleton\Taxes\Countries\US\Connecticut\ConnecticutIncome\ConnecticutIncome;
use Appleton\Taxes\Classes\BaseTaxInformationModel;

class ConnecticutIncomeTaxInformation extends BaseTaxInformationModel
{
    protected $config_name = 'taxes.tables.us.connecticut.connecticut_income_tax_information';

    public static function getDefault()
    {
        $tax_information = new self();
        $tax_information->dependents = 0;
        $tax_information->exempt = false;
        $tax_information->school_district_id = 0;
        return $tax_information;
    }

    public static function getTax()
    {
        return ConnecticutIncome::class;
    }
}
