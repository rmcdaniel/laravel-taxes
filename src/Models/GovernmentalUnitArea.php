<?php

namespace Appleton\Taxes\Models;

use Illuminate\Database\Eloquent\Model;

class GovernmentalUnitArea extends Model
{
    protected $table = 'governmental_unit_areas';

    public function taxAreas()
    {
        return $this->hasMany(TaxArea::class);
    }

    public function scopeAtPoint($query, $latitude, $longitude)
    {
        return $query->whereRaw('ST_Contains(governmental_unit_areas.area, ST_SetSRID(ST_MakePoint(?, ?), 4326))', [$longitude, $latitude]);
    }
}
