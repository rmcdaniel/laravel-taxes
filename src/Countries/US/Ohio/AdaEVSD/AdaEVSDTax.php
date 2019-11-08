<?php

namespace Appleton\Taxes\Countries\US\Ohio\AdaEVSD;

use Appleton\Taxes\Countries\US\Ohio\OhioSchoolDistrictTraditionalTax;

abstract class AdaEVSDTax extends OhioSchoolDistrictTraditionalTax
{
    private const ID = '3301';

    protected function getId(): string
    {
        return self::ID;
    }
}
