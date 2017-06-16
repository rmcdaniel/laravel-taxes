<?php

namespace Appleton\Taxes\Seeds\US\Alabama;

use Appleton\Taxes\Countries\US\Alabama\LeedsOccupational;
use DB;
use Illuminate\Database\Seeder;

class LeedsSeeder extends Seeder
{
    public function run()
    {
        $id = DB::table(config('taxes.governmental_unit_areas'))->insertGetId([
            'name' => 'Leeds, AL',
            'area' => '0106000020E6100000050000000103000000030000001C0000005A626534F2A655C0066344A2D0C840400839EFFFE3A655C04852D2C3D0C84040AF21382EE3A655C01D5723BBD2C840404016A243E0A655C01BBB44F5D6C840406DE179A9D8A655C0355B79C9FFC840401E8B6D52D1A655C06CD097DEFEC84040E9633E20D0A655C02AE109BDFEC840409A5B21ACC6A655C0677BF486FBC840406EC1525DC0A655C0D4997B48F8C840406631B1F9B8A655C0A1F48590F3C84040A0F831E6AEA655C04A79AD84EEC840403C670B08ADA655C0BC202235EDC840400D315EF3AAA655C0BD546CCCEBC84040E062450DA6A655C07D01BD70E7C84040F8A41309A6A655C080D1E5CDE1C84040CEDDAE97A6A655C02EABB019E0C84040F199EC9FA7A655C08A929048DBC8404010E7E104A6A655C084D558C2DAC840402829B000A6A655C071E5EC9DD1C84040D5CE30B5A5A655C0F2B4FCC055C84040DD06B5DFDAA655C03F52448655C8404079AC1919E4A655C06FD6E07D55C8404019A721AAF0A655C010CEA78E55C84040253B3602F1A655C012BBB6B75BC8404084436FF1F0A655C041D7BE805EC84040D2C6116BF1A655C0BA11161571C840409694BBCFF1A655C0429605137FC840405A626534F2A655C0066344A2D0C8404007000000D6FB8D76DCA655C01A6B7F677BC840409C1727BEDAA655C0BA2EFCE07CC840407F32C687D9A655C01346B3B27DC8404056ED9A90D6A655C059BE2EC37FC84040852348A5D8A655C05B77F35487C8404028081EDFDEA655C05165187783C84040D6FB8D76DCA655C01A6B7F677BC84040120000001FBC7669C3A655C014E8137992C84040876BB587BDA655C0D9E9077591C8404036AD1402B9A655C0F111312592C8404047FE60E0B9A655C0BF2500FF94C840402B33A5F5B7A655C018096D3997C840404E098849B8A655C01DC6A4BF97C84040A01518B2BAA655C0DA3A38D89BC84040E2016553AEA655C0938E72309BC8404082DF8618AFA655C01405FA449EC8404041D653ABAFA655C0B95164ADA1C8404065C6DB4AAFA655C07B832F4CA6C84040E8D84125AEA655C0618BDD3EABC840406EBE11DDB3A655C0A14621C9ACC84040C98E8D40BCA655C0F6EB4E779EC84040B11875ADBDA655C0ECA529029CC84040D4D4B2B5BEA655C0F8872D3D9AC840405B087250C2A655C0B4AB90F293C840401FBC7669C3A655C014E8137992C840400103000000010000001200000087DD770C8FA755C0B5DE6FB4E3C04040D844662E70A755C07F69519FE4C04040A30392B06FA755C04016A243E0C040407A7077D66EA755C004E44BA8E0C0404057CEDE196DA755C02CF2EB87D8C04040C284D1AC6CA755C038A0A52BD8C0404075E789E76CA755C0A35698BED7C040405C7171546EA755C092CEC0C8CBC04040C136E2C96EA755C01EA2D11DC4C04040FC34EECD6FA755C02B33A5F5B7C04040569A94826EA755C0F19C2D20B4C0404015AB06616EA755C035289A07B0C040402B9FE57970A755C04D840D4FAFC04040D8614CFA7BA755C070438CD7BCC0404042B0AA5E7EA755C06EDBF7A8BFC04040EAE923F087A755C0FA298E03AFC0404069C4CC3E8FA755C0D80C7041B6C0404087DD770C8FA755C0B5DE6FB4E3C0404001030000001000000077020000E0B88C9B1AA855C0611A868F88C540403126FDBD14A855C03BA8C4758CC54040020AF5F411A855C0B9313D6189C540405C6F9BA910A855C0EAE923F087C54040E1E995B20CA855C066D7BD1589C54040E2E313B2F3A755C072512D228AC54040A20BEA5BE6A755C0A1A17F828BC54040137F1475E6A755C08A389D64ABC540406C96CB46E7A755C0DA0242EBE1C540407DE71725E8A755C02D978DCEF9C54040B05582C5E1A755C08C9FC6BDF9C54040E7323509DEA755C079CC4065FCC54040FB1F60ADDAA755C031EC3026FDC540404A0856D5CBA755C054C2137AFDC54040BB7B80EECBA755C08DD31055F8C540404A0856D5CBA755C07AE3A430EFC54040D9942BBCCBA755C0FC709010E5C54040CD001764CBA755C0FF06EDD5C7C54040E8120EBDC5A755C046B3B27DC8C5404050A8A78FC0A755C0FFE9060ABCC54040F94674CFBAA755C0299485AFAFC540404241295AB9A755C0D099B4A9BAC540404BE82E89B3A755C04604E3E0D2C54040F19C2D20B4A755C0DC9E20B1DDC54040E5D4CE30B5A755C072BED87BF1C5404020ED7F80B5A755C0DBA4A2B1F6C540402121CA17B4A755C0548EC9E2FEC540409E76F86BB2A755C047ACC5A700C64040A86BED7DAAA755C0310917F208C64040174339D1AEA755C0719010E50BC640405B0531D0B5A755C0C24EB16A10C640407BBDFBE3BDA755C05F42058717C6404067D0D03FC1A755C0E7A90EB919C6404032C687D9CBA755C0D13AAA9A20C6404056B60F79CBA755C0C9AD49B725C64040CD001764CBA755C06118B0E42AC640402766BD18CAA755C08522DDCF29C640407AA35698BEA755C0904B1C7920C640403A02B859BCA755C0FC3559A31EC640409481035ABAA755C02782380F27C6404071AB2006BAA755C0A46FD23428C640403AE8120EBDA755C0D28BDAFD2AC64040FFE9060ABCA755C011DF89592FC64040D099B4A9BAA755C073D4D17135C6404044FAEDEBC0A755C01230BABC39C640406D73637AC2A755C0179CC1DF2FC64040D3BD4EEACBA755C05453927538C64040CDE67118CCA755C0DBDD03745FC6404008CBD8D0CDA755C08E91EC116AC64040865451BCCAA755C0BE1589096AC64040F7C77BD5CAA755C037F92D3A59C64040427573F1B7A755C0FCC6D79E59C64040CE143AAFB1A755C03B376DC669C64040607138F3ABA755C02CD670917BC6404090DB2F9FACA755C01D75745C8DC64040E3326E6AA0A755C07558E1968FC640403929CC7B9CA755C03082C64CA2C640409E2287889BA755C04676A565A4C640403F1A4E999BA755C0E605D847A7C64040CFF4126399A755C0452BF702B3C64040D619DF1797A755C0A12FBDFDB9C64040601DC70F95A755C0DC611399B9C6404097AC8A7093A755C0E8DB82A5BAC640403D2AFEEF88A755C00A9B012EC8C640403E92921E86A755C0919A7631CDC64040F3AACE6A81A755C03D29931ADAC6404000A777F17EA755C02A560DC2DCC64040A2EC2DE57CA755C053E9279CDDC640407AC1A73979A755C0836DC493DDC640403881E9B46EA755C0B459F5B9DAC6404023DBF97E6AA755C0DE205A2BDAC64040D39E927362A755C0022B8716D9C64040FE99417C60A755C01953B0C6D9C64040172AFF5A5EA755C0317BD976DAC64040B96FB54E5CA755C0D6FB8D76DCC64040A852B3075AA755C0B189CC5CE0C640405646239F57A755C0C4793881E9C640407A36AB3E57A755C0F71E2E39EEC6404076C4211B48A755C00ABE69FAECC64040DBBDDC2747A755C00ABE69FAECC640404EB340BB43A755C00A849D62D5C64040253ACB2C42A755C0A5A14621C9C6404031E884D041A755C03C6A4C88B9C64040FCA6B05241A755C0D05D126745C640401AC05B2041A755C0261AA4E029C64040041DAD6A49A755C0261AA4E029C64040D498107349A755C0D7F7E12021C64040382A37514BA755C078EFA83121C640404A7B832F4CA755C0D02A33A5F5C540406D3480B740A755C02AAA7EA5F3C54040CD3CB9A640A755C0A089B0E1E9C54040406667D13BA755C084D89942E7C540407DCC07043AA755C00DA837A3E6C540400C73823639A755C0BA4DB857E6C540401F12BEF737A755C0376F9C14E6C5404064CBF27519A755C070E82D1EDEC54040CAC4AD8218A755C0DE57E542E5C54040FFE89B340DA755C0D9CEF753E3C54040B131AF230EA755C05FB1868BDCC540406C3B6D8D08A755C066A208A9DBC54040F9BD4D7FF6A655C0978E39CFD8C54040713C9F01F5A655C0E42B8194D8C540400F61FC34EEA655C082E2C798BBC64040ECD808C4EBA655C07AFD497CEEC6404070D1C952EBA655C0026553AEF0C64040B1C05774EBA655C047A98427F4C64040349F73B7EBA655C05610035DFBC64040938D075BECA655C0AF3DB32440C740409E211CB3ECA655C04529215855C74040791EDC9DB5A655C0211FF46C56C7404069183E22A6A655C0747973B856C74040F2CD3637A6A655C0FE99417C60C74040B7CF2A33A5A655C07E39B35DA1C74040B7CF2A33A5A655C0401361C3D3C740402F4B3B3597A655C0108FC4CBD3C74040A565A4DE53A655C08202EFE4D3C74040BDA772DA53A655C0F84F3750E0C740409B36E33444A655C070B4E386DFC740407D8FFAEB15A655C047551344DDC74040C56F0A2B15A655C0F2237EC51AC84040849A215514A655C0888384285FC840402578431A15A655C0821C9430D3C84040811FD5B0DFA555C087A5811FD5C8404032E36DA5D7A555C0DAFF006BD5C84040484C50C3B7A555C056ED9A90D6C840402B33A5F5B7A555C05489B2B794C94040FBAE08FEB7A555C0F44C2F3196C94040E36C3A02B8A555C0B0E42A16BFC9404028D53E1D8FA555C0B0E42A16BFC94040122F4FE78AA555C00FED6305BFC94040F6CFD38041A555C01021AE9CBDC94040C282FB010FA555C04696CCB1BCC94040CF64FF3C0DA555C052448655BCC940400F9BC8CC05A555C0F33B4D66BCC9404046E867EA75A455C0F36F97FDBAC94040B0E595EB6DA455C08E76DCF0BBC94040CE328B506CA455C0705D3123BCC94040DD7C23BA67A455C04696CCB1BCC9404036C8242367A455C0DE0033DFC1C9404078D1579066A455C0F38C7DC9C6C94040048BC3995FA455C027F38FBE49CB404016F6B4C35FA455C0A758350873CB40403CDC0E0D8BA355C0A758350873CB40401781B1BE81A355C0A758350873CB40406D37C1374DA355C0A758350873CB4040501E166A4DA355C0ECA353573ECB4040501E166A4DA355C0588E90813CCB4040D8D30E7F4DA355C0B341261939CB4040910DA48B4DA355C0FB5580EF36CB4040494739984DA355C0E561A1D634CB404031056B9C4DA355C08C4AEA0434CB404019C39CA04DA355C0E595EB6D33CB40402B2E8ECA4DA355C021C8410933CB4040EEAD484C50A355C0DFA7AAD040CA404082C30B2252A355C062F20698F9C840407CEC2E5052A355C0C70F9546CCC84040942EFD4B52A355C098BF42E6CAC84040D046AE9B52A355C0A33A1DC87AC840404EEFE2FDB8A255C0CE35CCD078C84040C613419C87A255C039ECBE6378C840400F0BB5A679A255C09337C0CC77C840409EB5DB2E34A255C0F9307BD976C840409EB5DB2E34A255C0DE8FDB2F9FC84040FAD346753AA255C09DA04D0E9FC84040FAD346753AA255C045B75ED383C840400875914259A255C0E57ADB4C85C840400875914259A255C0D8D2A3A99EC840406EC2BD326FA255C0085740A19EC840401E8997A773A255C09DA04D0E9FC84040E270E65773A255C05C363AE7A7C840408C463EAF78A255C0B090B932A8C840402781CD3978A255C03411363CBDC84040A96917D34CA255C0ED98BA2BBBC840400261A75835A255C0FA4674CFBAC8404038BC202235A255C03F3A75E5B3C84040A92F4B3B35A255C015562AA8A8C84040A3586E6935A255C0D636C5E3A2C84040A739799109A255C0FA40F2CEA1C8404047AAEFFCA2A155C0013274ECA0C840407CEBC37AA3A155C0BC04A73E90C84040A0C1A6CEA3A155C0E0BDA3C684C84040B80375CAA3A155C0DC9C4A0680C8404023A0C211A4A155C0BDFE243E77C84040D5027B4CA4A155C0F4A78DEA74C840404A60730E9EA155C0DB4B1AA375C840409C3237DF88A155C057056A3178C84040E12879758EA155C026FC523F6FC84040CFBD874B8EA155C0AB764D486BC84040E7FF55478EA155C0A5B915C26AC84040CA349A5C8CA155C0F913950D6BC840404A26A77686A155C03446EBA86AC840408ECBB8A981A155C0E1EB6B5D6AC84040276728EE78A155C04DA25EF069C84040F92AF9D85DA155C094826E2F69C840408E57207A52A155C0E21FB6F468C84040C1ABE5CE4CA155C01E520C9068C840406D1ADB6B41A155C065321CCF67C84040F0F5B52E35A155C0FBAF73D366C8404067D5E76A2BA155C0488787307EC840404AB6BA9C12A155C038D55A9885C84040DCBB067DE9A055C0CA6B257497C8404032E719FB92A055C03715A930B6C840408E5A61FA5EA055C0C9AB730CC8C84040A7CAF78C44A055C05F7AFB73D1C840405470784144A055C0A375543541C84040ABCABE2B82A055C02654707841C840406E4A79AD84A055C0DD989EB0C4C74040DE37BEF6CCA055C053C90050C5C74040724D81CCCEA055C0B1FCF9B660C74040CAC2D7D7BAA055C0D4D2DC0A61C74040C79E3D97A9A055C0AB3FC23060C74040814067D2A6A055C01CB3EC4960C74040E1421EC18DA055C0272D5C5661C740402D7590D783A055C0ECFA05BB61C74040FEF0F3DF83A055C0FB78E8BB5BC74040E6AE25E483A055C0971B0C7558C74040B053AC1A84A055C000DF6DDE38C74040573CF54883A055C044F6419605C740405969520ABAA055C0503750E09DC64040D408FD4CBDA055C05890662C9AC64040569929ADBFA055C06B63EC8497C6404005DEC9A7C7A055C069DE718A8EC6404014ADDC0BCCA055C0B35A608F89C64040E97DE36BCFA055C07AC4E8B985C6404090696D1ADBA055C05DC2A1B778C64040A7AB3B16DBA055C0C5573B8A73C640404E7ADFF8DAA055C084F4143944C64040EF71A609DBA055C083C13577F4C54040EF71A609DBA055C05471E316F3C54040EF71A609DBA055C0DA0242EBE1C54040C9AEB48CD4A055C0698F17D2E1C540404CA4349BC7A055C06F8099EFE0C54040527B116DC7A055C0AAD5575705C640409A417C60C7A055C074B169A510C64040F949B54FC7A055C0739A05DA1DC640401E51A1BAB9A055C031772D211FC640404EECA17DACA055C03143E38920C64040FBABC77DABA055C078EFA83121C64040438CD7BCAAA055C018E76F4221C640400453CDACA5A055C05AD6FD6321C640400453CDACA5A055C029EACC3D24C640400453CDACA5A055C02BA391CF2BC640400453CDACA5A055C028F04E3E3DC64040069E7B0F97A055C0FE28EACC3DC64040DB85E63A8DA055C0D461855B3EC64040EDF0D7648DA055C01C42959A3DC6404098141F9F90A055C032E5435035C6404011C4793881A055C035EF384547C640409A93179980A055C04AB54FC763C64040537765170CA055C085B35BCB64C64040923F1878EE9F55C00892770E65C64040CD57C9C7EE9F55C030B77BB94FC6404073486AA164A055C05A4A969350C640401C075E2D77A055C04C8C65FA25C640401C075E2D77A055C062F5471806C640409CFBABC77DA055C0C99063EB19C64040F51263997EA055C03126FDBD14C64040BE69FAEC80A055C0C8224DBC03C64040471FF30181A055C0226E4E2503C640401781B1BE81A055C09128B4ACFBC540402EA9DA6E82A055C0F2AFE595EBC54040B187F6B182A055C00DDC813AE5C540409354A69883A055C00DDC813AE5C54040459DB98784A055C03D601E32E5C540402D5BEB8B84A055C086A8C29FE1C540403318231285A055C006D50627A2C540403318231285A055C04739984D80C540400394861A85A055C09772BED87BC54040A48B4D2B85A055C0C70DBF9B6EC540401D75745C8DA055C0E5266A696EC54040739B70AFCCA055C0D4EFC2D66CC54040020EA14ACDA055C0713C9F01F5C440409F73B7EBA5A055C0B8E864A9F5C44040F2423A3C84A055C08E210038F6C440402D5BEB8B84A055C0747D1F0E12C440402D5BEB8B84A055C03DB7D09508C440402CEFAA07CCA055C036C64E7809C4404090662C9ACEA055C00742B28009C4404095EF1989D0A055C0D7BD158909C4404095EF1989D0A055C03271AB2006C44040AD31E884D0A055C034D93F4F03C44040D6DEA7AAD0A055C087F9F202ECC34040F4F75278D0A055C0F3A96395D2C340401211FE45D0A055C090F5D4EAABC340408384285FD0A055C0DFC0E44691C340407156444DF4A055C038D89B1892C340405C1B2AC6F9A055C038D89B1892C34040959D7E5017A155C07F8461C092C340406AA2CF4719A155C04F00C5C892C34040AB915D6919A155C01900AAB871C3404064CBF27519A155C0E4D5390664C3404087A1D5C919A155C0005471E316C3404043723271ABA155C081CAF8F719C34040957EC2D9ADA155C052465C001AC34040CF4BC5C6BCA255C01A355F251FC34040EF517FBDC2A255C05B24ED461FC3404006465ED6C4A255C0FBE8D495CFC24040A1664815C5A255C09E42AED4B3C2404011E2CAD93BA355C06801DA56B3C240403333333333A355C025B03907CFC24040E197FA7953A355C0D7DEA7AAD0C240401F62838593A355C036E7E099D0C240405B7A34D593A355C0BE141E34BBC240407E50172994A355C05C1FD61BB5C240406728EE7893A355C0DFFDF15EB5C240401536035C90A355C0C6A17E17B6C240403BA8C4758CA355C01AFCFD62B6C24040E6779ACC78A355C0AF795567B5C24040583673486AA355C061DC0DA2B5C2404019E3C3EC65A355C061DC0DA2B5C2404019E3C3EC65A355C0F46C567DAEC2404001A1F5F065A355C02DB29DEFA7C2404057CB9D9960A355C0F73C7FDAA8C24040D65416855DA355C0CD751A69A9C2404005BF0D315EA355C0C47AA35698C24040C98CB7955EA355C0CD3B4ED191C24040B24AE9995EA355C0C0081A3389C24040A6B6D4415EA355C00951BEA085C24040593332C85DA355C0DB34B6D782C24040060DFD135CA355C0A2D288997DC240403108AC1C5AA355C0274D83A279C2404080272D5C56A355C0483657CD73C24040D1949D7E50A355C00A4B3CA06CC24040ADD85F764FA355C02E55698B6BC24040F59ECA694FA355C09161156F64C2404090D959F44EA355C0882CD2C43BC2404092567C43E1A355C0CEA44DD53DC2404040F850A225A455C0DFA7AAD040C240408D95986725A455C05A0BB3D0CEC14040527DE71725A455C00CE4D9E55BC140400DA48B4D2BA455C06CEC12D55BC14040B4588AE42BA455C0CFD6C1C1DEC0404050A912656FA455C09F1EDB32E0C0404095D39E9273A455C01092054CE0C040401D6FF25B74A455C07F4DD6A887C04040D0D1AA9674A455C027309DD66DC040406F2D93E178A455C0454948A46DC040400C0055DCB8A455C0E7A8A3E36AC04040344580D3BBA455C0763579CA6AC040406F0F4240BEA455C005C24EB16AC04040809C306134A555C0F8DF4A766CC04040548A1D8D43A555C07BBE66B96CC04040B62DCA6C90A555C07BBE66B96CC040406E675F7990A555C0C7BAB88D06C040405725917D90A555C02385B2F0F5BF404083DC4598A2A555C0056C0723F6BF404051D66F26A6A555C0056C0723F6BF4040505436ACA9A555C0BD8BF7E3F6BF4040A837A3E6ABA555C0111AC1C6F5BF40405F234910AEA555C0887E6DFDF4BF404016DBA4A2B1A555C0F4346090F4BF40406F7D586FD4A555C0AC545051F5BF4040C9AEB48CD4A555C0E3310395F1BF4040C9AEB48CD4A555C0F511F8C3CFBF4040CEC5DFF604A655C02B6B9BE271BF4040AA29C93A1CA655C0E97B0DC171BF4040C26B97361CA655C0FCFECD8B13BF40408A56EE0566A655C0E2C798BB96BE40408192020B60A655C0419C871398BE4040E78BBD175FA655C0471FF30181BE404011A452EC68A655C022A7AFE76BBE4040BEF8A23D5EA655C022A7AFE76BBE40401D01DC2C5EA655C0CAA65CE15DBE4040915D6919A9A655C02AE3DF675CBE40400035B56CADA655C0B96FB54E5CBE40403B33C170AEA655C0B96FB54E5CBE4040B854A52DAEA655C0DB2E34D769BE40403AE5D18DB0A655C0B267CF656ABE40406247E350BFA655C0C98FF8156BBE40406247E350BFA655C0D3BEB9BF7ABE40400CE6AF90B9A655C0E529ABE97ABE404071AB2006BAA655C091B8C7D287BE4040FA60191BBAA655C0E99B340D8ABE4040244223D8B8A655C078280AF489BE4040C823B891B2A655C0317C444C89BE4040691B7FA2B2A655C042041C4295BE40403997E2AAB2A655C0D5B14AE999BE4040C7F2AE7AC0A655C0E15F048D99BE4040A4A7C821E2A655C0265305A392BE4040AA7EA5F3E1A655C071E6577380BE40402D431CEBE2A655C0AD122C0E67BE40403C2CD49AE6A655C06953758F6CBE404017EE5C18E9A655C096EA025E66BE404044A2D0B2EEA655C0B51A12F758BE4040D18F8653E6A655C04F04711E4EBE4040A23F34F3E4A655C05CE674594CBE40407747C66AF3A655C001DC2C5E2CBE4040CA8AE1EA00A755C0E6CC76853EBE4040185932C7F2A655C0A0DFF76F5EBE4040B9533A58FFA655C0399B8E006EBE4040AE27BA2EFCA655C0651BB80375BE404009A7052FFAA655C0919BE1067CBE4040FB90B75CFDA655C0471FF30181BE40407FF44D9A06A755C09A9658198DBE40404F3C670B08A755C0A4DC7D8E8FBE4040E485747808A755C0EE2422FC8BBE404009FB761211A755C04EB2D5E594BE4040E811A3E716A755C0D76A0F7BA1BE4040AFCC5B751DA755C0984BAAB69BBE40404B581B6327A755C066F7E461A1BE40409D2D20B41EA755C0E55C8AABCABE4040389CF9D51CA755C03E40F7E5CCBE4040FED137691AA755C066D993C0E6BE4040A17F828B15A755C08713984EEBBE404081936DE00EA755C0DC0F786000BF40408A71FE2614A755C0B24813EF00BF4040CD02ED0E29A755C0F758FAD005BF4040DC65BFEE74A755C0C58F31772DBF404078B130444EA755C03C855CA967BF404047E5266A69A755C043520B2593BF404029E620E868A755C0967840D994BF4040B3E908E066A755C05B971AA19FBF4040B41D537765A755C0F8A75489B2BF4040E4B8533A58A755C060545227A0BF404062F4DC4257A755C025E7C41EDABF40400FD1E80E62A755C0852348A5D8BF4040C7F319506FA755C0264F594DD7BF4040F180B22957A755C0E04A766C04C0404088669E5C53A755C0B39602D2FEBF4040F450DB8651A755C03D9AEAC9FCBF4040185B087250A755C020B58993FBBF4040A96917D34CA755C0B6662B2FF9BF40409545611745A755C0A663CE33F6BF4040EDF1423A3CA755C0FB761211FEBF40406283859334A755C016C0948103C04040368FC360FEA655C0D38558FD11C0404037DDB243FCA655C0ACAB02B518C0404079008BFCFAA655C0AA0F24EF1CC04040575EF23FF9A655C0723271AB20C040402EFF21FDF6A655C06684B70721C0404024ED461FF3A655C01D705D3123C04040813CBB7CEBA655C0261AA4E029C04040F56569A7E6A655C0DD054A0A2CC0404073D53C47E4A655C0BFB854A52DC04040EB538EC9E2A655C05E48878730C04040922232ACE2A655C028D3687231C040405CC7B8E2E2A655C0FAD346753AC04040DA0242EBE1A655C00403081F4AC04040B06F2711E1A655C0AF40F4A44CC040402922C32ADEA655C0ED5F596952C04040DCB8C5FCDCA655C06B9E23F25DC040405437177FDBA655C05797530262C04040CD1DFD2FD7A655C05663096B63C0404018B14F00C5A655C0815EB87361C0404087342A70B2A655C0BD395CAB3DC040402C8194D8B5A655C0EF8D210038C04040AA9CF6949CA655C0D1AFAD9FFEBF4040446CB07092A655C0E78C28ED0DC04040221807978EA655C014419C8713C0404083BC1E4C8AA655C0A54C6A6803C04040DDD0949D7EA655C0F7ADD689CBBF4040CAE0287975A655C05D6DC5FEB2BF40409738F24064A655C08BA6B393C1BF4040EF3504C765A655C0B4AD669DF1BF4040ADC1FBAA5CA655C0E3310395F1BF4040A7936C7539A655C02958E36C3AC040400C73823639A655C0EB89AE0B3FC04040770FD07D39A655C045F295404AC0404070EA03C93BA655C06058FE7C5BC04040B5A679C729A655C037C5E3A25AC04040FF3C0D1824A655C096EA025E66C04040C6A6954220A655C0CDB051D66FC0404046240A2DEBA555C07956D28A6FC0404047551344DDA555C0D95E0B7A6FC04040B33F506EDBA555C083F92B64AEC04040EF71A609DBA555C00C207C28D1C04040AD8218E8DAA555C049F4328AE5C04040DEA815A6EFA555C084F23E8EE6C04040BD8BF7E3F6A555C0ED9E3C2CD4C0404051D845D103A655C07DB08C0DDDC040407AC6BE64E3A555C06BB933130CC14040B459F5B9DAA555C0102384471BC1404031CC09DAE4A555C04F93196F2BC1404048A30227DBA555C0BE874B8E3BC140404E7ADFF8DAA555C02252D32EA6C140409F38807EDFA555C0FB5A971AA1C14040DFA5D425E3A555C087FA5DD89AC140407878CF81E5A555C0E86A2BF697C140408F52094FE8A555C02A8E03AF96C14040B7B1D991EAA555C00C7558E196C14040E6CDE15AEDA555C0F9D51C2098C14040EA2285B2F0A555C093A8177C9AC14040B950F9D7F2A555C07B4CA4349BC140405323F433F5A555C087FA5DD89AC140409ACFB9DBF5A555C0CFDA6D179AC140409F58A7CAF7A555C08ACA863595C140408DD31055F8A555C0F71C588E90C140409F8CF161F6A555C0EDB94C4D82C140409ACFB9DBF5A555C0EB34D25279C14040B21188D7F5A555C01477BCC96FC140402E19C748F6A555C0E20511A969C14040B1DD3D40F7A555C067800BB265C1404033A2B437F8A555C0C1FF56B263C14040DFF94509FAA555C00914B18861C140401ADEACC1FBA555C0100533A660C14040548EC9E2FEA555C00914B18861C140405EA0A4C002A655C0C7BC8E3864C1404036ACA92C0AA655C0BC934F8F6DC1404005DA1D520CA655C04AECDADE6EC14040E1CFF0660DA655C074B33F506EC14040F8DD74CB0EA655C09FAEEE586CC14040681D554D10A655C03594DA8B68C140400FB8AE9811A655C09DF529C764C140401475E61E12A655C0FE65F7E461C140406DA6423C12A655C0A7EA1ED95CC1404021718FA50FA655C01DFE9AAC51C1404057CC086F0FA655C0A2444B1E4FC1404021718FA50FA655C0D3307C444CC1404092B06F2711A655C06A16687748C140407C410B0918A655C0B7627FD93DC140405DC0CB0C1BA655C0DB6CACC43CC140406C5B94D920A655C011E2CAD93BC14040007157AF22A655C04757E9EE3AC14040A625564623A655C000AB23473AC14040232D95B723A655C053909F8D5CC14040E603029D49A655C061156F641EC140404A7B832F4CA655C02313F06B24C140406A6798DA52A655C0EE224C512EC140405D6BEF5355A655C05709168733C140408A1F63EE5AA655C0588E90813CC14040AA0B789961A655C04FCDE50643C140400778D2C265A655C0C5C9FD0E45C14040C4758C2B2EA655C0D2E1218C9FC04040B22AC24D46A655C09658198D7CC0404055151A8865A655C0BA86191A4FC0404009FD4CBD6EA655C0FB928D075BC040408B355CE49EA655C0EFE4D3635BC040402843554CA5A655C0AC00DF6DDEC04040A4164A26A7A655C0AC00DF6DDEC04040D23252EFA9A655C04CC45BE7DFC04040789961A3ACA655C0EA1F4432E4C04040EE9579ABAEA655C00B26FE28EAC040403ACB2C42B1A655C0CE8B135FEDC04040325871AAB5A655C0730CC85EEFC04040D8F2CAF5B6A655C0730CC85EEFC04040DD7BB8E4B8A655C0A4C4AEEDEDC04040D1B359F5B9A655C0DB6D179AEBC04040F9122A38BCA655C0151BF33AE2C0404033C34659BFA655C0DE8C9AAF92C1404033C34659BFA655C0431EC18D94C140400035B56CADA655C05489B2B794C14040ADF4DA6CACA655C0A662635E47C240401AC231CB9EA655C08849B89047C24040486E4DBA2DA655C08849B89047C2404081B3942C27A655C08849B89047C240406971C63027A655C008AEF204C2C24040419B1C3EE9A555C0A8A5B915C2C24040463EAF78EAA555C08C4B55DAE2C24040C4793881E9A555C08C4B55DAE2C24040C4793881E9A555C04F93196F2BC340408E554ACFF4A555C04F93196F2BC340409A030473F4A555C0C07971E2ABC340406F9D7FBBECA555C0C07971E2ABC34040166C239EECA555C0F19E03CB11C4404088B839950CA655C0C70BE9F010C440406DA6423C12A655C0B6A0F7C610C440405439ED2939A655C07BA2EBC20FC440409F1F46088FA655C07BA2EBC20FC44040D2E1218C9FA655C04B1E4FCB0FC4404099B67F65A5A655C04B1E4FCB0FC440400A47904AB1A655C01B9AB2D30FC44040520DFB3DB1A655C0164B917C25C4404081919735B1A655C02B11A8FE41C440401CCC26C0B0A655C083BC1E4C8AC540400B613596B0A655C00ABC934F8FC540405DDE1CAED5A655C0FDD98F1491C54040785E2A36E6A655C08675E3DD91C54040FA0B3D62F4A655C07B4CA4349BC540401825E82FF4A655C0747808E3A7C540409B1DA9BEF3A655C0A88B14CAC2C540407C9C69C2F6A655C06C59BE2EC3C54040D655815A0CA755C01D54E23AC6C54040A8A78FC01FA755C081B1BE81C9C540401FD8F15F20A755C0834D9D47C5C54040C617EDF142A755C0C408E1D1C6C54040126745D444A755C0A6EF3504C7C540401133FB3C46A755C0E7DEC325C7C54040F9BCE2A947A755C05852EE3EC7C54040C6681D554DA755C0ED9BFBABC7C54040158E209562A755C046B3B27DC8C54040D21C59F965A755C0F0880AD5CDC5404053AD855968A755C0E69315C3D5C54040356090F469A755C0CD0358E4D7C54040792288F370A755C0978E39CFD8C540409351651877A755C0978E39CFD8C54040FC51D4997BA755C0DFA293A5D6C540403CBF28417FA755C070CB4752D2C54040BA6587F887A755C024456458C5C54040543882548AA755C009FCE1E7BFC54040EE586C938AA755C02158552FBFC540404D2D5BEB8BA755C0D656EC2FBBC54040C343183F8DA755C0BAD91F28B7C540406F9BA9108FA755C0CF143AAFB1C540403656629E95A755C0EFACDD76A1C5404017D522A298A755C0C8E9EBF99AC54040C2F869DC9BA755C0E57D1CCD91C540402670EB6E9EA755C0F4FBFECD8BC54040E8A1B60DA3A755C0809BC58B85C540400305DEC9A7A755C0C005D9B27CC540400CE36E10ADA755C07A7077D66EC54040649291B3B0A755C0A6B6D4415EC54040408864C8B1A755C0B0ABC95356C54040A3FFE55AB4A755C069E21DE049C540402A1900AAB8A755C02FFB75A73BC5404022A64412BDA755C0CA181F662FC540401919E42EC2A755C0289CDD5A26C54040429259BDC3A755C06BF3FFAA23C54040A609DB4FC6A755C0AD4A22FB20C540409E961FB8CAA755C0FC1BB4571FC540400AB8E7F9D3A755C025AFCE3120C54040069ACFB9DBA755C0CAFB389A23C5404010786000E1A755C0F7E3F6CB27C5404035ED629AE9A755C0E10CFE7E31C5404090BDDEFDF1A755C039419B1C3EC5404086E28E37F9A755C0CEA78E554AC540407E6FD39FFDA755C0DD42572250C54040EEAEB321FFA755C08E3D7B2E53C540404D9D47C5FFA755C076E107E753C54040649126DE01A855C027DC2BF356C540409293895B05A855C0A12DE7525CC5404096CE876709A855C092AF045262C540401893FE5E0AA855C07F10C99063C54040412619390BA855C0499BAA7B64C54040B6BA9C1210A855C08E7747C66AC54040BB5D2F4D11A855C08D43FD2E6CC540403140A20914A855C0C6D9740470C54040EEE87FB916A855C077A04E7974C54040174850FC18A855C0C85EEFFE78C54040161406651AA855C06DAB59677CC54040E0B88C9B1AA855C037363B527DC54040E0B88C9B1AA855C0611A868F88C5404005000000BF9CD9AED0A755C028F224E99AC54040931CB0ABC9A755C072A25D8594C540403F8EE6C8CAA755C03D9B559FABC54040D6C4025FD1A755C0F0315871AAC54040BF9CD9AED0A755C028F224E99AC54040090000006400A8E2C6A655C05648F949B5BF4040705AF0A2AFA655C04031B2648EBF4040C536A968ACA655C0FB20CB8289BF4040E15F048D99A655C03BA8C4758CBF40407AE1CE8591A655C08C834BC79CBF404030F0DC7BB8A655C097715303CDBF4040FF1D51A1BAA655C0B3226AA2CFBF4040B726DD96C8A655C013F1D6F9B7BF40406400A8E2C6A655C05648F949B5BF40400E0000002159C0046EA655C0E6C75F5AD4C140408D0C721761A655C0CDC98B4CC0C140400CCA349A5CA655C0D656EC2FBBC14040075BECF659A655C0E238F06AB9C1404022533E0455A655C0A27DACE0B7C140401E4C8A8F4FA655C0310A82C7B7C1404041B7973446A655C01D03B2D7BBC1404048DC63E943A655C0355F251FBBC14040D2DF4BE141A655C0E255D636C5C1404061527C7C42A655C03061342BDBC14040F180B22957A655C00D8B51D7DAC14040C1FC153257A655C0C476F700DDC140405C8B16A06DA655C01EC2F869DCC140402159C0046EA655C0E6C75F5AD4C140400D00000033A7CB6262A655C020B6F468AABF4040B986191A4FA655C0D8B8FE5D9FBF4040757632384AA655C0A3772AE09EBF4040813E912749A655C0320400C79EBF404088635DDC46A655C045D7851F9CBF404024D236FE44A655C06F9EEA909BBF40405B9544F641A655C09EEE3CF19CBF404049BC3C9D2BA655C068AD68739CBF40408D7E349C32A655C02E3A596ABDBF4040F8A23D5E48A655C03AE8120EBDBF40400133DFC14FA655C0C07971E2ABBF4040F2052D2460A655C0A6B5696CAFBF404033A7CB6262A655C020B6F468AABF40400B000000B6D5AC33BEA555C063B2B8FFC8C2404051BF0B5BB3A555C0D425E318C9C24040B20FB22C98A555C0B70C384BC9C240409ACDE33098A555C0A643A7E7DDC240405307793D98A555C09FC6BDF90DC340406F9BA9108FA555C012F3ACA415C3404004745FCE6CA555C018EAB0C22DC340401B0DE02D90A555C04E5FCFD72CC340402D20B41EBEA555C0317A6EA12BC3404016DEE522BEA555C0F6CDFDD5E3C24040B6D5AC33BEA555C063B2B8FFC8C2404008000000C03C64CA87A555C0E2E82ADD5DC1404055A0168387A555C022DFA5D425C14040247A19C572A555C054FF209221C140401343723271A555C01EC4CE143AC140401E4C8A8F4FA555C0FE428F183DC14040F46A80D250A555C0FD31AD4D63C1404091B8C7D287A555C07FDC7EF964C14040C03C64CA87A555C0E2E82ADD5DC14040050000002E55698B6BA555C01F11532289C240408D40BCAE5FA555C085ED27637CC240407D23BA675DA555C053CDACA580C24040E10511A969A555C0C45DBD8A8CC240402E55698B6BA555C01F11532289C2404010000000E1B19FC552A555C091B6F1272AC340402AC6F99B50A555C00A83328D26C34040C745B58828A555C0DA1CE736E1C2404028D027F224A555C0363811FDDAC24040EEEBC03923A555C0C03BF9F4D8C240400D36751E15A555C01825E82FF4C240409CBF098508A555C0E1B54B1B0EC34040DEAE97A608A555C097395D1613C340400D33349E08A555C0A017EE5C18C340406C3B6D8D08A555C0710168942EC340409E7B0F971CA555C02F12DA722EC340402BF702B342A555C07DAF21382EC340401F80D4264EA555C00C3CF71E2EC34040DC0E0D8B51A555C02A55A2EC2DC34040999D45EF54A555C0B9E177D32DC34040E1B19FC552A555C091B6F1272AC34040210000007405DB8827A555C04F5AB8ACC2C24040D36531B1F9A455C0AB07CC43A6C24040336E6AA0F9A455C064726A6798C24040CEDC43C2F7A455C05FB532E197C24040FB592C45F2A455C010E4A08499C2404027A3CA30EEA455C07FBBECD79DC24040ECBE6378ECA455C030B610E4A0C2404069FAEC80EBA455C09F8D5C37A5C24040224E27D9EAA455C0A14621C9ACC24040810871E5ECA455C07BBDFBE3BDC24040FD0FB056EDA455C02DEC6987BFC240403D7D04FEF0A455C04701A260C6C24040E8A04B38F4A455C0D6AA5D13D2C24040A0C03BF9F4A455C01BBB44F5D6C240406A65C22FF5A455C0C5C4E6E3DAC24040478FDFDBF4A455C0404AECDADEC24040D192C7D3F2A455C03198BF42E6C240408AE6012CF2A455C0B8CB7EDDE9C24040F59CF4BEF1A455C0516A2FA2EDC24040BF417BF5F1A455C0C0417BF5F1C240401E300F99F2A455C0772D211FF4C2404041D2A755F4A455C0045262D7F6C24040677BF486FBA455C09DF0129CFAC2404031EC3026FDA455C06D382C0DFCC24040DD43C2F7FEA455C018761893FEC24040B839950C00A555C0D061BEBC00C340404D83A27900A555C075E272BC02C34040CA8AE1EA00A555C0EA76F69507C3404029ADBF2500A555C0CAC2D7D7BAC24040077C7E1821A555C0E7E104A6D3C24040C2A2224E27A555C0946A9F8EC7C24040C72B103D29A555C02B508BC1C3C240407405DB8827A555C04F5AB8ACC2C2404010000000E4DA5031CEA455C00B09185DDEC2404021753BFBCAA455C090831266DAC24040E23B31EBC5A455C0BD1AA034D4C2404096E65608ABA455C099F38C7DC9C240401C7BF65CA6A455C0C3EE3B86C7C2404016A4198BA6A455C03A3C84F1D3C240400F99F221A8A455C06F7D586FD4C240409CBD33DAAAA455C0DAFF006BD5C2404057CD7344BEA455C0C5C4E6E3DAC24040AE7C96E7C1A455C07102D369DDC2404071E2AB1DC5A455C069A9BC1DE1C24040AB7823F3C8A455C04E7D2079E7C2404079724D81CCA455C049111956F1C2404067EDB60BCDA455C0EE5D83BEF4C2404078F01307D0A455C00F2A711DE3C24040E4DA5031CEA455C00B09185DDEC24040080000004E9B711AA2A455C0F7031E1840C24040516859F78FA455C0C1C2499A3FC24040D13FC1C58AA455C021CB82893FC24040E9CF7EA488A455C0B05758703FC24040B91798158AA455C0C8091346B3C24040B2F2CB608CA455C026DE019EB4C240405A7D7555A0A455C0C39D0B23BDC240404E9B711AA2A455C0F7031E1840C240402C0000004D4700378BA455C0D4D4B2B5BEC240400516C09481A455C0F5BD86E0B8C2404064CDC82077A455C0AB24B20FB2C240404C8BFA2477A455C0A2D288997DC24040804754A86EA455C0A78FC01F7EC24040F1BA7EC16EA455C073BD6DA642C240402506819543A455C06D00362042C24040367172BF43A455C092ACC3D155C24040A7E49CD843A455C092C9A99D61C24040BF0CC68844A455C0484C50C3B7C240409C50888043A455C078D0ECBAB7C240407C410B0918A455C07FC16ED8B6C24040FF0241800CA455C079043752B6C240400890A16307A455C0325871AAB5C24040C24B70EA03A455C04AB4E4F1B4C2404082AAD1AB01A455C02121CA17B4C2404000E0D8B3E7A355C026DE019EB4C240402C26361FD7A355C04AB4E4F1B4C24040683EE76ED7A355C036E7E099D0C2404021718FA50FA455C036E7E099D0C24040FE0B040132A455C036E7E099D0C240405166834C32A455C0F56569A7E6C24040390A100533A455C081CAF8F719C340400986730D33A455C039B69E211CC34040C8B08A3732A455C00F0C207C28C34040DFDBF4673FA455C0B003E78C28C3404029AC545051A455C0807F4A9528C3404029780AB952A455C050FBAD9D28C34040D958897956A455C029CAA5F10BC34040F31FD26F5FA455C03462669FC7C240400A48FB1F60A455C08CF4A276BFC24040A568E55E60A455C0581B6327BCC24040E08096AE60A455C08A3BDEE4B7C240403DD34B8C65A455C08A3BDEE4B7C24040EEB3CA4C69A455C00629780AB9C240409FC893A46BA455C0A6ECF483BAC24040AA0EB9196EA455C028637C98BDC240401900AAB871A455C079211D1EC2C24040640113B875A455C060915F3FC4C2404060AFB0E07EA455C005DEC9A7C7C24040BD4F55A181A455C0BDFDB968C8C240407421567F84A455C0F8FBC56CC9C240404D4700378BA455C03E74417DCBC240404D4700378BA455C0D4D4B2B5BEC2404006000000384BC97212A155C034828DEBDFC54040F70489EDEEA055C09ED0EB4FE2C54040AE44A0FA07A155C045D61A4AEDC5404027486C770FA155C0D2DD7536E4C540403D0801F912A155C034828DEBDFC54040384BC97212A155C034828DEBDFC54040040000006588635DDCA055C07E5358A9A0C640404B8DD0CFD4A055C0F46C567DAEC64040DD205A2BDAA055C0902C6002B7C640406588635DDCA055C07E5358A9A0C640400E000000724D81CCCEA055C0B1FCF9B660C740405167EE21E1A055C027F911BF62C74040E6E44526E0A055C09276A38FF9C6404034828DEBDFA055C027A3CA30EEC640401C5A643BDFA055C0EF6E6589CEC64040838769DFDCA055C0E84999D4D0C6404067244223D8A055C042959A3DD0C64040EDD286C3D2A055C03E74417DCBC6404025CADE52CEA055C01B81785DBFC640401936CAFACDA055C0E35295B6B8C640408EAD6708C7A055C00F24EF1CCAC64040E7DEC325C7A055C0CA30EE06D1C64040B3226AA2CFA055C0B891B245D2C64040724D81CCCEA055C0B1FCF9B660C740400103000000070000002D0000006A10E6762FA255C095D4096822CA404064027E8D24A255C00648348122CA40403B8A73D4D1A155C02FDB4E5B23CA404006465ED6C4A155C011C2A38D23CA4040EE0390DAC4A155C0512CB7B41ACA40404835ECF7C4A155C06D8C9DF012CA4040A1664815C5A155C0D50451F701CA4040AC8C463EAFA155C00589EDEE01CA40403BFF76D9AFA155C04B3CA06CCAC9404046938B31B0A155C06D533C2EAAC94040A10F96B1A1A155C0C1E10511A9C9404042075DC2A1A155C06A49473998C9404090BE49D3A0A155C03122516859C94040B96B09F9A0A155C0B0ABC95356C940404221020EA1A155C0EC116A8654C9404017F2086EA4A155C022533E0455C94040D0798D5DA2A155C0725298F738C940403659A31EA2A155C03A58FFE730C9404024EEB1F4A1A155C0C00644882BC9404006D50627A2A155C0A46C91B41BC940401E17D522A2A155C075914259F8C8404006D50627A2A155C065C22FF5F3C84040D6506A2FA2A155C03D7AC37DE4C84040F6798CF2CCA155C05B5F24B4E5C84040E40E9BC8CCA155C096AE601BF1C84040753A90F5D4A155C091F12895F0C8404099107349D5A155C0DD3D40F7E5C8404089AF7614E7A155C0E3FA777DE6C840409B1A683EE7A155C02828452BF7C840404E7D2079E7A155C07FFACF9A1FC9404006B7B585E7A155C0E42D573F36C94040A10E2BDCF2A155C0FB5580EF36C9404057E6ADBA0EA255C0B932A83638C94040F23D23111AA255C03C11C47938C940400A80F10C1AA255C04774CFBA46C9404063B14D2A1AA255C0DA722EC555C940404C6F7F2E1AA255C0FD14C78157C9404014AFB2B629A255C0D93EE42D57C9404007CDAE7B2BA255C0C7D3F20357C940400B2252D32EA255C05660C8EA56C940401D8D43FD2EA255C05A29047289C94040EF703B342CA255C0B9313D6189C9404025CCB4FD2BA255C0F44C2F3196C94040EE08A7052FA255C05455682096C940406A10E6762FA255C095D4096822CA404005000000DC63E94317A255C031D0B52FA0C94040F46E2C280CA255C0368DEDB5A0C94040F46E2C280CA255C05BB4006DABC94040DC63E94317A255C06C1FF296ABC94040DC63E94317A255C031D0B52FA0C9404005000000C0C9367007A255C0E9EFA5F0A0C94040CEC29E76F8A155C0BF28417FA1C94040AB06616EF7A155C0EA40D653ABC9404043A852B307A255C0BABC395CABC94040C0C9367007A255C0E9EFA5F0A0C940400800000075AE282504A255C084F068E388C94040C0AC50A4FBA155C04301DBC188C940408864C8B1F5A155C0A20914B188C940401DC87A6AF5A155C06D19709692C9404052094FE8F5A155C06728EE7893C94040B7CEBF5DF6A155C06728EE7893C9404075AE282504A255C0490F43AB93C9404075AE282504A255C084F068E388C9404008000000E1783E03EAA155C0F58079C894C940407C7F83F6EAA155C070E998F38CC9404048DA8D3EE6A155C082548A1D8DC940409C340D8AE6A155C0DEC66647AAC9404084F23E8EE6A155C0D7A19A92ACC9404066BFEE74E7A155C091291F82AAC9404069E04735ECA155C0BA9F53909FC94040E1783E03EAA155C0F58079C894C9404009000000D4282499D5A155C022C2BF081AC940401A4D2EC6C0A155C03A1E335019C940401A4D2EC6C0A155C0D9791B9B1DC940401A4D2EC6C0A155C0F97FD59123C940407A8CF2CCCBA155C06BF3FFAA23C940404A0856D5CBA155C02D76FBAC32C94040B0524145D5A155C0CE6DC2BD32C9404033315D88D5A155C0C6DADFD91EC94040D4282499D5A155C022C2BF081AC940400500000037C478CDABA155C0806264C91CC94040409FC893A4A155C00FEF39B01CC94040409FC893A4A155C08BC56F0A2BC94040FBABC77DABA155C0AE9B525E2BC9404037C478CDABA155C0806264C91CC94040010300000001000000090000005A29047289A555C06DC7D45DD9BF40407B12D89C83A555C025E7C41EDABF40405B3D27BD6FA555C0B4739A05DABF404029B2D6506AA555C024B37A87DBBF4040CB457C2766A555C03E7782FDD7BF4040ED48F59D5FA555C0035C902DCBBF40400A62A06B5FA555C033897AC1A7BF4040317C444C89A555C0984EEB36A8BF40405A29047289A555C06DC7D45DD9BF4040',
        ]);

        DB::table(config('taxes.tax_areas'))->insert([
            'name' => 'Leeds Occupational Tax',
            'tax' => LeedsOccupational::class,
            'governmental_unit_area_id' => $id,
        ]);
    }
}
