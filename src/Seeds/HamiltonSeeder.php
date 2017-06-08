<?php

namespace Appleton\Taxes\Seeds;

use Appleton\Taxes\Countries\US\Alabama\HamiltonOccupational;
use DB;
use Illuminate\Database\Seeder;

class HamiltonSeeder extends Seeder
{
    public function run()
    {
        $id = DB::table('governmental_unit_areas')->insertGetId([
            'name' => 'Hamilton, AL',
            'area' => '0106000020E610000001000000010300000006000000740300004E7CB5A3380456C0849CF7FF71164140CCD1E3F7360456C01C412AC58E16414095EEAEB3210456C0ABCDFFAB8E164140E5417A8A1C0456C052B648DA8D164140C26B97361C0456C0A087DA368C164140CC7A3194130456C07DB1F7E28B1641407BBC900E0F0456C06DFFCA4A93164140EA5C514A080456C08731E9EFA5164140971936CAFA0356C0DD787764AC1641408C9C853DED0356C0A96BED7DAA164140BFD364C6DB0356C0F9BB77D498164140F372D87DC70356C08AAA5FE97C1641404F8E0244C10356C0DB4B1AA375164140C49448A2970356C0F3FFAA234716414093347F4C6B0356C0484E266E15164140506F46CD570356C0B81FF0C000164140338AE596560356C09B3A8F8AFF1541409F03CB11320356C00ED6FF39CC154140F84ECC7A310356C060C8EA56CF1541402A357BA0150356C0C138B874CC154140CCD24ECDE50256C0F3583332C81541400AD5CDC5DF0256C0331477BCC915414045662E70790256C0CC61F71DC31541405CACA8C1340256C0EC1681B1BE1541403060C9552C0256C0E659492BBE154140BA490C022B0256C04562821ABE154140B9FB1C1F2D0256C04E0CC9C9C41541401D8D43FD2E0256C039D1AE42CA154140BBB72231410256C06B65C22FF515414069FCC22B490256C019E1ED4108164140E012807F4A0256C03B4F3C670B164140B81E85EB510256C0035B25581C1641402992AF04520256C027BC04A73E1641405930F147510256C0333674B33F164140E2FF8EA8500256C02B11A8FE4116414060217365500256C05A2DB0C744164140B39597FC4F0256C017F3734353164140B39597FC4F0256C0FD2E6CCD56164140E31934F44F0256C008A9DBD95716414030B77BB94F0256C099EE75525F164140C05DF6EB4E0256C046B1DCD26A164140DD76A1B94E0256C0D4D51D8B6D16414019A9F7544E0256C099F4F75278164140AE0CAA0D4E0256C06C91B41B7D164140AC36FFAF3A0256C0BB6246787B164140E9EE3A1BF20156C01346B3B27D164140E8305F5E800156C05AF2785A7E16414000732D5A800156C0971936CAFA15414017B5FB55800156C0855D143DF0154140EDED96E4800156C01B0FB6D8ED154140A6272CF1800156C0384C3448C1154140A6272CF1800156C065170CAEB91541404CDC2A88810156C011381268B0154140CB113290670156C0DBC2F352B115414091240857400156C0ACA6EB89AE15414091240857400156C0A699EE755215414053CE177B2F0156C0A699EE75521541405419C6DD200156C0A699EE75521541405419C6DD200156C0E3C5C210391541405419C6DD200156C03E062B4EB5144140C32B499EEB0056C08CD7BCAAB314414014E7A8A3E30056C0FD4AE7C3B31441409487855AD30056C06801DA56B31441400B444FCAA40056C0DAA84E07B2144140B8CCE9B2980056C00470B378B114414011FE45D0980056C0D1CABDC0AC144140B7B24467990056C05C02F04FA9144140C32CB4739A0056C028D2FD9C8214414099999999990056C05F7B664980144140F9A1D288990056C0A1F14410E713414070ECD973990056C091B41B7DCC134140BE69FAEC800056C0682101A3CB1341400C5531957E0056C0DE1D19ABCD134140A8DDAF027C0056C0B456B439CE1341404B57B08D780056C0FB027AE1CE134140B306EFAB720056C0904C874ECF1341401C041DAD6A0056C0BA13ECBFCE134140A60705A5680056C0B456B439CE1341405B069CA5640056C0B456B439CE1341407BA180ED600056C01F0DA7CCCD134140CC28965B5A0056C09D2E8B89CD134140CD76853E580056C07958A835CD1341406EBC3B32560056C008E57D1CCD134140A699EE75520056C0101E6D1CB1144140B247A819520056C074E95F92CA144140AE64C746200056C01CD2A8C0C9144140AA29C93A1C0056C039EB538EC91441404B8DD0CFD4FF55C012C0CDE2C5144140C70F9546CCFF55C05F5D15A8C514414057EA5910CAFF55C0EFFD0DDAAB1541408EAD6708C7FF55C04F0647C9AB154140B01BB62DCAFF55C07AC6BE64E315414045990D32C9FF55C0785E2A36E6154140342E1C08C9FF55C00DC51D6FF2154140F23E8EE6C8FF55C05225CADE52164140E0D39CBCC8FF55C02A3410CB66164140E0D39CBCC8FF55C03CDF4F8D97164140C991CEC0C8FF55C00E65A88AA91641402FF65E7CD1FF55C0DFE00B93A9164140A3CA30EE060056C09143C4CDA91641408B6EBDA6070056C0815D4D9EB21641409CD9AED0070056C06C223317B8164140FCFB8C0B070056C005DEC9A7C7164140BB0CFFE9060056C03883BF5FCC164140325706D5060056C0C72C7B12D8164140325706D5060056C0795BE9B5D9164140389D64ABCBFF55C0022B8716D9164140C43C2B69C5FF55C031AF230ED916414082FFAD64C7FF55C03F390A1005174140367689EAADFF55C0BC5AEECC04174140852172FA7AFF55C0FD497CEE04174140CDE7DCED7AFF55C08C852172FA164140624B8FA67AFF55C0A228D027F2164140627FD93D79FF55C09E4319AA62164140EC681CEA77FF55C02DD0EE90621641409010E50B5AFF55C0342905DD5E1641406F0A2B1554FF55C0F9F6AE415F1641409B1F7F6951FF55C04D9CDCEF501641405242B0AA5EFF55C0209738F240164140F623456458FF55C0E692AAED2616414023BBD23252FF55C022C5008926164140179CC1DF2FFF55C069A510C825164140BFEC9E3C2CFF55C08AC745B588164140994869368FFE55C09337C0CC771641409F39EB538EFE55C0D55A9885761641409C51F355F2FD55C0B9DDCB7D72164140B01BB62DCAFD55C060C614AC71164140C843DFDDCAFD55C0BA675DA3E516414019FF3EE3C2FD55C0446B459BE3164140F702B34291FD55C080D1E5CDE1164140E126A3CA30FD55C043E6CAA0DA16414011DF89592FFD55C0EA58A5F44C1741406EBDA60705FD55C0BB0853944B174140392861A6EDFC55C068AED3484B17414075745C8DECFC55C05184D4EDEC17414069E04735ECFC55C08D7BF31B26184140C74961DEE3FC55C08D7BF31B26184140BB95253ACBFC55C0F831E6AE25184140DF4E22C2BFFC55C0EC832C0B26184140016C4084B8FC55C0F831E6AE25184140FF756EDA8CFC55C08D7BF31B261841407E71A94A5BFC55C08D7BF31B26184140FA5E43705CFC55C0B323D5777E174140D102B4AD66FC55C0F51263997E174140B98C9B1A68FC55C0B804E09F521741403577F4BF5CFC55C0B247A81952174140DC4598A25CFC55C0FDF7E0B54B174140DC2BF3565DFC55C094313ECC5E1641401878EE3D5CFC55C0E78D93C2BC1541401B9947FE60FC55C07D1EA33CF3144140D4EC815660FC55C0E97DE36BCF144140A26131EA5AFC55C045B8C9A832144140DD5F3DEE5BFC55C03C4A253CA1134140512CB7B41AFC55C01553E9279C1341404DD87E32C6FB55C05A46EA3D95134140EBC5504EB4FB55C0967840D994134140B08EE3874AFB55C0E388B5F81414414026FDBD141EFB55C0B0A888D349144140D05E7D3CF4FA55C0FC51D4997B1441402F4CA60A46FA55C0A2D634EF381541407C0DC17119FA55C0D15AD1E638154140E7A6CD380DFA55C0A2D634EF38154140A0E062450DFA55C068588CBAD61441402237C30DF8F955C07B832F4CA61441401A33897AC1F955C07F315BB22A144140C761307F85F955C01BBCAFCA85144140C821E2E654F955C0DDCF29C8CF144140FF93BF7B47F955C0B5DE6FB4E31441403A3B191C25F955C0E5620CACE3144140D6FECEF6E8F855C02C431CEBE2144140B8E864A9F5F855C0A374E95F92144140FF571D39D2F855C0205C01857A14414063B5F97FD5F855C063963D096C144140B96A9E23F2F855C066F3380CE61341404FB0FF3A37F955C02639605793134140D2A8C0C936F955C03602F1BA7E134140C614AC7136F955C09198A0866F134140012D5DC136F955C02A51F6967212414053E9279CDDF855C036CB65A3731241401DA8531EDDF855C0F4177AC4E81141406A11514CDEF855C0A27895B54D11414011E0F42EDEF855C0EA1ED95C3511414058A65F22DEF855C0C70F9546CC104140950C0055DCF855C00A62A06B5F1041405F22DE3AFFF855C0978DCEF9291041404B75012F33F955C0264F594DD70F4140315F5E807DF955C04E24986A660F4140DE550F9887F955C0F7578FFB560F41400EDAAB8F87F955C0D0EB4FE2730F4140DA519CA38EF955C0890B40A3740F41403FE3C28190F955C0B75B9203760F4140C74ACCB392F955C0698A00A7770F41402F4B3B3597F955C01C0A9FAD830F4140FD101B2C9CF955C068AD68739C0F4140999CDA19A6F955C0A10F96B1A10F4140088ECBB8A9F955C0F2CD3637A60F41402AFF5A5EB9F955C09B70AFCC5B0F4140990AF148BCF955C00778D2C2650F4140103B53E8BCF955C0BED87BF1450F4140522AE109BDF955C0C765DCD4400F414051137D3ECAF955C0C09140834D0F41403A3FC571E0F955C06C205D6C5A0F41409ED0EB4FE2F955C0BDC11726530F4140266F8099EFF955C0620E828E560F414090F7AA9509FA55C0D7A205685B0F41407E8CB96B09FA55C012A1116C5C0F4140566133C005FA55C047CB811E6A0F41405B04C6FA06FA55C0C6D97404700F41402B323A2009FA55C0EB0088BB7A0F414062F5471806FA55C07AAA436E860F4140C362D4B5F6F955C05ABA826DC40F4140460A65E1EBF955C0ADBCE47FF20F414027BD6F7CEDF955C0E8BAF083F30F4140C078060DFDF955C0BEF38B12F40F41406AF3FFAA23FA55C01DC87A6AF50F41403C6876DD5BFA55C02385B2F0F50F4140E00ED4298FFA55C03FDF162CD50F4140B2463D44A3FA55C00CE9F010C60F4140DEAB5626FCFA55C0B7442E38830F4140F6065F984CFB55C0FF3BA242750F4140213CDA3862FB55C05AEF37DA710F4140D7BFEB3367FB55C0F0BDBF417B0F4140F1D7648D7AFB55C066118AADA00F41400EF450DB86FB55C04832AB77B80F414019FF3EE3C2FB55C07FF964C5700F414043ACFE08C3FB55C0745C8DEC4A0F4140BFB33D7AC3FB55C0DE54A4C2D80E414060AB048BC3FB55C0A339B2F2CB0E4140FA5C6DC5FEFB55C069AA27F38F0E4140B27F9E060CFC55C0D3DB9F8B860E4140902E36AD14FC55C0A06AF46A800E414004E621533EFC55C0284701A2600E4140956247E350FC55C012D89C83670E4140B70721205FFC55C0DBFAE93F6B0E414042AD69DE71FC55C00FD4298F6E0E41403196E99788FC55C0AE635C71710E41408043A852B3FC55C028B517D1760E41405247C7D5C8FC55C07BDB4C85780E4140DDEC0F94DBFC55C0683C11C4790E4140F01307D0EFFC55C0D4F20357790E4140B41B7DCC07FD55C00BD0B69A750E4140AE7E6C921FFD55C099D711876C0E414094A0BFD023FD55C099D711876C0E414076A4FACE2FFD55C01E865627670E41404ED026874FFD55C03C821B295B0E41407EDFBF7971FD55C0B7990AF1480E414046088F368EFD55C04CA94BC6310E41401E317A6EA1FD55C039D0436D1B0E41405796E82CB3FD55C0BB404981050E4140DB4AAFCDC6FD55C0EB56CF49EF0D414045990D32C9FD55C0B515FBCBEE0D4140FDF50A0BEEFD55C08ECD8E54DF0D4140E31A9FC9FEFD55C09C1727BEDA0D4140DEE522BE13FE55C0F12A6B9BE20D4140C3F0113125FE55C05D328E91EC0D4140B6627FD93DFE55C030B8E68EFE0D41407A19C5724BFE55C00D501A6A140E4140776682E15CFE55C018D00B772E0E41400A48FB1F60FE55C0BBB4E1B0340E41405549641F64FE55C0F6CFD380410E4140834BC79C67FE55C0A1F65B3B510E4140F913950D6BFE55C0FCFA2136580E4140CDE49B6D6EFE55C0C1C8CB9A580E4140CE35CCD078FE55C05055A181580E4140A2EC2DE57CFE55C05055A181580E41400E30F31DFCFE55C07FD93D79580E41400E30F31DFCFE55C08A709351650E41403D9AEAC9FCFE55C0554B3ACAC10E4140CEC5DFF604FF55C0FCE25295B60E4140130A117008FF55C015562AA8A80E414005DD5ED218FF55C076DD5B91980E4140E0D5726726FF55C079909E22870E414055849B8C2AFF55C02864E76D6C0E41405B5B785E2AFF55C00AD7A3703D0E4140A8DE1AD82AFF55C08C3045B9340E4140C7116BF129FF55C0D31055F8330E41404319AA622AFF55C0586E6935240E41401BBAD91F28FF55C02F8A1EF8180E4140118E59F624FF55C0CDC82077110E4140605969520AFF55C0DC9E20B1DD0D4140B401D88008FF55C0FA9AE5B2D10D414023A298BC01FF55C08FFB56EBC40D41406B9C4D4700FF55C0664B5645B80D4140016729594EFF55C054E0641BB80D4140C0779B374EFF55C022A30392B00D41402557B1F84DFF55C0533E0455A30D4140B1DCD26A48FF55C0B51666A19D0D41409DB81CAF40FF55C070B54E5C8E0D4140B1D991EA3BFF55C01BD65416850D41402904728923FF55C0A4A65D4C330D41406F4562821AFF55C0E123624A240D4140608DB3E908FF55C066817687140D4140A67D737FF5FE55C01D1CEC4D0C0D4140F6EAE3A1EFFE55C0E4B9BE0F070D41405033A48AE2FE55C05036E50AEF0C414056D3F544D7FE55C08DB3E908E00C41409888B7CEBFFE55C0D9AED007CB0C41401A3048FAB4FE55C0A14CA3C9C50C41400169FF03ACFE55C040BFEFDFBC0C41407D3CF4DDADFE55C0B29AAE27BA0C414078CF81E508FF55C057E71890BD0C41402FA182C30BFF55C0AB4198DBBD0C4140B6D782DE1BFF55C0E63FA4DFBE0C414026FDBD141EFF55C0272F3201BF0C4140909F8D5C37FF55C008E23C9CC00C41405A47551344FF55C0AA0D4E44BF0C4140D5CC5A0A48FF55C0D508FD4CBD0C414040834D9D47FF55C06C223317B80C41401DC70F9546FF55C0D0622992AF0C4140DC0BCC0A45FF55C0295DFA97A40C4140FB58C16F43FF55C02EC901BB9A0C4140B5E0455F41FF55C045D4449F8F0C4140336ABE4A3EFF55C01D8CD827800C41407C7E18213CFF55C087BD50C0760C414070EA03C93BFF55C0B875374F750C41402A8C2D0439FF55C03446EBA86A0C4140F0F5B52E35FF55C0001C7BF65C0C414080D07AF832FF55C0D49B51F3550C4140E140481630FF55C0EA3E00A94D0C41408F34B8AD2DFF55C02F3201BF460C414066BB421F2CFF55C0DE736039420C41408BDF14562AFF55C0DA5207793D0C4140B8567BD80BFF55C0758E01D9EB0B41409CA5643909FF55C01A8A3BDEE40B41406744696FF0FE55C0C58D5BCCCF0B4140360186E5CFFE55C0F486FBC8AD0B4140D029C8CF46FE55C09943520B250B41401686C8E9EBFD55C092020B60CA0A41400AF2B391EBFD55C0761893FE5E0A41408713984EEBFD55C0E8F351465C0A4140C91CCBBBEAFD55C093E2E313B2094140C91CCBBBEAFD55C0BED7101C9709414005871744A4FD55C06F9EEA909B094140062D246074FD55C020990E9D9E094140CBA0DAE044FD55C0317BD976DA0841404E999B6F44FD55C04CA7751BD40841407C7E18213CFD55C0A1478C9E5B084140C45E28603BFD55C0BF0F0709510841403BA6EECA2EFD55C02522FC8BA0074140AE81AD122CFD55C0C6C210397D074140D28BDAFD2AFD55C0BB5F05F86E074140F641960513FD55C050FEEE1D3506414017450F7C0CFD55C022FAB5F5D3054140D8F15F2008FD55C0F71C588E90054140B68311FB04FD55C083312251680541400FCF126404FD55C0139B8F6B430541407B67B45549FD55C0BF7FF3E2C4054140454948A46DFD55C0A148F7730A0641403605323B8BFD55C009C03FA54A06414093FFC9DFBDFD55C0D1E7A38CB806414035B05582C5FD55C05872158BDF064140CCECF318E5FD55C0E2395B4068074140CFF3A78DEAFD55C05B40683D7C074140BC3AC780ECFD55C004392861A6074140BAD573D2FBFD55C0CBD58F4DF20741400CFFE9060AFE55C0252191B6F1074140FB8F4C874EFE55C0F5F3A622150841401616DC0F78FE55C00EBE30992A0841406EBE11DDB3FE55C03F52448655084140205B96AFCBFE55C01D925A28990841400919C8B3CBFE55C0F3CAF5B699084140904C874ECFFE55C07DEBC37AA3084140F99D2633DEFE55C063B2B8FFC80841403FFF3D78EDFE55C08E72309B00094140910BCEE0EFFE55C0B3CD8DE909094140ED0912DBDDFE55C0D2DF4BE14109414084BBB376DBFE55C0C22D1F49490941403AE8120EBDFE55C0EC10FFB0A509414079C7293A92FE55C0C37DE4D6A40941401ABFF04A92FE55C0A45181936D0A4140D3F8855792FE55C0013274ECA00A41404E98309A95FE55C0E9F2E670AD0A41401118EB1B98FE55C05A9A5B21AC0A4140C8CF46AE9BFE55C0D2FE0758AB0A4140310400C79EFE55C0D2FE0758AB0A4140548CF337A1FE55C0D2FE0758AB0A41409AEAC9FCA3FE55C01F680586AC0A41403A94A12AA6FE55C0C4E8B985AE0A4140F7562426A8FE55C09FAA4203B10A414079E75086AAFE55C09D0E643DB50A41404B1C7920B2FE55C036CAFACDC40A4140B69E211CB3FE55C02E71E481C80A41405648F949B5FE55C0A339B2F2CB0A4140FBAE08FEB7FE55C09D4830D5CC0A4140D3BD4EEACBFE55C0C74961DEE30A4140629B5434D6FE55C0A3906456EF0A4140B5DB2E34D7FE55C0EA3C2AFEEF0A4140CCE9B298D8FE55C0AE0AD462F00A4140E4F736FDD9FE55C031E9EFA5F00A41405437177FDBFE55C031E9EFA5F00A4140CA4DD4D2DCFE55C031E9EFA5F00A4140CFBC1C76DFFE55C06D1B4641F00A41401BD82AC1E2FE55C0D314014EEF0A41406CCA15DEE5FE55C08C683BA6EE0A4140E2C62DE6E7FE55C0098A1F63EE0A41402EFCE07CEAFE55C0CD57C9C7EE0A41407A17EFC7EDFE55C031E9EFA5F00A4140E3FDB8FDF2FE55C0B81CAF40F40A4140D0950854FFFE55C0E3344415FE0A414085CB2A6C06FF55C03DD175E1070B41406BB933130CFF55C009E1D1C6110B41403DD4B66114FF55C0B56FEEAF1E0B4140669E5C5320FF55C0F3AB3940300B4140F97FD59123FF55C0B5DD04DF340B4140FDA02E5228FF55C0FE0E45813E0B4140D6C6D8092FFF55C08A1C226E4E0B4140C8B08A3732FF55C0F1660DDE570B4140251DE56036FF55C086014BAE620B4140C8CD70033EFF55C02446CF2D740B4140C18EFF0241FF55C09C2FF65E7C0B41400264E8D841FF55C0A7751BD47E0B4140AF230ED940FF55C0A641D13C800B4140716F7EC344FF55C05725917D900B4140ED42739D46FF55C0B77EFACF9A0B41403BC6151747FF55C00E2E1D739E0B4140465A2A6F47FF55C0D6506A2FA20B41407007EA9447FF55C0CFF753E3A50B41407007EA9447FF55C0984EEB36A80B41402F185C7347FF55C090F5D4EAAB0B4140828C800A47FF55C07631CD74AF0B414041D13C8045FF55C00C0055DCB80B41400C90680245FF55C005A73E90BC0B4140B378B13044FF55C036E49F19C40B414048DC63E943FF55C0D9942BBCCB0B4140309A95ED43FF55C0CC7EDDE9CE0B4140205F420587FF55C0668522DDCF0B4140137D3ECA88FF55C0C139234A7B0B4140CB82893F8AFF55C057EC2FBB270B414024B4E55C8AFF55C05ABC5818220B4140713788D68AFF55C0DD94F25A090B4140F3C7B4368DFF55C090F7AA95090B414083D9041896FF55C0BF7B478D090B41409B525E2BA1FF55C08449F1F1090B4140BCAC8905BEFF55C05F3FC4060B0B414046B071FDBBFF55C0FED478E9260B4140467C2766BDFF55C07AFCDEA63F0B4140AE7C96E7C1FF55C0620E828E560B41406682E15CC3FF55C03F389F3A560B41406647AAEFFCFF55C0BB253960570B41409128B4ACFBFF55C0E97B0DC1710B414061A417B5FBFF55C014CE6E2D930B4140BF5E61C1FDFF55C03E20D099B40B41401F679AB0FDFF55C0AB9509BFD40B4140EFE2FDB8FDFF55C0C1E09A3BFA0B414047ACC5A7000056C0D4B32094F70B414078B5DC99090056C06744696FF00B41407971E2AB1D0056C0AA7EA5F3E10B4140A50EF27A300056C0DAE55B1FD60B4140016729594E0056C0A29A92ACC30B4140F59ECA694F0056C05BEECC04C30B414022533E04550056C0033FAA61BF0B41403B342C465D0056C03B50A73CBA0B4140A9D72D02630056C0A2B1F677B60B41406F10AD156D0056C0D505BCCCB00B414065355D4F740056C01F82AAD1AB0B41409485AFAF750056C0F6EE8FF7AA0B414034492C29770056C04F3A9160AA0B4140A19E3E027F0056C00A2AAA7EA50B4140402E71E4810056C047904AB1A30B41403332C85D840056C0FA264D83A20B4140A9143B1A870056C0969526A5A00B414023809BC58B0056C068791EDC9D0B4140C2C1DEC4900056C00F96B1A19B0B41404A438D42920056C07B4CA4349B0B41404FE61F7D930056C0450BD0B69A0B414048C153C8950056C0FE5E0A0F9A0B41403F1A4E999B0056C04FCC7A31940B41404946CEC29E0056C02C2AE274920B4140A94E07B29E0056C0E15CC30C8D0B41403ECC5EB69D0056C0A321E3512A0B414057772CB6490056C058AB764D480B4140FF5C34643C0056C01C0B0A83320B4140503239B5330056C0ACE28DCC230B4140556AF6402B0056C0A87004A9140B414011C2A38D230056C02C9ACE4E060B41409A9141EE220056C0B0AC3429050B4140DAE1AFC91A0056C0D6011077F50A414093FE5E0A0F0056C0A0866F61DD0A4140C0C93670070056C0F0A2AF20CD0A4140B839950C000056C0BDE0D39CBC0A414020CF2EDFFAFF55C0F9F5436CB00A4140630CACE3F8FF55C0664815C5AB0A4140A52C431CEBFF55C0B35A608F890A414032ACE28DCCFF55C0A6457D923B0A41401B9E5E29CBFF55C03D2B69C5370A4140DB166536C8FF55C035B56CAD2F0A414045990D32C9FF55C05DF75624260A4140637E6E68CAFF55C0ED9A90D6180A41405B3FFD67CDFF55C0F7216FB9FA094140BC3AC780ECFF55C0AF415F7AFB094140FA449E245D0056C03C66A032FE094140D65416855D0056C062D7F6764B0A414088B7CEBF5D0056C092037635790A414067D13B15700056C092037635790A4140C5E57805A20056C092037635790A4140F64201DBC10056C070952710760A4140E7C41EDAC70056C0A5F3E159820A414074E95F92CA0056C055867137880A41409D4830D5CC0056C0823AE5D18D0A41406C76A4FACE0056C0615111A7930A41402A3927F6D00056C0E15F048D990A4140DA19A6B6D40056C00453CDACA50A4140614D6551D80056C0DAA84E07B20A4140473B6EF8DD0056C0300DC347C40A4140DB5031CEDF0056C033FAD170CA0A4140FCA4DAA7E30056C086713788D60A4140C03E3A75E50056C059DAA9B9DC0A4140307E1AF7E60056C05019FF3EE30A4140533A58FFE70056C00569C6A2E90A414059F78F85E80056C0C76647AAEF0A4140E2AC889AE80056C0BDA59C2FF60A4140D6C4025FD10056C0F0F96184F00A41405F402FDCB90056C050189469340B4140ED647094BC0056C0D1B1834A5C0B4140D11E2FA4C30056C0F2CEA10C550B4140F20A444FCA0056C0D2FC31AD4D0B4140A88E554ACF0056C06B7EFCA5450B4140992A1895D40056C06A2DCC423B0B4140B8AE9811DE0056C01901158E200B4140E55FCB2BD70056C0F209D9791B0B4140F0A5F0A0D90056C0B41EBE4C140B4140E6B0FB8EE10056C01C058882190B41407D073F71000156C024986A662D0B41408D0A9C6C030156C0DB32E02C250B414029CDE671180156C05FB35C363A0B41408505F7031E0156C00F46EC13400B4140E109BDFE240156C0A37213B5340B4140C3D66CE5250156C0DFA46950340B4140C2BCC799260156C0A4A65D4C330B4140B9E177D32D0156C0863C821B290B414010AB3FC2300156C0CB63CDC8200B414069A510C8250156C0F23D23111A0B4140B401D880080156C057957D57040B414043A852B3070156C04869368FC30A4140CC77F013070156C098FA7953910A4140ADC1FBAA5C0156C01BD99596910A4140B741EDB7760156C0EA20AF07930A41402E724F57770156C092CEC0C8CB0A414074965984620156C0215B96AFCB0A4140E7A562635E0156C0215B96AFCB0A41403691990B5C0156C0C1525DC0CB0A4140D1E5CDE15A0156C0F1D6F9B7CB0A41406EBC3B32560156C092CEC0C8CB0A4140F88BD992550156C0B6D782DE1B0B4140B760A92EE00156C060ADDA35210B4140ECA4BE2CED0156C036E675C4210B41400F9546CCEC0156C06A166877480B41400F9546CCEC0156C06D37C1374D0B414020240B98C00156C03DB324404D0B4140E9263108AC0156C00E2F88484D0B4140E9263108AC0156C07555A016830B4140F73DEAAF570156C0FF243E77820B4140DF15C1FF560156C093331477BC0B4140FFCA4A93520156C0BDFA78E8BB0B4140E6CC76853E0156C05801BEDBBC0B414003AF963B330156C01E882CD2C40B4140687407B1330156C0E7DEC325C70B41401077F52A320156C0A757CA32C40B41402785798F330156C0C72AA5677A0B4140FF56B263230156C087DD770C8F0B4140605969520A0156C061FD9FC37C0B41408FC360FE0A0156C0D13C80457E0B4140D959F44E050156C0923A014D840B4140A9BBB20B060156C049F25CDF870B4140D3687231060156C035EB8CEF8B0B414055DCB8C5FC0056C0272CF180B20B4140029CDEC5FB0056C05DA10F96B10B4140124E0B5EF40056C0DDE9CE13CF0B4140FA3F87F9F20056C03599F1B6D20B414044132862110156C0378C82E0F10B4140A9A44E40130156C0AA9B8BBFED0B41402A1BD654160156C0D175E107E70B4140BDE2A9471A0156C01E300F99F20B4140849D62D5200156C085CB2A6C060C4140BCE9961DE20056C07C0A80F10C0C414062B83A00E20056C07BA2EBC20F0C4140334E4354E10056C0807C09151C0C4140F2785A7EE00056C0C9CA2F83310C414063EC8497E00056C0EDF1423A3C0C4140C9E53FA4DF0056C0BCADF4DA6C0C4140C328081EDF0056C0963B33C1700C4140C3BAF1EEC80056C08410902FA10C4140F19F6EA0C00056C0B2B794F3C50C4140C8409E5DBE0056C09A780778D20C41409E93DE37BE0056C088D9CBB6D30C414055D80C70410156C08C7F9F71E10C41404774CFBA460156C074232C2AE20C414094F77134470156C0207EFE7BF00C4140DBBDDC27470156C0D5E940D6530D41403C2B69C5370156C01DCA5015530D414080B6D5AC330156C0DBDAC2F3520D414080B6D5AC330156C04165FCFB8C0D414080B6D5AC330156C08F87BEBB950D4140DAE55B1FD60056C027A1F485900D4140DAE55B1FD60056C0E964A9F57E0D4140096AF816D60056C05E10919A760D4140761A69A9BC0056C07C293C68760D4140E35295B6B80056C00B0742B2800D4140664B5645B80056C041481630810D4140F1B6D26BB30056C0A92EE065860D41409A215514AF0056C0361FD7868A0D41400D17B9A7AB0056C0BE86E0B88C0D41409700FC53AA0056C034B742588D0D414044A67C08AA0056C06938656EBE0D4140B7B06EBC3B0156C08EC70C54C60D4140A6457D923B0156C00BEBC6BB230F4140663046240A0256C004C6FA06260F41406A6B44300E0256C0D4415E0F260F414034F6251B0F0256C00455A3570310414081936DE00E0256C0EE3CF19C2D104140F06B2409C20156C0AD4D637B2D104140CC9541B5C10156C05055A18158104140B56D1805C10156C017F2086EA4104140A0C4E74EB00156C09B728577B9104140944A7842AF0156C0594FADBEBA1041405D16139B8F0156C0F6CDFDD5E310414054E41071730156C095B4E21B0A114140D11F9A79720156C07767EDB60B114140E947C329730156C0DBF813950D1141408FFCC1C0730156C010069E7B0F114140BF9A0304730156C08061F9F36D114140CC7C073F710156C0DD79E2395B124140FB00A436710156C08CF50D4C6E12414025AE635C710156C03176C24B7012414092037635790156C0B454DE8E7012414086713788D60156C04DF38E5374124140F6D03E56F00156C04DF38E5374124140ADA580B4FF0156C0949F54FB7412414087156EF9480256C02E724F5777124140575D876A4A0256C0EFE53E390A124140F29716F5490256C05B5CE333D91141407590D783490256C0641D8EAED211414072A774B0FE0156C0641D8EAED2114140E9F17B9BFE0156C0B7EC10FFB01141400CC85EEFFE0156C072512D228A114140C93CF207030256C0C5ABAC6D8A114140F7729F1C050256C000AAB8718B1141402250FD83480256C08E0244C18C114140A983BC1E4C0256C07B0F971C77104140C84109336D0256C063B323D577104140681F2BF86D0256C0C154336B291041404FAC53E57B0256C08BDF14562A104140A0504F1F810256C09D4A06802A1041401781B1BE810256C0D7BD15890910414059DE550F980256C0605969520A104140F3FE3F4E980256C04C35B39602104140BEA3C684980256C0030473F4F80F4140E736E15E990256C004CAA65CE10F41409F70766B990256C0D158FB3BDB0F4140F566D47C950256C0F98381E7DE0F4140ABCDFFAB8E0256C0F7E7A221E30F4140BF081A33890256C0A1F14410E70F41407C60C77F810256C024456458C50F414070ECD973990256C0FA43334FAE0F41408157CB9D990256C068AD68739C0F4140519FE40E9B0256C055849B8C2A0F4140C2120F289B0256C0666A12BC210F4140D4635B069C0256C031AF230ED90E414079724D81CC0256C0E411DC48D90E4140685BCD3AE30256C025016A6AD90E41403FE257ACE10256C02BF52C08E50D41400C3CF71E2E0356C061360186E50D4140E9995E622C0356C08061F9F36D0D41401ABFF04A920356C0BE2F2E55690D414041EDB776A20356C0BAF605F4C20D4140014C1938A00356C0D6A71C93C50D4140A391CF2B9E0356C052616C21C80D41409D836742930356C05A8638D6C50D4140DC82A5BA800356C0FC36C478CD0D414040F7E5CC760356C0A9F92AF9D80D4140A2CF4719710356C07AFA08FCE10D4140EC3191D26C0356C027BD6F7CED0D41408D43FD2E6C0356C04A5F0839EF0D4140BE1589096A0356C06A317898F60D41404DD6A887680356C07898F6CDFD0D414085CD0017640356C0E692AAED260E4140EBC6BB23630356C0E277D32D3B0E4140E4D53906640356C0F146E6913F0E41405BECF659650356C0BA69334E430E4140E2E82ADD5D0356C0732B84D5580E4140A26131EA5A0356C0861BF0F9610E414062F4DC42570356C04B3ACAC16C0E4140BC934F8F6D0356C00EA0DFF76F0E41407956D28A6F0356C08080B56AD70E4140164ED2FC310356C03CF54883DB0E4140349BC761300356C081053065E00E41406B44300E2E0356C07B8159A1480F41402592E865140356C0BEA4315A470F41402592E865140356C0842BA0504F0F4140A44FABE80F0356C0F8DC09F65F0F41406A6803B0010356C0404F0306490F4140EEAEB321FF0256C0C1C58A1A4C0F4140ED0C535BEA0256C0158E2095620F4140A23F34F3E40256C078B7B244670F41403FFCFCF7E00256C0F8F9EFC16B0F4140982D5915E10256C08A73D4D1710F414086A8C29FE10256C0B01F6283850F41408C65FA25E20256C0F8F884ECBC0F41408C65FA25E20256C049B72572C10F4140E6AC4F39260356C0B85A272EC70F4140A6F10BAF240356C094BDA59C2F1041401213D4F02D0356C0F7031E1840104140541C075E2D0356C03D7C9928421041407EC68503210356C05587DC0C371041403274ECA0120356C00EBE30992A104140483140A2090356C077BB5E9A22104140CB0C1B65FD0256C0006E162F161041407C96E7C1DD0256C0FC8D76DCF00F41406403E962D30256C04485EAE6E20F41404CC11A67D30256C03FC7478B331041404CC11A67D30256C0228AC91B6010414067B62BF4C10256C0228AC91B6010414067B62BF4C10256C0274D83A279104140A9A27895B50256C0274D83A279104140A69BC420B00256C0683C11C47910414054FA0967B70256C0A2293BFDA0104140355CE49EAE0256C090BE49D3A0104140E2934E24980256C04489963C9E104140FC8BA031930256C07AFEB4519D10414073D6A71C930256C02B2D23F59E10414091EF52EA920256C07CB779E3A410414003B16CE6900256C014E7A8A3E31041408E058541990256C0A23F34F3E410414041D3122BA30256C0855AD3BCE3104140D0967329AE0256C0D74CBED9E6104140F75965A6B40256C0F0F96184F0104140BAF3C473B60256C076C58CF0F6104140C6A17E17B60256C0323A2009FB1041409DF4BEF1B50256C04D83A2790011414080290307B40256C0C100C28712114140D9740470B30256C0005471E316114140691B7FA2B20256C03FA7203F1B114140E065868DB20256C0456458C51B11414047E4BB94BA0256C02D08E57D1C1141408C2B2E8ECA0256C00A664CC11A114140CD0358E4D70256C06C3F19E3C3104140C5AA4198DB0256C0118C834BC7104140FE261422E00256C0CAFCA36FD2104140C2C073EFE10256C063EC8497E01041406CCA15DEE50256C0AE0AD462F0104140CBD58F4DF20256C0A5660FB402114140226E4E25030356C029965B5A0D114140C6866EF6070356C0847D3B8908114140BADBF5D2140356C01D91EF52EA1041406F4562821A0356C0C9E53FA4DF10414077D503E6210356C0C1525DC0CB1041408F1A13622E0356C0AF795567B5104140B9E177D32D0356C0A1630795B8104140A19FA9D72D0356C072A3C85A431141404E5FCFD72C0356C079944A7842114140FEEBDCB4190356C0EB353D28281141408D5BCCCF0D0356C098BED7101C114140019F1F46080356C09048DBF813114140D382177D050356C063601DC70F114140AF75A911FA0256C0B41EBE4C1411414056D636C5E30256C0ED80EB8A191141403FFCFCF7E00256C0FC6CE4BA29114140261B0FB6D80256C037DF88EE591141406F7D586FD40256C0FE4124438E1141406E1283C0CA0256C0D47ABFD18E1141409CC0745AB70256C0D47ABFD18E114140B4024356B70256C04224438EAD114140FBC8AD49B70256C0D53F8864C8114140B4024356B70256C0258FA7E5071241409D62D520CC0256C049658A39081241408DEF8B4B550356C09602D2FE07124140CADDE7F8680356C04A99D4D00612414092E52494BE0356C0B22E6EA30112414026FBE769C00356C0E1B20A9B01124140CC61F71DC30356C0CF471971011241409C14E63DCE0356C0B81FF0C0001241400F0A4AD1CA0356C0C6866EF60712414060915F3FC40356C0D26EF4311F1241401490F63FC00356C0E25AED612F12414040BFEFDFBC0356C0EB55647440124140B857E6ADBA0356C09DF2E8465812414036936FB6B90356C0008A91257312414036936FB6B90356C0CE52B29C841241403579CA6ABA0356C04759BF99981241401D1D5723BB0356C0D7BB3FDEAB1241409FE1CD1ABC0356C078D0ECBAB712414022A64412BD0356C08EAD6708C71241405C70067FBF0356C052B5DD04DF1241402DE92807B30356C0F2785A7EE0124140E6E8F17B9B0356C00839EFFFE31241407B4963B48E0356C012D731AEB812414069A7E672830356C0D21BEE23B7124140C136E2C96E0356C0A223B9FC871241402159C0046E0356C0EF8CB62A8912414019C91EA1660356C0D881734694124140D8D64FFF590356C08A01124DA01241406D6E4C4F580356C0B3942C27A11241402159C0046E0356C081E84999D41241402159C0046E0356C0AA471ADCD6124140CDAD1056630356C083BEF4F6E7124140957F2DAF5C0356C02D776682E1124140ADC1FBAA5C0356C0BDA59C2FF6124140289831056B0356C0D8D138D4EF124140F913950D6B0356C000FDBE7FF3124140217365506D0356C03672DD94F21241401FF12BD6700356C0FA28232E001341408507CDAE7B0356C0E38BF678211341402A711DE38A0356C06E14596B2813414076A6D0798D0356C05BB56B425A1341401D8F19A88C0356C0D7A205685B1341406000E143890356C0365A0EF45013414098DD9387850356C07FBF982D591341406B813D26520356C0312251685913414053E57B46220356C0E8D9ACFA5C134140300F99F2210356C0F71C588E90134140A759A0DD210356C03F1A4E999B1341403D25E7C41E0356C04BC8073D9B134140A2EA573A1F0356C0C32CB4739A134140438EAD67080356C0179E978A8D134140FCC401F4FB0256C000AAB8718B134140DA8AFD65F70256C0A65EB7088C1341407E52EDD3F10256C0488AC8B08A1341408BFD65F7E40256C0C45A7C0A80134140F0DC7BB8E40256C09A931799801341406B459BE3DC0256C095D05D1267134140753A90F5D40256C0A96917D34C134140861DC6A4BF0256C04412BD8C62134140BE654E97C50256C08D43FD2E6C134140118C834BC70256C0D844662E70134140C8772975C90256C020425C397B1341402BBB6070CD0256C056D4601A861341401BEF8E8CD50256C08ACA86359513414095F25A09DD0256C09C86A8C29F134140784485EAE60256C0506EDBF7A813414068ACFD9DED0256C096B20C71AC13414007228B34F10256C09A07B0C8AF1341406340F67AF70256C01A16A3AEB5134140D7BD1589090356C0A8E2C62DE613414067B27F9E060356C0282504ABEA134140889B53C9000356C0758E01D9EB134140B6662B2FF90256C0BD6E1118EB134140A0C03BF9F40256C0B7B1D991EA134140AC545051F50256C000C63368E81341407D1EA33CF30256C0C6FB71FBE513414096AE601BF10256C056F0DB10E31341401B295B24ED0256C08D9944BDE01341407C7F83F6EA0256C046ED7E15E013414066D993C0E60256C02EC55565DF13414091088D60E30256C00B23BDA8DD1341409947FE60E00256C09C1727BEDA13414000A94D9CDC0256C056D3F544D71341407F4C6BD3D80256C06551D845D1134140F37519FED30256C04CA4349BC7134140E9633E20D00256C0793BC269C1134140F3583332C80256C016C1FF56B21341409A75C6F7C50256C0607138F3AB1341404E0CC9C9C40256C099B67F65A5134140904946CEC20256C027BEDA519C134140CDAFE600C10256C00820B58993134140E50B5A48C00256C046EEE9EA8E134140CEFDD5E3BE0256C09E05A1BC8F134140CE177B2FBE0256C0D446753A90134140DEACC1FBAA0256C0520ABABDA4134140BA9F53909F0256C0DEA9807B9E134140C937DBDC980256C09E3F6D54A713414000E14389960256C020B6F468AA13414071546EA2960256C0AC72A1F2AF1341401266DAFE950256C02B33A5F5B7144140BD8C62B9A50256C0EA944737C21441402897C62FBC0256C0AD4B8DD0CF144140685BCD3AE30256C01EF98381E7144140F468AA27F30256C0672AC423F114414040DB6AD6190356C0847D3B890815414013252191B60356C04833164D671541405704FF5BC90356C0558330B77B1541409C340D8AE60356C0B77EFACF9A154140BED6A546E80356C0AA9CF6949C1541400B5D8940F50356C0884B8E3BA51541409F8CF161F60356C0AB21718FA5154140A12E52280B0456C04815C5ABAC1541400BB43BA4180456C04815C5ABAC15414074B4AA251D0456C05395B6B8C6154140359886E1230456C01F477364E515414021AB5B3D270456C05CE7DF2EFB154140996038D7300456C0D3BF2495291641408D98D9E7310456C0DFBE0E9C33164140251DE560360456C053591476511641405A441493370456C0F75AD07B631641404E7CB5A3380456C0849CF7FF711641400F000000629F008A910256C01D1B81785D134140629F008A910256C0AAEE91CD551341406876DD5B910256C048F949B54F134140B18A37328F0256C0842BA0504F134140D2C1FA3F870256C0D8EDB3CA4C134140BC0166BE830256C068AED3484B1341400377A04E790256C05322895E461341400A7F86376B0256C080B9162D40134140FA95CE87670256C00ABDFE243E13414002BB9A3C650256C07B6473D53C1341401B7FA2B2610256C0419AB1683A1341404DB9C2BB5C0256C0797764AC361341402AE3DF675C0256C0C7BC8E3864134140BBD05CA7910256C0145AD6FD63134140629F008A910256C01D1B81785D1341400D0000005BCCCF0D4D0256C02600FF942A134140FAF02C41460256C09F008A91251341402381069B3A0256C0D9791B9B1D134140363AE7A7380256C04B21904B1C134140DB8310902F0256C0D0CFD4EB16134140F1F274AE280256C0A9A44E401313414095EEAEB3210256C0D4D347E00F134140B282DF86180256C071AAB5300B134140B262B83A000256C0BF2A172AFF1241402AFBAE08FE0156C072C119FCFD124140D8BAD408FD0156C03830B95164134140AF40F4A44C0256C05549641F641341405BCCCF0D4D0256C02600FF942A134140090000007B681F2BF80056C0F3C64961DE13414007D15AD1E60056C04B598638D613414007D15AD1E60056C04C5299620E144140D5B0DF13EB0056C0410C74ED0B144140C780ECF5EE0056C096CE876709144140E8BAF083F30056C0F1811DFF05144140DA70581AF80056C0CF13CFD902144140AAECBB22F80056C0E1783E03EA1341407B681F2BF80056C0F3C64961DE1341400F0000004BAAB69BE00056C0A0E062450D0C4140081C0934D80056C0D52137C30D0C4140B75D68AED30056C0F1BBE9961D0C4140DC813AE5D10056C087BEBB95250C4140A04CA3C9C50056C00150C58D5B0C4140FD304278B40056C0B54E5C8E570C41405D876A4AB20056C0ADC1FBAA5C0C41408DEBDFF5990056C0656B7D91D00C41408D429259BD0056C06B28B517D10C41403A1F9E25C80056C08444DAC69F0C4140B8AE9811DE0056C0E50CC51D6F0C4140768BC058DF0056C0E868554B3A0C41401C5A643BDF0056C076A4FACE2F0C4140BD378600E00056C0A6EECA2E180C41404BAAB69BE00056C0A0E062450D0C414005000000E2A9471ADC0056C0EAE923F0870B41400F27309DD60056C09C4CDC2A880B4140F9669B1BD30056C0ABB35A608F0B41406CAD2F12DA0056C0E6E5B0FB8E0B4140E2A9471ADC0056C0EAE923F0870B4140',
        ]);

        DB::table('tax_areas')->insert([
            'name' => 'Hamilton Occupational Tax',
            'tax' => HamiltonOccupational::class,
            'governmental_unit_area_id' => $id,
        ]);
    }
}
