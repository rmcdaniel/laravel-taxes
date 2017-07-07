<?php

namespace Appleton\Taxes\Classes;

use Appleton\Taxes\Models\TaxArea;
use Appleton\Taxes\Models\TaxInformation;
use Carbon\Carbon;
use Closure;

class Taxes
{
    protected $date = null;
    protected $pay_periods = 1;
    protected $supplemental_earnings = 0;
    protected $ytd_earnings = 0;

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setEarnings($earnings)
    {
        $this->earnings = $earnings;
    }

    public function setPayPeriods($pay_periods)
    {
        $this->pay_periods = $pay_periods;
    }

    public function setSupplementalEarnings($supplemental_earnings)
    {
        $this->supplemental_earnings = $supplemental_earnings;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setWorkLocation($location)
    {
        $this->latitude = $location[0];
        $this->longitude = $location[1];
    }

    public function setYtdEarnings($ytd_earnings)
    {
        $this->ytd_earnings = $ytd_earnings;
    }

    public function calculate(Closure $closure)
    {
        $closure($this);

        $this->taxes = TaxArea::atPoint($this->latitude, $this->longitude)
            ->get()
            ->pluck('tax')
            ->toArray();

        app(TaxResolver::class)->resolve($this->taxes, static::checkTestDate($this->date));

        $tax_results = [];
        foreach ($this->taxes as $tax_name) {
            $tax_results[$tax_name] = app($tax_name)->build([
                'date' => static::checkTestDate($this->date),
                'earnings' => $this->earnings,
                'pay_periods' => $this->pay_periods,
                'supplemental_earnings' => $this->supplemental_earnings,
                'user' => $this->user,
                'ytd_earnings' => $this->ytd_earnings,
            ])->compute();
        }

        $tax_results = app()->makeWith(TaxResults::class, [
            'tax_results' => $tax_results,
            'date' => static::checkTestDate($this->date),
        ]);

        return $tax_results;
    }

    public static function checkTestDate($date)
    {
        $test_now = env('TAXES_TEST_NOW');
        return is_null($test_now) ? $date : Carbon::parse($test_now);
    }

    public static function resolve($classes, $date = null)
    {
        if (is_string($classes)) {
            return app(TaxResolver::class)->resolve([$classes], static::checkTestDate($date))[0];
        } else {
            return app(TaxResolver::class)->resolve($classes, static::checkTestDate($date));
        }
    }
}
