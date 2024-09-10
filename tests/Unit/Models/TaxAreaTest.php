<?php

namespace Appleton\Taxes\Tests\Unit\Models;

use Appleton\Taxes\Classes\WorkerTaxes\Taxes\BaseTax;
use Appleton\Taxes\Models\GovernmentalUnitArea;
use Appleton\Taxes\Models\Tax;
use Appleton\Taxes\Models\TaxArea;
use Appleton\Taxes\Tests\Unit\UnitTestCase;

class TaxAreaTest extends UnitTestCase
{
    /**
     * @dataProvider provideTestData
     */
    public function testTaxAreas($home_location, $work_location, $home_gua, $work_gua, $based, $should_contain)
    {
        $tax = new Tax();
        $tax->name = 'Temp Tax';
        $tax->class = BaseTax::class;
        $tax->save();

        $tax_area = new TaxArea();
        $tax_area->tax_id = $tax->id;
        if (!is_null($home_gua)) {
            $tax_area->home_governmental_unit_area_id = GovernmentalUnitArea::where('name', $home_gua)->first()->id;
        }
        if (!is_null($work_gua)) {
            $tax_area->work_governmental_unit_area_id = GovernmentalUnitArea::where('name', $work_gua)->first()->id;
        }
        $tax_area->based = $based;
        $tax_area->save();

        $tax_areas = TaxArea::atPoint($home_location, $work_location)
            ->get()
            ->map(function($tax_area) {
                return $tax_area->tax->name;
            })
            ->toArray();

        if ($should_contain) {
            $this->assertContains('Temp Tax', $tax_areas);
        } else {
            $this->assertNotContains('Temp Tax', $tax_areas);
        }
    }

    public static function provideTestData()
    {
        return [
            '0' => [
                self::getLocation('us.new_york.yonkers'),
                self::getLocation('us.new_york'),
                'Yonkers, NY',
                null,
                TaxArea::BASED_ON_HOME_LOCATION,
                true,
            ],
            '1' => [
                self::getLocation('us.new_york'),
                self::getLocation('us.new_york.yonkers'),
                'Yonkers, NY',
                null,
                TaxArea::BASED_ON_HOME_LOCATION,
                false,
            ],
            '2' => [
                self::getLocation('us.new_york'),
                self::getLocation('us.new_york.yonkers'),
                null,
                'Yonkers, NY',
                TaxArea::BASED_ON_WORK_LOCATION,
                true,
            ],
            '3' => [
                self::getLocation('us.new_york.yonkers'),
                self::getLocation('us.new_york'),
                null,
                'Yonkers, NY',
                TaxArea::BASED_ON_WORK_LOCATION,
                false,
            ],
            '4' => [
                self::getLocation('us.new_york.yonkers'),
                self::getLocation('us.new_york'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_HOME_AND_NOT_WORK_LOCATION,
                true,
            ],
            '5' => [
                self::getLocation('us.new_york.yonkers'),
                self::getLocation('us.new_york.yonkers'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_HOME_AND_NOT_WORK_LOCATION,
                false,
            ],
            '4a' => [
                self::getLocation('us.new_york'),
                self::getLocation('us.new_york.yonkers'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_WORK_AND_NOT_HOME_LOCATION,
                true,
            ],
            '5a' => [
                self::getLocation('us.new_york.yonkers'),
                self::getLocation('us.new_york.yonkers'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_WORK_AND_NOT_HOME_LOCATION,
                false,
            ],
            '6' => [
                self::getLocation('us.new_york.yonkers'),
                self::getLocation('us.new_york.yonkers'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_BOTH_LOCATIONS,
                true,
            ],
            '7' => [
                self::getLocation('us.new_york'),
                self::getLocation('us.new_york.yonkers'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_BOTH_LOCATIONS,
                false,
            ],
            '8' => [
                self::getLocation('us.new_york.yonkers'),
                self::getLocation('us.new_york'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_BOTH_LOCATIONS,
                false,
            ],
            '9' => [
                self::getLocation('us.new_york'),
                self::getLocation('us.new_york.yonkers'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_EITHER_LOCATION,
                true,
            ],
            '10' => [
                self::getLocation('us.new_york.yonkers'),
                self::getLocation('us.new_york'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_EITHER_LOCATION,
                true,
            ],
            '11' => [
                self::getLocation('us.alabama'),
                self::getLocation('us.new_york'),
                'Yonkers, NY',
                'Yonkers, NY',
                TaxArea::BASED_ON_EITHER_LOCATION,
                false,
            ],
        ];
    }
}
