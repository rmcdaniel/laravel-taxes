<?php

use Appleton\Taxes\Countries\US\Kentucky\GeorgetownCity\GeorgetownCity;
use Appleton\Taxes\Countries\US\Kentucky\ScottCounty\ScottCounty;
use Appleton\Taxes\Countries\US\Kentucky\ScottCountySchoolDistrict\ScottCountySchoolDistrict;
use Appleton\Taxes\Models\TaxArea;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $governmental_unit_areas = 'governmental_unit_areas';
    protected $tax_areas = 'tax_areas';
    protected $tax_information = 'kentucky_income_tax_information';
    protected $taxes = 'taxes';

    public function up()
    {
        Schema::table($this->tax_information, function (Blueprint $table) {
            $table->boolean('lives_in_scsd')->default(false);
        });

        $scott_county_id = DB::table($this->governmental_unit_areas)->insertGetId([
            'name' => 'Scott County, KY',
            'area' => '0106000020E6100000010000000103000000010000005A010000496760E4652F55C057CF49EF1B2D434052B4722F302D55C005BF0D315E2F434038DBDC989E2B55C019A721AAF0314340D903ADC0902955C0E2CB441152354340111AC1C6F52755C026E318C91E374340DCD5ABC8E82755C02EAA4544313743405DC30C8D272555C0C45DBD8A8C3C4340EF022505162555C0ADC090D5AD3C434051BEA085042455C00D37E0F3C33E4340226E4E25032455C0F9635A9BC63E4340EB6D3315E22355C08BA2073E063F4340EACE13CFD92355C0DEAB5626FC3E43407D5C1B2AC62355C0A245B6F3FD3E4340E9263108AC2355C03B527DE7173F4340B29E5A7D752355C0984A3FE1EC3E434067B45549642355C0F068E388B53E4340F73AA92F4B2355C0E94141295A3D4340C0CFB870202355C07D3CF4DDAD3C4340452A8C2D042355C0B7B1D991EA3B43401C60E63BF82255C0BB5E9A22C03B43402A6D718DCF2255C03D27BD6F7C3B4340A2EF6E65892255C0EB5223F4333B4340FA96395D162255C0F20A444FCA3A434016DA39CD022255C018778368AD3A4340603DEE5BAD2155C0012F336C94394340BAA29410AC2155C04D9F1D705D394340581B6327BC2155C0645A9BC6F638434076FD82DDB02155C0AE9E93DE3738434004560E2DB22155C08BA548BE12384340457F68E6C92155C0FA7E6ABC74374340AAD6C22CB42155C0DAACFA5C6D37434020B3B3E89D2155C052D158FB3B374340B35A608F892155C038BC20223537434046E867EA752155C0A5F27684D3364340C6FA0626372155C04869368FC3364340C6A01342072155C0FF21FDF67536434091EBA694D72055C044A0FA079136434043E048A0C12055C0E5400FB56D364340E04BE141B32055C075029A081B3643408B69A67B9D2055C048FDF50A0B364340C01F7EFE7B2055C0232E008DD2354340FBAC32535A2055C07DE71725E8354340DE1FEF552B2055C0E2ADF36F973543405F22DE3AFF1F55C0DE3B6A4C883543405DDE1CAED51F55C0A73B4F3C673543408B6F287CB61F55C029E620E868354340F279C5538F1F55C0102384471B354340F1D4230D6E1F55C006280D350A354340CF2C0950531F55C0BAA29410AC3443402D5C5661331F55C0E99B340D8A3443405C55F65D111F55C059BE2EC37F344340F758FAD0051F55C0724F57772C34434077F69507E91E55C0357BA01518344340BB7EC16ED81E55C0179D2CB5DE33434060E28FA2CE1E55C0367689EAAD334340FE277FF78E1E55C04546072461334340CC28965B5A1E55C0BFEFDFBC38334340F46DC1525D1E55C081CAF8F719334340FE5F75E4481E55C0D5CDC5DFF632434073F1B73D411E55C019E59997C33243407E17B6662B1E55C06E6DE179A932434022E2E654321E55C03D0D18247D3243400CE544BB0A1E55C0C47B0E2C47324340F161F6B2ED1D55C04A7B832F4C324340164F3DD2E01D55C0EC4960730E324340F0C2D66CE51D55C064575A46EA3143408080B56AD71D55C0B1DEA815A6314340CE31207BBD1D55C0CD04C3B98631434017EFC7ED971D55C02060ADDA353143409E2287889B1D55C05A2BDA1CE73043401BBCAFCA851D55C073BC02D193304340FC4E93196F1D55C07B2C7DE8823043402025766D6F1D55C07B4ACE893D3043409F91088D601D55C0A9F8BF232A30434095B377465B1D55C07D5C1B2AC62F434076525F96761D55C0D7BE805EB82F43400AB952CF821D55C09BC761307F2F43409E978A8D791D55C0BABDA4315A2F434051651877831D55C0B7D100DE022F43406708C72C7B1D55C0E6ADBA0ED52E434086C613419C1D55C01E34BBEEAD2E434063D34A21901D55C02B172AFF5A2E434051853FC39B1D55C0B6F1272A1B2E4340E01115AA9B1D55C0A60C1CD0D22D43408AC745B5881D55C0A08A1BB7982D4340D5AE09698D1D55C00ADAE4F0492D4340C87BD5CA841D55C06DE00ED4292D434033A48AE2551D55C0A296E656082D434068C878944A1D55C0137F1475E62C43405301F73C7F1D55C0ED0DBE30992C4340FF1EBC76691D55C09B73F04C682C4340B69F8CF1611D55C04223D8B8FE2B4340B648DA8D3E1D55C0D158FB3BDB2B4340AA97DF69321D55C02BA5677A892B4340575A46EA3D1D55C05A9E0777672B4340A19FA9D72D1D55C00E9E094D122B4340C1FD8007061D55C01AC1C6F5EF2A4340CADB114E0B1D55C05F234910AE2A434096AE601BF11C55C0139D6516A12A4340F6B6990AF11C55C0F7AB00DF6D2A4340621399B9C01C55C04AB54FC7632A434009F9A067B31C55C0C85C19541B2A4340674293C4921C55C051DB8651102A4340F16261889C1C55C0187AC4E8B929434019710168941C55C0E694809884294340D7D9907F661C55C004E275FD82294340FFEA71DF6A1C55C0847D3B8908294340E55E6056281C55C053E9279CDD2843402907B309301C55C02DB29DEFA72843401CEE23B7261C55C033A48AE255284340787E5182FE1B55C00BB43BA418284340E0641BB8031C55C0B515FBCBEE2743409AB2D30FEA1B55C074B2D47ABF2743402EFF21FDF61B55C0309C6B98A127434021C9ACDEE11B55C0E7887C97522743408EC70C54C61B55C0126745D444274340D576137CD31B55C0EB18575C1C274340D7DB662AC41B55C05CE49EAEEE264340AB9509BFD41B55C04BFF9254A62643408CD7BCAAB31B55C09DF2E84658264340A9BF5E61C11B55C0B876A22424264340FE60E0B9F71B55C0C32B499EEB2543407D5BB054171C55C054ABAFAE0A2643409BE271512D1C55C0C1E09A3BFA25434037A5BC56421C55C07F2C4487C0254340F71DC3633F1C55C0813D26529A254340D80DDB16651C55C09A3DD00A0C25434079E57ADB4C1C55C076BF0AF0DD244340E1085229761C55C00DE02D90A02443402D3E05C0781C55C0A772DA5372244340BD8DCD8E541C55C06186C61341244340ECD79DEE3C1C55C0062B4EB516244340743FA7203F1C55C0340D8AE60124434071581AF8511C55C04485EAE6E2234340367172BF431C55C0527FBDC282234340A25BAFE9411C55C0647616BD53234340A2EA573A1F1C55C0BBEB6CC83F234340B0E600C11C1C55C0A583F57F0E2343405A626534F21B55C0D7F4A0A0142343407C7C4276DE1B55C0DA8B683BA62243402DCBD765F81B55C0151C5E1091224340395CAB3DEC1B55C0DD3F16A2432243407022FAB5F51B55C0D0B52FA017224340FC36C478CD1B55C0643A747ADE214340645B069CA51B55C063D2DF4BE1214340AA9CF6949C1B55C0D68A36C7B921434037F8C264AA1B55C070067FBF98214340BBB6B75B921B55C0295B24ED46214340B184B531761B55C0DBA0F65B3B21434072C0AE264F1B55C0075C57CC08214340198C1189421B55C0446B459BE3204340A6EECA2E181B55C0CFF3A78DEA2043401E5036E50A1B55C0D86322A5D920434079E92631081B55C062A2410A9E20434094F8DC09F61A55C05A9BC6F65A204340F5B9DA8AFD1A55C0A850DD5CFC1F4340F85278D0EC1A55C0B94E232D951F4340944C4EED0C1B55C04D8237A4511F434046B247A8191B55C08B8BA372131F4340232A5437171B55C0A5DB12B9E01E43409E3E027FF81A55C06BBA9EE8BA1E43401171732A191B55C0FD851E317A1E4340E04735ECF71A55C0D7666325E61D4340E04735ECF71A55C0A5643909A51D434046ED7E15E01A55C0F37002D3691D434060915F3FC41A55C0D93EE42D571D43404C874ECFBB1A55C0BE9EAF592E1D4340B2666490BB1A55C060CB2BD7DB1C4340226FB9FAB11A55C0DD5B9198A01C4340A703594FAD1A55C0B81E85EB511C434078EA9106B71A55C044679945281C43403E74417DCB1A55C0FD868906291C4340D905836BEE1A55C0AF5E4546071C4340FCFB8C0B071B55C0F224E99AC91B434072A1F2AFE51A55C0C5C89239961B4340F67CCD72D91A55C044DE72F5631B434009302C7FBE1A55C0FA27B858511B434093A8177C9A1A55C0F6EFFACC591B4340EBFD463B6E1A55C05516855D141B434038A27BD6351A55C0172B6A300D1B4340DFDFA0BDFA1955C04AD1CABDC01A43406133C005D91955C06A865451BC1A4340B9BF7ADCB71955C05D19541B9C1A4340C9AB730CC81E55C08E3EE6030217434006D3307C441F55C0DFE00B93A9164340897AC1A7392255C08DB454DE8E144340D7F9B7CB7E2255C0E8F351465C144340FBAA5CA8FC2255C0C4CDA96400144340C87C40A0332355C050E27327D81343405AB741EDB72755C01F2E39EE9410434083F8C08EFF2755C04F029B73F00E4340A69A594B012855C01F2DCE18E60E4340F23D23111A2855C06B459BE3DC0E43405F9335EA212855C0DC274701A20E4340FB3BDBA3372855C0F6083543AA0E4340A983BC1E4C2855C045B75ED3830E434056D11F9A792855C0A164726A670E434090847D3B892855C046EC1340310E43402FF65E7CD12855C0117008556A0E4340373465A71F2955C0EC6AF294D50E4340C36169E0472955C09259BDC3ED0E43405EF3AACE6A2955C0B4C876BE9F0E4340C937DBDC982955C00FEB8D5A610E4340607138F3AB2955C0B4AB90F2930E43408C6CE7FBA92955C0F221A81ABD0E434050DF32A7CB2955C09529E620E80E43401FF30181CE2955C0AFCF9CF5290F43409BE3DC26DC2955C0158E2095620F43400D6E6B0BCF2955C0D72D02637D0F4340D7135D177E2955C0A6B6D4415E0F434099BA2BBB602955C08AFF3BA2420F43408BBFED09122955C098A0866F610F43403ECE3461FB2855C072BF4351A00F4340ADA580B4FF2855C002F4FBFECD0F4340670C7382362955C0609335EA21104340435376FA412955C04F72874D641043402785798F332955C0D95E0B7A6F104340700514EAE92855C06211C30E631043408B14CAC2D72855C00A4CA7751B104340F92F1004C82855C0F8DB9E20B10F4340B9C2BB5CC42855C0E5266A696E0F434095986725AD2855C0CE328B506C0F4340955E9B8D952855C0DCF0BBE9960F43404FCC7A31942855C0AE64C74620104340DA8B683BA62855C05038BBB54C10434033FAD170CA2855C0FBCC599F7210434004E44BA8E02855C0F7764B72C01043407E6C921FF12855C0E38C614ED0104340DEAB5626FC2855C09EE925C6321143409D616A4B1D2955C0E08096AE60114340771211FE452955C0FDDAFAE93F11434043183F8D7B2955C05B9885764E114340852172FA7A2955C0C85EEFFE78114340D1E5CDE15A2955C06247E350BF1143409355116E322955C00BD0B69A75124340A9876874072955C00470B378B11243407B14AE47E12855C0F3203D450E13434003965CC5E22855C060ADDA352113434044132862112955C0BA2C26361F13434012F6ED24222955C06ADD06B5DF124340F8A57EDE542955C0D3156C239E124340D3156C239E2955C084D6C3978912434079E75086AA2955C083BF5FCC961243400584D6C3972955C0FE092E56D41243408C834BC79C2955C091990B5C1E134340C3B7B06EBC2955C06EF607CA6D134340C8091346B32955C02FF99FFCDD1343408E76DCF0BB2955C0CA6C904946144340B854A52DAE2955C0999D45EF541443405DF92CCF832955C04FE78A52421443409E95B4E21B2955C06280441328144340116E32AA0C2955C07172BF4351144340069CA564392955C09A9658198D1443405FB69DB6462955C0B891B245D2144340B69C4B71552955C02BDB87BCE514434084F068E3882955C076BF0AF0DD144340DC0DA2B5A22955C0416150A6D11443401897AAB4C52955C05B77F35487144340242713B70A2A55C057AD4CF8A5144340B6BA9C12102A55C01A4D2EC6C0144340F17EDC7EF92955C019C748F60815434056444DF4F92955C0698B6B7C2615434002D6AA5D132A55C0C84109336D154340BBB88D06F02955C00E10CCD1E315434087A2409FC82955C06EF59CF4BE15434016C1FF56B22955C00BB6114F761543403FFD67CD8F2955C0D784B4C6A0154340D9CC21A9852955C08AE6012CF2154340096B63EC842955C05740A19E3E1643407BBE66B96C2955C0D9AF3BDD79164340B2D5E594802955C0DD787764AC16434061C26856B62955C0D6FB8D76DC1643406FEEAF1EF72955C009DB4FC6F8164340D9EA724A402A55C06FB72407EC1643408A3C49BA662A55C0AD4A22FB20174340D89B1892932A55C07FA2B2614D1743407592AD2EA72A55C0D13DEB1A2D174340D72D02637D2A55C0DBF97E6ABC1643409291B3B0A72A55C05DDF87838416434018E8DA17D02A55C0D32CD0EE90164340BC3D0801F92A55C0D2E1218C9F1643405C72DC291D2B55C0D9AED007CB1643405F27F565692B55C0A1F48590F3164340874CF910542B55C04AB1A371A8174340DF180280632B55C05C397B67B417434027BB99D18F2B55C048BE12488917434090D5AD9E932B55C06F0D6C9560174340287AE063B02B55C0096CCEC1331743409126DE019E2B55C0D2890453CD164340F5D4EAABAB2B55C0450E1137A7164340289A07B0C82B55C06725ADF8861643403DD52137C32B55C020EEEA5564164340CBD6FA22A12B55C0DBA337DC47164340FFE7305F5E2B55C07BDCB75A271643401094DBF63D2B55C036C64E7809164340D1AB014A432B55C092054CE0D61543403CD9CD8C7E2B55C026A77686A9154340AA9CF6949C2B55C0381268B0A91543409AAF928FDD2B55C06EFB1EF5D7154340A59D9ACB0D2C55C01FD95C35CF154340B29FC552242C55C088618731E91543400B60CAC0012C55C022F94A2025164340861C5BCF102C55C0F9D9C875531643405CFDD8243F2C55C0BDE13E726B164340280D350A492C55C061BF27D6A9164340C0AF9124082C55C04C33DDEBA41643404371C79BFC2B55C0A5F8F884EC164340E658DE550F2C55C053CBD6FA221743404A27124C352C55C0FF76D9AF3B1743402E01F8A7542C55C0A1B94E232D1743400795B88E712C55C068CC24EA0517434002603C83862C55C094BBCFF1D1164340F8A75489B22C55C006F52D73BA164340807D74EACA2C55C0AB4198DBBD164340F337A110012D55C03D4679E6E51643402578431A152D55C0683BA6EECA164340CA15DEE5222D55C0C4060B27691643400EDB1665362D55C0A915A6EF3516434010E50B5A482D55C03A3E5A9C31164340508BC1C3B42D55C0DDB3AED172164340F6798CF2CC2D55C01135D1E7A31643401B649291B32D55C0B398D87C5C1743401749BBD1C72D55C0E7C2482F6A174340F46BEBA7FF2D55C0494BE5ED081743406249B9FB1C2E55C014E63DCE341743407235B22B2D2E55C01A51DA1B7C1743404E7974232C2E55C0DE0033DFC1174340DD5CFC6D4F2E55C09BC6F65AD01743409F39EB538E2E55C094675E0EBB17434093E2E313B22E55C01D2098A3C7174340B891B245D22E55C0BABBCE86FC174340C9C859D8D32E55C067B8019F1F184340077AA86DC32E55C041EE224C5118434070ECD973992E55C0C0029832701843405987A3AB742E55C012BBB6B75B184340F1660DDE572E55C050E09D7C7A184340B517D1764C2E55C03E5DDDB1D8184340C4060B27692E55C0E0641BB8031943403AE8120EBD2E55C07FD8D2A3A91A434095F25A09DD2E55C0658C0FB3971D4340C51B9947FE2E55C0E97DE36BCF20434081AD122C0E2F55C0F3AE7AC03C224340FB3BDBA3372F55C033130CE71A2643404D486B0C3A2F55C0743E3C4B90274340519D0E643D2F55C06092CA1473284340496760E4652F55C057CF49EF1B2D4340'
        ]);

        $georgetown_city_id = DB::table($this->governmental_unit_areas)->insertGetId([
            'name' => 'Georgetown, KY',
            'area' => '0106000020E6100000020000000103000000010000000E000000E882FA96392155C001158E2095224340ED9DD156252155C0CBD93BA3AD2243405E0D501A6A2055C0F8872D3D9A2243405F0A0F9A5D2055C0AD86C43D96224340B08EE3874A2055C0053065E080224340BB421F2C632055C0DBFAE93F6B2243409544F641962055C082C7B7770D224340BC581822A72055C00A1346B3B2214340C9E2FE23D32055C09013268C662143403C2B69C5372155C02F2E55698B21434068925852EE2055C0A27895B54D214340A8363811FD2055C0CE8AA8893E2143409E5DBEF5612155C0FCA5457D92214340E882FA96392155C001158E2095224340010300000012000000EF00000052D0ED258D2655C05F99B7EA3A1A43408BC1C3B46F2655C091088D60E31A4340B1A19BFD812655C034B91803EB1A4340DB4B1AA3752655C04F7633A31F1B43404DB9C2BB5C2655C00E643DB5FA1A43402AE44A3D0B2655C03F8D7BF31B1C43405D15A8C5E02555C0E4839ECDAA1B4340677C5F5CAA2555C063F030ED9B1B43403F00A94D9C2555C0F20703CFBD1B43403EE94482A92555C0D0402C9B391C4340A27BD6355A2555C0CD920035B51C434062838593342555C0033C69E1B21C434095422097382555C07F9E060C921C43400F7EE200FA2455C0E8A221E3511C4340A583F57F0E2555C00A2AAA7EA51B4340EE258DD13A2555C05E2D7766821B434019726C3D432555C0C87C40A0331B43408EACFC32182555C0ADF9F197161B43405F22DE3AFF2455C079724D81CC1A434031CC09DAE42455C00C207C28D11A4340F4DA6CACC42455C0022B8716D91A43409C86A8C29F2455C01F4AB4E4F11A4340CCEEC9C3422455C04A79AD84EE1A4340D026874F3A2455C0E8120EBDC51B434052802898312455C0A774B0FECF1B4340C310397D3D2455C098A59D9ACB1B4340A03028D3682455C071FF91E9D01B43401477BCC96F2455C0126BF129001C4340DFA63FFB912455C0B3D0CE69161C4340C39ACAA2B02455C06D8C9DF0121C4340FB73D190F12455C0FA5E43705C1C4340C669882AFC2455C0F415A4198B1C4340AEF36F97FD2455C06876DD5B911C434085E81038122555C0075DC2A1B71C4340BF7ADCB75A2555C0FF3D78EDD21C4340705B5B785E2555C0A643A7E7DD1C4340F083F3A9632555C0ADA23F34F31C4340357A3540692555C09E98F562281D4340A5B915C26A2555C06553AEF02E1D43408D43FD2E6C2555C0DB1B7C61321D4340397EA834622555C05CE2C803911D43402710768A552555C0CB2DAD86C41D4340315F5E807D2555C08A71FE26141E4340CE8AA8893E2555C00E812381061F434053CE177B2F2555C0618A7269FC1E4340E48233F8FB2455C08BDD3EABCC1E434088618731E92455C056629E95B41E43409CBD33DAAA2455C0548A1D8D431F43406AA4A5F2762455C06FB6B9313D1F434032FE7DC6852455C0C76647AAEF1E434016D9CEF7532455C065A54929E81E4340F263CC5D4B2455C0BF28417FA11F4340F5D4EAABAB2355C083312251681F43401CAF40F4A42355C0F3C7B4368D1F43403D2AFEEF882355C0164D6727831F43406A4C88B9A42355C0D3A1D3F36E1E4340A0C1A6CEA32355C00A117008551E4340F65FE7A6CD2355C0FBE3BD6A651E434069E04735EC2355C02E56D4601A1E4340D8D47954FC2355C05F420587171E43408AC56F0A2B2455C061527C7C421E4340B7B6F0BC542455C0C8ED974F561E4340677DCA31592455C0B3B3E89D0A1E4340BB46CB811E2455C0FA9AE5B2D11D4340CC28965B5A2455C0F10D85CFD61D4340AAF1D24D622455C0323A2009FB1C434097016729592455C0CA4DD4D2DC1C4340514EB4AB902455C0880D164ED21C4340161230BABC2455C00DDFC2BAF11C4340F0BC546CCC2455C04F8E0244C11C434037A3E6ABE42455C064E76D6C761C4340417E3672DD2455C06058FE7C5B1C434020274C18CD2455C097C79A91411C4340BBB6B75B922455C03ECDC98B4C1C43402C2AE274922455C07E198C11891C43401958C7F1432455C010B056ED9A1C4340FAEDEBC0392455C08578245E9E1C4340C32ADEC83C2455C0AFB321FFCC1C4340FA997ADD222455C0B64604E3E01C4340D1CC936B0A2455C0459F8F32E21C434072A1F2AFE52355C08655BC91791C4340EE06D15AD12355C050A6D1E4621C4340FF04172B6A2355C06BEF5355681C4340928FDD054A2355C0B1E1E995B21C4340EA03C93B872355C037195586711D434026A435069D2355C0812557B1F81D4340A10F96B1A12355C01EA33CF3721E43404CC5C6BC8E2355C085251E50361F434005FC1A49822355C0DDAF027CB71F4340E57ADB4C852355C08FA339B2F21F43400C59DDEA392355C0B7B1D991EA1F43405CA96741282355C02C280CCA34204340DA3521AD312355C0C5FF1D51A12043407F10C990632355C0F4177AC4E821434065FF3C0D182355C075914259F82243400890A163072355C0166C239EEC2243400FCF1264042355C075914259F82243403FFF3D78ED2255C07345292158234340533A58FFE72255C00E80B8AB57234340AF58C345EE2255C0CA3505323B23434023827170E92255C0909F8D5C372343408C683BA6EE2255C0C26856B60F2343404A969350FA2255C0A94D9CDCEF224340D7A02FBDFD2255C0FB56EBC4E522434080B4FF01D62255C0D4F19881CA22434082AB3C81B02255C06F0F4240BE224340C2D9AD65322255C080290307B4224340041DAD6A492255C026FBE769C022434099805F23492255C0232BBF0CC622434063EB19C2312255C00D6B2A8BC222434092EA3BBF282255C0F4FBFECD8B2343402828452BF72155C014B1886187234340030473F4F82155C00744882B672343408CA19C68572155C0F88BD992552343403F89CF9D602155C0C1189128B4224340C85BAE7E6C2155C0D24F38BBB5224340FA6184F0682155C0E55DF58079224340EA03C93B872155C07E198C11892243400706103E942155C0BEA1F0D93A224340718E3A3AAE2155C090BA9D7DE5214340A5D590B8C72155C02CD2C43BC0214340D670917BBA2155C05516855D14214340F2D077B7B22155C02DB1321AF9204340FD9FC37C792155C0BD6BD097DE2043403DEDF0D7642155C0417C60C77F214340890629780A2155C0DE1FEF552B214340FF5BC98E8D2055C0380EBC5AEE20434000C79E3D972055C09692E52494204340C1A6CEA3E22055C0A112D731AE204340E7357689EA2055C0EDD3F19881204340D0420246972055C01C9947FE602043408174B169A52055C00CE8853B1720434008910C39B62055C0D8D47954FC1F4340230ED940BA2055C0C58D5BCCCF1F43401B446B459B2055C0357D76C0751F4340AB07CC43A62055C0D7851F9C4F1F43407DCA3159DC2055C004E44BA8E01E43404EB16A10E62055C04835ECF7C41E4340D61BB5C2F42055C0A2EE0390DA1E434081936DE00E2155C03BAA9A20EA1E4340AD1397E3152155C0724D81CCCE1E4340C32B499EEB2055C00E828E56B51E43407405DB88272155C0179CC1DF2F1E43403046240A2D2155C0807C09151C1E4340957EC2D9AD2055C05AEECC04C31D4340849B8C2AC32055C044DE72F5631D4340BFB51325212155C0A530EF71A61D4340FFB0A547532155C04E9A0645F31C4340F2CF0CE2032155C0D8463CD9CD1C4340DC4944F8172155C0A19FA9D72D1C4340FB5580EF362155C0006E162F161C43408315A75A0B2155C0A52F849CF71B4340F12DAC1BEF2055C0143C855CA91B4340E86514CB2D2155C0FBE6FEEA711B4340FD8348861C2155C099B7EA3A541B4340D461855B3E2155C0C2BF081A331B4340C9E369F9812155C029E78BBD171B4340DE54A4C2D82155C04700378B171B4340B7CEBF5DF62155C02BF86D88F11A434026DD96C8052255C0EC3026FDBD1A4340A4E194B9F92155C04A404CC2851A43404F1F813FFC2155C08D7A8846771A43409FE3A3C5192255C0F1811DFF051A434052094FE8F52155C03EE5982CEE194340DAE55B1FD62155C0D9B11188D7194340187AC4E8B92155C0996038D73019434015E126A3CA2155C024B6BB07E81843400AD80E46EC2155C0ADBF2500FF184340EA793716142255C0D6C8AEB48C184340703FE081012255C08F334DD87E184340DD26DC2BF32155C01B47ACC5A718434048A30227DB2155C01EFAEE56961843401A33897AC12155C003B00111E21843401D1A16A3AE2155C0753A90F5D418434054008C67D02155C05F419AB1681843407A4FE5B4A72155C039950C0055184340C26C020CCB2155C032C9C859D817434065A88AA9F42155C06340F67AF7174340C2887D02282255C0295B24ED461743408A1D8D43FD2155C09D64ABCB29174340D80B056C072255C0DFFC8689061743402D9276A38F2255C01B9C887E6D17434026FF93BF7B2255C0E4A08499B6174340BBF083F3A92255C01A6D5512D917434011FFB0A5472255C0B7627FD93D19434008E3A7716F2255C0A986FD9E581943408657923CD72255C01A8A3BDEE4174340AC6F6072A32255C08670CCB22717434049490F43AB2255C0F911BF620D17434058A9A0A2EA2255C03197546D371743404C327216F62255C02009FB761217434006D3307C442355C01074B4AA251743408C9E5BE84A2355C0016BD5AE091743403CBF28417F2355C0D2A57F492A1743406B63EC84972355C0D4F02DAC1B1743407A1B9B1DA92355C0533A58FFE7164340D53F8864C82355C011FA997ADD164340164CFC51D42355C0A99ECC3FFA164340B22B2D23F52355C0A913D044D8164340FA5FAE450B2455C0BB09BE69FA1643404E5C8E57202455C027F56569A7164340662C9ACE4E2455C0204432E4D8164340863B17467A2455C0185932C7F2164340F6B182DF862455C0D9960167291743408B5242B0AA2455C0F19A577556174340E2900DA48B2455C0ACE0B721C6174340410B09185D2455C05F950B957F174340D4F20357792455C00B2593533B174340E2395B40682455C0E41071732A174340BD70E7C2482455C0C68844A165174340679B1BD3132455C0F62345645817434010ACAA97DF2355C01EF818AC38174340210038F6EC2355C0766C04E275174340376BF0BE2A2455C0D68BA19C6817434014234BE6582455C0DCD3D51D8B17434044DD0720B52455C0DEFFC709131843408FA9BBB20B2555C0AED7F4A0A01843407B2DE8BD312555C009BE69FAEC1843408BC1C3B46F2555C01E32E543501943409CDB847B652555C0E0BA624678194340B69F8CF1612555C032E719FB9219434012BBB6B75B2555C0630D17B9A7194340F8A57EDE542555C0DAAB8F87BE1943403509DE90462555C0618731E9EF194340E17CEA58A52555C0A301BC05121A43401F4B1FBAA02555C0EBE2361AC019434012A3E716BA2555C05DDBDB2DC9194340242713B70A2655C0088CF50D4C1A4340BCCB457C272655C0F2ED5D83BE1A4340DE3994A12A2655C0A31CCC26C01A43402367614F3B2655C0E960FD9FC31A4340BE6A65C22F2655C0AA0EB9196E1A4340976E1283C02555C0200725CCB419434088B9A46ABB2555C0F12BD67091194340ECDB4944F82555C0DE8C9AAF92194340B3791C06F32555C0656EBE11DD194340ACAA97DF692655C061C1FD80071A4340588AE42B812655C07383A10E2B1A434052D0ED258D2655C05F99B7EA3A1A43400C0000003ECA880B402555C029CDE671181E434097361C96062555C090696D1ADB1D4340A8FC6B79E52455C0A0C37C79011E434053927538BA2455C0402FDCB9301E4340C493DDCCE82455C04D840D4FAF1E4340CD716E13EE2455C0B8E9CF7EA41E434054C2137AFD2455C0F5B86FB54E1E4340BB29E5B5122555C04F3E3DB6651E434062A1D634EF2455C01F9C4F1DAB1E43400FB22C98F82455C0849B8C2AC31E4340573D601E322555C062BA10AB3F1E43403ECA880B402555C029CDE671181E434007000000FC321823122555C08DEE2076A61A4340FEB4519D0E2555C0B7B585E7A51A43402C0FD253E42455C0DE8FDB2F9F1A4340616A4B1DE42455C03A1F9E25C81A4340285FD042022555C0F085C954C11A434015A930B6102555C0B6BB07E8BE1A4340FC321823122555C08DEE2076A61A43400700000049BA66F2CD2455C0A6272CF1801E43405299620E822455C025732CEFAA1D4340EC14AB06612455C063416150A61D4340F7713447562455C07F6ABC74931E43403B545392752455C0643E20D0991E4340F27684D3822455C04BE2AC889A1E434049BA66F2CD2455C0A6272CF1801E43400600000093C3279D482455C0200725CCB4174340DAE4F049272455C0F5BA4560AC1743409E7B0F971C2455C0B1FB8EE1B11743404FB0FF3A372455C00A12DBDD03184340956247E3502455C0C939B187F617434093C3279D482455C0200725CCB417434006000000ED9A90D6182455C01405FA449E1E43406CEA3C2AFE2355C06BD102B4AD1E434091459A78072455C064C91CCBBB1E4340B0AC3429052455C0AF3E1EFAEE1E434037FDD98F142455C0DD26DC2BF31E4340ED9A90D6182455C01405FA449E1E4340050000009E42AED4B32355C052D0ED258D17434092AB58FCA62355C0EA3A54539217434016670C73822355C0E3FE23D3A1174340AE62F19BC22355C09BC6F65AD01743409E42AED4B32355C052D0ED258D17434012000000F7562426A82355C0F8FE06EDD5194340683C11C4792355C08F37F92D3A194340AA9A20EA3E2355C0A818E76F42194340317A6EA12B2355C032AEB8382A19434034643C4A252355C05DA3E5400F194340525DC0CB0C2355C0A3CB9BC3B518434072DBBE47FD2255C0AF93FAB2B41943404AEA0434112355C03E3DB665C01943408366D7BD152355C0F1D4230D6E19434059D93EE42D2355C04850FC18731943409929ADBF252355C05C7347FFCB1943409FC6BDF90D2355C0EEB1F4A10B1A4340C976BE9F1A2355C092CA1473101A4340BFEC9E3C2C2355C0C425C79DD21943402BA391CF2B2355C093399677D5194340EDD0B018752355C079AF5A99F0194340326FD575A82355C01973D712F2194340F7562426A82355C0F8FE06EDD519434005000000EAB0C22D1F2355C0D5CA845FEA1D43406A82A8FB002355C0DBC1887D021E4340D53E1D8F192355C0F5B86FB54E1E4340D1747632382355C06DE34F54361E4340EAB0C22D1F2355C0D5CA845FEA1D4340060000004E0B5EF4152355C098D9E731CA194340A563CE33F62255C05648F949B51943403621AD31E82255C0280EA0DFF71943405A7F4B00FE2255C0158C4AEA041A43408FDD054A0A2355C07E7214200A1A43404E0B5EF4152355C098D9E731CA19434018000000D6389B8E002355C0C539EAE8B81A4340618A7269FC2255C040FA264D831A43406AF46A80D22255C070B20DDC811A43403C670B08AD2255C0761893FE5E1A4340821953B0C62255C09179E40F061A4340BF081A33892255C07C96E7C1DD194340E9D500A5A12255C095D6DF12801943408F334DD87E2255C06EC2BD326F19434059501894692255C0529ACDE3301A4340EFA65B76882255C0EB724A404C1A4340D190F128952255C072309B00C31A434030116F9D7F2255C042959A3DD01A4340C6F99B50882255C0E9F17B9BFE1A43402AE27492AD2255C0F0A2AF20CD1A4340BB0D6ABFB52255C0E3C116BB7D1A43405B59A2B3CC2255C0F0DDE68D931A4340917A4FE5B42255C07C5F5CAAD21A4340EDD5C743DF2255C0AD6708C72C1B4340DC813AE5D12255C0274C18CDCA1A4340F2785A7EE02255C09413ED2AA41A4340B393C151F22255C09AED0A7DB01A4340950F41D5E82255C099107349D51A4340831266DAFE2255C0E5B33C0FEE1A4340D6389B8E002355C0C539EAE8B81A434008000000ADF886C2672255C00E0EF626861A434040A374E95F2255C09BE271512D1A4340ACA7565F5D2255C01FF5D72B2C1A4340ECF483BA482255C08EAF3DB3241A43409C3061342B2255C01AD99596911A434033BE2F2E552255C041F33977BB1A43407959130B7C2255C09B5434D6FE1A4340ADF886C2672255C00E0EF626861A434006000000938C9C853D2255C0C7F143A5111F43405778978BF82155C085ECBC8DCD1E434097E2AAB2EF2155C0E02A4F20EC1E4340D87DC7F0D82155C08B16A06D351F4340840B7904372255C0C09140834D1F4340938C9C853D2255C0C7F143A5111F4340090000008D98D9E7312255C0D847A7AE7C1C43405CAD1397E32155C01EFB592C451C4340A1496249B92155C0E2A9471ADC1C434030F31DFCC42155C0206118B0E41C4340E94317D4B72155C0DDB1D826151D434009BE69FAEC2155C0B08F4E5DF91C434089096AF8162255C0A9F6E978CC1C43408D78B29B192255C0E0D39CBCC81C43408D98D9E7312255C0D847A7AE7C1C43400A000000666490BB082255C0A9BF5E61C11B43404A5CC7B8E22155C0E272BC02D11B43405DDF8783842155C0E98024ECDB1B4340E3DBBB067D2155C0B794F3C5DE1B4340C6D97404702155C01F1329CDE61B43402B31CF4A5A2155C0D93C0E83F91B4340DF89592F862155C05D15A8C5E01B434020274C18CD2155C0FC53AA44D91B43400438BD8BF72155C08A8F4FC8CE1B4340666490BB082255C0A9BF5E61C11B434005000000B33F506EDB2155C035289A07B01E434020ED7F80B52155C0A77686A92D1F43409D62D520CC2155C0D42AFA43331F4340DFDC5F3DEE2155C001BD70E7C21E4340B33F506EDB2155C035289A07B01E434006000000B29AAE27BA2155C086E464E2561F4340BF45274BAD2155C0AEF204C24E1F4340E61C3C139A2155C01ADCD6169E1F4340C9570229B12155C0828E56B5A41F4340215514AFB22155C04293C492721F4340B29AAE27BA2155C086E464E2561F43400C000000928FDD054A2355C0B1E1E995B21C43402BDA1CE7362355C07EFCA5457D1C43408F4E5DF92C2355C026C286A7571C4340C458A65F222355C0A45181936D1C43408179C8940F2355C03691990B5C1C4340CFD90242EB2255C0C6F99B50881C4340C8CB9A58E02255C090662C9ACE1C4340965D30B8E62255C0E0F60489ED1C4340BF27D6A9F22255C0977329AE2A1D4340338B506C052355C0AD33BE2F2E1D43406B0A6476162355C03CD7F7E1201D4340928FDD054A2355C0B1E1E995B21C4340'
        ]);

        $scott_county_tax_id = DB::table($this->taxes)->insertGetId([
            'name' => 'Scott County Tax',
            'class' => ScottCounty::class,
        ]);

        $scsd_tax_id = DB::table($this->taxes)->insertGetId([
            'name' => 'Scott County School District Tax',
            'class' => ScottCountySchoolDistrict::class,
        ]);

        $georgetown_tax_id = DB::table($this->taxes)->insertGetId([
            'name' => 'Georgetown City Tax',
            'class' => GeorgetownCity::class,
        ]);

        DB::table($this->tax_areas)->insert([
            'tax_id' => $scott_county_tax_id,
            'work_governmental_unit_area_id' => $scott_county_id,
            'based' => TaxArea::BASED_ON_WORK_LOCATION,
        ]);

        DB::table($this->tax_areas)->insert([
            'tax_id' => $scsd_tax_id,
            'work_governmental_unit_area_id' => $scott_county_id,
            'based' => TaxArea::BASED_ON_WORK_LOCATION,
        ]);

        DB::table($this->tax_areas)->insert([
            'tax_id' => $georgetown_tax_id,
            'work_governmental_unit_area_id' => $georgetown_city_id,
            'based' => TaxArea::BASED_ON_WORK_LOCATION,
        ]);

    }
};
