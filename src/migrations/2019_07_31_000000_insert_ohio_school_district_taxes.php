<?php

use Appleton\Taxes\Models\TaxArea;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertOhioSchoolDistrictTaxes extends Migration
{
    private const CLASSES = [
        'Ada EVSD' => Appleton\Taxes\Countries\US\Ohio\AdaEVSD\AdaEVSDTax::class,
        'Anna LSD' => Appleton\Taxes\Countries\US\Ohio\AnnaLSD\AnnaLSDTax::class,
        'Ansonia LSD' => Appleton\Taxes\Countries\US\Ohio\AnsoniaLSD\AnsoniaLSDTax::class,
        'Antwerp LSD' => Appleton\Taxes\Countries\US\Ohio\AntwerpLSD\AntwerpLSDTax::class,
        'Arcadia LSD' => Appleton\Taxes\Countries\US\Ohio\ArcadiaLSD\ArcadiaLSDTax::class,
        'Arcanum-Butler LSD' => Appleton\Taxes\Countries\US\Ohio\ArcanumButlerLSD\ArcanumButlerLSDTax::class,
        'Arlington LSD' => Appleton\Taxes\Countries\US\Ohio\ArlingtonLSD\ArlingtonLSDTax::class,
        'Athens CSD' => Appleton\Taxes\Countries\US\Ohio\AthensCSD\AthensCSDTax::class,
        'Ayersville LSD' => Appleton\Taxes\Countries\US\Ohio\AyersvilleLSD\AyersvilleLSDTax::class,
        'Bellevue CSD' => Appleton\Taxes\Countries\US\Ohio\BellevueCSD\BellevueCSDTax::class,
        'Berkshire LSD' => Appleton\Taxes\Countries\US\Ohio\BerkshireLSD\BerkshireLSDTax::class,
        'Berne-Union LSD' => Appleton\Taxes\Countries\US\Ohio\BerneUnionLSD\BerneUnionLSDTax::class,
        'Bethel LSD' => Appleton\Taxes\Countries\US\Ohio\BethelLSD\BethelLSDTax::class,
        'Bexley CSD' => Appleton\Taxes\Countries\US\Ohio\BexleyCSD\BexleyCSDTax::class,
        'Big Walnut LSD' => Appleton\Taxes\Countries\US\Ohio\BigWalnutLSD\BigWalnutLSDTax::class,
        'Bloom-Carroll LSD' => Appleton\Taxes\Countries\US\Ohio\BloomCarrollLSD\BloomCarrollLSDTax::class,
        'Bluffton EVSD' => Appleton\Taxes\Countries\US\Ohio\BlufftonEVSD\BlufftonEVSDTax::class,
        'Botkins LSD' => Appleton\Taxes\Countries\US\Ohio\BotkinsLSD\BotkinsLSDTax::class,
        'Bowling Green CSD' => Appleton\Taxes\Countries\US\Ohio\BowlingGreenCSD\BowlingGreenCSDTax::class,
        'Bradford EVSD' => Appleton\Taxes\Countries\US\Ohio\BradfordEVSD\BradfordEVSDTax::class,
        'Bryan CSD' => Appleton\Taxes\Countries\US\Ohio\BryanCSD\BryanCSDTax::class,
        'Buckeye Central LSD' => Appleton\Taxes\Countries\US\Ohio\BuckeyeCentralLSD\BuckeyeCentralLSDTax::class,
        'Buckeye Valley LSD' => Appleton\Taxes\Countries\US\Ohio\BuckeyeValleyLSD\BuckeyeValleyLSDTax::class,
        'Canal Winchester LSD' => Appleton\Taxes\Countries\US\Ohio\CanalWinchesterLSD\CanalWinchesterLSDTax::class,
        'Cardington-Lincoln LSD' => Appleton\Taxes\Countries\US\Ohio\CardingtonLincolnLSD\CardingtonLincolnLSDTax::class,
        'Carey EVSD' => Appleton\Taxes\Countries\US\Ohio\CareyEVSD\CareyEVSDTax::class,
        'Carlisle LSD' => Appleton\Taxes\Countries\US\Ohio\CarlisleLSD\CarlisleLSDTax::class,
        'Cedar Cliff LSD' => Appleton\Taxes\Countries\US\Ohio\CedarCliffLSD\CedarCliffLSDTax::class,
        'Celina CSD' => Appleton\Taxes\Countries\US\Ohio\CelinaCSD\CelinaCSDTax::class,
        'Centerburg LSD' => Appleton\Taxes\Countries\US\Ohio\CenterburgLSD\CenterburgLSDTax::class,
        'Central LSD' => Appleton\Taxes\Countries\US\Ohio\CentralLSD\CentralLSDTax::class,
        'Chippewa LSD' => Appleton\Taxes\Countries\US\Ohio\ChippewaLSD\ChippewaLSDTax::class,
        'Circleville CSD' => Appleton\Taxes\Countries\US\Ohio\CirclevilleCSD\CirclevilleCSDTax::class,
        'Clear Fork Valley LSD' => Appleton\Taxes\Countries\US\Ohio\ClearForkValleyLSD\ClearForkValleyLSDTax::class,
        'Clermont-Northeastern LSD' =>
        Appleton\Taxes\Countries\US\Ohio\ClermontNortheasternLSD\ClermontNortheasternLSDTax::class,
        'Cloverleaf LSD' => Appleton\Taxes\Countries\US\Ohio\CloverleafLSD\CloverleafLSDTax::class,
        'Clyde-Green Springs EVSD' => Appleton\Taxes\Countries\US\Ohio\ClydeGreenSpringsEVSD\ClydeGreenSpringsEVSDTax::class,
        'Coldwater EVSD' => Appleton\Taxes\Countries\US\Ohio\ColdwaterEVSD\ColdwaterEVSDTax::class,
        'Colonel Crawford LSD' => Appleton\Taxes\Countries\US\Ohio\ColonelCrawfordLSD\ColonelCrawfordLSDTax::class,
        'Columbiana EVSD' => Appleton\Taxes\Countries\US\Ohio\ColumbianaEVSD\ColumbianaEVSDTax::class,
        'Columbus Grove LSD' => Appleton\Taxes\Countries\US\Ohio\ColumbusGroveLSD\ColumbusGroveLSDTax::class,
        'Continental LSD' => Appleton\Taxes\Countries\US\Ohio\ContinentalLSD\ContinentalLSDTax::class,
        'Cory-Rawson LSD' => Appleton\Taxes\Countries\US\Ohio\CoryRawsonLSD\CoryRawsonLSDTax::class,
        'Covington EVSD' => Appleton\Taxes\Countries\US\Ohio\CovingtonEVSD\CovingtonEVSDTax::class,
        'Crestline EVSD' => Appleton\Taxes\Countries\US\Ohio\CrestlineEVSD\CrestlineEVSDTax::class,
        'Crestview LSD' => Appleton\Taxes\Countries\US\Ohio\CrestviewLSD\CrestviewLSDTax::class,
        'Crestview LSD' => Appleton\Taxes\Countries\US\Ohio\CrestviewLSD\CrestviewLSDTax::class,
        'Dalton LSD' => Appleton\Taxes\Countries\US\Ohio\DaltonLSD\DaltonLSDTax::class,
        'Danville LSD' => Appleton\Taxes\Countries\US\Ohio\DanvilleLSD\DanvilleLSDTax::class,
        'Defiance CSD' => Appleton\Taxes\Countries\US\Ohio\DefianceCSD\DefianceCSDTax::class,
        'Eastwood LSD' => Appleton\Taxes\Countries\US\Ohio\EastwoodLSD\EastwoodLSDTax::class,
        'Eaton CSD' => Appleton\Taxes\Countries\US\Ohio\EatonCSD\EatonCSDTax::class,
        'Edgerton LSD' => Appleton\Taxes\Countries\US\Ohio\EdgertonLSD\EdgertonLSDTax::class,
        'Edon-Northwest LSD' => Appleton\Taxes\Countries\US\Ohio\EdonNorthwestLSD\EdonNorthwestLSDTax::class,
        'Elgin LSD' => Appleton\Taxes\Countries\US\Ohio\ElginLSD\ElginLSDTax::class,
        'Elmwood LSD' => Appleton\Taxes\Countries\US\Ohio\ElmwoodLSD\ElmwoodLSDTax::class,
        'Evergreen LSD' => Appleton\Taxes\Countries\US\Ohio\EvergreenLSD\EvergreenLSDTax::class,
        'Fairbanks LSD' => Appleton\Taxes\Countries\US\Ohio\FairbanksLSD\FairbanksLSDTax::class,
        'Fairborn CSD' => Appleton\Taxes\Countries\US\Ohio\FairbornCSD\FairbornCSDTax::class,
        'Fairfield Union LSD' => Appleton\Taxes\Countries\US\Ohio\FairfieldUnionLSD\FairfieldUnionLSDTax::class,
        'Fairlawn LSD' => Appleton\Taxes\Countries\US\Ohio\FairlawnLSD\FairlawnLSDTax::class,
        'Fort Loramie LSD' => Appleton\Taxes\Countries\US\Ohio\FortLoramieLSD\FortLoramieLSDTax::class,
        'Fort Recovery LSD' => Appleton\Taxes\Countries\US\Ohio\FortRecoveryLSD\FortRecoveryLSDTax::class,
        'Franklin Monroe LSD' => Appleton\Taxes\Countries\US\Ohio\FranklinMonroeLSD\FranklinMonroeLSDTax::class,
        'Fremont CSD' => Appleton\Taxes\Countries\US\Ohio\FremontCSD\FremontCSDTax::class,
        'Gibsonburg EVSD' => Appleton\Taxes\Countries\US\Ohio\GibsonburgEVSD\GibsonburgEVSDTax::class,
        'Gorham Fayette LSD' => Appleton\Taxes\Countries\US\Ohio\GorhamFayetteLSD\GorhamFayetteLSDTax::class,
        'Goshen LSD' => Appleton\Taxes\Countries\US\Ohio\GoshenLSD\GoshenLSDTax::class,
        'Greeneview LSD' => Appleton\Taxes\Countries\US\Ohio\GreeneviewLSD\GreeneviewLSDTax::class,
        'Greenfield EVSD' => Appleton\Taxes\Countries\US\Ohio\GreenfieldEVSD\GreenfieldEVSDTax::class,
        'Greenville CSD' => Appleton\Taxes\Countries\US\Ohio\GreenvilleCSD\GreenvilleCSDTax::class,
        'Hardin Northern LSD' => Appleton\Taxes\Countries\US\Ohio\HardinNorthernLSD\HardinNorthernLSDTax::class,
        'Hardin-Houston LSD' => Appleton\Taxes\Countries\US\Ohio\HardinHoustonLSD\HardinHoustonLSDTax::class,
        'Hicksville EVSD' => Appleton\Taxes\Countries\US\Ohio\HicksvilleEVSD\HicksvilleEVSDTax::class,
        'Highland LSD' => Appleton\Taxes\Countries\US\Ohio\HighlandLSD\HighlandLSDTax::class,
        'Hillsboro CSD' => Appleton\Taxes\Countries\US\Ohio\HillsboroCSD\HillsboroCSDTax::class,
        'Hillsdale LSD' => Appleton\Taxes\Countries\US\Ohio\HillsdaleLSD\HillsdaleLSDTax::class,
        'Holgate LSD' => Appleton\Taxes\Countries\US\Ohio\HolgateLSD\HolgateLSDTax::class,
        'Hopewell-Loudon LSD' => Appleton\Taxes\Countries\US\Ohio\HopewellLoudonLSD\HopewellLoudonLSDTax::class,
        'Jackson Center LSD' => Appleton\Taxes\Countries\US\Ohio\JacksonCenterLSD\JacksonCenterLSDTax::class,
        'Jefferson LSD' => Appleton\Taxes\Countries\US\Ohio\JeffersonLSD\JeffersonLSDTax::class,
        'Jennings LSD' => Appleton\Taxes\Countries\US\Ohio\JenningsLSD\JenningsLSDTax::class,
        'Johnstown-Monroe LSD' => Appleton\Taxes\Countries\US\Ohio\JohnstownMonroeLSD\JohnstownMonroeLSDTax::class,
        'Jonathan Alder LSD' => Appleton\Taxes\Countries\US\Ohio\JonathanAlderLSD\JonathanAlderLSDTax::class,
        'Kalida LSD' => Appleton\Taxes\Countries\US\Ohio\KalidaLSD\KalidaLSDTax::class,
        'Kenton CSD' => Appleton\Taxes\Countries\US\Ohio\KentonCSD\KentonCSDTax::class,
        'Lakota LSD' => Appleton\Taxes\Countries\US\Ohio\LakotaLSD\LakotaLSDTax::class,
        'Lancaster CSD' => Appleton\Taxes\Countries\US\Ohio\LancasterCSD\LancasterCSDTax::class,
        'Leipsic LSD' => Appleton\Taxes\Countries\US\Ohio\LeipsicLSD\LeipsicLSDTax::class,
        'Liberty Center LSD' => Appleton\Taxes\Countries\US\Ohio\LibertyCenterLSD\LibertyCenterLSDTax::class,
        'Liberty Union-Thurston LSD' =>
        Appleton\Taxes\Countries\US\Ohio\LibertyUnionThurstonLSD\LibertyUnionThurstonLSDTax::class,
        'Liberty-Benton LSD' => Appleton\Taxes\Countries\US\Ohio\LibertyBentonLSD\LibertyBentonLSDTax::class,
        'Licking Valley LSD' => Appleton\Taxes\Countries\US\Ohio\LickingValleyLSD\LickingValleyLSDTax::class,
        'Logan Elm LSD' => Appleton\Taxes\Countries\US\Ohio\LoganElmLSD\LoganElmLSDTax::class,
        'London CSD' => Appleton\Taxes\Countries\US\Ohio\LondonCSD\LondonCSDTax::class,
        'Loudonville-Perrysville EVSD' =>
        Appleton\Taxes\Countries\US\Ohio\LoudonvillePerrysvilleEVSD\LoudonvillePerrysvilleEVSDTax::class,
        'Madison LSD' => Appleton\Taxes\Countries\US\Ohio\MadisonLSD\MadisonLSDTax::class,
        'McComb LSD' => Appleton\Taxes\Countries\US\Ohio\McCombLSD\McCombLSDTax::class,
        'Mechanicsburg EVSD' => Appleton\Taxes\Countries\US\Ohio\MechanicsburgEVSD\MechanicsburgEVSDTax::class,
        'Miami East LSD' => Appleton\Taxes\Countries\US\Ohio\MiamiEastLSD\MiamiEastLSDTax::class,
        'Millcreek-West Unity LSD' => Appleton\Taxes\Countries\US\Ohio\MillcreekWestUnityLSD\MillcreekWestUnityLSDTax::class,
        'Miller City-New Cleveland LSD' =>
        Appleton\Taxes\Countries\US\Ohio\MillerCityNewClevelandLSD\MillerCityNewClevelandLSDTax::class,
        'Milton-Union EVSD' => Appleton\Taxes\Countries\US\Ohio\MiltonUnionEVSD\MiltonUnionEVSDTax::class,
        'Minster LSD' => Appleton\Taxes\Countries\US\Ohio\MinsterLSD\MinsterLSDTax::class,
        'Mississinawa Valley LSD' => Appleton\Taxes\Countries\US\Ohio\MississinawaValleyLSD\MississinawaValleyLSDTax::class,
        'Mohawk LSD' => Appleton\Taxes\Countries\US\Ohio\MohawkLSD\MohawkLSDTax::class,
        'Monroeville LSD' => Appleton\Taxes\Countries\US\Ohio\MonroevilleLSD\MonroevilleLSDTax::class,
        'Montpelier EVSD' => Appleton\Taxes\Countries\US\Ohio\MontpelierEVSD\MontpelierEVSDTax::class,
        'Mount Gilead EVSD' => Appleton\Taxes\Countries\US\Ohio\MountGileadEVSD\MountGileadEVSDTax::class,
        'National Trail LSD' => Appleton\Taxes\Countries\US\Ohio\NationalTrailLSD\NationalTrailLSDTax::class,
        'New Bremen LSD' => Appleton\Taxes\Countries\US\Ohio\NewBremenLSD\NewBremenLSDTax::class,
        'New Knoxville LSD' => Appleton\Taxes\Countries\US\Ohio\NewKnoxvilleLSD\NewKnoxvilleLSDTax::class,
        'New Lebanon LSD' => Appleton\Taxes\Countries\US\Ohio\NewLebanonLSD\NewLebanonLSDTax::class,
        'New London LSD' => Appleton\Taxes\Countries\US\Ohio\NewLondonLSD\NewLondonLSDTax::class,
        'New Miami LSD' => Appleton\Taxes\Countries\US\Ohio\NewMiamiLSD\NewMiamiLSDTax::class,
        'New Riegel LSD' => Appleton\Taxes\Countries\US\Ohio\NewRiegelLSD\NewRiegelLSDTax::class,
        'Newark CSD' => Appleton\Taxes\Countries\US\Ohio\NewarkCSD\NewarkCSDTax::class,
        'Newton LSD' => Appleton\Taxes\Countries\US\Ohio\NewtonLSD\NewtonLSDTax::class,
        'North Baltimore LSD' => Appleton\Taxes\Countries\US\Ohio\NorthBaltimoreLSD\NorthBaltimoreLSDTax::class,
        'North Fork LSD' => Appleton\Taxes\Countries\US\Ohio\NorthForkLSD\NorthForkLSDTax::class,
        'North Union LSD' => Appleton\Taxes\Countries\US\Ohio\NorthUnionLSD\NorthUnionLSDTax::class,
        'Northeastern LSD' => Appleton\Taxes\Countries\US\Ohio\NortheasternLSD\NortheasternLSDTax::class,
        'Northmor LSD' => Appleton\Taxes\Countries\US\Ohio\NorthmorLSD\NorthmorLSDTax::class,
        'Northwest LSD' => Appleton\Taxes\Countries\US\Ohio\NorthwestLSD\NorthwestLSDTax::class,
        'Northwestern LSD' => Appleton\Taxes\Countries\US\Ohio\NorthwesternLSD\NorthwesternLSDTax::class,
        'Northwestern LSD' => Appleton\Taxes\Countries\US\Ohio\NorthwesternLSD\NorthwesternLSDTax::class,
        'Northwood LSD' => Appleton\Taxes\Countries\US\Ohio\NorthwoodLSD\NorthwoodLSDTax::class,
        'Norwalk CSD' => Appleton\Taxes\Countries\US\Ohio\NorwalkCSD\NorwalkCSDTax::class,
        'Norwayne LSD' => Appleton\Taxes\Countries\US\Ohio\NorwayneLSD\NorwayneLSDTax::class,
        'Oberlin CSD' => Appleton\Taxes\Countries\US\Ohio\OberlinCSD\OberlinCSDTax::class,
        'Old Fort LSD' => Appleton\Taxes\Countries\US\Ohio\OldFortLSD\OldFortLSDTax::class,
        'Otsego LSD' => Appleton\Taxes\Countries\US\Ohio\OtsegoLSD\OtsegoLSDTax::class,
        'Ottawa-Glandorf LSD' => Appleton\Taxes\Countries\US\Ohio\OttawaGlandorfLSD\OttawaGlandorfLSDTax::class,
        'Ottoville LSD' => Appleton\Taxes\Countries\US\Ohio\OttovilleLSD\OttovilleLSDTax::class,
        'Pandora-Gilboa LSD' => Appleton\Taxes\Countries\US\Ohio\PandoraGilboaLSD\PandoraGilboaLSDTax::class,
        'Parkway LSD' => Appleton\Taxes\Countries\US\Ohio\ParkwayLSD\ParkwayLSDTax::class,
        'Patrick Henry LSD' => Appleton\Taxes\Countries\US\Ohio\PatrickHenryLSD\PatrickHenryLSDTax::class,
        'Paulding EVSD' => Appleton\Taxes\Countries\US\Ohio\PauldingEVSD\PauldingEVSDTax::class,
        'Perrysburg EVSD' => Appleton\Taxes\Countries\US\Ohio\PerrysburgEVSD\PerrysburgEVSDTax::class,
        'Pettisville LSD' => Appleton\Taxes\Countries\US\Ohio\PettisvilleLSD\PettisvilleLSDTax::class,
        'Pickerington LSD' => Appleton\Taxes\Countries\US\Ohio\PickeringtonLSD\PickeringtonLSDTax::class,
        'Piqua CSD' => Appleton\Taxes\Countries\US\Ohio\PiquaCSD\PiquaCSDTax::class,
        'Plymouth-Shiloh LSD' => Appleton\Taxes\Countries\US\Ohio\PlymouthShilohLSD\PlymouthShilohLSDTax::class,
        'Preble Shawnee LSD' => Appleton\Taxes\Countries\US\Ohio\PrebleShawneeLSD\PrebleShawneeLSDTax::class,
        'Reynoldsburg CSD' => Appleton\Taxes\Countries\US\Ohio\ReynoldsburgCSD\ReynoldsburgCSDTax::class,
        'Ridgemont LSD' => Appleton\Taxes\Countries\US\Ohio\RidgemontLSD\RidgemontLSDTax::class,
        'Riverdale LSD' => Appleton\Taxes\Countries\US\Ohio\RiverdaleLSD\RiverdaleLSDTax::class,
        'Riverside LSD' => Appleton\Taxes\Countries\US\Ohio\RiversideLSD\RiversideLSDTax::class,
        'Ross LSD' => Appleton\Taxes\Countries\US\Ohio\RossLSD\RossLSDTax::class,
        'Russia LSD' => Appleton\Taxes\Countries\US\Ohio\RussiaLSD\RussiaLSDTax::class,
        'Sebring LSD' => Appleton\Taxes\Countries\US\Ohio\SebringLSD\SebringLSDTax::class,
        'Seneca East LSD' => Appleton\Taxes\Countries\US\Ohio\SenecaEastLSD\SenecaEastLSDTax::class,
        'Shelby CSD' => Appleton\Taxes\Countries\US\Ohio\ShelbyCSD\ShelbyCSDTax::class,
        'South Central LSD' => Appleton\Taxes\Countries\US\Ohio\SouthCentralLSD\SouthCentralLSDTax::class,
        'Southeastern LSD' => Appleton\Taxes\Countries\US\Ohio\SoutheasternLSD\SoutheasternLSDTax::class,
        'Southwest Licking LSD' => Appleton\Taxes\Countries\US\Ohio\SouthwestLickingLSD\SouthwestLickingLSDTax::class,
        'Southwest LSD' => Appleton\Taxes\Countries\US\Ohio\SouthwestLSD\SouthwestLSDTax::class,
        'Spencerville LSD' => Appleton\Taxes\Countries\US\Ohio\SpencervilleLSD\SpencervilleLSDTax::class,
        'Springfield LSD' => Appleton\Taxes\Countries\US\Ohio\SpringfieldLSD\SpringfieldLSDTax::class,
        'Stryker LSD' => Appleton\Taxes\Countries\US\Ohio\StrykerLSD\StrykerLSDTax::class,
        'Swanton LSD' => Appleton\Taxes\Countries\US\Ohio\SwantonLSD\SwantonLSDTax::class,
        'Talawanda CSD' => Appleton\Taxes\Countries\US\Ohio\TalawandaCSD\TalawandaCSDTax::class,
        'Teays Valley LSD' => Appleton\Taxes\Countries\US\Ohio\TeaysValleyLSD\TeaysValleyLSDTax::class,
        'Tri-County North LSD' => Appleton\Taxes\Countries\US\Ohio\TriCountyNorthLSD\TriCountyNorthLSDTax::class,
        'Tri-Village LSD' => Appleton\Taxes\Countries\US\Ohio\TriVillageLSD\TriVillageLSDTax::class,
        'Triad LSD' => Appleton\Taxes\Countries\US\Ohio\TriadLSD\TriadLSDTax::class,
        'Triway LSD' => Appleton\Taxes\Countries\US\Ohio\TriwayLSD\TriwayLSDTax::class,
        'Troy CSD' => Appleton\Taxes\Countries\US\Ohio\TroyCSD\TroyCSDTax::class,
        'Twin Valley Community LSD' =>
        Appleton\Taxes\Countries\US\Ohio\TwinValleyCommunityLSD\TwinValleyCommunityLSDTax::class,
        'Union-Scioto LSD' => Appleton\Taxes\Countries\US\Ohio\UnionSciotoLSD\UnionSciotoLSDTax::class,
        'United LSD' => Appleton\Taxes\Countries\US\Ohio\UnitedLSD\UnitedLSDTax::class,
        'Upper Sandusky EVSD' => Appleton\Taxes\Countries\US\Ohio\UpperSanduskyEVSD\UpperSanduskyEVSDTax::class,
        'Upper Scioto Valley LSD' => Appleton\Taxes\Countries\US\Ohio\UpperSciotoValleyLSD\UpperSciotoValleyLSDTax::class,
        'Valley View LSD' => Appleton\Taxes\Countries\US\Ohio\ValleyViewLSD\ValleyViewLSDTax::class,
        'Van Wert CSD' => Appleton\Taxes\Countries\US\Ohio\VanWertCSD\VanWertCSDTax::class,
        'Vanlue LSD' => Appleton\Taxes\Countries\US\Ohio\VanlueLSD\VanlueLSDTax::class,
        'Versailles EVSD' => Appleton\Taxes\Countries\US\Ohio\VersaillesEVSD\VersaillesEVSDTax::class,
        'Walnut Township LSD' => Appleton\Taxes\Countries\US\Ohio\WalnutTownshipLSD\WalnutTownshipLSDTax::class,
        'Wapakoneta CSD' => Appleton\Taxes\Countries\US\Ohio\WapakonetaCSD\WapakonetaCSDTax::class,
        'Wayne Trace LSD' => Appleton\Taxes\Countries\US\Ohio\WayneTraceLSD\WayneTraceLSDTax::class,
        'Waynesfield-Goshen LSD' => Appleton\Taxes\Countries\US\Ohio\WaynesfieldGoshenLSD\WaynesfieldGoshenLSDTax::class,
        'Wellington EVSD' => Appleton\Taxes\Countries\US\Ohio\WellingtonEVSD\WellingtonEVSDTax::class,
        'West Liberty-Salem LSD' => Appleton\Taxes\Countries\US\Ohio\WestLibertySalemLSD\WestLibertySalemLSDTax::class,
        'Western Reserve LSD' => Appleton\Taxes\Countries\US\Ohio\WesternReserveLSD\WesternReserveLSDTax::class,
        'Willard CSD' => Appleton\Taxes\Countries\US\Ohio\WillardCSD\WillardCSDTax::class,
        'Wilmington CSD' => Appleton\Taxes\Countries\US\Ohio\WilmingtonCSD\WilmingtonCSDTax::class,
        'Wyoming CSD' => Appleton\Taxes\Countries\US\Ohio\WyomingCSD\WyomingCSDTax::class,
        'Xenia Community CSD' => Appleton\Taxes\Countries\US\Ohio\XeniaCommunityCSD\XeniaCommunityCSDTax::class,
        'Yellow Springs EVSD' => Appleton\Taxes\Countries\US\Ohio\YellowSpringsEVSD\YellowSpringsEVSDTax::class,
        'Zane-Trace LSD' => Appleton\Taxes\Countries\US\Ohio\ZaneTraceLSD\ZaneTraceLSDTax::class,
    ];

    public function up()
    {
        $area = DB::table('governmental_unit_areas')->where('name', 'Ohio')->first()->area;

        foreach (self::CLASSES as $name => $class) {
            $area_id = DB::table('governmental_unit_areas')->insertGetId([
                'name' => $name.', OH',
                'area' => $area,
            ]);

            $tax_id = DB::table('taxes')->insertGetId([
                'name' => $name,
                'class' => $class,
            ]);

            DB::table('tax_areas')->insert([[
                'tax_id' => $tax_id,
                'work_governmental_unit_area_id' => $area_id,
                'based' => TaxArea::BASED_ON_HOME_LOCATION,
            ]]);
        }
    }
}
