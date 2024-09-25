<?php

use Appleton\Taxes\Countries\US\Kentucky\ElliottCounty\ElliottCounty;
use Appleton\Taxes\Models\TaxArea;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    protected $governmental_unit_areas = 'governmental_unit_areas';
    protected $taxes = 'taxes';
    protected $tax_areas = 'tax_areas';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $eliott_county_gua_id = DB::table($this->governmental_unit_areas)->insertGetId([
            'name' => 'Elliott County, KY',
            'area' => '0106000020E610000001000000010300000001000000310200000A0E2F8848D154C0BE9EAF592E0943404B00FE2955D154C0EA58A5F44C094340239EEC6646D154C0A83462669F094340E5CFB7054BD154C071AE6186C60943401BD7BFEB33D154C0BCCB457C270A4340F775E09C11D154C0A164726A670A434018761893FED054C04EEB36A8FD0A4340C3995FCD01D154C0925852EE3E0B4340B9E2E2A8DCD054C0376A85E97B0B4340081F4AB4E4D054C092E7FA3E1C0C4340D7D825AAB7D054C05A492BBEA10C43405A9D9CA1B8D054C03B527DE7170D4340B5F81400E3D054C02DCDAD10560D4340C24B70EA03D154C0BC3B32569B0D434061FBC9181FD154C0F8DB9E20B10D43402EC72B103DD154C0376A85E97B0D43404C4EED0C53D154C0D6FF39CC970D4340DFA7AAD040D154C0465B9544F60D4340FC8A355CE4D054C0F02E17F19D0E434061191BBAD9D054C04835ECF7C40E4340F2ED5D83BED054C04ECE50DCF10E4340F9F5436CB0D054C02AE09EE74F0F4340C4AEEDED96D054C004577902610F43404302469737D054C0ADD9CA4BFE0F43403B6F63B323D054C075594C6C3E104340AE0D15E3FCCF54C05EF0694E5E104340D0F0660DDECF54C05645B8C9A8104340B8718BF9B9CF54C0EA77616BB61043400246973787CF54C07D3CF4DDAD1043406FB9FAB149CF54C0C9022670EB104340AFCF9CF529CF54C0DE718A8EE4104340F59F353FFECE54C016DA39CD02114340122EE411DCCE54C0C8EBC1A4F81043402783A3E4D5CE54C0D593F947DF104340D5CE30B5A5CE54C0A777F17EDC10434033C4B12E6ECE54C0B70C384BC910434003E962D34ACE54C039252026E110434079ABAE4335CE54C058E02BBAF5104340D6C6D8092FCE54C0A08B868C471143403E73D6A71CCE54C077D4981073114340821B295B24CE54C0F56393FC881143405A9F724C16CE54C0C8224DBC03124340423D7D04FECD54C06EBF7CB262124340BC2363B5F9CD54C02AFF5A5EB91243405C6F9BA910CE54C0B5DE6FB4E312434019E42EC214CE54C0E8DA17D00B13434023BC3D0801CE54C03DB324404D134340FC8A355CE4CD54C03753211E89134340855AD3BCE3CD54C0DAE55B1FD613434016A3AEB5F7CD54C0A10DC006441443400F61FC34EECD54C0F4BEF1B56714434040BCAE5FB0CD54C08B170B43E41443402EC6C03A8ECD54C09A0986730D1543401309A69A59CD54C018CDCAF62115434035B56CAD2FCD54C08E20956247154340D57954FCDFCC54C0569A94826E1543406F438CD7BCCC54C08C6665FB90154340B439CE6DC2CC54C0AFB6627FD9154340C8EE022505CD54C0EAAD81AD12164340D0ECBAB722CD54C0C634D3BD4E1643409B9141EE22CD54C0EC82C135771643404412BD8C62CD54C0AA251DE560164340680586AC6ECD54C038842A357B164340D49AE61DA7CD54C0349D9D0C8E164340B6F292FFC9CD54C0C684984BAA16434090F46915FDCD54C0056A317898164340D1031F8315CE54C08A3C49BA66164340EF703B342CCE54C06953758F6C164340CDAACFD556CE54C0B53176C24B1643406F7EC34483CE54C03927F6D03E16434055FA0967B7CE54C00951BEA085164340BDFC4E9319CF54C024D40CA9A21643402F2FC03E3ACF54C0CDE33098BF16434092C9A99D61CF54C0CEA96400A816434049D576137CCF54C09DF17D71A91643403E95D39E92CF54C00C7217618A1643402172FA7ABECF54C0D636C5E3A2164340247CEF6FD0CF54C00705A568E5164340EB707495EECF54C0508D976E1217434000732D5A80D054C077BD344580174340F9A1D28899D054C00AD9791B9B174340BDDD921CB0D054C07B116DC7D4174340E9D1544FE6D054C00A293FA9F6174340E869C020E9D054C0B438639813184340EF517FBDC2D054C06B98A1F144184340D636C5E3A2D054C04643C6A3541843408F53742497D054C0A9DBD9571E1843408658FD1186D054C0E5F049271218434085D0419770D054C063EE5A423E18434059164CFC51D054C0613596B0361843406456EF703BD054C09C853DEDF0174340C5724BAB21D054C00936AE7FD7174340EC12D55B03D054C04FE8F527F1174340A981E673EECF54C0C35F9335EA174340E5965643E2CF54C0DD989EB0C41743409080D1E5CDCF54C009302C7FBE174340ED444948A4CF54C058C6866EF6174340A9BC1DE1B4CF54C00D33349E08184340DC0DA2B5A2CF54C0C63368E89F1843407825C9737DCF54C0A48B4D2B8518434006F0164850CF54C0130B7C45B718434046B247A819CF54C08FE1B19FC51843401B0FB6D8EDCE54C0E386DF4DB7184340FEEF880AD5CE54C012BF620D171943403D7AC37DE4CE54C0950B957F2D194340B03BDD79E2CE54C0C0E8F2E670194340482F6AF7ABCE54C05665DF15C119434065C39ACAA2CE54C039799109F81943402F698CD651CE54C040DD4081771A434090F3FE3F4ECE54C0D5027B4CA41A4340B890477023CE54C0C5909C4CDC1A4340390D51853FCE54C07FDDE9CE131B4340C896E5EB32CE54C0745C8DEC4A1B43400721205F42CE54C0EC8502B6831B43402A7288B839CE54C021C66B5ED51B4340DA1EBDE13ECE54C0887E6DFDF41B43402A89EC832CCE54C071ADF6B0171C43405791D10149CE54C096CD1C925A1C43402BF702B342CE54C0624B8FA67A1C4340BB7D569929CE54C0E7E26F7B821C434081B053AC1ACE54C0DC9BDF30D11C4340DD9733DB15CE54C0A304FD851E1D4340ED26F8A6E9CD54C0D76839D0431D43405D2F4D11E0CD54C02FA3586E691D43402711E15F04CE54C01CCF6740BD1D4340986725ADF8CD54C047551344DD1D43402E36AD1402CE54C016DD7A4D0F1E4340D5E76A2BF6CD54C09735B1C0571E43406C76A4FACECD54C088B7CEBF5D1E43402B306475ABCD54C0F1457BBC901E4340603AADDBA0CD54C0552E54FEB51E4340E4D87A8670CD54C00A67B796C91E43403E247CEF6FCD54C0F337A110011F43409A97C3EE3BCD54C0F792C6681D1F43405018946934CD54C07590D783491F43400A0F9A5DF7CC54C0D7DCD1FF721F43409B8BBFED09CD54C0A1496249B91F4340D8D47954FCCC54C00876FC170820434032755776C1CC54C00E677E3507204340DA71C3EFA6CC54C066D65240DA1F434021904B1C79CC54C05E9A22C0E91F43409E7AA4C16DCC54C0832F4CA60A2043407D2079E750CC54C00F7EE200FA1F4340DD2230D637CC54C034D93F4F0320434032C85D8429CC54C0B03A72A433204340C29FE1CD1ACC54C0F7AB00DF6D20434073BB97FBE4CB54C0ED2B0FD2532043402EC55565DFCB54C0546F0D6C95204340F4DDAD2CD1CB54C0DD787764AC204340C2DA183BE1CB54C00B7DB08C0D2143406133C005D9CB54C05018946934214340B4FF01D6AACB54C0BE6A65C22F21434012876C205DCB54C064B0E2546B2143403961C26856CB54C0EC67B114C9214340CB457C2766CB54C0276552431B22434069368FC360CB54C0FB1EF5D72B224340DA1EBDE13ECB54C09204E10A282243407EFD101B2CCB54C0D200DE020922434022A5D93C0ECB54C01EA4A7C821224340FD12F1D6F9CA54C041295AB917224340406A1327F7CA54C06A65C22FF5214340514A0856D5CA54C0BD16F4DE1822434065FD6662BACA54C031EC3026FD2143408731E9EFA5CA54C009FB761211224340739CDB847BCA54C0CF471971012243400ABDFE243ECA54C0B0524145D5214340BBB4E1B034CA54C0DD06B5DFDA21434019E42EC214CA54C0567C43E1B3214340A148F7730ACA54C021B0726891214340AD9FFEB3E6C954C03F5585066221434069E04735ECC954C084B7072120214340B22C98F8A3C854C002B68311FB1E4340F2D077B7B2C754C06FEEAF1EF71D434030992A1895C754C09526A5A0DB1D4340B323D5777EC754C036751E15FF1D4340C26A2C616DC754C059A835CD3B1E4340D9AD65321CC754C0BFEC9E3C2C1E4340C3995FCD01C754C0B6662B2FF91D434093A7ACA6EBC654C033C2DB83101E434032ACE28DCCC654C0799274CDE41D4340A29A92ACC3C654C0C91D3691991D434010018750A5C654C0E60297C79A1D434063247B849AC654C05D8B16A06D1D4340957B8159A1C654C05B24ED461F1D4340995FCD0182C654C031E9EFA5F01C434055F5F23B4DC654C09D9FE238F01C43407D03931B45C654C00FD253E4101D43400C1CD0D215C654C0F38E5374241D434087307E1AF7C554C0EB18575C1C1D434097AB1F9BE4C554C0EE224C512E1D43407C5F5CAAD2C554C099B85510031D4340F60B76C3B6C554C0D2FD9C82FC1C43405EBBB4E1B0C554C0C70F9546CC1C43408C4CC0AF91C554C018B14F00C51C43409C8A54185BC554C05299620E821C4340E5EC9DD156C554C0B29B19FD681C4340118AADA069C554C091D09673291C4340C24A051555C554C04A99D4D0061C4340C799266C3FC554C04948A46DFC1B4340D503E62153C554C067EDB60BCD1B4340E0F2583332C554C0D19332A9A11B4340D2C2651536C554C0558330B77B1B43401FA1664815C554C0CAA31B61511B4340F303577902C554C051F52B9D0F1B4340A3906456EFC454C055DCB8C5FC1A434006668522DDC454C006D847A7AE1A43405A28999CDAC454C0E4D87A86701A43409C4F1DAB94C454C00EBE30992A1A4340995FCD0182C454C02B1213D4F0194340BB5F05F86EC454C034BC5983F7194340F1BA7EC16EC454C040BCAE5FB0194340F9BCE2A947C454C08CBD175FB4194340A8C1340C1FC454C0D09A1F7F691943405340DAFF00C454C06D37C1374D194340FF40B96DDFC354C0416150A6D1184340F0A5F0A0D9C354C08BFB8F4C871843402D03CE52B2C354C05FB532E197184340ACE4637781C354C0F12895F0841843407EC2D9AD65C354C0660FB40243184340F25CDF8783C354C0F4A276BF0A1843405E2D776682C354C0C26C020CCB174340740AF2B391C354C099B67F65A51743405373B9C150C354C0BABDA4315A174340716F7EC344C354C0DB6D179AEB16434090D6187442C354C0E789E76C0117434038B9DFA128C354C024404D2D5B1743401344DD0720C354C02AC8CF46AE1743404948A46DFCC254C01B0FB6D8ED1743403ACAC16C02C354C07E1AF7E6371843402D228AC91BC354C0E78BBD175F1843407D586FD40AC354C0A8716F7EC31843401CEC4D0CC9C254C0D8BAD408FD184340E27668588CC254C00ABC934F8F1943401764CBF275C254C0E60297C79A194340A699EE7552C254C011E15F048D1943400B60CAC001C254C0BE9EAF592E1943408B14CAC2D7C154C065FCFB8C0B19434010EA2285B2C154C0BF47FDF50A1943401AA20A7F86C154C03E7958A8351943402827DA5548C154C065C0594A96194340357BA01518C154C0D26F5F07CE194340ED7E15E0BBC054C0450F7C0C561A434031276893C3C054C0067E54C37E1943402AFC19DEACC054C00989B48D3F194340FDF675E09CC054C0C8940F41D518434053CA6B2574C054C069C70DBF9B184340193BE12538C054C0B343FCC3961843407633A31F0DC054C0C3633F8BA51843404DF2237EC5BF54C0A9DA6E826F184340D7BFEB3367BF54C0B3CF639467184340CD8DE9094BBF54C076A4FACE2F184340A835CD3B4EBF54C0135FED28CE1743408BBE823463BF54C041B62C5F9717434002BB9A3C65BF54C0CFF23CB83B174340BC3FDEAB56BF54C08881AE7D01174340FB1EF5D72BBF54C0C4CA68E4F3164340D009A1832EBF54C03BA41820D116434016838769DFBE54C00D897B2C7D164340AA27F38FBEBE54C0CD0182397A164340925A28999CBE54C0D520CCED5E16434060AC6F6072BE54C0AA09A2EE031643400AD462F030BE54C05453927538164340BAF59A1E14BE54C0C2D9AD6532164340B4C70BE9F0BD54C0E4BCFF8F1316434017B7D100DEBD54C0AF06280D351643409692E52494BD54C035D252793B164340EDED96E480BD54C0FF791A304816434019C6DD205ABD54C080B6D5AC33164340E5B2D1393FBD54C04A9869FB5716434064AE0CAA0DBD54C0E4D9E55B1F164340D192C7D3F2BC54C0BA2F67B62B164340C01E1329CDBC54C0DEE2E13D07164340A6B8AAECBBBC54C0DE0033DFC1154340AFCE31207BBC54C00667F0F78B1543405A9BC6F65ABC54C0A83462669F1543400A11700855BC54C04C874ECFBB1543406D1805C1E3BB54C0D76CE525FF154340588B4F0130BB54C02F89B3226A164340BA63B14D2ABB54C085E7A56263164340F817416326BB54C0672618CE35164340D158FB3BDBBA54C032C85D842916434005DEC9A7C7BA54C073486AA1641643404CC5C6BC8EBA54C0E2033BFE0B164340E59A02999DBA54C0893E1F65C4154340E673EE76BDBA54C0313ECC5EB6154340B41CE8A1B6BA54C0B62E35423F154340450BD0B69ABA54C072A3C85A431543405BCEA5B8AABA54C0FB73D190F1144340EFACDD76A1BA54C0B14F00C5C814434035971B0C75BA54C0FA7ABE66B9144340B872F6CE68BA54C0A417B5FB55144340F59B89E942BA54C0DC0BCC0A45144340B14E95EF19BA54C0456117450F144340BFB854A52DBA54C00FED6305BF1343404B55DAE21ABA54C0A10F96B1A11343405CA9674128BA54C02A8F6E8445134340AC8E1CE90CBA54C0CE50DCF126134340766D6FB724BA54C00D198F520913434015E0BBCD1BBA54C086AB0320EE124340AE81AD122CBA54C02EE6E786A61243401D1F2DCE18BA54C039B874CC79124340C780ECF5EEB954C00D15E3FC4D124340030473F4F8B954C0C58CF0F620124340056C0723F6B954C0F10D85CFD6114340FA7953910ABA54C0F20703CFBD114340D65240DAFFB954C0E063B0E25411434079E9263108BA54C0734694F606114340D0ED258DD1B954C01F2DCE18E6104340A69BC420B0B954C05D2F4D11E0104340698D412784B954C07FBBECD79D104340CB9F6F0B96B954C0386744696F1043403480B74082B954C09C33A2B437104340530438BD8BB954C0D32EA699EE0F43400F255AF278B954C0C87A6AF5D50F43409D2CB5DE6FB954C009A52F849C0F4340E94141295AB954C0AA0B7899610F434019FED30D14B954C093347F4C6B0F4340A17F828B15B954C0F19A5775560F4340E1ECD63219B954C0670C7382360F434075ABE7A4F7B854C08A1D8D43FD0E4340030473F4F8B854C0ABCC94D6DF0E4340A87004A914B954C0230ED940BA0E43407BB94F8E02B954C00F4240BE840E434056F0DB10E3B854C03480B740820E4340BA4DB857E6B854C052D4997B480E434017D34CF73AB954C0FE7A8505F70D434081785DBF60B954C0D099B4A9BA0D4340A7751BD47EB954C0D28E1B7E370D43407B2FBE688FB954C031E884D0410D434096CFF23CB8B954C05C751DAA290D4340DB6D179AEBB954C0423C122F4F0D434021205F4205BA54C0BC02D193320D43402A01310917BA54C025B03907CF0C4340E485747808BA54C08A7615527E0C4340130D52F014BA54C0501BD5E9400C4340FB58C16F43BA54C0C93846B2470C4340D5230D6E6BBA54C0739F1C05880C4340B115342DB1BA54C06B9DB81CAF0C4340826DC493DDBA54C085E7A562630C4340F71BEDB8E1BA54C0E76F4221020C4340E3344415FEBA54C0641D8EAED20B43405857056A31BB54C000C63368E80B4340B48F15FC36BB54C0D573D2FBC60B4340CD76853E58BB54C032CA332F870B4340514832AB77BB54C00ED76A0F7B0B4340F390291F82BB54C0E63DCE34610B4340791F477364BB54C0347EE195240B4340DF32A7CB62BB54C0A3CA30EE060B434045D4449F8FBB54C00C71AC8BDB0A43401AA54BFF92BB54C00E315EF3AA0A434088F37002D3BB54C03733FAD1700A4340446B459BE3BB54C070218FE0460A434047753A90F5BB54C077634161500A4340D07EA4880CBC54C04C6F7F2E1A0A434027BF45274BBC54C04B766C04E20943408DCF64FF3CBC54C0253FE257AC0943405A47551344BC54C0B88FDC9A74094340AED2DD7536BC54C08104C58F31094340A696ADF545BC54C045BC75FEED0843404794F6065FBC54C0E4F4F57CCD0843400B5C1E6B46BC54C06C74CE4F7108434016889E9449BC54C04FCAA486360843403DF0315871BC54C071C45A7C0A084340D2DEE00B93BC54C039D1AE42CA074340A46ABB09BEBC54C0DBA50D87A5074340E5965643E2BC54C0D61C2098A30743407C992842EABC54C00F0BB5A6790743401C5A643BDFBC54C09AEB34D252074340118C834BC7BC54C03D7FDAA84E074340DF4E22C2BFBC54C001C287122D074340B8AD2D3C2FBD54C0A86C585359064340CF6394675EBD54C0C5A86BED7D0643403A747ADE8DBD54C0F5B86FB54E064340416150A6D1BD54C0D3669C86A8064340D0B52FA017BE54C0A661F88898064340361D01DC2CBE54C05F419AB168064340BB25396057BE54C0BE2CEDD45C064340F1BA7EC16EBE54C08E006E162F064340E062450DA6BE54C02E90A0F831064340D97A8670CCBE54C096EA025E660643405B04C6FA06BF54C02766BD18CA0543408F6FEF1AF4BE54C0B187F6B18205434000378B170BBF54C015FC36C478054340249BABE639BF54C05305A3923A054340800D881057BF54C0BDA4315A47054340931ADA006CBF54C01ADEACC1FB0443408BFB8F4C87BF54C0CC069964E4044340E59A02999DBF54C03BFBCA83F404434020240B98C0BF54C06ADD06B5DF0443408509A359D9BF54C02F302B14E9044340C4B0C398F4BF54C0B377465B950443405EBD8A8C0EC054C0BA2EFCE07C044340BD33DAAA24C054C056B439CE6D0443407C0DC17119C054C0C30DF8FC30044340C893A46B26C054C0A54C6A68030443409293895B05C054C004560E2DB2034340629D2ADF33C054C05EF3AACE6A0343402634492C29C054C05ED72FD80D0343407D3A1E3350C054C04E603AADDB02434046EBA86A82C054C09370218FE00243409AB0FD648CC054C067994528B6024340EAE6E26F7BC054C0A223B9FC87024340FB3A70CE88C054C079AEEFC341024340E17CEA58A5C054C04737C2A22202434049F4328AE5C054C0F3A8F8BF230243408864C8B1F5C054C07FBDC282FB014340F886C267EBC054C06E8786C5A8014340C64D0D349FC054C02BA5677A89014340158A743FA7C054C0A2CF471971014340C58D5BCCCFC054C0F3AB39403001434078B29B19FDC054C0A92F4B3B35014340D0ECBAB722C154C026FA7C94110143403C65355D4FC154C0494BE5ED08014340117008556AC154C0784485EAE600434062855B3E92C154C025581CCEFC00434042B3EBDE8AC154C0AD50A4FB390143404832AB77B8C154C0743FA7203F014340008FA850DDC154C09C4D47003701434065A54929E8C154C002D369DD060143403F8A3A730FC254C04F029B73F00043407F11346612C254C0693524EEB1004340111615713AC254C040683D7C99004340088F368E58C254C08445459C4E0043408CBB41B456C254C0963C9E961F00434088D7F50B76C254C0B532E197FAFF4240FA40F2CEA1C254C006B7B585E7FF42408D0B0742B2C254C08176871403004340A01518B2BAC254C027D9EA724A0043403D29931ADAC254C0643909A52F0043400BD28C45D3C254C0D175E107E7FF42402D776682E1C254C0E204A6D3BAFF42406EA301BC05C354C0C266800BB2FF42409FC6BDF90DC354C00584D6C397FF4240EA58A5F44CC354C05A9D9CA1B8FF42401DE736E15EC354C07C629D2ADFFF4240137D3ECA88C354C0B5BE4868CBFF42401B2D077AA8C354C07B4B395FECFF4240C90391459AC354C0D216D7F84C0043401C98DC28B2C354C084B9DDCB7D0043402E71E481C8C354C069AA27F38F0043408E93C2BCC7C354C0C7F2AE7AC0004340A46FD23428C454C025581CCEFC004340B0027CB779C454C0EBA529029C0043407845F0BF95C454C0C49272F7390043404AB4E4F1B4C454C063D174763200434051F69672BEC454C03DB665C0590043406DAAEE91CDC454C0D097DEFE5C0043400D881057CEC454C05ED89AADBC004340ADBCE47FF2C454C06AFAEC80EB004340F6E978CC40C554C08C4B55DAE20043408BA4DDE863C554C0E485747808014340713AC95697C554C0747ADE8D050143409EEE3CF19CC554C0E89FE0624501434013F1D6F9B7C554C00FB402435601434010CCD1E3F7C554C0ED461FF301014340A8A44E4013C654C030EF71A609014340F25D4A5D32C654C0A96917D34C01434096CD1C925AC654C0575A46EA3D0143403A57941282C654C0390D51853F014340B1BE81C98DC654C019C748F608014340B7D26BB3B1C654C009336DFFCA0043400D8B51D7DAC654C0CDAFE600C10043404F560C5707C754C02A3A92CB7F00434084EE92382BC754C0F75965A6B4004340874CF91054C754C0ADF4DA6CAC0043405AD2510E66C754C0978C63247B0043409EEBFB7090C754C0B1506B9A77004340BDDD921CB0C754C09BCAA2B08B00434092E86514CBC754C0BEDBBC7152004340ABB2EF8AE0C754C0BDA772DA5300434048A643A7E7C754C0E99B340D8A0043405340DAFF00C854C01346B3B27D0043406E1118EB1BC854C0B66455849B0043401BD47E6B27C854C08BFB8F4C87004340EA5BE67459C854C08098840B79004340FB03E5B67DC854C07C60C77F81004340CD04C3B986C854C079CA6ABA9E00434029E5B512BAC854C0826E2F698C0043407D9065C1C4C854C03A7826344900434075E272BC02C954C0A19FA9D72D00434075C58CF0F6C854C08D4127840E004340AF95D05D12C954C02E008DD2A5FF4240B75CFDD824C954C0D6E253008CFF4240E464E25641C954C01536035C90FF42409866BAD749C954C0C8409E5DBEFF4240ADA1D45E44C954C0BBEF181EFBFF424030D7A20568C954C0DBC1887D02004340B167CF656AC954C0609335EA2100434028D2FD9C82C954C0CE70033E3F004340AB1E300F99C954C04C33DDEBA4004340FD304278B4C954C0B6813B50A7004340C83D5DDDB1C954C053E9279CDD0043403F7100FDBEC954C013D6C6D809014340ADC090D5ADC954C0977329AE2A014340B8718BF9B9C954C00FB4024356014340EA5910CAFBC954C071A94A5B5C014340B01D8CD827CA54C0B265F9BA0C014340800D881057CA54C0C5724BAB21014340C09481035ACA54C0EFC4AC174301434022F8DF4A76CA54C0CFDBD8EC48014340D13FC1C58ACA54C0E4DBBB067D014340253FE257ACCA54C05AD8D30E7F01434039D1AE42CACA54C0C536A968AC014340EF71A609DBCA54C0813CBB7CEB014340CAA4863600CB54C00DDC813AE5014340DDE8633E20CB54C04FADBEBA2A0243400E12A27C41CB54C058A9A0A2EA01434009A69A594BCB54C06475ABE7A4014340AE9AE7887CCB54C038F581E49D014340C8E9EBF99ACB54C055A0168387014340B29DEFA7C6CB54C0A12C7C7DAD01434094DBF63DEACB54C0B5F97FD5910143400B42791F47CC54C04580D3BB78014340BAF770C971CC54C0185E49F25C0143404E7E8B4E96CC54C0E8F527F1B9014340929048DBF8CC54C01D54E23AC60143404291EEE714CD54C0A663CE33F601434033F9669B1BCD54C022F94A20250243400FCEA78E55CD54C0622EA9DA6E0243404F58E20165CD54C076A22424D20243400D8CBCAC89CD54C0DE54A4C2D80243409544F64196CD54C0AD50A4FB39034340DCB6EF517FCD54C0094E7D2079034340EE4108C897CD54C0866F61DD7803434069520ABABDCD54C00F62670A9D03434069A9BC1DE1CD54C0016A6AD95A0343407D586FD40ACE54C0CEC474215603434050E1085229CE54C0CDE7DCED7A0343409E094D124BCE54C07AA9D898D7034340B2614D6551CE54C06EA301BC05044340C5A9D6C22CCE54C0C6C03A8E1F0443403143E38920CE54C005357C0BEB0443402D42B11534CE54C0FCC401F4FB04434041B7973446CE54C0BC3C9D2B4A054340A7E49CD843CE54C0433BA759A00543401FBDE13E72CE54C0D07CCEDDAE0543409B38B9DFA1CE54C06C59BE2EC30543401FBC7669C3CE54C0B08C0DDDEC0543405AF10D85CFCE54C08EAF3DB3240643401BB80375CACE54C0EAAC16D863064340A7C821E2E6CE54C0FA0CA837A3064340917C259012CF54C0E5EE737CB406434053B131AF23CF54C011A96917D3064340D734EF3845CF54C032E36DA5D7064340D1E80E6267CF54C0F3AD0FEB8D0643403BC269C18BCF54C034BA83D8990643409CA38E8EABCF54C029232E008D064340FD67CD8FBFCF54C0707841446A0643406A82A8FB00D054C0D4D51D8B6D06434043FF04172BD054C0D3156C239E0643401E6CB1DB67D054C05BCD3AE3FB064340FA264D83A2D054C00D6ABFB5130743403E912749D7D054C06038D730430743406A317898F6D054C04E5E64027E0743406D8FDE701FD154C0B20C71AC8B074340F3AB394030D154C0D311C0CDE2074340CB63CDC820D154C01A1538D90608434014B2F33636D154C0EF3504C765084340D6FD63213AD154C0C79BFC169D0843402710768A55D154C0AD68739CDB0843400A0E2F8848D154C0BE9EAF592E094340'
        ]);


        $eliott_county_tax_id = DB::table($this->taxes)->insertGetId([
            'name' => 'Elliott County Kentucky Tax',
            'class' => ElliottCounty::class,
        ]);

        DB::table($this->tax_areas)->insert([[
            'tax_id' => $eliott_county_tax_id,
            'work_governmental_unit_area_id' => $eliott_county_gua_id,
            'based' => TaxArea::BASED_ON_WORK_LOCATION,
        ]]);
    }
};
