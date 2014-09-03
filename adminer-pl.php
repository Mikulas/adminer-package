<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.2
*/error_reporting(6135);$lc=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($lc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$qg=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($qg)$$W=$qg;}}@ini_set("mbstring.internal_encoding","8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0Ñ\0\n @\0¥CÑË\"\0`E„Q∏‡ˇá?¿tvM'îJd¡d\\åb0\0ƒ\"ô¿f”à§Ós5õœÁ—AùXPaJì0Ñ•ë8Ñ#RäT©ëz`à#.©«cÌX√˛»Ä?¿-\0°Im?†.´M∂Ä\0»Ø(Ãâ˝¿/(%å\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©ñ®aç'3I– d´¬!S±Êæ:4Áß+MdÂgØã¨«É°Óˆtô∞cëÜ£ı„È†b{èH(∆ì—ît1…)t⁄}F¶p0ôï8Ë\\82õDL>Ç9`'C°º€ó889§» éxQÿ˛\0Óe4ôÕQ òl¡≠P±øVâ≈bÒëóΩT4≤\\ûW/ôÊÈ’\nêÄ` 7\"hƒqπË4ZM6£T÷\r≠r\\ñ∂C{h€7\r”x67Œ©∫J á2.3êÂ9àKûÎ¢H¢,å!mî∆Üo\$„π.[\r&Ó#\$≤<¡àfÕ)èZ£\0=œr®è9√‹jŒ™J†Ë0´c,|Œ=ë√‚˘ΩÍö°Rs_6£Ñ›∑≠˚Ç·…ÌÄZ6£2Bæp\\-á1s2…“>éÉ X:\r‹∫ñ»3ªbö√ºÕ-8SLı¿Ìº…K.¸¥-‹“•\rH@ml·:¢Îµ;Æ˙˛¶ÓJ£0LR–2¥!Ëø´ÂAÍà∆2§	m˝—Ì0eI¡≠-:U\r¸„9‘ıMWLª0˚πGcJv2(ÎÎF9é`¬<áJÑ7+Àö~†çï}DJµΩHWÕSN÷«Ôe◊u]1Ã•(O‘L–™<l˛“R[u&™ÉH⁄3èvÚÄõ‹Uàt6∑√\$¡6‡ﬂ‡X\"ò<£ª}:Oã‰<3x≈O§8Û>†ÃÏÏCŒ⁄Ô1É¢Å’HR‚π’SñdÅ9™‡π%µU1ñSnÊa|.˜‘Å`Í†8£†∂:#Ä ‡CŒ2ã∏*[o·Ü4Xx˙.k\">∫°A™ÕO+,Ûx\\5tò—Ü÷Å`\\≈oûèçà%ßj⁄Ò]∏™n˚»\\È£h‹=éz»√™2\$®´÷F[NYè’Œ”RØ˝[IÙ±’⁄7≤®t“î∂˛7éÏ(·úÔÃWj0ˆÛ§Ê2v}›Ú;Ôk2å–Va–‡ªÒûr=¯ã(À„¢,≥õ\rÏÈj*∫B(RÓ2CñN\\åŒˇ≤9{a\0≈ï”VR4éB∏Ã/zÒnŒ6å£öá≠ÌÅ“(wÉs·sÌÚ∏«¥B[Û¯Mi#:#¯ØU·˛=M-~±ı‰„h)Øı	ÉpåCõ9/,–rÿ=ÉsëÉêò#BvŒäÅM èt=˜@ñhsÕÖÑ`k°Ûåp.=Së\"ŒÓjìÉ&5ƒué—p#Yçúüøá˙Y	‚∂~)∞s4Ÿ√1naV*ÊƒTS·Àqê§6Ü\"[LgÜ¨ë∆B\"|¿í2üéQ§:8∆®’ûÉ\rùVÉ∂4‡aj!º.&ñŒ√Éòo%0F9\"\$Òê≤D»π„â?'®ô2B¥Aﬂga≈kr≠'\$9\rÿ†6π`eœª diÙ˚2p\\õ\$ª“>Ç7Ò\n\\£ñ,°§ƒ9¢Á öIÇÃ+îööLnπ]†HHJú∑ ÂKLehA˘ö™@ˇµÿíÛ@ÜÃ⁄®d ΩÉ˘*ëH10ˆ–êf!‹∏7»1HAù`∞§4ã?ûã∆ZèUº w@(¥R(⁄œ∫T…2°©0Rÿ¯î·D`éÑëb˚ﬂqäqiÈ≈ËhV Íj[!πSìX˚:“\nü0F√L¬¢v…j€¶¡‘9¬ÂJÅfTx7Üz\\œÀõ˝Ü”É+R@“èd›^G¡\0.c¯`≤˛>NèÂ\\ΩF£sˆgñi∑\$ﬂØ%AÈÀ¥TI‡ï@v.ô\0ÃP≈+É cNEı—ßDﬁK∫v«Êe9äÊÊÎ≥Æ*uËVZ`¯⁄=~d¶∂•€De◊}fö”π\0∫≥€5œ¨πüf:jÑ`»ME1»ØE∂®ò CAÅé}∂öç)ê:ná¶U∞F‚YL¨≤Ωf?e+âà.ÎZQ‡ZCxz°‘£õ(`–Àã~Aà5ñ[«yJ1;Ω÷}›NSùL	Ÿ)ê•ñaøãŒ’Sﬁè¿c©ï9Ö¥±2Êmt+ï⁄bﬂcRTôw|•‹7+9˝\\0Éô¬SA≥á Ë·∫g∂ÿü:‘TÒ.'ù-˚bãÙq¶2–9cúP†S˚H÷π¶#ï¸„1©¿´•öØ⁄Í≈gTî‘Qµûi÷º]uÒé(v`ÿ´Î’\r‡Ó>1⁄Àkè~-_ËÎ,ú¨£ÒÒ¿ò·◊0&Cò≥\$¶∆¸<0ÚÍà{•ï∫Üg0ˆ·÷≤ÿ∑ìÔ%´B˙Í“˛v2Ûó.Ωs™b“v‡ªhëdù„Bw˙uﬁ=ãcﬁC÷Eá@>á–");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:õågCIº‹\n:ÃÊsaîPi2\nOgc	»e6LÜÛ‘⁄e7∆s)–ã\rè»HGíIí∆∆3aÑÊs'c„—D i6úNå£—Ëú—2H„Ò8úuF§RÖ#≥îîÍr7á#©îv}Ä@†ê`Qåﬁo5öa‘Iú‹,2O'8îR-q:PÕ∆S∏(àaºä*wÉ(∏Á%ø‡pí<F)‹nx8‰zA\"≥Z-C€e∏V'àßÉÅ¶™s¢‰q’˚;NFì1‰≠≤9ÎGºÕ¶'0ô\r¶õŸ»ø±9n`√—ÄúX1©›ÅG3Ã‡tçee9äÆ:NeÌä˝N±–OSÚz¯cëåzlé`5‚„Å»ﬂ	≥3‚Òyﬂ¸8.ä\r„êŒπP‹˙\rÉ@ç£Æÿ\\1\r„ Û\0Ç@2j8ÿó=.∫¶∞ -r»√°®¨0çäËQ®Íä∫hƒbºåÅÏ`Å¿éª^9ãq⁄E!£ í7)#¿∫™* ¿Q∆»ã\0äÿ“1´»Ê\"ëh >Éÿ˙∞––∆⁄-C \"í‰XÆáS`\\ºè§F÷¨h8‡ä≤‚†¬3ß£`X:OÒö,™á´⁄˙)£8ä“<BN–É;>9¡8“Ûácº<á*¨Ê2éc•9œÈ >¢H¿zôOj™B'B™˙™éä∫≤å5ë,ÚÑPÏb5–45Ä÷3Ïˇ@ÖÅ:∑N+iöjõ’J¢ü⁄ä\\™é	®∆á·@º>ã†∆4Xr(QrèÅ RŸ° dÛÖu=œtÕA8A{åc\\äß)≥Ω|◊ÅC4\n6ÿWÌò7(V4l6µ	ñ9\r°vÀéaﬁ&:CKòç!Ê-°£pŒ:\r\0V¢M†QÜ#ıK@º\0“.ÖŸÄÀVy∑õ¶wE˚\"’„fÉ|jﬁbgŸºF>ƒã	BHnñ›∫Z¢‘B≤B∆\$…F0ïœ√=™ÒkC-9ç„∏˛C¥‰âOîç9^Z3\r«rÖ7‡÷0Í®uŸw˘ïM∏g˘≈∞†’v2∂‘qI∞ºÛ≤ÏˆpÂµ¿∏‰h5c„Py«ÖŸ.Êç[∞˜•hV'-çY¿Ã”T∞Ë”Ö›õí:v–˛ü®O&&6ä®Zó·»Œª	rn˚∂ï•æBc£o⁄ Õ0˙MÉ„£§≤xz]‘åô’çÍ«!ÄvÈdz/sÉ‚€CåÌë¶=ıd9KπeVXŸs:pÃ—à8ñr√A0&iÆ)÷§R\$˙Y_VÈ4¨æÖz˜»;ia∞4∞† lI,&êt5¿¯8øI‰#_©ÄásàF√ª`\niE<¶'—Jy0@∏4á0Ü√a5ò>¬3Ã∫®@ƒï0DÜæœkŒ2ÍuOÇÄB¬Ò[Äº4¿2d•V´<e—`6ê¯C·ƒ	d>'EwAL[ã©iSEıR√[∫ßÅÂ\räﬂê†x<·Ì\\+¢ø xxÉpêû¬\0ËË;ÖA¨ΩpÿˆCÍÆV	ÒY´Rø&ö3∫v®y6 'y)xíjµÍ@‘rIÙÆzhÅBp◊IëífØ∫≈Ü±J˘“Zrù§<…\"\$T∂ë¶^H»Û,3ÊêêPØ≤Ëúê 8fÅ,2áò¶‚âÇp ËNﬂsÊ|Ú∏ûNUÁsCMØ†≤∫t_∞nça–‘,íBŸVbŒp4Û∂§¸€\$w#Áä5%ï8tõÒƒ‡Ùœ¸”ùmØ‡PŸ¯˛Ÿ3˝nØ˝éœ§≤hÛ6Il∫èNrÜQ	î“e‘Eì2⁄Lf'dóÃ*è\":YM #ELz†—h\0%S≠¢DH1–◊!ÍS&≥Ÿ[5	3%√({®»Â^<â…(HÅ¥6X+Œ\"h—W<∏íÛ_êtz∏à9≠Zôuh¨ÖÄîóf^»ã=h”¯:+Bìq≈	P&Ñ¬ä	Épba¿ö\nÆaÏà±V2«W†Ÿöä& ·πZÖ\0ﬁna”›≠dX8Zv>ßùπî–™áb\nCòSJröáªZ‡åW%`[¯/hÄR{\$í-ÖÇ™Åe ≤BGL¯zNBp(∫@¶›∞˜sÉ(fdÚÈG‡bS5“57i?ÜPZt\nzú>å˘`]x0=øJcrRBy»Yì]c_#¢Sìï-‰/Â\0√\n®l– aﬁÉ1áÅ2á@WÖ∞∆\n‰AîÏ#a,1Ö¬¯dí‚0» %aÜèd5ÄÃ|πE∂∆Â¿ŸkBØÔ¯OK+Ã™PÛç~6«0•êﬂeØÍ5á!2@§√∏(vdb¿Â∑q.É@ad≈˛õ¥ÑãRCπàíe¨”)X:#cYæZ.|ÿcﬂZ4>ÿÁ/&‹P≠Vë∏¶2ï∆wûH≤B5ÓÉWÁBpù<p—Œ'<Eüª ö*ê:zFD¥TgHÍR™\\∂√*›+}ºÖ∞¬C–]Ål.@Vº8\$¿≈NjÄõ:Ic·ˆíœΩñ4kï°^Ö˙<ß)˛∆”∏¬\0StÄ∆£•!olju∏∑óÆ÷ÀZkmqÆµÂv⁄€qú%“∫QM€€Æ-jÔYù3˝áﬂ&0°î6ÔIv{{◊ ¸ë‡‹C}∏∂Jz0€Vt”ÿnb-∏l©˘§ÕìÃZWKÄ≠2»x◊⁄m—’F>\nCsÖéàøàÍn„Cﬂ!ÂÀM∆0O…√rìΩ/á∆h2äBÜdUs≤˛é ≠‰ñÉ◊\"XKÅ>}√@¥√Ù@–ß	˜4ﬁ•7D\0†»C∑Ÿ'oGÏÕ\"o˙¯v„îoMvñ„Hy%\$Fù§çv\nUÇ¡zBãê¥ªói)›∫måQ!\"¥º\n;Ï¶‡\0§¢M*öC\rOj∞¢vÓFDºO‡	π/(íÑ¸ÀªÛyÉ;À¿˚ﬂg/Å}‰t9˙l¢Ö¥‹0¿7L∏Bñ©qƒU…‡xì‹úM¡@1Ù‹5…ô[\rû o¸Ö¸a˘I(Äƒ¸(ìÛ˛ç/ ¬ÓiaÇd€õ∞'Ôƒí>°>`&Ô0“6ö8ﬂ‰#M7Ô|Ø‡\\%Hóı\$MT´À∆\\˜\rœÚ˜èÏx`∑\0qIîDb0≥Ù}Ê(0¿ÍCÜTƒFê´àí…1≤™ãéWÔ`˙	î¿éˇO|kÔÙ˙»ûä*‚¡ol3îˆPTõh¸@Ú˚∞èd4(É«p*Ëãè‰éeHp\$OÊxl\$¢äÊ™Ã@÷44\nÄ“#ÓTÃÀ\0hñ\$PôŒ∏†X˚ã¯´‚H†“ ÜLˆOiËÛ‡\\˚j(Ähg)∫˚\"à`p˚Øê `‰˘o∆˚œê¸/“¸¶æ¸‡¬ˆOw∞O	èÔà¯√§«ãx¢p·O§∞Í)ÇˆN´tj™\$`ÍÉÎn∑+wi\"≈]Ìˆ>â8∞•jH1Rd Vo0õË∞ãOÁ®ÙŸ†RLh±iQlUêÇã ‰¡ÓVéŒŒ˚±Üñ/≈\$Ä¥Çí¥ÀP7Q],R ªf\\Ò¶V±™¥´O\r1µÒºgÜ\$2Ø[Ë(4V…¨¯i≥œ…0ÿÀjöÂö8ÉCÕâ\nb‹IãÜ+1Ê+8+M\rÁÖÃ÷Ãd†á%å®ÑÖ\0⁄H(h€ÕR‹ø≠pÍCœÚ.FÔEƒÑåF•§\n-†ö √é‡®*˙º#à®Ú`6`œ&rjÄ–•\nn¿€&ílt‡˙•¢™\r¨í†ÇJ£f˜(‡t∆PSã.Æ=%Úã&2)Ñ√ò¶…˜(“≈&Ú{&R”)L~`Ä¬\rRhÆ·ÑX\rÄƒ’`÷.\0%å*†‚+•J'à\\I\rê¨@Ë00äÂS	ì1ÄÀ1∆f t\nÜ\0\\#\\6 ∞	‡ƒ\rDo2¯S@ ìE4ìL cƒ	®:>¿Ê¬‚E2k\nÄ†<‡ueX¡s0DÏös0\$@ﬁCOjÒ˙)Ä†	‡¶\nÜ\0‡ã:\0RíÍÆ∆/˝8ìÑ0¬K1≥Ñ	 )-,Ë~\$#.†®èÜ‘Y≠˙[®:æÆR\0Z?¿ÓßÜ≤Í\$Ã) …+SÉ≥ºì¡≥ƒ8#d<@∞¥\nT§ä¨G+%õ7´2”äSîT©h;§,T£ŒÃ∆í∞Ã7f]C\"ECÄÛ √à.ÚÚaTLi‰ô8≥ºIîPë·!`AD“\$,í„&àfäƒ¨íÈ\"%!Ù~äPLÀF*êL∆C\0∑ç;LEÉƒ<@WJ#NµÆ\$†®˝√>.÷Fèû„¬;M@¨*“ü/ÖoüÎ@‡e~HKòu¿»∫âòç¿X‚*\r ó∞èöë%é,¡q@˘Iˆ˝§ÍOÄ√¶fâJÛIH˛ÊL∞¡’1–ªSŒaâ™o\0+I S9P*ñò\$i,àEä¶M£à≥ki/‹™o›T\0∏Â(V∆ôŒ∫®ä‹k„™ÚÚÈ® ˝¬òç’,`\rû›RŒ œûˆîDÉ›IıU©≥:Ÿ	ØU130Ê†dÔ…@ÛQÔR\n\rêmÒèÛWK6K±†{XƒXÇN∫∑ıLÓ	ÏB\$Æ∫›≈≠SoESØ¬L4TdÎ<‚Ú\$6-_√ãL\$Ídä»ÃhÖÃ_(rfe—IV.Ñc.≈∆PΩ‡hÄd˚É>	¡h›/Ï∞5\0bœ\$º’\rT’Ä_X`^‡Yi	g´É[≤[vz¨ˆc2ño!Ä∏†`\0Ç9∂:Ïg,sÑ°ä+\0–Fo;&]YdÜÜÉ_/ÏÓÈ&Ωm®r>uö1¿§Ù¢ßaL«(“û\nÄﬁ¥√àé¨e¬B˘Yà82‡≥`oÇHV§Œ‡\\ÄÎ>Ë06ˆŒ‡eo√cpõd& ∑:√@äI\$#≈u …tê9◊J*vt∑:çŒFó∂=`8ﬁ÷/=Ì˛îÇ¶ˆù—‹ˇ∆ç¬àTè4íÁ>KÓπ„>≈'?Öj\n†§	(~\r¥º2ËÀWB\"3‚ãi4GI‘K2ÛªC≈r.ç´,ˆØKÖIK√tVE,ÌGb‚ ÇJ}(∂ØbÔi˜Û|XnÑn5ÙU Eê¥¯;÷Í ◊]Åf3mc¥â\$ÖmÓt∂‰BX.æ÷Ó/6Û\"◊7o≤ú67\\<LÌaD§s`X™[bFkÑbIÅƒnÙ“ﬁ¨r	Äﬁ8.*†P XÉê+àxzÎÎzk0“!£8≥WyW£§øöøl#Wxû±√‡8*\$¡k\"L#)≤ü*\$≠*Éƒø1y“ÂIKÒ|’ΩI÷ŸlTÈÊ–†f‘Lò¨V	ã«~K& ◊Í˝Œªjf?èóÈL›hRDoE…\0GFVèçãD7vßi≥Åg†yàê”ã—`VQd∞¯¿6.à0´\0ˆ¬8§ø’e¿÷†Vãy áKΩòdΩ†Wg‰∆x´_¯Òw¢Çê É/ ≤[ÒÎÇ“\nÏπSÂ\\Yë8˘ï8‰ˇ>OM™≥Ïƒ[‡ÿP&p*ß\"&†:@‘∑\0– „Ó=„‚O+h>‚8àˆ?£˛@2vD@ŒÚPÇ`^4^B†ÛáÉÇcÉqÉ]ú`Áú¢œ8iÑ8â)ç¯>µ†Îy\nbß¢mP##∆∆eH]J4-Nlç¿^bo£⁄zk¬∫\r°Ó3˙V&zJÙ*kÓ*Ïé1lbç<cŒ›Ñ199xZ'qƒB;;µûÆ#≈®mz:£‘Hc€•Y…úÃ<˙^\r@Á\nöò=b\rã\$siF]\\®c•b%•˙˙&5ı¿E\nj\r¿÷TvU¿D¥ãû6B™@D4_.§∂`‚\rÄøØ ∞;˜:˚ØÌŸ™⁄¯0⁄˛√[∞©/±…/üq±\"çB†t?Çí“å.z˛&`ﬁ\r†^B\0^πÚéÂ%&A#^?b@‡H˘„@:@‡˚(™—1{7ûb∑‡Ë„O¥\$\n@‰ yˆ{X √˜}à;ügQúõ∞√È∂⁄˛˚k∞L5±@—∫;'∫˚€ë∫ÉÙ◊;eπ˚±ªΩ∞{Ω#>+ÇC\nÎ‹,¿‹v`Œªbõ´Ó≠ F‡™{Ï◊å¨\0]•`ô°ó›¨ãp! €¨‹\rª\\≠÷©•‚é‡–Éú(ÄæR∏PV£ùÜ†záCs∆.yF,√D:ºo…´ÑäÇÕ{¬/(‚ÂQ}ƒ4QE\\d‘≥8¿›´òq¶NîkCß∑Ç\$_«fû 'ÜÕ∏ÀF|Æ~≠0m¿y	ñÃ»Û\0∆Ä‘o<UißG\\¥Ij¨ :@\nÄ‰\n%«»Î‡ÁéèÚ@Ú≥:@'úŸéï¶˝—IÃ¸”+W2Ë¶vLXr „‡„àÉf¿@…–„dq√íYb†ÏdY¶“†∂¶£-,m∂~m„í‰kﬂÀV9(ÁÇxÔ:ˇ\r À∆Üg“#êÛâÓ)Çé ¢îæ<ì¬˝’-`ÓˆØıq3Üe’0’Î}É›âcÿÏ_i∫è/ù]Q6(ÛÏ4á ÿB\$ÖçCÿ⁄ñ‹ ÿé∫<àÄ!§s⁄É´‹∑\0≤êj˝⁄M„\np&T≠,\0Y€ÑÏ3‡∏<≈)˝]ﬁ=Ê+hÀﬂÿ:\r◊\\*}ºù¨¥]≤!›ÒñΩÓçÏ<:ì‡ù“à=÷G^/‹“WQ‰{mö“ª‡uK°˜E·Ø1¶x¥Bg®¿À·®wy@OﬂcA!ÚÚqp¡4•ı⁄y'!ﬂ–òbÁÁ”:c›6d[' Ì?IgÎﬁ¢àˇIX‘∆ıâxÒÔ\"Ç^m‰µ0=–,§F¸òÕ\\NÕßÜX¬–'ñîÿ§≤5ô¶∂¬Ÿ™¶ÙÀ j8•7sÈm£Ì®\rbí É§H€|∂èø„ﬁæÿïjíú≠\n”ﬂ˝∆‘©*~‡Ÿvƒ“DÑ°‰i∏	+Îä à5≈Ëéÿ‰\rKÔ'U®h‘àrÓˇB#/ﬁRFNª(‡Ë\\‡zåÖ<6C\neÉÚÄ∫p£FF?j\$GÃ¡p\\˛—Ûﬂf\r˘`–`b£?8‡∫ÙË:DªÚf(•˙ü¨‰ª˚-€ﬁ?4—Míá‰ZÂ\0ÊõËÆ	Äí	`äÄ§≥§\0°’ELút`Å	«A„˝ÏÑ\0	th!Jà\n∏G‡Äî<„<H{◊ﬁDS2 	ÄK°{KÕ÷™\$˜È>Ï«;}¸\0\\2¿∞ø	¯Äx~2F…‘Gí2Ñ¿gqq¬V8`ÄÅ–lCP@¿¯˘≈ÀÅ}æKô‚U†ä@>;»\rÆ3 ~Fyœ=}˚ä∏~xãü¢søà3·˘2v<V£ú	\0?\$	Ã p•Ö4OÂÎ-†?3ıyÕ!≤ÛÒ \\í‚+@ê\rèÎ!xhﬂ‹˙1û@uÎÄ}z¡‰†?\0â9H,§@\\Iü®>	\"–%8î _1®\$<-_I/4§2≤Äú¥ê}\$ ∞¶\00U†EÉÇü‡¢ÄπvFX!¸F4Î`§≤`/ r*`T∞%–1KÕH\\¬àœÅ|R`bÄ“Æ8∏fÒ˚∞œ¿Â\0”Ó	Ã\r‡U7∞Bl¯h H≤OÇùÜ\0003:Ü˝xt1<%≥o≤®o `5¿\0¿ï£(°°\rGgH´Ÿåﬁ,cQôÙ‘ÓÚáΩVígB-ò†7\\sú‹ñfÛ7q#éP¯g¿∂“ÏÆ98‰¸*ö{z'ëåî@ÃG_\"√’q&\0B(c—;yßÄZ–ã\"·Å8\n@¿àö¿≠¯—,{Îº ºÈ‰æÇHÄcà1ÂÅá^%´1ëaß»°ƒê1œÁZ<Vâxz4<‰	r·‘Lﬁ\$Íí\rUÑ*t+B«@øÖ˙ß]9ƒZ`∞˝0	,k,t\rDEÿË(6:2•hÄsep¿b8ΩÄTë}I;Èá>:—≈—w#©¯⁄JßAÿ\$¢g8ÜhFc80BÂÒ–ªÖËa~\"»øÑ4ÑPîÄfê*(Œ∆|·êîçŒ‚Ö8¢∏…·X\$<lRÄ¬¥3ç∞cèÛ„`BH\0=äålBº“:Ωîœ^f>ä\$eC+`z]Ã∞\$U§£∏è1÷∏ëHg∏ZÑÖ,ë‹*;÷ ±hôã¨÷–ù‡ôXêƒËq” \0`Óuÿ·øÑ€ı\\@\nÒ)ƒﬁÄ(èËŒÃô©\0/åÓ\0ëû›…¬ÄGQ“Éõ\\qû◊\$h¿ö–ÖTàhüÕéC ú\\Ï«4§á[m!s,.vD'e|∏oﬂ28ï9PR±K;ä\0‰Nj °F=∂“8åUÖ¿Én\0¥ .~∞ª¿XáÑHxDé	∞§g\$¬	ÿ!£%Ïáñ§lâ¥‹“J◊x¨â‰Æy0—“Z6s›TI…,€Ü{±¶§f˙°ˇå∫IÔÖ'@pú‚+4;pB\" ‰””ŒÅ‚K†síX––˘¯ÛÅˆOÚt¥á§xY\rÊH\0000íëX/	\$‡÷pI˚P6álÖ~2jæﬁ@99õe“ãä°ª÷‘‚©MôÑ`_ï eMYT¡ﬁF“Ñu; =\$Ûnûë≈\n#i◊·ˆ-X~Ñ:X\ntËU\rêäÙÄ»ÆE·(C§,√F\"}·Hµ<û™•E˜≠>XA\$VÎ\$eäéÅìK\"9K√'Ÿúä[-ÙwÖ~A%„8seúxòxo.#◊·Û,bâ\n1ÑØ/éîuåg◊ÔµÏa.é§DÊ@)H∂ïôr|+,NEöu \0ƒf}àÃå\rç√@2|¨°3ÍÌ,π	h†´\$+õ\rTê¢ñê/o5zÛ8	Ñ`:'≠g\\ó¸∫\0œ3©ëÀ≠§\0ëÃr 'Å;⁄h¬⁄àP\r¢´¯*À)=í0(–˝§eÁ†ö:N…àËÜí8?ã‹ÆÂ.<hP¢,∂gÏ´æRL)‡ïnÁ&¨òs@>Ë∏fŸ6·ÜM¿ãr®?p´Ñ.êz	!%õä/¶Á54 ÑÙ\r”Ç0‘·U37—V≈jÚØ^ÑŒ&ÄÉ¿Ç}CÀﬁÄALdrÂ–2ƒZVR¥/©@È6ìıNe°:Ç®‹ú1IÖëñkO‘E•jØàåª˝Ñ≠ƒ¢	167.N‘‡[»MDÛíÃ∫ímfaí•86ŒN”{?§ﬂaR˜XÖ\$Á%>E¡4g?< -Ñ7!n,Ú≤z Iprûb ¢6Å0Ü åF(Wd„á=h5A÷S€WDÁâ—>\0ÉNë∆ eü0ıµ#òy ‚\0û»TéÄÎhÁô)#(2ÒÊJÇVÆÃ}ìÜ);ƒ‚ß8IÍ8‘Üâ+ñQüãjätP¢\\ÔÀ<‰N¶\rù,rÉœcê	Á†ÿ}>h\"œ›âC˙!ÙÔ˜RäJ‚ô¢Fg∞¿*iñà •ÊFo\"ôdxïÜ!2LD)¥U= ◊?Q§âµxHe>¶=)ñ.Tá≥/ôâ†ÉAC˙4Ã∏&≥0”èRwF˘c¨∑8ôÏ>Ë&Ä!¥“‘f8|¬(~äÛ≈¢\ndG£ÃJLËµqº≠ÄtHk»õê\" )-\rÃ≠5√•íC&}—rã¥Y§˙—å¥Üºã6ã\0+§≠’ë*8—ÆéaE!o‘<“ƒ≤t≥ÖîzsúL\r“DhﬂﬁÄ\$∫5çÚ!+òx°ÙüàØîK2#i¿≥Ê®Èô´ptèJPÎ«%&)∞…êm	ˇLÒ!(Ä©ÙP }◊ü‘ˆí¥ˆ\nÅú	('K+b~(ë+¡≈YÄ\0x∆ı∂40œßÎ \\Ç*fP÷v‰¸(,°“Laôe`,´≠YÑ+^Üº%r…2#m+QêÉ	˘õ¿/ê@úù >?—9uöà±B¶é◊ÔÄû£ËcÛˆÖ•Nêùó± U4uHß‚¬h0ÿJBFé¨¢sóZ9nlp:pÙjeQ˙û\0µ“¢dûULƒÛS‡2”≤Å≥¸{UÉ_.£“ñ™A¶Xêx≤Ö\0>IïUP>{êŸ°ñˆläDû™Æ#∏úòhP\n¥UM»îd^¿âg.32KÙØ`òB⁄ËË^¢Pˇ‹@´.RJYµc1Õ]≈ñgŸ	‘6≠fÉ©°IÓ˘◊…~©í,{ë§»r˜Sè9P”î‹˘Ø•T∫◊\$Åhl´~≥@bk£^öñJ9íîpçáYa@V`†F=%⁄~‰jø=ÇÇ§¨Lt®/X·„-≈iUì3’Y+Å÷f≠R¨Ïá+@#y÷éúU¶Ωj>i∑‘÷±MoØî{Î´¡(˙L◊,f≥eaπÕw[öˆ˛J5D6˙üiÉkVäör-{ô>ÎÃÂGºW™\\\$¸Øk·+_)\nRãÇæUÙ70ºkÓºSSU‘+ı◊Æ^´å ‰ôFæR…É˘ +∞ß¥RéŒIÉ\rYIˇYs7∫Rúï‚¶£Ê\$Ju—ùE‘Ir1(‰f∂pı´‘∂#âÇÚƒ%cê˙3íıüù\r)àXFí#8QÆ\0∫±ùDfU°C±H@ª\$®\r·ƒ2°ÃJ˘GBƒßµ¨≈ólW]Kë´—¬%â!)brËó>À∆r}aI+d·ÉÃn!⁄òãÄ]eQfŸ^#ÖvF‰ö:ıàﬁ®B8íúp¿f‚è÷\0Ùœ±85ü‚\$ä˘’≤ªµn¥≈üéqcKWê m;ì\\§sjÈŸIh¶‰Ø≠Öç”j[IZ>8cÍ{`v-O`:“´\\›å\r6“Ql£[;)ÿP÷ˆ∂6Çˇù‡okXƒY÷3∞˙éqFs/◊EÑQf@`\$é¿<¬›òA‘BQŒp§6èëÉ.CÅlŒÛ‰[∏\r\0:>D¡è¶ì0á`Wë√C˙‚◊CÅ£¨√F&–Êao–µÑ7\0\"√frúv`ó\"‹Å‡\rπ√02FªNﬂ\$~ÍNJ˛Tròg]i6ÇxAÒi\\\$äí@√¿u‘É‹ù≥ÀÜ•¬–or‡6ùtÌ≈S∑Õ™+Jvö\0*ñ AÎÈlxv”ªX˝mgvu‰Í◊QY}™ÍU;‰©óN\nD¡Öœn1ﬂ.ò4∫Ö0πÈˇ\n}◊Ëv‚BR¢o‰“óÅé\0[ª@–z–.Ä¸m7sª®Œ.Ô@@]“Í¨õπänbÀáŒ¥<c~ÿç.J@Äı”„ÕﬂHx&ŸàÅxπ‡.â¿À\0[ss⁄ﬁÈga 1æ»¸vïŒõÏ\"Wèºä [∂ (K`º/‚m„¿RÈ˚ÀQ¶Ò·Ô0ËC>›|g¿;8xÆÅNSn—•d√(ºïÎ/~÷Ÿﬁ8√´íΩrQ¨»Ôk«Ä¥πÔ‚Ω∫œÔPc##Ü˜wèïÛÔÇi0–ÕÓ7≈=Ò⁄y|£%ˆ∑”ø2∫\n*ìµ å¸àﬂ8}-®b”K¨^ô∑ñªUÊ@]Ä{ŒD÷ÛÙúis¿Ÿ1òV\re8˜ëH8doÖxt*ßÁ0N:‰∞+}˚Åï›xΩ©ØLw[Ù^ì°I?ŒX˜{3lUJ‚∂πı˚/›|ñçﬁ∞ŒÌıG\0z‘ÉÄ«@p^e˝@˚ÉK›tù¶]Î!CkË\0Ô	9πçıoaÑA‡w	˜¿¬ï˛Kß®>&QW=¬M…Ø[nâ\nê¿Æ|t{€ò·!á\\π#B·5'·¶„óIŸ`nBA˚ë›Ï¥ÒπÌ\\÷\$J:π*pıI⁄zÄ…rï∆\0∂Ê˜ãƒ}Õ.X.	/\r7Ñï« 0âS{B)L·ƒã=‹ãNj	zC(gœ¯S¿W}P˚ˆÓ!\rªöúÕÿ£Ì≠l˚Ä/≈ ÷√>H,WÜªx±Q∂ ÑÅãgÍ‚„Xª≈ÌÜ\"%ÏØm{´ﬂ]c_^DÀ∑^9°óˇ®F\0X„TÎâ•ˆ≠/ìIÿ§—fTLD`^Îı£åÜÙ-A‚gêq[áWäLÄb_ §¿Ê¿∏x†");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\0;";break;case"cross.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\0\0;";break;case"up.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\0«Ú\0;";break;case"down.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\0«Ú\0;";break;case"arrow.gif":echo"GIF89a\0\n\0Ä\0\0ÄÄÄˇˇˇ!˘\0\0\0,\0\0\0\0\0\n\0\0Çiñ±ãûî™”≤ﬁª\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($s){$fd=substr($s,-1);return
str_replace($fd.$fd,$fd,substr($s,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($Ke,$lc=false){if(get_magic_quotes_gpc()){while(list($w,$W)=each($Ke)){foreach($W
as$Yc=>$V){unset($Ke[$w][$Yc]);if(is_array($V)){$Ke[$w][stripslashes($Yc)]=$V;$Ke[]=&$Ke[$w][stripslashes($Yc)];}else$Ke[$w][stripslashes($Yc)]=($lc?$V:stripslashes($V));}}}}function
bracket_escape($s,$Ba=false){static$cg=array(':'=>':1',']'=>':2','['=>':3');return
strtr($s,($Ba?array_flip($cg):$cg));}function
h($N){return
htmlspecialchars(str_replace("\0","",$N),ENT_QUOTES);}function
nbsp($N){return(trim($N)!=""?h($N):"&nbsp;");}function
nl_br($N){return
str_replace("\n","<br>",$N);}function
checkbox($A,$X,$Oa,$dd="",$Wd="",$Xc=false){static$r=0;$r++;$H="<input type='checkbox' name='$A' value='".h($X)."'".($Oa?" checked":"").($Wd?' onclick="'.h($Wd).'"':'').($Xc?" class='jsonly'":"")." id='checkbox-$r'>";return($dd!=""?"<label for='checkbox-$r'>$H".h($dd)."</label>":$H);}function
optionlist($ae,$nf=null,$wg=false){$H="";foreach($ae
as$Yc=>$V){$be=array($Yc=>$V);if(is_array($V)){$H.='<optgroup label="'.h($Yc).'">';$be=$V;}foreach($be
as$w=>$W)$H.='<option'.($wg||is_string($w)?' value="'.h($w).'"':'').(($wg||is_string($w)?(string)$w:$W)===$nf?' selected':'').'>'.h($W);if(is_array($V))$H.='</optgroup>';}return$H;}function
html_select($A,$ae,$X="",$Vd=true){if($Vd)return"<select name='".h($A)."'".(is_string($Vd)?' onchange="'.h($Vd).'"':"").">".optionlist($ae,$X)."</select>";$H="";foreach($ae
as$w=>$W)$H.="<label><input type='radio' name='".h($A)."' value='".h($w)."'".($w==$X?" checked":"").">".h($W)."</label>";return$H;}function
confirm($hb=""){return" onclick=\"return confirm('".'Czy jeste≈õ pewien?'.($hb?" (' + $hb + ')":"")."');\"";}function
print_fieldset($r,$kd,$Cg=false,$Wd=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Wd)."return !toggle('fieldset-$r');\">$kd</a></legend><div id='fieldset-$r'".($Cg?"":" class='hidden'").">\n";}function
bold($Ia){return($Ia?" class='active'":"");}function
odd($H=' class="odd"'){static$q=0;if(!$H)$q=-1;return($q++%2?$H:'');}function
js_escape($N){return
addcslashes($N,"\r\n'\\/");}function
json_row($w,$W=null){static$mc=true;if($mc)echo"{";if($w!=""){echo($mc?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\").'": '.($W!==null?'"'.addcslashes($W,"\r\n\"\\").'"':'undefined');$mc=false;}else{echo"\n}\n";$mc=true;}}function
ini_bool($Nc){$W=ini_get($Nc);return(eregi('^(on|true|yes)$',$W)||(int)$W);}function
sid(){static$H;if($H===null)$H=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$H;}function
q($N){global$h;return$h->quote($N);}function
get_vals($F,$f=0){global$h;$H=array();$G=$h->query($F);if(is_object($G)){while($I=$G->fetch_row())$H[]=$I[$f];}return$H;}function
get_key_vals($F,$i=null){global$h;if(!is_object($i))$i=$h;$H=array();$G=$i->query($F);if(is_object($G)){while($I=$G->fetch_row())$H[$I[0]]=$I[1];}return$H;}function
get_rows($F,$i=null,$l="<p class='error'>"){global$h;$db=(is_object($i)?$i:$h);$H=array();$G=$db->query($F);if(is_object($G)){while($I=$G->fetch_assoc())$H[]=$I;}elseif(!$G&&!is_object($i)&&$l&&defined("PAGE_HEADER"))echo$l.error()."\n";return$H;}function
unique_array($I,$u){foreach($u
as$t){if(ereg("PRIMARY|UNIQUE",$t["type"])){$H=array();foreach($t["columns"]as$w){if(!isset($I[$w]))continue
2;$H[$w]=$I[$w];}return$H;}}$H=array();foreach($I
as$w=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$H[$w]=$W;}return$H;}function
where($Z,$n=array()){global$v;$H=array();foreach((array)$Z["where"]as$w=>$W)$H[]=idf_escape(bracket_escape($w,1)).(($v=="sql"&&ereg('\\.',$W))||$v=="mssql"?" LIKE ".exact_value(addcslashes($W,"%_\\")):" = ".unconvert_field($n[$w],exact_value($W)));foreach((array)$Z["null"]as$w)$H[]=idf_escape($w)." IS NULL";return
implode(" AND ",$H);}function
where_check($W,$n=array()){parse_str($W,$Na);remove_slashes(array(&$Na));return
where($Na,$n);}function
where_link($q,$f,$X,$Xd="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($f)."&where%5B$q%5D%5Bop%5D=".urlencode(($X!==null?$Xd:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($X);}function
cookie($A,$X){global$ba;$pe=array($A,(ereg("\n",$X)?"":$X),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$pe[]=true;return
call_user_func_array('setcookie',$pe);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$W){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($Ab,$L,$U,$k=null){global$Bb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Bb))."|username|".($k!==null?"db|":"").session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($Ab!="server"||$L!=""?urlencode($Ab)."=".urlencode($L)."&":"")."username=".urlencode($U).($k!=""?"&db=".urlencode($k):"").($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($od,$zd=null){if($zd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($od!==null?$od:$_SERVER["REQUEST_URI"]))][]=$zd;}if($od!==null){if($od=="")$od=".";header("Location: $od");exit;}}function
query_redirect($F,$od,$zd,$Pe=true,$ac=true,$hc=false){global$h,$l,$b;if($ac)$hc=!$h->query($F);$wf="";if($F)$wf=$b->messageQuery("$F;");if($hc){$l=error().$wf;return
false;}if($Pe)redirect($od,$zd.$wf);return
true;}function
queries($F=null){global$h;static$Ne=array();if($F===null)return
implode(";\n",$Ne);$Ne[]=(ereg(';$',$F)?"DELIMITER ;;\n$F;\nDELIMITER ":$F);return$h->query($F);}function
apply_queries($F,$Q,$Vb='table'){foreach($Q
as$O){if(!queries("$F ".$Vb($O)))return
false;}return
true;}function
queries_redirect($od,$zd,$Pe){return
query_redirect(queries(),$od,$zd,$Pe,false,!$Pe);}function
remove_from_uri($oe=""){return
substr(preg_replace("~(?<=[?&])($oe".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($C,$mb){return" ".($C==$mb?$C+1:'<a href="'.h(remove_from_uri("page").($C?"&page=$C":"")).'">'.($C+1)."</a>");}function
get_file($w,$sb=false){$jc=$_FILES[$w];if(!$jc||$jc["error"])return$jc["error"];$H=file_get_contents($sb&&ereg('\\.gz$',$jc["name"])?"compress.zlib://$jc[tmp_name]":($sb&&ereg('\\.bz2$',$jc["name"])?"compress.bzip2://$jc[tmp_name]":$jc["tmp_name"]));if($sb){$xf=substr($H,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$xf,$We))$H=iconv("utf-16","utf-8",$H);elseif($xf=="\xEF\xBB\xBF")$H=substr($H,3);}return$H;}function
upload_error($l){$xd=($l==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($l?'Wgranie pliku by≈Ço niemo≈ºliwe.'.($xd?" ".sprintf('Maksymalna wielko≈õƒá pliku to %sB.',$xd):""):'Plik nie istnieje.');}function
repeat_pattern($we,$x){return
str_repeat("$we{0,65535}",$x/65535)."$we{0,".($x%65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($N,$x=80,$Df=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$x).")($)?)u",$N,$_))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$x).")($)?)",$N,$_);return
h($_[1]).$Df.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($Ke,$Ic=array()){while(list($w,$W)=each($Ke)){if(is_array($W)){foreach($W
as$Yc=>$V)$Ke[$w."[$Yc]"]=$V;}elseif(!in_array($w,$Ic))echo'<input type="hidden" name="'.h($w).'" value="'.h($W).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($O){global$b;$H=array();foreach($b->foreignKeys($O)as$o){foreach($o["source"]as$W)$H[$W][]=$o;}return$H;}function
enum_input($S,$za,$m,$X,$Nb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$sd);$H=($Nb!==null?"<label><input type='$S'$za value='$Nb'".((is_array($X)?in_array($Nb,$X):$X===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($sd[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Oa=(is_int($X)?$X==$q+1:(is_array($X)?in_array($q+1,$X):$X===$W));$H.=" <label><input type='$S'$za value='".($q+1)."'".($Oa?' checked':'').'>'.h($b->editVal($W,$m)).'</label>';}return$H;}function
input($m,$X,$p){global$T,$b,$v;$A=h(bracket_escape($m["field"]));echo"<td class='function'>";$Ye=($v=="mssql"&&$m["auto_increment"]);if($Ye&&!$_POST["save"])$p=null;$xc=(isset($_GET["select"])||$Ye?array("orig"=>'bez zmian'):array())+$b->editFunctions($m);$za=" name='fields[$A]'";if($m["type"]=="enum")echo
nbsp($xc[""])."<td>".$b->editInput($_GET["edit"],$m,$za,$X);else{$mc=0;foreach($xc
as$w=>$W){if($w===""||!$W)break;$mc++;}$Vd=($mc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($m["field"])))."]']; if ($mc > f.selectedIndex) f.selectedIndex = $mc;\"":"");$za.=$Vd;echo(count($xc)>1?html_select("function[$A]",$xc,$p===null||in_array($p,$xc)||isset($xc[$p])?$p:"","functionChange(this);"):nbsp(reset($xc))).'<td>';$Pc=$b->editInput($_GET["edit"],$m,$za,$X);if($Pc!="")echo$Pc;elseif($m["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$sd);foreach($sd[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Oa=(is_int($X)?($X>>$q)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$A][$q]' value='".(1<<$q)."'".($Oa?' checked':'')."$Vd>".h($b->editVal($W,$m)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$m["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$A'$Vd>";elseif(($Sf=ereg('text|lob',$m["type"]))||ereg("\n",$X)){if($Sf&&$v!="sqlite")$za.=" cols='50' rows='12'";else{$J=min(12,substr_count($X,"\n")+1);$za.=" cols='30' rows='$J'".($J==1?" style='height: 1.2em;'":"");}echo"<textarea$za>".h($X).'</textarea>';}else{$yd=(!ereg('int',$m["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$m["length"],$_)?((ereg("binary",$m["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$m["unsigned"]?1:0)):($T[$m["type"]]?$T[$m["type"]]+($m["unsigned"]?0:1):0));echo"<input".(ereg('int|float|double|decimal',$m["type"])?" type='number'":"")." value='".h($X)."'".($yd?" maxlength='$yd'":"").(ereg('char|binary',$m["type"])&&$yd>20?" size='40'":"")."$za>";}}}function
process_input($m){global$b;$s=bracket_escape($m["field"]);$p=$_POST["function"][$s];$X=$_POST["fields"][$s];if($m["type"]=="enum"){if($X==-1)return
false;if($X=="")return"NULL";return+$X;}if($m["auto_increment"]&&$X=="")return
null;if($p=="orig")return($m["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($m["field"]):false);if($p=="NULL")return"NULL";if($m["type"]=="set")return
array_sum((array)$X);if(ereg('blob|bytea|raw|file',$m["type"])&&ini_bool("file_uploads")){$jc=get_file("fields-$s");if(!is_string($jc))return
false;return
q($jc);}return$b->processInput($m,$X,$p);}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$sc=false;foreach(table_status()as$O=>$P){$A=$b->tableName($P);if(isset($P["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($O,$_POST["tables"]))){$G=$h->query("SELECT".limit("1 FROM ".table($O)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($O),array())),1));if(!$G||$G->fetch_row()){if(!$sc){echo"<ul>\n";$sc=true;}echo"<li>".($G?"<a href='".h(ME."select=".urlencode($O)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n":"$A: <span class='error'>".error()."</span>\n");}}}echo($sc?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($Hc,$Gd=false){global$b;$H=$b->dumpHeaders($Hc,$Gd);$me=$_POST["output"];if($me!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Hc).".$H".($me!="file"&&!ereg('[^0-9a-z]',$me)?".$me":""));session_write_close();return$H;}function
dump_csv($I){foreach($I
as$w=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W==="")$I[$w]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$I)."\r\n";}function
apply_sql_function($p,$f){return($p?($p=="unixepoch"?"DATETIME($f, '$p')":($p=="count distinct"?"COUNT(DISTINCT ":strtoupper("$p("))."$f)"):$f);}function
password_file(){$yb=ini_get("upload_tmp_dir");if(!$yb){if(function_exists('sys_get_temp_dir'))$yb=sys_get_temp_dir();else{$kc=@tempnam("","");if(!$kc)return
false;$yb=dirname($kc);unlink($kc);}}$kc="$yb/adminer.key";$H=@file_get_contents($kc);if($H)return$H;$uc=@fopen($kc,"w");if($uc){$H=md5(uniqid(mt_rand(),true));fwrite($uc,$H);fclose($uc);}return$H;}function
is_mail($Kb){$ya='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$_b='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$we="$ya+(\\.$ya+)*@($_b?\\.)+$_b";return
preg_match("(^$we(,\\s*$we)*\$)i",$Kb);}function
is_url($N){$_b='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($_b?\\.)+$_b(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$N,$_)?strtolower($_[1]):"");}function
is_shortable($m){return
ereg('char|text|lob|geometry|point|linestring|polygon',$m["type"]);}function
slow_query($F){global$b,$R;$k=$b->database();if(support("kill")&&is_object($i=connect())&&($k==""||$i->select_db($k))){$bd=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$R,'&kill=',$bd,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$i=null;ob_flush();flush();$H=@get_key_vals($F,$i);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($H);}function
lzw_decompress($Fa){$xb=256;$Ga=8;$Sa=array();$Ze=0;$af=0;for($q=0;$q<strlen($Fa);$q++){$Ze=($Ze<<8)+ord($Fa[$q]);$af+=8;if($af>=$Ga){$af-=$Ga;$Sa[]=$Ze>>$af;$Ze&=(1<<$af)-1;$xb++;if($xb>>$Ga)$Ga++;}}$wb=range("\0","\xFF");$H="";foreach($Sa
as$q=>$Ra){$Jb=$wb[$Ra];if(!isset($Jb))$Jb=$Gg.$Gg[0];$H.=$Jb;if($q)$wb[]=$Gg.$Jb[0];$Gg=$Jb;}return$H;}global$b,$h,$Bb,$Hb,$Rb,$l,$xc,$Bc,$ba,$Oc,$v,$ca,$ed,$Ud,$xe,$Af,$R,$eg,$T,$sg,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$pe=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$pe[]=true;call_user_func_array('session_set_cookie_params',$pe);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$lc);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($dg,$Nd){$ze=($Nd==1?0:($Nd%10>1&&$Nd%10<5&&$Nd/10%10!=1?1:2));$dg=str_replace("%d","%s",$dg[$ze]);$Nd=number_format($Nd,0,".",' ');return
sprintf($dg,$Nd);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$ze=array_search("",$b->operators);if($ze!==false)unset($b->operators[$ze]);}function
dsn($Eb,$U,$D,$Zb='auth_error'){set_exception_handler($Zb);parent::__construct($Eb,$U,$D);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($F,$mg=false){$G=parent::query($F);$this->error="";if(!$G){$Tb=$this->errorInfo();$this->error=$Tb[2];return
false;}$this->store_result($G);return$G;}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result($G=null){if(!$G)$G=$this->_result;if($G->columnCount()){$G->num_rows=$G->rowCount();return$G;}$this->affected_rows=$G->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($F,$m=0){$G=$this->query($F);if(!$G)return
false;$I=$G->fetch();return$I[$m];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$I=(object)$this->getColumnMeta($this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=(in_array("blob",(array)$I->flags)?63:0);return$I;}}}$Bb=array();$Bb["sqlite"]="SQLite 3";$Bb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Be=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($kc){$this->_link=new
SQLite3($kc);$Ag=$this->_link->version();$this->server_info=$Ag["versionString"];}function
query($F){$G=@$this->_link->query($F);$this->error="";if(!$G){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($G->numColumns())return
new
Min_Result($G);$this->affected_rows=$this->_link->changes();return
true;}function
quote($N){return(is_utf8($N)?"'".$this->_link->escapeString($N)."'":"x'".reset(unpack('H*',$N))."'");}function
store_result(){return$this->_result;}function
result($F,$m=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->_result->fetchArray();return$I[$m];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$f=$this->_offset++;$S=$this->_result->columnType($f);return(object)array("name"=>$this->_result->columnName($f),"type"=>$S,"charsetnr"=>($S==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($kc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($kc);}function
query($F,$mg=false){$Dd=($mg?"unbufferedQuery":"query");$G=@$this->_link->$Dd($F,SQLITE_BOTH,$l);$this->error="";if(!$G){$this->error=$l;return
false;}elseif($G===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($G);}function
quote($N){return"'".sqlite_escape_string($N)."'";}function
store_result(){return$this->_result;}function
result($F,$m=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->_result->fetch();return$I[$m];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;if(method_exists($G,'numRows'))$this->num_rows=$G->numRows();}function
fetch_assoc(){$I=$this->_result->fetch(SQLITE_ASSOC);if(!$I)return
false;$H=array();foreach($I
as$w=>$W)$H[($w[0]=='"'?idf_unescape($w):$w)]=$W;return$H;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$A=$this->_result->fieldName($this->_offset++);$we='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($we\\.)?$we\$~",$A,$_)){$O=($_[3]!=""?$_[3]:idf_unescape($_[2]));$A=($_[5]!=""?$_[5]:idf_unescape($_[4]));}return(object)array("name"=>$A,"orgname"=>$A,"orgtable"=>$O,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($kc){$this->dsn(DRIVER.":$kc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($kc){if(is_readable($kc)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$kc)?$kc:dirname($_SERVER["SCRIPT_FILENAME"])."/$kc")." AS a")){$this->Min_SQLite($kc);return
true;}return
false;}function
multi_query($F){return$this->_result=$this->query($F);}function
next_result(){return
false;}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($F,$Z,$y,$B=0,$pf=" "){return" $F$Z".($y!==null?$pf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($F,$Z,1):" $F$Z");}function
db_collation($k,$Va){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($j){return
array();}function
table_status($A=""){global$h;$H=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($A!=""?" AND name = ".q($A):""))as$I){$I["Oid"]="t";$I["Auto_increment"]="";$I["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($I["Name"]));$H[$I["Name"]]=$I;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$I)$H[$I["name"]]["Auto_increment"]=$I["seq"];return($A!=""?$H[$A]:$H);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($O){$H=array();foreach(get_rows("PRAGMA table_info(".table($O).")")as$I){$S=strtolower($I["type"]);$tb=$I["dflt_value"];$H[$I["name"]]=array("field"=>$I["name"],"type"=>(eregi("int",$S)?"integer":(eregi("char|clob|text",$S)?"text":(eregi("blob",$S)?"blob":(eregi("real|floa|doub",$S)?"real":"numeric")))),"full_type"=>$S,"default"=>(ereg("'(.*)'",$tb,$_)?str_replace("''","'",$_[1]):($tb=="NULL"?null:$tb)),"null"=>!$I["notnull"],"auto_increment"=>eregi('^integer$',$S)&&$I["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$I["pk"],);}return$H;}function
indexes($O,$i=null){$H=array();$Ee=array();foreach(fields($O)as$m){if($m["primary"])$Ee[]=$m["field"];}if($Ee)$H[""]=array("type"=>"PRIMARY","columns"=>$Ee,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($O).")")as$I){if(!ereg("^sqlite_",$I["name"])){$H[$I["name"]]["type"]=($I["unique"]?"UNIQUE":"INDEX");$H[$I["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($I["name"]).")")as$hf)$H[$I["name"]]["columns"][]=$hf["name"];}}return$H;}function
foreign_keys($O){$H=array();foreach(get_rows("PRAGMA foreign_key_list(".table($O).")")as$I){$o=&$H[$I["id"]];if(!$o)$o=$I;$o["source"][]=$I["from"];$o["target"][]=$I["to"];}return$H;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($A))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($k){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($W){return
q($W);}function
check_sqlite_name($A){global$h;$gc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($gc)\$~",$A)){$h->error=sprintf('Proszƒô u≈ºyƒá jednego z rozszerze≈Ñ: %s.',str_replace("|",", ",$gc));return
false;}return
true;}function
create_database($k,$e){global$h;if(file_exists($k)){$h->error='Plik ju≈º istnieje.';return
false;}if(!check_sqlite_name($k))return
false;$z=new
Min_SQLite($k);$z->query('PRAGMA encoding = "UTF-8"');$z->query('CREATE TABLE adminer (i)');$z->query('DROP TABLE adminer');return
true;}function
drop_databases($j){global$h;$h->Min_SQLite(":memory:");foreach($j
as$k){if(!@unlink($k)){$h->error='Plik ju≈º istnieje.';return
false;}}return
true;}function
rename_database($A,$e){global$h;if(!check_sqlite_name($A))return
false;$h->Min_SQLite(":memory:");$h->error='Plik ju≈º istnieje.';return@rename(DB,$A);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($O,$A,$n,$oc,$Za,$Pb,$e,$_a,$te){$vg=($O==""||$oc);foreach($n
as$m){if($m[0]!=""||!$m[1]||$m[2]){$vg=true;break;}}$c=array();$ke=array();$Fe=false;foreach($n
as$m){if($m[1]){if($m[1][6])$Fe=true;$c[]=($vg?"  ":"ADD ").implode($m[1]);if($m[0]!="")$ke[$m[0]]=$m[1][0];}}if($vg){if($O!=""){queries("BEGIN");foreach(foreign_keys($O)as$o){$g=array();foreach($o["source"]as$f){if(!$ke[$f])continue
2;$g[]=$ke[$f];}$oc[]="  FOREIGN KEY (".implode(", ",$g).") REFERENCES ".table($o["table"])." (".implode(", ",array_map('idf_escape',$o["target"])).") ON DELETE $o[on_delete] ON UPDATE $o[on_update]";}$u=array();foreach(indexes($O)as$Zc=>$t){$g=array();foreach($t["columns"]as$f){if(!$ke[$f])continue
2;$g[]=$ke[$f];}$g="(".implode(", ",$g).")";if($t["type"]!="PRIMARY")$u[]=array($t["type"],$Zc,$g);elseif(!$Fe)$oc[]="  PRIMARY KEY $g";}}$c=array_merge($c,$oc);if(!queries("CREATE TABLE ".table($O!=""?"adminer_$A":$A)." (\n".implode(",\n",$c)."\n)"))return
false;if($O!=""){if($ke&&!queries("INSERT INTO ".table("adminer_$A")." (".implode(", ",$ke).") SELECT ".implode(", ",array_map('idf_escape',array_keys($ke)))." FROM ".table($O)))return
false;$jg=array();foreach(triggers($O)as$hg=>$Vf){$fg=trigger($hg);$jg[]="CREATE TRIGGER ".idf_escape($hg)." ".implode(" ",$Vf)." ON ".table($A)."\n$fg[Statement]";}if(!queries("DROP TABLE ".table($O)))return
false;queries("ALTER TABLE ".table("adminer_$A")." RENAME TO ".table($A));if(!alter_indexes($A,$u))return
false;foreach($jg
as$fg){if(!queries($fg))return
false;}queries("COMMIT");}}else{foreach($c
as$W){if(!queries("ALTER TABLE ".table($O)." $W"))return
false;}if($O!=$A&&!queries("ALTER TABLE ".table($O)." RENAME TO ".table($A)))return
false;}if($_a)queries("UPDATE sqlite_sequence SET seq = $_a WHERE name = ".q($A));return
true;}function
alter_indexes($O,$c){foreach($c
as$W){if(!queries($W[2]=="DROP"?"DROP INDEX ".idf_escape($W[1]):"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O)." $W[2]"))return
false;}return
true;}function
truncate_tables($Q){return
apply_queries("DELETE FROM",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
move_tables($Q,$Y,$Qf){return
false;}function
trigger($A){global$h;if($A=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($A)),$_);return
array("Timing"=>strtoupper($_[1]),"Event"=>strtoupper($_[2]),"Trigger"=>$A,"Statement"=>$_[3]);}function
triggers($O){$H=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O))as$I){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$I["sql"],$_);$H[$I["name"]]=array($_[1],$_[2]);}return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$S){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$Ee){return
queries("REPLACE INTO ".table($O)." (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).")");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$F){return$h->query("EXPLAIN $F");}function
found_rows($P,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($lf){return
true;}function
create_sql($O,$_a){global$h;return$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($O));}function
truncate_sql($O){return"DELETE FROM ".table($O);}function
use_sql($pb){}function
trigger_sql($O,$Bf){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O)));}function
show_variables(){global$h;$H=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$w)$H[$w]=$h->result("PRAGMA $w");return$H;}function
show_status(){$H=array();foreach(get_vals("PRAGMA compile_options")as$Zd){list($w,$W)=explode("=",$Zd,2);$H[$w]=$W;}return$H;}function
convert_field($m){}function
unconvert_field($m,$H){return$H;}function
support($ic){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$ic);}$v="sqlite";$T=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Af=array_keys($T);$sg=array();$Yd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$xc=array("hex","length","lower","round","unixepoch","upper");$Bc=array("avg","count","count distinct","group_concat","max","min","sum");$Hb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Bb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Be=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Sb,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=ereg_replace('^[^:]*: ','',$l);$this->error=$l;}function
connect($L,$U,$D){global$b;$k=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($L,"'\\"))."' user='".addcslashes($U,"'\\")."' password='".addcslashes($D,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$k!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ag=pg_version($this->_link);$this->server_info=$Ag["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($N){return"'".pg_escape_string($this->_link,$N)."'";}function
select_db($pb){global$b;if($pb==$b->database())return$this->_database;$H=@pg_connect("$this->_string dbname='".addcslashes($pb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($H)$this->_link=$H;return$H;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($F,$mg=false){$G=@pg_query($this->_link,$F);$this->error="";if(!$G){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($G)){$this->affected_rows=pg_affected_rows($G);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$m=0){$G=$this->query($F);if(!$G||!$G->num_rows)return
false;return
pg_fetch_result($G->_result,0,$m);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;$this->num_rows=pg_num_rows($G);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$f=$this->_offset++;$H=new
stdClass;if(function_exists('pg_field_table'))$H->orgtable=pg_field_table($this->_result,$f);$H->name=pg_field_name($this->_result,$f);$H->orgname=$H->name;$H->type=pg_field_type($this->_result,$f);$H->charsetnr=($H->type=="bytea"?63:0);return$H;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($L,$U,$D){global$b;$k=$b->database();$N="pgsql:host='".str_replace(":","' port='",addcslashes($L,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$N dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",$U,$D);return
true;}function
select_db($pb){global$b;return($b->database()==$pb);}function
close(){}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$h=new
Min_DB;$lb=$b->credentials();if($h->connect($lb[0],$lb[1],$lb[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($F,$Z,$y,$B=0,$pf=" "){return" $F$Z".($y!==null?$pf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){return" $F$Z";}function
db_collation($k,$Va){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($j){return
array();}function
table_status($A=""){$H=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($A!=""?" AND relname = ".q($A):""))as$I)$H[$I["Name"]]=$I;return($A!=""?$H[$A]:$H);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$H=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($O)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$I){ereg('(.*)(\\((.*)\\))?',$I["full_type"],$_);list(,$I["type"],,$I["length"])=$_;$I["full_type"]=$I["type"].($I["length"]?"($I[length])":"");$I["null"]=($I["attnotnull"]=="f");$I["auto_increment"]=eregi("^nextval\\(",$I["default"]);$I["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$I["default"],$_))$I["default"]=($_[1][0]=="'"?idf_unescape($_[1]):$_[1]);$H[$I["field"]]=$I;}return$H;}function
indexes($O,$i=null){global$h;if(!is_object($i))$i=$h;$H=array();$Kf=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($O));$g=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Kf AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Kf AND ci.oid = i.indexrelid",$i)as$I){$H[$I["relname"]]["type"]=($I["indisprimary"]=="t"?"PRIMARY":($I["indisunique"]=="t"?"UNIQUE":"INDEX"));$H[$I["relname"]]["columns"]=array();foreach(explode(" ",$I["indkey"])as$Lc)$H[$I["relname"]]["columns"][]=$g[$Lc];$H[$I["relname"]]["lengths"]=array();}return$H;}function
foreign_keys($O){global$Ud;$H=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($O)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$I){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$I['definition'],$_)){$I['source']=array_map('trim',explode(',',$_[1]));$I['table']=$_[2];if(preg_match('~(.+)\.(.+)~',$_[2],$rd)){$I['ns']=$rd[1];$I['table']=$rd[2];}$I['target']=array_map('trim',explode(',',$_[3]));$I['on_delete']=(preg_match("~ON DELETE ($Ud)~",$_[4],$rd)?$rd[1]:'NO ACTION');$I['on_update']=(preg_match("~ON UPDATE ($Ud)~",$_[4],$rd)?$rd[1]:'NO ACTION');$H[$I['conname']]=$I;}}return$H;}function
view($A){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($A).")"));}function
collations(){return
array();}function
information_schema($k){return($k=="information_schema");}function
error(){global$h;$H=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$H,$_))$H=$_[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($_[3]).'})(.*)~','\\1<b>\\2</b>',$_[2]).$_[4];return
nl_br($H);}function
exact_value($W){return
q($W);}function
create_database($k,$e){return
queries("CREATE DATABASE ".idf_escape($k).($e?" ENCODING ".idf_escape($e):""));}function
drop_databases($j){global$h;$h->close();return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($A,$e){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($A));}function
auto_increment(){return"";}function
alter_table($O,$A,$n,$oc,$Za,$Pb,$e,$_a,$te){$c=array();$Ne=array();foreach($n
as$m){$f=idf_escape($m[0]);$W=$m[1];if(!$W)$c[]="DROP $f";else{$yg=$W[5];unset($W[5]);if(isset($W[6])&&$m[0]=="")$W[1]=($W[1]=="bigint"?" big":" ")."serial";if($m[0]=="")$c[]=($O!=""?"ADD ":"  ").implode($W);else{if($f!=$W[0])$Ne[]="ALTER TABLE ".table($O)." RENAME $f TO $W[0]";$c[]="ALTER $f TYPE$W[1]";if(!$W[6]){$c[]="ALTER $f ".($W[3]?"SET$W[3]":"DROP DEFAULT");$c[]="ALTER $f ".($W[2]==" NULL"?"DROP NOT":"SET").$W[2];}}if($m[0]!=""||$yg!="")$Ne[]="COMMENT ON COLUMN ".table($O).".$W[0] IS ".($yg!=""?substr($yg,9):"''");}}$c=array_merge($c,$oc);if($O=="")array_unshift($Ne,"CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Ne,"ALTER TABLE ".table($O)."\n".implode(",\n",$c));if($O!=""&&$O!=$A)$Ne[]="ALTER TABLE ".table($O)." RENAME TO ".table($A);if($O!=""||$Za!="")$Ne[]="COMMENT ON TABLE ".table($A)." IS ".q($Za);if($_a!=""){}foreach($Ne
as$F){if(!queries($F))return
false;}return
true;}function
alter_indexes($O,$c){$ib=array();$Cb=array();foreach($c
as$W){if($W[0]!="INDEX")$ib[]=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").$W[2]);elseif($W[2]=="DROP")$Cb[]=idf_escape($W[1]);elseif(!queries("CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O)." $W[2]"))return
false;}return((!$ib||queries("ALTER TABLE ".table($O).implode(",",$ib)))&&(!$Cb||queries("DROP INDEX ".implode(", ",$Cb))));}function
truncate_tables($Q){return
queries("TRUNCATE ".implode(", ",array_map('table',$Q)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Qf){foreach($Q
as$O){if(!queries("ALTER TABLE ".table($O)." SET SCHEMA ".idf_escape($Qf)))return
false;}foreach($Y
as$O){if(!queries("ALTER VIEW ".table($O)." SET SCHEMA ".idf_escape($Qf)))return
false;}return
true;}function
trigger($A){if($A=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$J=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($A));return
reset($J);}function
triggers($O){$H=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($O))as$I)$H[$I["trigger_name"]]=array($I["condition_timing"],$I["event_manipulation"]);return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$Ee){global$h;$tg=array();$Z=array();foreach($M
as$w=>$W){$tg[]="$w = $W";if(isset($Ee[idf_unescape($w)]))$Z[]="$w = $W";}return($Z&&queries("UPDATE ".table($O)." SET ".implode(", ",$tg)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).")");}function
last_id(){return
0;}function
explain($h,$F){return$h->query("EXPLAIN $F");}function
found_rows($P,$Z){global$h;if(ereg(" rows=([0-9]+)",$h->result("EXPLAIN SELECT * FROM ".idf_escape($P["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$We))return$We[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($kf){global$h,$T,$Af;$H=$h->query("SET search_path TO ".idf_escape($kf));foreach(types()as$S){if(!isset($T[$S])){$T[$S]=0;$Af['Typy u≈ºytkownika'][]=$S;}}return$H;}function
use_sql($pb){return"\connect ".idf_escape($pb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($m){}function
unconvert_field($m,$H){return$H;}function
support($ic){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$ic);}$v="pgsql";$T=array();$Af=array();foreach(array('Numeryczne'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Data i czas'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Tekstowe'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binarne'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Sieƒá'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometria'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$w=>$W){$T+=$W;$Af[$w]=array_keys($W);}$sg=array();$Yd=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$xc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Bc=array("avg","count","count distinct","max","min","sum");$Hb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Bb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Be=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Sb,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=ereg_replace('^[^:]*: ','',$l);$this->error=$l;}function
connect($L,$U,$D){$this->_link=@oci_new_connect($U,$D,$L,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$l=oci_error();$this->error=$l["message"];return
false;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($pb){return
true;}function
query($F,$mg=false){$G=oci_parse($this->_link,$F);$this->error="";if(!$G){$l=oci_error($this->_link);$this->error=$l["message"];return
false;}set_error_handler(array($this,'_error'));$H=@oci_execute($G);restore_error_handler();if($H){if(oci_num_fields($G))return
new
Min_Result($G);$this->affected_rows=oci_num_rows($G);}return$H;}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$m=1){$G=$this->query($F);if(!is_object($G)||!oci_fetch($G->_result))return
false;return
oci_result($G->_result,$m);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($G){$this->_result=$G;}function
_convert($I){foreach((array)$I
as$w=>$W){if(is_a($W,'OCI-Lob'))$I[$w]=$W->load();}return$I;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$f=$this->_offset++;$H=new
stdClass;$H->name=oci_field_name($this->_result,$f);$H->orgname=$H->name;$H->type=oci_field_type($this->_result,$f);$H->charsetnr=(ereg("raw|blob|bfile",$H->type)?63:0);return$H;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($L,$U,$D){$this->dsn("oci:dbname=//$L;charset=AL32UTF8",$U,$D);return
true;}function
select_db($pb){return
true;}}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$h=new
Min_DB;$lb=$b->credentials();if($h->connect($lb[0],$lb[1],$lb[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($F,$Z,$y,$B=0,$pf=" "){return($B?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $F$Z) t WHERE rownum <= ".($y+$B).") WHERE rnum > $B":($y!==null?" * FROM (SELECT $F$Z) WHERE rownum <= ".($y+$B):" $F$Z"));}function
limit1($F,$Z){return" $F$Z";}function
db_collation($k,$Va){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($j){return
array();}function
table_status($A=""){$H=array();$mf=q($A);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($A!=""?" AND table_name = $mf":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($A!=""?" WHERE view_name = $mf":""))as$I){if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$H=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($O)." ORDER BY column_id")as$I){$S=$I["DATA_TYPE"];$x="$I[DATA_PRECISION],$I[DATA_SCALE]";if($x==",")$x=$I["DATA_LENGTH"];$H[$I["COLUMN_NAME"]]=array("field"=>$I["COLUMN_NAME"],"full_type"=>$S.($x?"($x)":""),"type"=>strtolower($S),"length"=>$x,"default"=>$I["DATA_DEFAULT"],"null"=>($I["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$H;}function
indexes($O,$i=null){$H=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($O)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$I){$H[$I["INDEX_NAME"]]["type"]=($I["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($I["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$H[$I["INDEX_NAME"]]["columns"][]=$I["COLUMN_NAME"];$H[$I["INDEX_NAME"]]["lengths"][]=($I["CHAR_LENGTH"]&&$I["CHAR_LENGTH"]!=$I["COLUMN_LENGTH"]?$I["CHAR_LENGTH"]:null);}return$H;}function
view($A){$J=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($A));return
reset($J);}function
collations(){return
array();}function
information_schema($k){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($W){return
q($W);}function
explain($h,$F){$h->query("EXPLAIN PLAN FOR $F");return$h->query("SELECT * FROM plan_table");}function
found_rows($P,$Z){}function
alter_table($O,$A,$n,$oc,$Za,$Pb,$e,$_a,$te){$c=$Cb=array();foreach($n
as$m){$W=$m[1];if($W&&$m[0]!=""&&idf_escape($m[0])!=$W[0])queries("ALTER TABLE ".table($O)." RENAME COLUMN ".idf_escape($m[0])." TO $W[0]");if($W)$c[]=($O!=""?($m[0]!=""?"MODIFY (":"ADD ("):"  ").implode($W).($O!=""?")":"");else$Cb[]=idf_escape($m[0]);}if($O=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($O)."\n".implode("\n",$c)))&&(!$Cb||queries("ALTER TABLE ".table($O)." DROP (".implode(", ",$Cb).")"))&&($O==$A||queries("ALTER TABLE ".table($O)." RENAME TO ".table($A)));}function
foreign_keys($O){return
array();}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
begin(){return
true;}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($lf){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($lf));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$J=get_rows('SELECT * FROM v$instance');return
reset($J);}function
convert_field($m){}function
unconvert_field($m,$H){return$H;}function
support($ic){return
ereg("view|scheme|processlist|drop_col|variables|status",$ic);}$v="oracle";$T=array();$Af=array();foreach(array('Numeryczne'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Data i czas'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Tekstowe'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binarne'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$w=>$W){$T+=$W;$Af[$w]=array_keys($W);}$sg=array();$Yd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$xc=array("length","lower","round","upper");$Bc=array("avg","count","count distinct","max","min","sum");$Hb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Bb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Be=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$l)$this->error.="$l[message]\n";$this->error=rtrim($this->error);}function
connect($L,$U,$D){$this->_link=@sqlsrv_connect($L,array("UID"=>$U,"PWD"=>$D,"CharacterSet"=>"UTF-8"));if($this->_link){$Mc=sqlsrv_server_info($this->_link);$this->server_info=$Mc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($pb){return$this->query("USE ".idf_escape($pb));}function
query($F,$mg=false){$G=sqlsrv_query($this->_link,$F);$this->error="";if(!$G){$this->_get_error();return
false;}return$this->store_result($G);}function
multi_query($F){$this->_result=sqlsrv_query($this->_link,$F);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($G=null){if(!$G)$G=$this->_result;if(sqlsrv_field_metadata($G))return
new
Min_Result($G);$this->affected_rows=sqlsrv_rows_affected($G);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($F,$m=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->fetch_row();return$I[$m];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($G){$this->_result=$G;}function
_convert($I){foreach((array)$I
as$w=>$W){if(is_a($W,'DateTime'))$I[$w]=$W->format("Y-m-d H:i:s");}return$I;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$m=$this->_fields[$this->_offset++];$H=new
stdClass;$H->name=$m["Name"];$H->orgname=$m["Name"];$H->type=($m["Type"]==1?254:0);return$H;}function
seek($B){for($q=0;$q<$B;$q++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($L,$U,$D){$this->_link=@mssql_connect($L,$U,$D);if($this->_link){$G=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$I=$G->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$I[0]] $I[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($pb){return
mssql_select_db($pb);}function
query($F,$mg=false){$G=mssql_query($F,$this->_link);$this->error="";if(!$G){$this->error=mssql_get_last_message();return
false;}if($G===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($F,$m=0){$G=$this->query($F);if(!is_object($G))return
false;return
mssql_result($G->_result,0,$m);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($G){$this->_result=$G;$this->num_rows=mssql_num_rows($G);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$H=mssql_fetch_field($this->_result);$H->orgtable=$H->table;$H->orgname=$H->name;return$H;}function
seek($B){mssql_data_seek($this->_result,$B);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($s){return"[".str_replace("]","]]",$s)."]";}function
table($s){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($s);}function
connect(){global$b;$h=new
Min_DB;$lb=$b->credentials();if($h->connect($lb[0],$lb[1],$lb[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($F,$Z,$y,$B=0,$pf=" "){return($y!==null?" TOP (".($y+$B).")":"")." $F$Z";}function
limit1($F,$Z){return
limit($F,$Z,1);}function
db_collation($k,$Va){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($k));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($j){global$h;$H=array();foreach($j
as$k){$h->select_db($k);$H[$k]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$H;}function
table_status($A=""){$H=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($A!=""?" AND name = ".q($A):""))as$I){if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return$P["Engine"]=="VIEW";}function
fk_support($P){return
true;}function
fields($O){$H=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($O))as$I){$S=$I["type"];$x=(ereg("char|binary",$S)?$I["max_length"]:($S=="decimal"?"$I[precision],$I[scale]":""));$H[$I["name"]]=array("field"=>$I["name"],"full_type"=>$S.($x?"($x)":""),"type"=>$S,"length"=>$x,"default"=>$I["default"],"null"=>$I["is_nullable"],"auto_increment"=>$I["is_identity"],"collation"=>$I["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$I["is_identity"],);}return$H;}function
indexes($O,$i=null){$H=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($O),$i)as$I){$H[$I["name"]]["type"]=($I["is_primary_key"]?"PRIMARY":($I["is_unique"]?"UNIQUE":"INDEX"));$H[$I["name"]]["lengths"]=array();$H[$I["name"]]["columns"][$I["key_ordinal"]]=$I["column_name"];}return$H;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($A))));}function
collations(){$H=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$e)$H[ereg_replace("_.*","",$e)][]=$e;return$H;}function
information_schema($k){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
exact_value($W){return
q($W);}function
create_database($k,$e){return
queries("CREATE DATABASE ".idf_escape($k).(eregi('^[a-z0-9_]+$',$e)?" COLLATE $e":""));}function
drop_databases($j){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$j)));}function
rename_database($A,$e){if(eregi('^[a-z0-9_]+$',$e))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $e");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($A));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($O,$A,$n,$oc,$Za,$Pb,$e,$_a,$te){$c=array();foreach($n
as$m){$f=idf_escape($m[0]);$W=$m[1];if(!$W)$c["DROP"][]=" COLUMN $f";else{$W[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$W[1]);if($m[0]=="")$c["ADD"][]="\n  ".implode("",$W).($O==""?substr($oc[$W[0]],16+strlen($W[0])):"");else{unset($W[6]);if($f!=$W[0])queries("EXEC sp_rename ".q(table($O).".$f").", ".q(idf_unescape($W[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$W)][]="";}}}if($O=="")return
queries("CREATE TABLE ".table($A)." (".implode(",",(array)$c["ADD"])."\n)");if($O!=$A)queries("EXEC sp_rename ".q(table($O)).", ".q($A));if($oc)$c[""]=$oc;foreach($c
as$w=>$W){if(!queries("ALTER TABLE ".idf_escape($A)." $w".implode(",",$W)))return
false;}return
true;}function
alter_indexes($O,$c){$t=array();$Cb=array();foreach($c
as$W){if($W[2]=="DROP"){if($W[0]=="PRIMARY")$Cb[]=idf_escape($W[1]);else$t[]=idf_escape($W[1])." ON ".table($O);}elseif(!queries(($W[0]!="PRIMARY"?"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O):"ALTER TABLE ".table($O)." ADD PRIMARY KEY")." $W[2]"))return
false;}return(!$t||queries("DROP INDEX ".implode(", ",$t)))&&(!$Cb||queries("ALTER TABLE ".table($O)." DROP ".implode(", ",$Cb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$Ee){$tg=array();$Z=array();foreach($M
as$w=>$W){$tg[]="$w = $W";if(isset($Ee[idf_unescape($w)]))$Z[]="$w = $W";}return
queries("MERGE ".table($O)." USING (VALUES(".implode(", ",$M).")) AS source (c".implode(", c",range(1,count($M))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$tg)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).");");}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$F){$h->query("SET SHOWPLAN_ALL ON");$H=$h->query($F);$h->query("SET SHOWPLAN_ALL OFF");return$H;}function
found_rows($P,$Z){}function
foreign_keys($O){$H=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($O))as$I){$o=&$H[$I["FK_NAME"]];$o["table"]=$I["PKTABLE_NAME"];$o["source"][]=$I["FKCOLUMN_NAME"];$o["target"][]=$I["PKCOLUMN_NAME"];}return$H;}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Qf){return
apply_queries("ALTER SCHEMA ".idf_escape($Qf)." TRANSFER",array_merge($Q,$Y));}function
trigger($A){if($A=="")return
array();$J=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($A));$H=reset($J);if($H)$H["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$H["text"]);return$H;}function
triggers($O){$H=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($O))as$I)$H[$I["name"]]=array($I["Timing"],$I["Event"]);return$H;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($kf){return
true;}function
use_sql($pb){return"USE ".idf_escape($pb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($m){}function
unconvert_field($m,$H){return$H;}function
support($ic){return
ereg('^(scheme|trigger|view|drop_col)$',$ic);}$v="mssql";$T=array();$Af=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Data i czas'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Tekstowe'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binarne'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$w=>$W){$T+=$W;$Af[$w]=array_keys($W);}$sg=array();$Yd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$xc=array("len","lower","round","upper");$Bc=array("avg","count","count distinct","max","min","sum");$Hb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Bb=array("server"=>"MySQL")+$Bb;if(!defined("DRIVER")){$Be=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($L,$U,$D){mysqli_report(MYSQLI_REPORT_OFF);list($Fc,$ye)=explode(":",$L,2);$H=@$this->real_connect(($L!=""?$Fc:ini_get("mysqli.default_host")),($L.$U!=""?$U:ini_get("mysqli.default_user")),($L.$U.$D!=""?$D:ini_get("mysqli.default_pw")),null,(is_numeric($ye)?$ye:ini_get("mysqli.default_port")),(!is_numeric($ye)?$ye:null));if($H){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$H;}function
result($F,$m=0){$G=$this->query($F);if(!$G)return
false;$I=$G->fetch_array();return$I[$m];}function
quote($N){return"'".$this->escape_string($N)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($L,$U,$D){$this->_link=@mysql_connect(($L!=""?$L:ini_get("mysql.default_host")),("$L$U"!=""?$U:ini_get("mysql.default_user")),("$L$U$D"!=""?$D:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($N){return"'".mysql_real_escape_string($N,$this->_link)."'";}function
select_db($pb){return
mysql_select_db($pb,$this->_link);}function
query($F,$mg=false){$G=@($mg?mysql_unbuffered_query($F,$this->_link):mysql_query($F,$this->_link));$this->error="";if(!$G){$this->error=mysql_error($this->_link);return
false;}if($G===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$m=0){$G=$this->query($F);if(!$G||!$G->num_rows)return
false;return
mysql_result($G->_result,0,$m);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($G){$this->_result=$G;$this->num_rows=mysql_num_rows($G);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$H=mysql_fetch_field($this->_result,$this->_offset++);$H->orgtable=$H->table;$H->orgname=$H->name;$H->charsetnr=($H->blob?63:0);return$H;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($L,$U,$D){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$L)),$U,$D);$this->query("SET NAMES utf8");return
true;}function
select_db($pb){return$this->query("USE ".idf_escape($pb));}function
query($F,$mg=false){$this->setAttribute(1000,!$mg);return
parent::query($F,$mg);}}}function
idf_escape($s){return"`".str_replace("`","``",$s)."`";}function
table($s){return
idf_escape($s);}function
connect(){global$b;$h=new
Min_DB;$lb=$b->credentials();if($h->connect($lb[0],$lb[1],$lb[2])){$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$H=$h->error;if(function_exists('iconv')&&!is_utf8($H)&&strlen($if=iconv("windows-1250","utf-8",$H))>strlen($H))$H=$if;return$H;}function
get_databases($nc){global$h;$H=get_session("dbs");if($H===null){$F=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$H=($nc?slow_query($F):get_vals($F));restart_session();set_session("dbs",$H);stop_session();}return$H;}function
limit($F,$Z,$y,$B=0,$pf=" "){return" $F$Z".($y!==null?$pf."LIMIT $y".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){return
limit($F,$Z,1);}function
db_collation($k,$Va){global$h;$H=null;$ib=$h->result("SHOW CREATE DATABASE ".idf_escape($k),1);if(preg_match('~ COLLATE ([^ ]+)~',$ib,$_))$H=$_[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ib,$_))$H=$Va[$_[1]][-1];return$H;}function
engines(){$H=array();foreach(get_rows("SHOW ENGINES")as$I){if(ereg("YES|DEFAULT",$I["Support"]))$H[]=$I["Engine"];}return$H;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals("SHOW".($h->server_info>=5?" FULL":"")." TABLES");}function
count_tables($j){$H=array();foreach($j
as$k)$H[$k]=count(get_vals("SHOW TABLES IN ".idf_escape($k)));return$H;}function
table_status($A=""){$H=array();foreach(get_rows("SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_")):""))as$I){if($I["Engine"]=="InnoDB")$I["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$I["Comment"]);if(!isset($I["Rows"]))$I["Comment"]="";if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return!isset($P["Rows"]);}function
fk_support($P){return
eregi("InnoDB|IBMDB2I",$P["Engine"]);}function
fields($O){$H=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($O))as$I){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$I["Type"],$_);$H[$I["Field"]]=array("field"=>$I["Field"],"full_type"=>$I["Type"],"type"=>$_[1],"length"=>$_[2],"unsigned"=>ltrim($_[3].$_[4]),"default"=>($I["Default"]!=""||ereg("char",$_[1])?$I["Default"]:null),"null"=>($I["Null"]=="YES"),"auto_increment"=>($I["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$I["Extra"],$_)?$_[1]:""),"collation"=>$I["Collation"],"privileges"=>array_flip(explode(",",$I["Privileges"])),"comment"=>$I["Comment"],"primary"=>($I["Key"]=="PRI"),);}return$H;}function
indexes($O,$i=null){$H=array();foreach(get_rows("SHOW INDEX FROM ".table($O),$i)as$I){$H[$I["Key_name"]]["type"]=($I["Key_name"]=="PRIMARY"?"PRIMARY":($I["Index_type"]=="FULLTEXT"?"FULLTEXT":($I["Non_unique"]?"INDEX":"UNIQUE")));$H[$I["Key_name"]]["columns"][]=$I["Column_name"];$H[$I["Key_name"]]["lengths"][]=$I["Sub_part"];}return$H;}function
foreign_keys($O){global$h,$Ud;static$we='`(?:[^`]|``)+`';$H=array();$jb=$h->result("SHOW CREATE TABLE ".table($O),1);if($jb){preg_match_all("~CONSTRAINT ($we) FOREIGN KEY \\(((?:$we,? ?)+)\\) REFERENCES ($we)(?:\\.($we))? \\(((?:$we,? ?)+)\\)(?: ON DELETE ($Ud))?(?: ON UPDATE ($Ud))?~",$jb,$sd,PREG_SET_ORDER);foreach($sd
as$_){preg_match_all("~$we~",$_[2],$uf);preg_match_all("~$we~",$_[5],$Qf);$H[idf_unescape($_[1])]=array("db"=>idf_unescape($_[4]!=""?$_[3]:$_[4]),"table"=>idf_unescape($_[4]!=""?$_[4]:$_[3]),"source"=>array_map('idf_unescape',$uf[0]),"target"=>array_map('idf_unescape',$Qf[0]),"on_delete"=>($_[6]?$_[6]:"RESTRICT"),"on_update"=>($_[7]?$_[7]:"RESTRICT"),);}}return$H;}function
view($A){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$H=array();foreach(get_rows("SHOW COLLATION")as$I){if($I["Default"])$H[$I["Charset"]][-1]=$I["Collation"];else$H[$I["Charset"]][]=$I["Collation"];}ksort($H);foreach($H
as$w=>$W)asort($H[$w]);return$H;}function
information_schema($k){global$h;return($h->server_info>=5&&$k=="information_schema")||($h->server_info>=5.5&&$k=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
error_line(){global$h;if(ereg(' at line ([0-9]+)$',$h->error,$We))return$We[1]-1;}function
exact_value($W){return
q($W)." COLLATE utf8_bin";}function
create_database($k,$e){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($k).($e?" COLLATE ".q($e):""));}function
drop_databases($j){set_session("dbs",null);return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($A,$e){if(create_database($A,$e)){$Xe=array();foreach(tables_list()as$O=>$S)$Xe[]=table($O)." TO ".idf_escape($A).".".table($O);if(!$Xe||queries("RENAME TABLE ".implode(", ",$Xe))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Aa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$Aa="";break;}if($t["type"]=="PRIMARY")$Aa=" UNIQUE";}}return" AUTO_INCREMENT$Aa";}function
alter_table($O,$A,$n,$oc,$Za,$Pb,$e,$_a,$te){$c=array();foreach($n
as$m)$c[]=($m[1]?($O!=""?($m[0]!=""?"CHANGE ".idf_escape($m[0]):"ADD"):" ")." ".implode($m[1]).($O!=""?$m[2]:""):"DROP ".idf_escape($m[0]));$c=array_merge($c,$oc);$yf="COMMENT=".q($Za).($Pb?" ENGINE=".q($Pb):"").($e?" COLLATE ".q($e):"").($_a!=""?" AUTO_INCREMENT=$_a":"").$te;if($O=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n) $yf");if($O!=$A)$c[]="RENAME TO ".table($A);$c[]=$yf;return
queries("ALTER TABLE ".table($O)."\n".implode(",\n",$c));}function
alter_indexes($O,$c){foreach($c
as$w=>$W)$c[$w]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"").$W[2]);return
queries("ALTER TABLE ".table($O).implode(",",$c));}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Qf){$Xe=array();foreach(array_merge($Q,$Y)as$O)$Xe[]=table($O)." TO ".idf_escape($Qf).".".table($O);return
queries("RENAME TABLE ".implode(", ",$Xe));}function
copy_tables($Q,$Y,$Qf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Q
as$O){$A=($Qf==DB?table("copy_$O"):idf_escape($Qf).".".table($O));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($O))||!queries("INSERT INTO $A SELECT * FROM ".table($O)))return
false;}foreach($Y
as$O){$A=($Qf==DB?table("copy_$O"):idf_escape($Qf).".".table($O));$Bg=view($O);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $Bg[select]"))return
false;}return
true;}function
trigger($A){if($A=="")return
array();$J=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($J);}function
triggers($O){$H=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_")))as$I)$H[$I["Trigger"]]=array($I["Timing"],$I["Event"]);return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$S){global$h,$Rb,$Oc,$T;$ua=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$lg="((".implode("|",array_merge(array_keys($T),$ua)).")\\b(?:\\s*\\(((?:[^'\")]*|$Rb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$we="\\s*(".($S=="FUNCTION"?"":$Oc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$lg";$ib=$h->result("SHOW CREATE $S ".idf_escape($A),2);preg_match("~\\(((?:$we\\s*,?)*)\\)\\s*".($S=="FUNCTION"?"RETURNS\\s+$lg\\s+":"")."(.*)~is",$ib,$_);$n=array();preg_match_all("~$we\\s*,?~is",$_[1],$sd,PREG_SET_ORDER);foreach($sd
as$oe){$A=str_replace("``","`",$oe[2]).$oe[3];$n[]=array("field"=>$A,"type"=>strtolower($oe[5]),"length"=>preg_replace_callback("~$Rb~s",'normalize_enum',$oe[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$oe[8] $oe[7]"))),"null"=>1,"full_type"=>$oe[4],"inout"=>strtoupper($oe[1]),"collation"=>strtolower($oe[9]),);}if($S!="FUNCTION")return
array("fields"=>$n,"definition"=>$_[11]);return
array("fields"=>$n,"returns"=>array("type"=>$_[12],"length"=>$_[13],"unsigned"=>$_[15],"collation"=>$_[16]),"definition"=>$_[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")");}function
insert_update($O,$M,$Ee){foreach($M
as$w=>$W)$M[$w]="$w = $W";$tg=implode(", ",$M);return
queries("INSERT INTO ".table($O)." SET $tg ON DUPLICATE KEY UPDATE $tg");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$F){return$h->query("EXPLAIN $F");}function
found_rows($P,$Z){return($Z||$P["Engine"]!="InnoDB"?null:$P["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($kf){return
true;}function
create_sql($O,$_a){global$h;$H=$h->result("SHOW CREATE TABLE ".table($O),1);if(!$_a)$H=preg_replace('~ AUTO_INCREMENT=\\d+~','',$H);return$H;}function
truncate_sql($O){return"TRUNCATE ".table($O);}function
use_sql($pb){return"USE ".idf_escape($pb);}function
trigger_sql($O,$Bf){$H="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_")),null,"-- ")as$I)$H.="\n".($Bf=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($I["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($I["Trigger"])." $I[Timing] $I[Event] ON ".table($I["Table"])." FOR EACH ROW\n$I[Statement];;\n";return$H;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($m){if(ereg("binary",$m["type"]))return"HEX(".idf_escape($m["field"]).")";if(ereg("geometry|point|linestring|polygon",$m["type"]))return"AsWKT(".idf_escape($m["field"]).")";}function
unconvert_field($m,$H){if(ereg("binary",$m["type"]))$H="UNHEX($H)";if(ereg("geometry|point|linestring|polygon",$m["type"]))$H="GeomFromText($H)";return$H;}function
support($ic){global$h;return!ereg("scheme|sequence|type".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|view|routine|trigger":""):""),$ic);}$v="sql";$T=array();$Af=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometria'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$w=>$W){$T+=$W;$Af[$w]=array_keys($W);}$sg=array("unsigned","zerofill","unsigned zerofill");$Yd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$xc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Bc=array("avg","count","count distinct","group_concat","max","min","sum");$Hb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="3.6.2";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
databases($nc=true){return
get_databases($nc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Bb;echo'<table cellspacing="0">
<tr><th>Rodzaj bazy<td>',html_select("auth[driver]",$Bb,DRIVER,"loginDriver(this);"),'<tr><th>Serwer<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>U≈ºytkownik<td><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>Has≈Ço<td><input type="password" name="auth[password]">
<tr><th>Baza danych<td><input name="auth[db]" value="',h($_GET["db"]);?>">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Zaloguj siƒô'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Zapamiƒôtaj sesjƒô')."\n";}function
login($pd,$D){return
true;}function
tableName($If){return
h($If["Name"]);}function
fieldName($m,$ce=0){return'<span title="'.h($m["full_type"]).'">'.h($m["field"]).'</span>';}function
selectLinks($If,$M=""){echo'<p class="tabs">';$nd=array("select"=>'Poka≈º dane',"table"=>'Struktura tabeli');if(is_view($If))$nd["view"]='Zmie≈Ñ perspektywƒô';else$nd["create"]='Zmie≈Ñ tabelƒô';if($M!==null)$nd["edit"]='Nowy rekord';foreach($nd
as$w=>$W)echo" <a href='".h(ME)."$w=".urlencode($If["Name"]).($w=="edit"?$M:"")."'".bold(isset($_GET[$w])).">$W</a>";echo"\n";}function
foreignKeys($O){return
foreign_keys($O);}function
backwardKeys($O,$Hf){return
array();}function
backwardKeysPrint($Ca,$I){}function
selectQuery($F){global$v;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Ostatnia strona'."'>&gt;&gt;</a> <code class='jush-$v'>".h(str_replace("\n"," ",$F))."</code> <a href='".h(ME)."sql=".urlencode($F)."'>".'Edytuj'."</a></p>\n";}function
rowDescription($O){return"";}function
rowDescriptions($J,$pc){return$J;}function
selectVal($W,$z,$m){$H=($W===null?"<i>NULL</i>":(ereg("char|binary",$m["type"])&&!ereg("var",$m["type"])?"<code>$W</code>":$W));if(ereg('blob|bytea|raw|file',$m["type"])&&!is_utf8($W))$H=lang(array('%d bajt','%d bajty','%d bajt√≥w'),strlen($W));return($z?"<a href='".h($z)."'>$H</a>":$H);}function
editVal($W,$m){return$W;}function
selectColumnsPrint($K,$g){global$xc,$Bc;print_fieldset("select",'poka≈º',$K);$q=0;$wc=array('Funkcje'=>$xc,'Agregacje'=>$Bc);foreach($K
as$w=>$W){$W=$_GET["columns"][$w];echo"<div>".html_select("columns[$q][fun]",array(-1=>"")+$wc,$W["fun"]),"(<select name='columns[$q][col]' onchange='selectFieldChange(this.form);'><option>".optionlist($g,$W["col"],true)."</select>)</div>\n";$q++;}echo"<div>".html_select("columns[$q][fun]",array(-1=>"")+$wc,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$q][col]' onchange='selectAddRow(this);'><option>".optionlist($g,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$g,$u){print_fieldset("search",'Szukaj',$Z);foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$q]' value='".h($_GET["fulltext"][$q])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$q]",1,isset($_GET["boolean"][$q]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ma="this.nextSibling.onchange();";for($q=0;$q<=count($_GET["where"]);$q++){list(,$W)=each($_GET["where"]);if(!$W||("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators))){echo"<div><select name='where[$q][col]' onchange='$Ma'><option value=''>(".'gdziekolwiek'.")".optionlist($g,$W["col"],true)."</select>",html_select("where[$q][op]",$this->operators,$W["op"],$Ma),"<input type='search' name='where[$q][val]' value='".h($W["val"])."' onchange='".($W?"selectFieldChange(this.form)":"selectAddRow(this)").";'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($ce,$g,$u){print_fieldset("sort",'Sortuj',$ce);$q=0;foreach((array)$_GET["order"]as$w=>$W){if(isset($g[$W])){echo"<div><select name='order[$q]' onchange='selectFieldChange(this.form);'><option>".optionlist($g,$W,true)."</select>",checkbox("desc[$q]",1,isset($_GET["desc"][$w]),'malejƒÖco')."</div>\n";$q++;}}echo"<div><select name='order[$q]' onchange='selectAddRow(this);'><option>".optionlist($g,null,true)."</select>","<label><input type='checkbox' name='desc[$q]' value='1'>".'malejƒÖco'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($y)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Tf){if($Tf!==null){echo"<fieldset><legend>".'D≈Çugo≈õƒá tekstu'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Tf)."'>","</div></fieldset>\n";}}function
selectActionPrint($u){echo"<fieldset><legend>".'Czynno≈õƒá'."</legend><div>","<input type='submit' value='".'poka≈º'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$g=array();foreach($u
as$t){if($t["type"]!="FULLTEXT")$g[reset($t["columns"])]=1;}$g[""]=1;foreach($g
as$w=>$W)json_row($w);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($Lb,$g){}function
selectColumnsProcess($g,$u){global$xc,$Bc;$K=array();$_c=array();foreach((array)$_GET["columns"]as$w=>$W){if($W["fun"]=="count"||(isset($g[$W["col"]])&&(!$W["fun"]||in_array($W["fun"],$xc)||in_array($W["fun"],$Bc)))){$K[$w]=apply_sql_function($W["fun"],(isset($g[$W["col"]])?idf_escape($W["col"]):"*"));if(!in_array($W["fun"],$Bc))$_c[]=$K[$w];}}return
array($K,$_c);}function
selectSearchProcess($n,$u){global$v;$H=array();foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$q]!="")$H[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$q]).(isset($_GET["boolean"][$q])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$W){if("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators)){$cb=" $W[op]";if(ereg('IN$',$W["op"])){$Jc=process_length($W["val"]);$cb.=" (".($Jc!=""?$Jc:"NULL").")";}elseif(!$W["op"])$cb.=$W["val"];elseif($W["op"]=="LIKE %%")$cb=" LIKE ".$this->processInput($n[$W["col"]],"%$W[val]%");elseif(!ereg('NULL$',$W["op"]))$cb.=" ".$this->processInput($n[$W["col"]],$W["val"]);if($W["col"]!="")$H[]=idf_escape($W["col"]).$cb;else{$Wa=array();foreach($n
as$A=>$m){$Uc=ereg('char|text|enum|set',$m["type"]);if((is_numeric($W["val"])||!ereg('int|float|double|decimal|bit',$m["type"]))&&(!ereg("[\x80-\xFF]",$W["val"])||$Uc)){$A=idf_escape($A);$Wa[]=($v=="sql"&&$Uc&&!ereg('^utf8',$m["collation"])?"CONVERT($A USING utf8)":$A);}}$H[]=($Wa?"(".implode("$cb OR ",$Wa)."$cb)":"0");}}}return$H;}function
selectOrderProcess($n,$u){$H=array();foreach((array)$_GET["order"]as$w=>$W){if(isset($n[$W])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$W))$H[]=(isset($n[$W])?idf_escape($W):$W).(isset($_GET["desc"][$w])?" DESC":"");}return$H;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$pc){return
false;}function
selectQueryBuild($K,$Z,$_c,$ce,$y,$C){return"";}function
messageQuery($F){global$v;static$hb=0;restart_session();$r="sql-".($hb++);$Dc=&get_session("queries");if(strlen($F)>1e6)$F=ereg_replace('[\x80-\xFF]+$','',substr($F,0,1e6))."\n...";$Dc[$_GET["db"]][]=array($F,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$r' onclick=\"return !toggle('$r');\">".'Zapytanie SQL'."</a><div id='$r' class='hidden'><pre><code class='jush-$v'>".shorten_utf8($F,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Dc[$_GET["db"]])-1)).'">'.'Edytuj'.'</a></div>';}function
editFunctions($m){global$Hb;$H=($m["null"]?"NULL/":"");foreach($Hb
as$w=>$xc){if(!$w||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($xc
as$we=>$W){if(!$we||ereg($we,$m["type"]))$H.="/$W";}if($w&&!ereg('set|blob|bytea|raw|file',$m["type"]))$H.="/=";}}return
explode("/",$H);}function
editInput($O,$m,$za,$X){if($m["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$za value='-1' checked><i>".'bez zmian'."</i></label> ":"").($m["null"]?"<label><input type='radio'$za value=''".($X!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$za,$m,$X,0);return"";}function
processInput($m,$X,$p=""){if($p=="=")return$X;$A=$m["field"];$H=($m["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$X)?$X:q($X));if(ereg('^(now|getdate|uuid)$',$p))$H="$p()";elseif(ereg('^current_(date|timestamp)$',$p))$H=$p;elseif(ereg('^([+-]|\\|\\|)$',$p))$H=idf_escape($A)." $p $H";elseif(ereg('^[+-] interval$',$p))$H=idf_escape($A)." $p ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$X)?$X:$H);elseif(ereg('^(addtime|subtime|concat)$',$p))$H="$p(".idf_escape($A).", $H)";elseif(ereg('^(md5|sha1|password|encrypt)$',$p))$H="$p($H)";return
unconvert_field($m,$H);}function
dumpOutput(){$H=array('text'=>'otw√≥rz','file'=>'zapisz');if(function_exists('gzencode'))$H['gz']='gzip';if(function_exists('bzcompress'))$H['bz2']='bzip2';return$H;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($O,$Bf,$Vc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Bf)dump_csv(array_keys(fields($O)));}elseif($Bf){$ib=create_sql($O,$_POST["auto_increment"]);if($ib){if($Bf=="DROP+CREATE")echo"DROP ".($Vc?"VIEW":"TABLE")." IF EXISTS ".table($O).";\n";if($Vc)$ib=remove_definer($ib);echo($Bf!="CREATE+ALTER"?$ib:($Vc?substr_replace($ib," OR REPLACE",6,0):substr_replace($ib," IF NOT EXISTS",12,0))).";\n\n";}if($Bf=="CREATE+ALTER"&&!$Vc){$F="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($O)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$n=array();$ta="";foreach(get_rows($F)as$I){$tb=$I["COLUMN_DEFAULT"];$I["default"]=($tb!==null?q($tb):"NULL");$I["after"]=q($ta);$I["alter"]=escape_string(idf_escape($I["COLUMN_NAME"])." $I[COLUMN_TYPE]".($I["COLLATION_NAME"]?" COLLATE $I[COLLATION_NAME]":"").($tb!==null?" DEFAULT ".($tb=="CURRENT_TIMESTAMP"?$tb:$I["default"]):"").($I["IS_NULLABLE"]=="YES"?"":" NOT NULL").($I["EXTRA"]?" $I[EXTRA]":"").($I["COLUMN_COMMENT"]?" COMMENT ".q($I["COLUMN_COMMENT"]):"").($ta?" AFTER ".idf_escape($ta):" FIRST"));echo", ADD $I[alter]";$n[]=$I;$ta=$I["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $F;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($n
as$I)echo"
				WHEN ".q($I["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $I[alter]', IF(
						_column_default <=> $I[default] AND _is_nullable = '$I[IS_NULLABLE]' AND _collation_name <=> ".(isset($I["COLLATION_NAME"])?"'$I[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($I["COLUMN_TYPE"])." AND _extra = '$I[EXTRA]' AND _column_comment = ".q($I["COLUMN_COMMENT"])." AND after = $I[after]
					, '', ', MODIFY $I[alter]'));";echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($O)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($O,$Bf,$F){global$h,$v;$ud=($v=="sqlite"?0:1048576);if($Bf){if($_POST["format"]=="sql"&&$Bf=="TRUNCATE+INSERT")echo
truncate_sql($O).";\n";if($_POST["format"]=="sql")$n=fields($O);$G=$h->query($F,1);if($G){$Qc="";$Ka="";$ad=array();$Df="";while($I=$G->fetch_row()){if(!$ad){$zg=array();foreach($I
as$W){$m=$G->fetch_field();$ad[]=$m->name;$w=idf_escape($m->name);$zg[]="$w = VALUES($w)";}$Df=($Bf=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$zg):"").";\n";}if($_POST["format"]!="sql"){if($Bf=="table"){dump_csv($ad);$Bf="INSERT";}dump_csv($I);}else{if(!$Qc)$Qc="INSERT INTO ".table($O)." (".implode(", ",array_map('idf_escape',$ad)).") VALUES";foreach($I
as$w=>$W)$I[$w]=($W!==null?(ereg('int|float|double|decimal|bit',$n[$ad[$w]]["type"])?$W:q($W)):"NULL");$if=($ud?"\n":" ")."(".implode(",\t",$I).")";if(!$Ka)$Ka=$Qc.$if;elseif(strlen($Ka)+4+strlen($if)+strlen($Df)<$ud)$Ka.=",$if";else{echo$Ka.$Df;$Ka=$Qc.$if;}}}if($Ka)echo$Ka.$Df;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$h->error)."\n";}}function
dumpFilename($Hc){return
friendly_url($Hc!=""?$Hc:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Hc,$Gd=false){$me=$_POST["output"];$ec=($_POST["format"]=="sql"?"sql":($Gd?"tar":"csv"));header("Content-Type: ".($me=="bz2"?"application/x-bzip":($me=="gz"?"application/x-gzip":($ec=="tar"?"application/x-tar":($ec=="sql"||$me!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($me=="bz2")ob_start('bzcompress',1e6);if($me=="gz")ob_start('gzencode',1e6);return$ec;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Zmie≈Ñ bazƒô danych'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Zmie≈Ñ schemat':'Utw√≥rz schemat')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Schemat bazy danych'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Uprawnienia u≈ºytkownik√≥w'."</a>\n":"");return
true;}function
navigation($Fd){global$ia,$R,$v,$Bb;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Fd=="auth"){$mc=true;foreach((array)$_SESSION["pwds"]as$Ab=>$sf){foreach($sf
as$L=>$xg){foreach($xg
as$U=>$D){if($D!==null){if($mc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$mc=false;}$rb=$_SESSION["db"][$Ab][$L][$U];foreach(($rb?array_keys($rb):array(""))as$k)echo"<a href='".h(auth_url($Ab,$L,$U,$k))."'>($Bb[$Ab]) ".h($U.($L!=""?"@$L":"").($k!=""?" - $k":""))."</a><br>\n";}}}}}else{echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Fd){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'Zapytanie SQL'."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Eksport'."</a>\n";}echo'<input type="submit" name="logout" value="Wyloguj" id="logout">
<input type="hidden" name="token" value="',$R,'">
</p>
</form>
';$this->databasesPrint($Fd);if($_GET["ns"]!==""&&!$Fd&&DB!=""){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Utw√≥rz nowƒÖ tabelƒô'."</a>\n";$Q=tables_list();if(!$Q)echo"<p class='message'>".'Brak tabel.'."\n";else{$this->tablesPrint($Q);$nd=array();foreach($Q
as$O=>$S)$nd[]=preg_quote($O,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $v: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$nd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$W)echo"jushLinks.$W = jushLinks.$v;\n";echo"</script>\n";}}}}function
databasesPrint($Fd){global$h;$j=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();echo($j?html_select("db",array(""=>"(".'baza danych'.")")+$j,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Wybierz"',($j?" class='hidden'":""),'>
';if($Fd!="db"&&DB!=""&&$h->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'schemat'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}function
tablesPrint($Q){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Q
as$O=>$S){echo'<a href="'.h(ME).'select='.urlencode($O).'"'.bold($_GET["select"]==$O).">".'przeglƒÖdaj'."</a> ",'<a href="'.h(ME).'table='.urlencode($O).'"'.bold($_GET["table"]==$O)." title='".'Struktura tabeli'."'>".$this->tableName(array("Name"=>$O))."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Yd;function
page_header($Wf,$l="",$Ja=array(),$Xf=""){global$ca,$b,$h,$Bb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Yf=$Wf.($Xf!=""?": ".h($Xf):"");$Zf=strip_tags($Yf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Zf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.2",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.2",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.2",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Ja!==null){$z=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$Bb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$L=(SERVER!=""?h(SERVER):'Serwer');if($Ja===false)echo"$L\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$L</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ja)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ja)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ja
as$w=>$W){$vb=(is_array($W)?$W[1]:$W);if($vb!="")echo'<a href="'.h(ME."$w=").urlencode(is_array($W)?$W[0]:$W).'">'.h($vb).'</a> &raquo; ';}}echo"$Wf\n";}}echo"<h2>$Yf</h2>\n";restart_session();$ug=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Cd=$_SESSION["messages"][$ug];if($Cd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Cd)."</div>\n";unset($_SESSION["messages"][$ug]);}$j=&get_session("dbs");if(DB!=""&&$j&&!in_array(DB,$j,true))$j=null;stop_session();if($l)echo"<div class='error'>$l</div>\n";define("PAGE_HEADER",1);}function
page_footer($Fd=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($Fd);echo'</div>
';}function
int32($Id){while($Id>=2147483648)$Id-=4294967296;while($Id<=-2147483649)$Id+=4294967296;return(int)$Id;}function
long2str($V,$Dg){$if='';foreach($V
as$W)$if.=pack('V',$W);if($Dg)return
substr($if,0,end($V));return$if;}function
str2long($if,$Dg){$V=array_values(unpack('V*',str_pad($if,4*ceil(strlen($if)/4),"\0")));if($Dg)$V[]=strlen($if);return$V;}function
xxtea_mx($Ig,$Hg,$Ff,$Yc){return
int32((($Ig>>5&0x7FFFFFF)^$Hg<<2)+(($Hg>>3&0x1FFFFFFF)^$Ig<<4))^int32(($Ff^$Hg)+($Yc^$Ig));}function
encrypt_string($_f,$w){if($_f=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($_f,true);$Id=count($V)-1;$Ig=$V[$Id];$Hg=$V[0];$E=floor(6+52/($Id+1));$Ff=0;while($E-->0){$Ff=int32($Ff+0x9E3779B9);$Gb=$Ff>>2&3;for($ne=0;$ne<$Id;$ne++){$Hg=$V[$ne+1];$Hd=xxtea_mx($Ig,$Hg,$Ff,$w[$ne&3^$Gb]);$Ig=int32($V[$ne]+$Hd);$V[$ne]=$Ig;}$Hg=$V[0];$Hd=xxtea_mx($Ig,$Hg,$Ff,$w[$ne&3^$Gb]);$Ig=int32($V[$Id]+$Hd);$V[$Id]=$Ig;}return
long2str($V,false);}function
decrypt_string($_f,$w){if($_f=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($_f,false);$Id=count($V)-1;$Ig=$V[$Id];$Hg=$V[0];$E=floor(6+52/($Id+1));$Ff=int32($E*0x9E3779B9);while($Ff){$Gb=$Ff>>2&3;for($ne=$Id;$ne>0;$ne--){$Ig=$V[$ne-1];$Hd=xxtea_mx($Ig,$Hg,$Ff,$w[$ne&3^$Gb]);$Hg=int32($V[$ne]-$Hd);$V[$ne]=$Hg;}$Ig=$V[$Id];$Hd=xxtea_mx($Ig,$Hg,$Ff,$w[$ne&3^$Gb]);$Hg=int32($V[0]-$Hd);$V[0]=$Hg;$Ff=int32($Ff-0x9E3779B9);}return
long2str($V,true);}$h='';$R=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$xe=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($w)=explode(":",$W);$xe[$w]=$W;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$w=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$He=$b->permanentLogin();$xe[$w]="$w:".base64_encode($He?encrypt_string($d["password"],$He):"");cookie("adminer_permanent",implode(" ",$xe));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($R&&$_POST["token"]!=$R){page_header('Wyloguj','Nieprawid≈Çowy token CSRF. Spr√≥buj wys≈Çaƒá formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$w)set_session($w,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomy≈õlnie.');}}elseif($xe&&!$_SESSION["pwds"]){session_regenerate_id();$He=$b->permanentLogin();foreach($xe
as$w=>$W){list(,$Qa)=explode(":",$W);list($Ab,$L,$U,$k)=array_map('base64_decode',explode("-",$w));$_SESSION["pwds"][$Ab][$L][$U]=decrypt_string(base64_decode($Qa),$He);$_SESSION["db"][$Ab][$L][$U][$k]=true;}}function
unset_permanent(){global$xe;foreach($xe
as$w=>$W){list($Ab,$L,$U)=array_map('base64_decode',explode("-",$w));if($Ab==DRIVER&&$L==SERVER&&$k==$_GET["username"])unset($xe[$w]);}cookie("adminer_permanent",implode(" ",$xe));}function
auth_error($Yb=null){global$h,$b,$R;$tf=session_name();$l="";if(!$_COOKIE[$tf]&&$_GET[$tf]&&ini_bool("session.use_only_cookies"))$l='Wymagana jest obs≈Çuga sesji w PHP.';elseif(isset($_GET["username"])){if(($_COOKIE[$tf]||$_GET[$tf])&&!$R)$l='Sesja wygas≈Ça, zaloguj siƒô ponownie.';else{$D=&get_session("pwds");if($D!==null){$l=h($Yb?$Yb->getMessage():(is_string($h)?$h:'Nieprawid≈Çowe dane logowania.'));$D=null;}unset_permanent();}}page_header('Zaloguj siƒô',$l,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Brak rozszerzenia',sprintf('≈ªadne z rozszerze≈Ñ PHP umo≈ºliwiajƒÖcych po≈ÇƒÖczenie siƒô z bazƒÖ danych (%s) nie jest dostƒôpne.',implode(", ",$Be)),false);page_footer("auth");exit;}$h=connect();}if(is_string($h)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$R=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$R;$l=($_POST?($_POST["token"]==$R?"":'Nieprawid≈Çowy token CSRF. Spr√≥buj wys≈Çaƒá formularz ponownie.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Przes≈Çano zbyt du≈ºo danych. Zmniejsz objƒôto≈õƒá danych lub zwiƒôksz zmiennƒÖ konfiguracyjnƒÖ %s.','"post_max_size"')));if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}function
connect_error(){global$b,$h,$R,$l,$Bb;$j=array();if(DB!="")page_header('Baza danych'.": ".h(DB),'Nie znaleziono bazy danych.',true);else{if($_POST["db"]&&!$l)queries_redirect(substr(ME,0,-1),'Bazy danych zosta≈Çy usuniƒôte.',drop_databases($_POST["db"]));page_header('Wybierz bazƒô danych',$l,false);echo"<p><a href='".h(ME)."database='>".'Utw√≥rz nowƒÖ bazƒô danych'."</a>\n";foreach(array('privileges'=>'Uprawnienia u≈ºytkownik√≥w','processlist'=>'Lista proces√≥w','variables'=>'Zmienne','status'=>'Status',)as$w=>$W){if(support($w))echo"<a href='".h(ME)."$w='>$W</a>\n";}echo"<p>".sprintf('Wersja %s: %s za pomocƒÖ %s',$Bb[DRIVER],"<b>$h->server_info</b>","<b>$h->extension</b>")."\n","<p>".sprintf('Zalogowany jako: %s',"<b>".h(logged_user())."</b>")."\n";$Ue="<a href='".h(ME)."refresh=1'>".'Od≈õwie≈º'."</a>\n";$j=$b->databases();if($j){$lf=support("scheme");$Va=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr><td>&nbsp;<th>".'Baza danych'."<td>".'Por√≥wnywanie znak√≥w'."<td>".'Tabele'."</thead>\n";foreach($j
as$k){$df=h(ME)."db=".urlencode($k);echo"<tr".odd()."><td>".checkbox("db[]",$k,in_array($k,(array)$_POST["db"])),"<th><a href='$df'>".h($k)."</a>","<td><a href='$df".($lf?"&amp;ns=":"")."&amp;database=' title='".'Zmie≈Ñ bazƒô danych'."'>".nbsp(db_collation($k,$Va))."</a>","<td align='right'><a href='$df&amp;schema=' id='tables-".h($k)."' title='".'Schemat bazy danych'."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".'Usu≈Ñ'."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$R'>\n",$Ue,"</form>\n";}else
echo"<p>$Ue";}page_footer("db");if($j)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$h->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){page_header('Schemat'.": ".h($_GET["ns"]),'Nieprawid≈Çowy schemat.',true);page_footer("ns");exit;}}function
select($G,$i=null,$Gc="",$fe=array()){$nd=array();$u=array();$g=array();$Ha=array();$T=array();$H=array();odd('');for($q=0;$I=$G->fetch_row();$q++){if(!$q){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Wc=0;$Wc<count($I);$Wc++){$m=$G->fetch_field();$A=$m->name;$ee=$m->orgtable;$de=$m->orgname;$H[$m->table]=$ee;if($Gc)$nd[$Wc]=($A=="table"?"table=":($A=="possible_keys"?"indexes=":null));elseif($ee!=""){if(!isset($u[$ee])){$u[$ee]=array();foreach(indexes($ee,$i)as$t){if($t["type"]=="PRIMARY"){$u[$ee]=array_flip($t["columns"]);break;}}$g[$ee]=$u[$ee];}if(isset($g[$ee][$de])){unset($g[$ee][$de]);$u[$ee][$de]=$Wc;$nd[$Wc]=$ee;}}if($m->charsetnr==63)$Ha[$Wc]=true;$T[$Wc]=$m->type;$A=h($A);echo"<th".($ee!=""||$m->name!=$de?" title='".h(($ee!=""?"$ee.":"").$de)."'":"").">".($Gc?"<a href='$Gc".strtolower($A)."' target='_blank' rel='noreferrer'>$A</a>":$A);}echo"</thead>\n";}echo"<tr".odd().">";foreach($I
as$w=>$W){if($W===null)$W="<i>NULL</i>";elseif($Ha[$w]&&!is_utf8($W))$W="<i>".lang(array('%d bajt','%d bajty','%d bajt√≥w'),strlen($W))."</i>";elseif(!strlen($W))$W="&nbsp;";else{$W=h($W);if($T[$w]==254)$W="<code>$W</code>";}if(isset($nd[$w])&&!$g[$nd[$w]]){if($Gc){$O=$I[array_search("table=",$nd)];$z=$nd[$w].urlencode($fe[$O]!=""?$fe[$O]:$O);}else{$z="edit=".urlencode($nd[$w]);foreach($u[$nd[$w]]as$Ta=>$Wc)$z.="&where".urlencode("[".bracket_escape($Ta)."]")."=".urlencode($I[$Wc]);}$W="<a href='".h(ME.$z)."'>$W</a>";}echo"<td>$W";}}echo($q?"</table>":"<p class='message'>".'Brak rekord√≥w.')."\n";return$H;}function
referencable_primary($of){$H=array();foreach(table_status()as$Jf=>$O){if($Jf!=$of&&fk_support($O)){foreach(fields($Jf)as$m){if($m["primary"]){if($H[$Jf]){unset($H[$Jf]);break;}$H[$Jf]=$m;}}}}return$H;}function
textarea($A,$X,$J=10,$Wa=80){echo"<textarea name='$A' rows='$J' cols='$Wa' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($X)){foreach($X
as$W)echo
h($W[0])."\n\n\n";}else
echo
h($X);echo"</textarea>";}function
format_time($xf,$Ob){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$Ob))-array_sum(explode(" ",$xf)))).")</span>";}function
edit_type($w,$m,$Va,$qc=array()){global$Af,$T,$sg,$Ud;echo'<td><select name="',$w,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$m["type"]||isset($T[$m["type"]])?array():array($m["type"]))+$Af+($qc?array('Klucze obce'=>$qc):array()),$m["type"]),'</select>
<td><input name="',$w,'[length]" value="',h($m["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">';echo"<select name='$w"."[collation]'".(ereg('(char|text|enum|set)$',$m["type"])?"":" class='hidden'").'><option value="">('.'por√≥wnywanie znak√≥w'.')'.optionlist($Va,$m["collation"]).'</select>',($sg?"<select name='$w"."[unsigned]'".(!$m["type"]||ereg('(int|float|double|decimal)$',$m["type"])?"":" class='hidden'").'><option>'.optionlist($sg,$m["unsigned"]).'</select>':''),($qc?"<select name='$w"."[on_delete]'".(ereg("`",$m["type"])?"":" class='hidden'")."><option value=''>(".'W przypadku usuniƒôcia'.")".optionlist(explode("|",$Ud),$m["on_delete"])."</select> ":" ");}function
process_length($x){global$Rb;return(preg_match("~^\\s*(?:$Rb)(?:\\s*,\\s*(?:$Rb))*\\s*\$~",$x)&&preg_match_all("~$Rb~",$x,$sd)?implode(",",$sd[0]):preg_replace('~[^0-9,+-]~','',$x));}function
process_type($m,$Ua="COLLATE"){global$sg;return" $m[type]".($m["length"]!=""?"(".process_length($m["length"]).")":"").(ereg('int|float|double|decimal',$m["type"])&&in_array($m["unsigned"],$sg)?" $m[unsigned]":"").(ereg('char|text|enum|set',$m["type"])&&$m["collation"]?" $Ua ".q($m["collation"]):"");}function
process_field($m,$kg){return
array(idf_escape(trim($m["field"])),process_type($kg),($m["null"]?" NULL":" NOT NULL"),(isset($m["default"])?" DEFAULT ".(($m["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$m["default"]))||($m["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$m["default"]))?$m["default"]:q($m["default"])):""),($m["on_update"]?" ON UPDATE $m[on_update]":""),(support("comment")&&$m["comment"]!=""?" COMMENT ".q($m["comment"]):""),($m["auto_increment"]?auto_increment():null),);}function
type_class($S){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$w=>$W){if(ereg("$w|$W",$S))return" class='$w'";}}function
edit_fields($n,$Va,$S="TABLE",$wa=0,$qc=array(),$ab=false){global$h,$Oc;echo'<thead><tr class="wrap">
';if($S=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($S=="TABLE"?'Nazwa kolumny':'Nazwa parametru'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>D≈Çugo≈õƒá
<td>Opcje
';if($S=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td>Warto≈õci domy≈õlne
',(support("comment")?"<td".($ab?"":" class='hidden'").">".'Komentarz':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($n))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.2' alt='+' title='".'Dodaj nastƒôpny'."'>",'<script type="text/javascript">row_count = ',count($n),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($n
as$q=>$m){$q++;$ge=$m[($_POST?"orig":"field")];$zb=(isset($_POST["add"][$q-1])||(isset($m["field"])&&!$_POST["drop_col"][$q]))&&(support("drop_col")||$ge=="");echo'<tr',($zb?"":" style='display: none;'"),'>
',($S=="PROCEDURE"?"<td>".html_select("fields[$q][inout]",explode("|",$Oc),$m["inout"]):""),'<th>';if($zb){echo'<input name="fields[',$q,'][field]" value="',h($m["field"]),'" onchange="',($m["field"]!=""||count($n)>1?"":"editingAddRow(this, $wa); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$q,'][orig]" value="',h($ge),'">
';edit_type("fields[$q]",$m,$Va,$qc);if($S=="TABLE"){echo'<td>',checkbox("fields[$q][null]",1,$m["null"]),'<td><input type="radio" name="auto_increment_col" value="',$q,'"';if($m["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td><?php echo
checkbox("fields[$q][has_default]",1,$m["has_default"]),'<input name="fields[',$q,'][default]" value="',h($m["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($ab?"":" class='hidden'")."><input name='fields[$q][comment]' value='".h($m["comment"])."' maxlength='".($h->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.2' alt='+' title='".'Dodaj nastƒôpny'."' onclick='return !editingAddRow(this, $wa, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.6.2' alt='^' title='".'Przesu≈Ñ w g√≥rƒô'."'>&nbsp;"."<input type='image' class='icon' name='down[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.6.2' alt='v' title='".'Przesu≈Ñ w d√≥≈Ç'."'>&nbsp;":""),($ge==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.6.2' alt='x' title='".'Usu≈Ñ'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$n){ksort($n);$B=0;if($_POST["up"]){$fd=0;foreach($n
as$w=>$m){if(key($_POST["up"])==$w){unset($n[$w]);array_splice($n,$fd,0,array($m));break;}if(isset($m["field"]))$fd=$B;$B++;}}if($_POST["down"]){$sc=false;foreach($n
as$w=>$m){if(isset($m["field"])&&$sc){unset($n[key($_POST["down"])]);array_splice($n,$B,0,array($sc));break;}if(key($_POST["down"])==$w)$sc=$m;$B++;}}$n=array_values($n);if($_POST["add"])array_splice($n,key($_POST["add"]),0,array(array()));}function
normalize_enum($_){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($_[0][0].$_[0][0],$_[0][0],substr($_[0],1,-1))),'\\'))."'";}function
grant($yc,$Je,$g,$Td){if(!$Je)return
true;if($Je==array("ALL PRIVILEGES","GRANT OPTION"))return($yc=="GRANT"?queries("$yc ALL PRIVILEGES$Td WITH GRANT OPTION"):queries("$yc ALL PRIVILEGES$Td")&&queries("$yc GRANT OPTION$Td"));return
queries("$yc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$g, ",$Je).$g).$Td);}function
drop_create($Cb,$ib,$od,$Bd,$_d,$Ad,$A){if($_POST["drop"])return
query_redirect($Cb,$od,$Bd,true,!$_POST["dropped"]);$Db=$A!=""&&($_POST["dropped"]||queries($Cb));$kb=queries($ib);if(!queries_redirect($od,($A!=""?$_d:$Ad),$kb)&&$Db)redirect(null,$Bd);return$Db;}function
remove_definer($F){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$F);}function
tar_file($kc,$eb){$H=pack("a100a8a8a8a12a12",$kc,644,0,0,decoct(strlen($eb)),decoct(time()));$Pa=8*32;for($q=0;$q<strlen($H);$q++)$Pa+=ord($H[$q]);$H.=sprintf("%06o",$Pa)."\0 ";return$H.str_repeat("\0",512-strlen($H)).$eb.str_repeat("\0",511-(strlen($eb)+511)%512);}function
ini_bytes($Nc){$W=ini_get($Nc);switch(strtolower(substr($W,-1))){case'g':$W*=1024;case'm':$W*=1024;case'k':$W*=1024;}return$W;}$Ud="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Rb="'(?:''|[^'\\\\]|\\\\.)*+'";$Oc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$n=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$h->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$n),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$n=fields($a);if(!$n)$l=error();$P=($n?table_status($a):array());page_header(($n&&is_view($P)?'Perspektywa':'Tabela').": ".h($a),$l);$b->selectLinks($P);$Za=$P["Comment"];if($Za!="")echo"<p>".'Komentarz'.": ".h($Za)."\n";if($n){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Kolumna'."<td>".'Typ'.(support("comment")?"<td>".'Komentarz':"")."</thead>\n";foreach($n
as$m){echo"<tr".odd()."><th>".h($m["field"]),"<td title='".h($m["collation"])."'>".h($m["full_type"]).($m["null"]?" <i>NULL</i>":"").($m["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($m["default"])?" [<b>".h($m["default"])."</b>]":""),(support("comment")?"<td>".nbsp($m["comment"]):""),"\n";}echo"</table>\n";if(!is_view($P)){echo"<h3>".'Indeksy'."</h3>\n";$u=indexes($a);if($u){echo"<table cellspacing='0'>\n";foreach($u
as$A=>$t){ksort($t["columns"]);$Ge=array();foreach($t["columns"]as$w=>$W)$Ge[]="<i>".h($W)."</i>".($t["lengths"][$w]?"(".$t["lengths"][$w].")":"");echo"<tr title='".h($A)."'><th>$t[type]<td>".implode(", ",$Ge)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Zmie≈Ñ indeksy'."</a>\n";if(fk_support($P)){echo"<h3>".'Klucze obce'."</h3>\n";$qc=foreign_keys($a);if($qc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'≈πr√≥d≈Ço'."<td>".'Cel'."<td>".'W przypadku usuniƒôcia'."<td>".'W przypadku zmiany'.($v!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($qc
as$A=>$o){echo"<tr title='".h($A)."'>","<th><i>".implode("</i>, <i>",array_map('h',$o["source"]))."</i>","<td><a href='".h($o["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($o["db"]),ME):($o["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($o["ns"]),ME):ME))."table=".urlencode($o["table"])."'>".($o["db"]!=""?"<b>".h($o["db"])."</b>.":"").($o["ns"]!=""?"<b>".h($o["ns"])."</b>.":"").h($o["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$o["target"]))."</i>)","<td>".nbsp($o["on_delete"])."\n","<td>".nbsp($o["on_update"])."\n",($v=="sqlite"?"":'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($A)).'">'.'Zmie≈Ñ'.'</a>');}echo"</table>\n";}if($v!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Dodaj klucz obcy'."</a>\n";}if(support("trigger")){echo"<h3>".'Wyzwalacze'."</h3>\n";$jg=triggers($a);if($jg){echo"<table cellspacing='0'>\n";foreach($jg
as$w=>$W)echo"<tr valign='top'><td>$W[0]<td>$W[1]<th>".h($w)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($w))."'>".'Zmie≈Ñ'."</a>\n";echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Dodaj wyzwalacz'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Schemat bazy danych',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$Lf=array();$Mf=array();$A="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$A-".DB]?"$A-".DB:$A)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$sd,PREG_SET_ORDER);foreach($sd
as$q=>$_){$Lf[$_[1]]=array($_[2],$_[3]);$Mf[]="\n\t'".js_escape($_[1])."': [ $_[2], $_[3] ]";}$ag=0;$Ea=-1;$kf=array();$Te=array();$jd=array();foreach(table_status()as$P){if(!isset($P["Engine"]))continue;$ze=0;$kf[$P["Name"]]["fields"]=array();foreach(fields($P["Name"])as$A=>$m){$ze+=1.25;$m["pos"]=$ze;$kf[$P["Name"]]["fields"][$A]=$m;}$kf[$P["Name"]]["pos"]=($Lf[$P["Name"]]?$Lf[$P["Name"]]:array($ag,0));foreach($b->foreignKeys($P["Name"])as$W){if(!$W["db"]){$hd=$Ea;if($Lf[$P["Name"]][1]||$Lf[$W["table"]][1])$hd=min(floatval($Lf[$P["Name"]][1]),floatval($Lf[$W["table"]][1]))-1;else$Ea-=.1;while($jd[(string)$hd])$hd-=.0001;$kf[$P["Name"]]["references"][$W["table"]][(string)$hd]=array($W["source"],$W["target"]);$Te[$W["table"]][$P["Name"]][(string)$hd]=$W["target"];$jd[(string)$hd]=true;}}$ag=max($ag,$kf[$P["Name"]]["pos"][0]+2.5+$ze);}echo'<div id="schema" style="height: ',$ag,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Mf)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$ag,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($kf
as$A=>$O){echo"<div class='table' style='top: ".$O["pos"][0]."em; left: ".$O["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($A).'"><b>'.h($A)."</b></a>";foreach($O["fields"]as$m){$W='<span'.type_class($m["type"]).' title="'.h($m["full_type"].($m["null"]?" NULL":'')).'">'.h($m["field"]).'</span>';echo"<br>".($m["primary"]?"<i>$W</i>":$W);}foreach((array)$O["references"]as$Rf=>$Ve){foreach($Ve
as$hd=>$Qe){$id=$hd-$Lf[$A][1];$q=0;foreach($Qe[0]as$uf)echo"\n<div class='references' title='".h($Rf)."' id='refs$hd-".($q++)."' style='left: $id"."em; top: ".$O["fields"][$uf]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$id)."em;'></div></div>";}}foreach((array)$Te[$A]as$Rf=>$Ve){foreach($Ve
as$hd=>$g){$id=$hd-$Lf[$A][1];$q=0;foreach($g
as$Qf)echo"\n<div class='references' title='".h($Rf)."' id='refd$hd-".($q++)."' style='left: $id"."em; top: ".$O["fields"][$Qf]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.6.2'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$id)."em;'></div></div>";}}echo"\n</div>\n";}foreach($kf
as$A=>$O){foreach((array)$O["references"]as$Rf=>$Ve){foreach($Ve
as$hd=>$Qe){$Ed=$ag;$wd=-10;foreach($Qe[0]as$w=>$uf){$_e=$O["pos"][0]+$O["fields"][$uf]["pos"];$Ae=$kf[$Rf]["pos"][0]+$kf[$Rf]["fields"][$Qe[1][$w]]["pos"];$Ed=min($Ed,$_e,$Ae);$wd=max($wd,$_e,$Ae);}echo"<div class='references' id='refl$hd' style='left: $hd"."em; top: $Ed"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($wd-$Ed)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Trwa≈Çy link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST){$gb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$w)$gb.="&$w=".urlencode($_POST[$w]);cookie("adminer_export",substr($gb,1));$ec=dump_headers(($a!=""?$a:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$Tc=($_POST["format"]=="sql");if($Tc)echo"-- Adminer $ia ".$Bb[DRIVER]." dump

".($v!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q($h->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$Bf=$_POST["db_style"];$j=array(DB);if(DB==""){$j=$_POST["databases"];if(is_string($j))$j=explode("\n",rtrim(str_replace("\r","",$j),"\n"));}foreach((array)$j
as$k){if($h->select_db($k)){if($Tc&&ereg('CREATE',$Bf)&&($ib=$h->result("SHOW CREATE DATABASE ".idf_escape($k),1))){if($Bf=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($k).";\n";echo($Bf=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ib):$ib).";\n";}if($Tc){if($Bf)echo
use_sql($k).";\n\n";if(in_array("CREATE+ALTER",array($Bf,$_POST["table_style"])))echo"SET @adminer_alter = '';\n\n";$le="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$ef){foreach(get_rows("SHOW $ef STATUS WHERE Db = ".q($k),null,"-- ")as$I)$le.=($Bf!='DROP+CREATE'?"DROP $ef IF EXISTS ".idf_escape($I["Name"]).";;\n":"").remove_definer($h->result("SHOW CREATE $ef ".idf_escape($I["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$I)$le.=($Bf!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($I["Name"]).";;\n":"").remove_definer($h->result("SHOW CREATE EVENT ".idf_escape($I["Name"]),3)).";;\n\n";}if($le)echo"DELIMITER ;;\n\n$le"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Y=array();foreach(table_status()as$P){$O=(DB==""||in_array($P["Name"],(array)$_POST["tables"]));$nb=(DB==""||in_array($P["Name"],(array)$_POST["data"]));if($O||$nb){if(!is_view($P)){if($ec=="tar")ob_start();$b->dumpTable($P["Name"],($O?$_POST["table_style"]:""));if($nb)$b->dumpData($P["Name"],$_POST["data_style"],"SELECT * FROM ".table($P["Name"]));if($Tc&&$_POST["triggers"]&&$O&&($jg=trigger_sql($P["Name"],$_POST["table_style"])))echo"\nDELIMITER ;;\n$jg\nDELIMITER ;\n";if($ec=="tar")echo
tar_file((DB!=""?"":"$k/")."$P[Name].csv",ob_get_clean());elseif($Tc)echo"\n";}elseif($Tc)$Y[]=$P["Name"];}}foreach($Y
as$Bg)$b->dumpTable($Bg,$_POST["table_style"],true);if($ec=="tar")echo
pack("x512");}if($Bf=="CREATE+ALTER"&&$Tc){$F="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $F;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($F)as$I){$Za=q($I["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$I["TABLE_COMMENT"]):$I["TABLE_COMMENT"]);echo"
				WHEN ".q($I["TABLE_NAME"])." THEN
					".(isset($I["ENGINE"])?"IF _engine != '$I[ENGINE]' OR _table_collation != '$I[TABLE_COLLATION]' OR _table_comment != $Za THEN
						ALTER TABLE ".idf_escape($I["TABLE_NAME"])." ENGINE=$I[ENGINE] COLLATE=$I[TABLE_COLLATION] COMMENT=$Za;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($Bf,$_POST["table_style"]))&&$Tc)echo"SELECT @adminer_alter;\n";}}if($Tc)echo"-- ".$h->result("SELECT NOW()")."\n";exit;}page_header('Eksport',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$qb=array('','USE','DROP+CREATE','CREATE');$Nf=array('','DROP+CREATE','CREATE');$ob=array('','TRUNCATE+INSERT','INSERT');if($v=="sql"){$qb[]='CREATE+ALTER';$Nf[]='CREATE+ALTER';$ob[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$I);if(!$I)$I=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($I["events"])){$I["routines"]=$I["events"]=($_GET["dump"]=="");$I["triggers"]=$I["table_style"];}echo"<tr><th>".'Rezultat'."<td>".html_select("output",$b->dumpOutput(),$I["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$I["format"],0)."\n";echo($v=="sqlite"?"":"<tr><th>".'Baza danych'."<td>".html_select('db_style',$qb,$I["db_style"]).(support("routine")?checkbox("routines",1,$I["routines"],'Procedury i funkcje'):"").(support("event")?checkbox("events",1,$I["events"],'Wydarzenia'):"")),"<tr><th>".'Tabele'."<td>".html_select('table_style',$Nf,$I["table_style"]).checkbox("auto_increment",1,$I["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$I["triggers"],'Wyzwalacze'):""),"<tr><th>".'Dane'."<td>".html_select('data_style',$ob,$I["data_style"]),'</table>
<p><input type="submit" value="Eksport">

<table cellspacing="0">
';$De=array();if(DB!=""){$Oa=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Oa onclick='formCheck(this, /^tables\\[/);'>".'Tabele'."</label>","<th style='text-align: right;'><label>".'Dane'."<input type='checkbox' id='check-data'$Oa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Y="";foreach(table_status()as$P){$A=$P["Name"];$Ce=ereg_replace("_.*","",$A);$Oa=($a==""||$a==(substr($a,-1)=="%"?"$Ce%":$A));$Ge="<tr><td>".checkbox("tables[]",$A,$Oa,$A,"checkboxClick(event, this); formUncheck('check-tables');");if(is_view($P))$Y.="$Ge\n";else
echo"$Ge<td align='right'><label>".($P["Engine"]=="InnoDB"&&$P["Rows"]?"~ ":"").$P["Rows"].checkbox("data[]",$A,$Oa,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$De[$Ce]++;}echo$Y;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Baza danych'."</label></thead>\n";$j=$b->databases();if($j){foreach($j
as$k){if(!information_schema($k)){$Ce=ereg_replace("_.*","",$k);echo"<tr><td>".checkbox("databases[]",$k,$a==""||$a=="$Ce%",$k,"formUncheck('check-databases');")."</label>\n";$De[$Ce]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$mc=true;foreach($De
as$w=>$W){if($w!=""&&$W>1){echo($mc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$w%")."'>".h($w)."</a>";$mc=false;}}}elseif(isset($_GET["privileges"])){page_header('Uprawnienia u≈ºytkownik√≥w');$G=$h->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$yc=$G;if(!$G)$G=$h->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($yc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'U≈ºytkownik'."<th>".'Serwer'."<th>&nbsp;</thead>\n";while($I=$G->fetch_assoc())echo'<tr'.odd().'><td>'.h($I["User"])."<td>".h($I["Host"]).'<td><a href="'.h(ME.'user='.urlencode($I["User"]).'&host='.urlencode($I["Host"])).'">'.'Edytuj'."</a>\n";if(!$yc||DB!="")echo"<tr".odd()."><td><input name='user'><td><input name='host' value='localhost'><td><input type='submit' value='".'Edytuj'."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.'Dodaj u≈ºytkownika'."</a>";}elseif(isset($_GET["sql"])){if(!$l&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Ec=&get_session("queries");$Dc=&$Ec[DB];if(!$l&&$_POST["clear"]){$Dc=array();redirect(remove_from_uri("history"));}page_header('Zapytanie SQL',$l);if(!$l&&$_POST){$uc=false;$F=$_POST["query"];if($_POST["webfile"]){$uc=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$F=($uc?fread($uc,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=UPLOAD_ERR_NO_FILE)$F=get_file("sql_file",true);if(is_string($F)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($F)+memory_get_usage()+8e6));if($F!=""&&strlen($F)<1e6){$E=$F.(ereg(";[ \t\r\n]*\$",$F)?"":";");if(!$Dc||reset(end($Dc))!=$E){restart_session();$Dc[]=array($E,time());set_session("queries",$Ec);stop_session();}}$vf="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";$ub=";";$B=0;$Nb=true;$i=connect();if(is_object($i)&&DB!="")$i->select_db(DB);$Ya=0;$Ub=array();$md=0;$qe='[\'"'.($v=="sql"?'`#':($v=="sqlite"?'`[':($v=="mssql"?'[':''))).']|/\\*|-- |$'.($v=="pgsql"?'|\\$[^$]*\\$':'');$bg=microtime();parse_str($_COOKIE["adminer_export"],$pa);$Fb=$b->dumpFormat();unset($Fb["sql"]);while($F!=""){if(!$B&&preg_match("~^$vf*DELIMITER\\s+(\\S+)~i",$F,$_)){$ub=$_[1];$F=substr($F,strlen($_[0]));}else{preg_match('('.preg_quote($ub)."\\s*|$qe)",$F,$_,PREG_OFFSET_CAPTURE,$B);list($sc,$ze)=$_[0];if(!$sc&&$uc&&!feof($uc))$F.=fread($uc,1e5);else{if(!$sc&&rtrim($F)=="")break;$B=$ze+strlen($sc);if($sc&&rtrim($sc)!=$ub){while(preg_match('('.($sc=='/*'?'\\*/':($sc=='['?']':(ereg('^-- |^#',$sc)?"\n":preg_quote($sc)."|\\\\."))).'|$)s',$F,$_,PREG_OFFSET_CAPTURE,$B)){$if=$_[0][0];if(!$if&&$uc&&!feof($uc))$F.=fread($uc,1e5);else{$B=$_[0][1]+strlen($if);if($if[0]!="\\")break;}}}else{$Nb=false;$E=substr($F,0,$ze);$Ya++;$Ge="<pre id='sql-$Ya'><code class='jush-$v'>".shorten_utf8(trim($E),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Ge;ob_flush();flush();}$xf=microtime();if($h->multi_query($E)&&is_object($i)&&preg_match("~^$vf*USE\\b~isU",$E))$i->query($E);do{$G=$h->store_result();$Ob=microtime();$Uf=format_time($xf,$Ob).(strlen($E)<1000?" <a href='".h(ME)."sql=".urlencode(trim($E))."'>".'Edytuj'."</a>":"");if($h->error){echo($_POST["only_errors"]?$Ge:""),"<p class='error'>".'B≈ÇƒÖd w zapytaniu'.": ".error()."\n";$Ub[]=" <a href='#sql-$Ya'>$Ya</a>";if($_POST["error_stops"])break
2;}elseif(is_object($G)){$fe=select($G,$i);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($G->num_rows?lang(array('%d rekord','%d rekordy','%d rekord√≥w'),$G->num_rows):"").$Uf;$r="export-$Ya";$dc=", <a href='#$r' onclick=\"return !toggle('$r');\">".'Eksport'."</a><span id='$r' class='hidden'>: ".html_select("output",$b->dumpOutput(),$pa["output"])." ".html_select("format",$Fb,$pa["format"])."<input type='hidden' name='query' value='".h($E)."'>"." <input type='submit' name='export' value='".'Eksport'."'><input type='hidden' name='token' value='$R'></span>\n";if($i&&preg_match("~^($vf|\\()*SELECT\\b~isU",$E)&&($cc=explain($i,$E))){$r="explain-$Ya";echo", <a href='#$r' onclick=\"return !toggle('$r');\">EXPLAIN</a>$dc","<div id='$r' class='hidden'>\n";select($cc,$i,($v=="sql"?"http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/explain-output.html#explain_":""),$fe);echo"</div>\n";}else
echo$dc;echo"</form>\n";}}else{if(preg_match("~^$vf*(CREATE|DROP|ALTER)$vf+(DATABASE|SCHEMA)\\b~isU",$E)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($h->info)."'>".lang(array('Zapytanie wykonane pomy≈õlnie, zmieniono %d rekord.','Zapytanie wykonane pomy≈õlnie, zmieniono %d rekordy.','Zapytanie wykonane pomy≈õlnie, zmieniono %d rekord√≥w.'),$h->affected_rows)."$Uf\n";}$xf=$Ob;}while($h->next_result());$md+=substr_count($E.$sc,"\n");$F=substr($F,$B);$B=0;}}}}if($Nb)echo"<p class='message'>".'Nic do wykonania.'."\n";elseif($_POST["only_errors"])echo"<p class='message'>".lang(array('Pomy≈õlnie wykonano %d zapytanie.','Pomy≈õlnie wykonano %d zapytania.','Pomy≈õlnie wykonano %d zapyta≈Ñ.'),$Ya-count($Ub)).format_time($bg,microtime())."\n";elseif($Ub&&$Ya>1)echo"<p class='error'>".'B≈ÇƒÖd w zapytaniu'.": ".implode("",$Ub)."\n";}else
echo"<p class='error'>".upload_error($F)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$E=$_GET["sql"];if($_POST)$E=$_POST["query"];elseif($_GET["history"]=="all")$E=$Dc;elseif($_GET["history"]!="")$E=$Dc[$_GET["history"]][0];textarea("query",$E,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Wgranie pliku'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'Wgrywanie plik√≥w jest wy≈ÇƒÖczone.'),'<p>
<input type="submit" value="Wykonaj" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$R,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Zatrzymaj w przypadku b≈Çƒôdu')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Poka≈º tylko b≈Çƒôdy')."\n";print_fieldset("webfile",'Z serwera',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$bb=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$w=>$W){if(extension_loaded($W))$bb[]=".$w";}echo
sprintf('Plik %s na serwerze',"<code>adminer.sql".($bb?"[".implode("|",$bb)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Uruchom z pliku'.'">',"</div></fieldset>\n";if($Dc){print_fieldset("history",'Historia',$_GET["history"]!="");foreach($Dc
as$w=>$W){list($E,$Uf)=$W;echo'<a href="'.h(ME."sql=&history=$w").'">'.'Edytuj'."</a> <span class='time' title='".@date('Y-m-d',$Uf)."'>".@date("H:i:s",$Uf)."</span> <code class='jush-$v'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$E)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Wyczy≈õƒá'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edytuj wszystkie'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$n=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$n):""):where($_GET,$n));$tg=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($n
as$A=>$m){if(!isset($m["privileges"][$tg?"update":"insert"])||$b->fieldName($m)=="")unset($n[$A]);}if($_POST&&!$l&&!isset($_GET["select"])){$od=$_POST["referer"];if($_POST["insert"])$od=($tg?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$od))$od=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $Z"),$od,'Rekord zosta≈Ç usuniƒôty.');else{$M=array();foreach($n
as$A=>$m){$W=process_input($m);if($W!==false&&$W!==null)$M[idf_escape($A)]=($tg?"\n".idf_escape($A)." = $W":$W);}if($tg){if(!$M)redirect($od);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$M),"\nWHERE $Z"),$od,'Rekord zosta≈Ç zaktualizowany.');}else{$G=insert_into($a,$M);$gd=($G?last_id():0);queries_redirect($od,sprintf('Rekord%s zosta≈Ç dodany.',($gd?" $gd":"")),$G);}}}$Jf=$b->tableName(table_status($a));page_header(($tg?'Edytuj':'Dodaj'),$l,array("select"=>array($a,$Jf)),$Jf);$I=null;if($_POST["save"])$I=(array)$_POST["fields"];elseif($Z){$K=array();foreach($n
as$A=>$m){if(isset($m["privileges"]["select"])){$xa=convert_field($m);if($_POST["clone"]&&$m["auto_increment"])$xa="''";if($v=="sql"&&ereg("enum|set",$m["type"]))$xa="1*".idf_escape($A);$K[]=($xa?"$xa AS ":"").idf_escape($A);}}$I=array();if($K){$J=get_rows("SELECT".limit(implode(", ",$K)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$I=(isset($_GET["select"])&&count($J)!=1?null:reset($J));}}if($I===false)echo"<p class='error'>".'Brak rekord√≥w.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$n)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($n
as$A=>$m){echo"<tr><th>".$b->fieldName($m);$tb=$_GET["set"][bracket_escape($A)];$X=($I!==null?($I[$A]!=""&&$v=="sql"&&ereg("enum|set",$m["type"])?(is_array($I[$A])?array_sum($I[$A]):+$I[$A]):$I[$A]):(!$tg&&$m["auto_increment"]?"":(isset($_GET["select"])?false:($tb!==null?$tb:$m["default"]))));if(!$_POST["save"]&&is_string($X))$X=$b->editVal($X,$m);$p=($_POST["save"]?(string)$_POST["function"][$A]:($tg&&$m["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:($X!==null?'':'NULL'))));if($m["type"]=="timestamp"&&$X=="CURRENT_TIMESTAMP"){$X="";$p="now";}input($m,$X,$p);echo"\n";}echo"</table>\n";}echo'<p>
';if($n){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($tg?'Zapisz i kontynuuj edycjƒô':'Zapisz i dodaj nastƒôpny')."' title='Ctrl+Shift+Enter'>\n";}echo($tg?"<input type='submit' name='delete' value='".'Usu≈Ñ'."' onclick=\"return confirm('".'Czy jeste≈õ pewien?'."');\">\n":($_POST||!$n?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$re=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Se=referencable_primary($a);$qc=array();foreach($Se
as$Jf=>$m)$qc[str_replace("`","``",$Jf)."`".str_replace("`","``",$m["field"])]=$Jf;$ie=array();$je=array();if($a!=""){$ie=fields($a);$je=table_status($a);}if($_POST&&!$_POST["fields"])$_POST["fields"]=array();if($_POST&&!$l&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"])query_redirect("DROP TABLE ".table($a),substr(ME,0,-1),'Tabela zosta≈Ça usuniƒôta.');else{$n=array();$va=array();$vg=false;$oc=array();ksort($_POST["fields"]);$he=reset($ie);$ta=" FIRST";foreach($_POST["fields"]as$w=>$m){$o=$qc[$m["type"]];$kg=($o!==null?$Se[$o]:$m);if($m["field"]!=""){if(!$m["has_default"])$m["default"]=null;$tb=eregi_replace(" *on update CURRENT_TIMESTAMP","",$m["default"]);if($tb!=$m["default"]){$m["on_update"]="CURRENT_TIMESTAMP";$m["default"]=$tb;}if($w==$_POST["auto_increment_col"])$m["auto_increment"]=true;$Le=process_field($m,$kg);$va[]=array($m["orig"],$Le,$ta);if($Le!=process_field($he,$he)){$n[]=array($m["orig"],$Le,$ta);if($m["orig"]!=""||$ta)$vg=true;}if($o!==null)$oc[idf_escape($m["field"])]=($a!=""&&$v!="sqlite"?"ADD":" ")." FOREIGN KEY (".idf_escape($m["field"]).") REFERENCES ".table($qc[$m["type"]])." (".idf_escape($kg["field"]).")".(ereg("^($Ud)\$",$m["on_delete"])?" ON DELETE $m[on_delete]":"");$ta=" AFTER ".idf_escape($m["field"]);}elseif($m["orig"]!=""){$vg=true;$n[]=array($m["orig"]);}if($m["orig"]!=""){$he=next($ie);if(!$he)$ta="";}}$te="";if(in_array($_POST["partition_by"],$re)){$ue=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$w=>$W){$X=$_POST["partition_values"][$w];$ue[]="\nPARTITION ".idf_escape($W)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($X!=""?" ($X)":" MAXVALUE");}}$te.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($ue?" (".implode(",",$ue)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif(support("partitioning")&&ereg("partitioned",$je["Create_options"]))$te.="\nREMOVE PARTITIONING";$zd='Tabela zosta≈Ça zmieniona.';if($a==""){cookie("adminer_engine",$_POST["Engine"]);$zd='Tabela zosta≈Ça utworzona.';}$A=trim($_POST["name"]);queries_redirect(ME."table=".urlencode($A),$zd,alter_table($a,$A,($v=="sqlite"&&($vg||$oc)?$va:$n),$oc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$je["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$je["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$te));}}page_header(($a!=""?'Zmie≈Ñ tabelƒô':'Utw√≥rz tabelƒô'),$l,array("table"=>$a),$a);$I=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($T["int"])?"int":(isset($T["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$I=$_POST;if($I["auto_increment_col"])$I["fields"][$I["auto_increment_col"]]["auto_increment"]=true;process_fields($I["fields"]);}elseif($a!=""){$I=$je;$I["name"]=$a;$I["fields"]=array();if(!$_GET["auto_increment"])$I["Auto_increment"]="";foreach($ie
as$m){$m["has_default"]=isset($m["default"]);if($m["on_update"])$m["default"].=" ON UPDATE $m[on_update]";$I["fields"][]=$m;}if(support("partitioning")){$vc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$G=$h->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $vc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($I["partition_by"],$I["partitions"],$I["partition"])=$G->fetch_row();$I["partition_names"]=array();$I["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $vc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$hf){$I["partition_names"][]=$hf["PARTITION_NAME"];$I["partition_values"][]=$hf["PARTITION_DESCRIPTION"];}$I["partition_names"][]="";}}$Va=collations();$Ef=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($Ef&&count($I["fields"])>$Ef)echo"<p class='error'>".h(sprintf('Przekroczono maksymalnƒÖ liczbƒô p√≥l. Zwiƒôksz %s i %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";$Qb=engines();foreach($Qb
as$Pb){if(!strcasecmp($Pb,$I["Engine"])){$I["Engine"]=$Pb;break;}}echo'
<form action="" method="post" id="form">
<p>
Nazwa tabeli: <input name="name" maxlength="64" value="',h($I["name"]),'">
';if($a==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Qb?html_select("Engine",array(""=>"(".'sk≈Çadowanie'.")")+$Qb,$I["Engine"]):""),' ',($Va&&!ereg("sqlite|mssql",$v)?html_select("Collation",array(""=>"(".'por√≥wnywanie znak√≥w'.")")+$Va,$I["Collation"]):""),' <input type="submit" value="Zapisz zmiany">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$ab=($_POST?$_POST["comments"]:$I["Comment"]!="");if(!$_POST&&!$ab){foreach($I["fields"]as$m){if($m["comment"]!=""){$ab=true;break;}}}edit_fields($I["fields"],$Va,"TABLE",$Ef,$qc,$ab);echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($I["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" id="defaults" name="defaults" value="1" checked onclick="columnShow(this.checked, 5);">Warto≈õci domy≈õlne</label>
';if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?checkbox("comments",1,$ab,'Komentarz',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($I["Comment"]).'" maxlength="'.($h->server_info>=5.5?2048:60).'"'.($ab?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Zapisz zmiany">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Usu≈Ñ"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
';if(support("partitioning")){$se=ereg('RANGE|LIST',$I["partition_by"]);print_fieldset("partition",'Partycjonowanie',$I["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$re,$I["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($I["partition"]),'">)
Partycje: <input type="number" name="partitions" class="size" value="',h($I["partitions"]),'"',($se||!$I["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($se?"":" class='hidden'"),'>
<thead><tr><th>Nazwa partycji<th>Warto≈õci</thead>
';foreach($I["partition_names"]as$w=>$W){echo'<tr>','<td><input name="partition_names[]" value="'.h($W).'"'.($w==count($I["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($I["partition_values"][$w]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Kc=array("PRIMARY","UNIQUE","INDEX");$P=table_status($a);if(eregi("MyISAM|M?aria",$P["Engine"]))$Kc[]="FULLTEXT";$u=indexes($a);if($v=="sqlite"){unset($Kc[0]);unset($u[""]);}if($_POST&&!$l&&!$_POST["add"]){$c=array();foreach($_POST["indexes"]as$t){$A=$t["name"];if(in_array($t["type"],$Kc)){$g=array();$ld=array();$M=array();ksort($t["columns"]);foreach($t["columns"]as$w=>$f){if($f!=""){$x=$t["lengths"][$w];$M[]=idf_escape($f).($x?"(".(+$x).")":"");$g[]=$f;$ld[]=($x?$x:null);}}if($g){$bc=$u[$A];if($bc){ksort($bc["columns"]);ksort($bc["lengths"]);if($t["type"]==$bc["type"]&&array_values($bc["columns"])===$g&&(!$bc["lengths"]||array_values($bc["lengths"])===$ld)){unset($u[$A]);continue;}}$c[]=array($t["type"],$A,"(".implode(", ",$M).")");}}}foreach($u
as$A=>$bc)$c[]=array($bc["type"],$A,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indeksy zosta≈Çy zmienione.',alter_indexes($a,$c));}page_header('Indeksy',$l,array("table"=>$a),$a);$n=array_keys(fields($a));$I=array("indexes"=>$u);if($_POST){$I=$_POST;if($_POST["add"]){foreach($I["indexes"]as$w=>$t){if($t["columns"][count($t["columns"])]!="")$I["indexes"][$w]["columns"][]="";}$t=end($I["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen')||array_filter($t["lengths"],'strlen'))$I["indexes"][]=array("columns"=>array(1=>""));}}else{foreach($I["indexes"]as$w=>$t){$I["indexes"][$w]["name"]=$w;$I["indexes"][$w]["columns"][]="";}$I["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Typ indeksu<th>Kolumna (d≈Çugo≈õƒá)<th>Nazwa</thead>
';$Wc=1;foreach($I["indexes"]as$t){echo"<tr><td>".html_select("indexes[$Wc][type]",array(-1=>"")+$Kc,$t["type"],($Wc==count($I["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($t["columns"]);$q=1;foreach($t["columns"]as$w=>$f){echo"<span>".html_select("indexes[$Wc][columns][$q]",array(-1=>"")+$n,$f,($q==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($v=="sql"?"":$_GET["indexes"]."_")."');"),"<input type='number' name='indexes[$Wc][lengths][$q]' class='size' value='".h($t["lengths"][$w])."'> </span>";$q++;}echo"<td><input name='indexes[$Wc][name]' value='".h($t["name"])."'>\n";$Wc++;}echo'</table>
<p>
<input type="submit" value="Zapisz zmiany">
<noscript><p><input type="submit" name="add" value="Dodaj nastƒôpny"></noscript>
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$l&&!isset($_POST["add_x"])){restart_session();$A=trim($_POST["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Baza danych zosta≈Ça usuniƒôta.',drop_databases(array(DB)));}elseif(DB!==$A){if(DB!=""){$_GET["db"]=$A;queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($A),'Nazwa bazy danych zosta≈Ça zmieniona.',rename_database($A,$_POST["collation"]));}else{$j=explode("\n",str_replace("\r","",$A));$Cf=true;$fd="";foreach($j
as$k){if(count($j)==1||$k!=""){if(!create_database($k,$_POST["collation"]))$Cf=false;$fd=$k;}}queries_redirect(ME."db=".urlencode($fd),'Baza danych zosta≈Ça utworzona.',$Cf);}}else{if(!$_POST["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($A).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Baza danych zosta≈Ça zmieniona.');}}page_header(DB!=""?'Zmie≈Ñ bazƒô danych':'Utw√≥rz bazƒô danych',$l,array(),DB);$Va=collations();$A=DB;$Ua=null;if($_POST){$A=$_POST["name"];$Ua=$_POST["collation"];}elseif(DB!="")$Ua=db_collation(DB,$Va);elseif($v=="sql"){foreach(get_vals("SHOW GRANTS")as$yc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$yc,$_)&&$_[1]){$A=stripcslashes(idf_unescape("`$_[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($A,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($A).'</textarea><br>':'<input id="name" name="name" value="'.h($A).'" maxlength="64">')."\n".($Va?html_select("collation",array(""=>"(".'por√≥wnywanie znak√≥w'.")")+$Va,$Ua):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Zapisz zmiany">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Usu≈Ñ'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.2' alt='+' title='".'Dodaj nastƒôpny'."'>\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$l){$z=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$z,'Schemat zosta≈Ç usuniƒôty.');else{$A=trim($_POST["name"]);$z.=urlencode($A);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($A),$z,'Schemat zosta≈Ç utworzony.');elseif($_GET["ns"]!=$A)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($A),$z,'Schemat zosta≈Ç zmieniony.');else
redirect($z);}}page_header($_GET["ns"]!=""?'Zmie≈Ñ schemat':'Utw√≥rz schemat',$l);$I=$_POST;if(!$I)$I=array("name"=>$_GET["ns"]);echo'
<form action="" method="post">
<p><input id="name" name="name" value="',h($I["name"]);?>">
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Zapisz zmiany">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Usu≈Ñ'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Uruchom'.": ".h($da),$l);$ef=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Jc=array();$le=array();foreach($ef["fields"]as$q=>$m){if(substr($m["inout"],-3)=="OUT")$le[$q]="@".idf_escape($m["field"])." AS ".idf_escape($m["field"]);if(!$m["inout"]||substr($m["inout"],0,2)=="IN")$Jc[]=$q;}if(!$l&&$_POST){$La=array();foreach($ef["fields"]as$w=>$m){if(in_array($w,$Jc)){$W=process_input($m);if($W===false)$W="''";if(isset($le[$w]))$h->query("SET @".idf_escape($m["field"])." = $W");}$La[]=(isset($le[$w])?"@".idf_escape($m["field"]):$W);}$F=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$La).")";echo"<p><code class='jush-$v'>".h($F)."</code> <a href='".h(ME)."sql=".urlencode($F)."'>".'Edytuj'."</a>\n";if(!$h->multi_query($F))echo"<p class='error'>".error()."\n";else{$i=connect();if(is_object($i))$i->select_db(DB);do{$G=$h->store_result();if(is_object($G))select($G,$i);else
echo"<p class='message'>".lang(array('Procedura zosta≈Ça uruchomiona, zmieniono %d rekord.','Procedura zosta≈Ça uruchomiona, zmieniono %d rekordy.','Procedura zosta≈Ça uruchomiona, zmieniono %d rekord√≥w.'),$h->affected_rows)."\n";}while($h->next_result());if($le)select($h->query("SELECT ".implode(", ",$le)));}}echo'
<form action="" method="post">
';if($Jc){echo"<table cellspacing='0'>\n";foreach($Jc
as$w){$m=$ef["fields"][$w];$A=$m["field"];echo"<tr><th>".$b->fieldName($m);$X=$_POST["fields"][$A];if($X!=""){if($m["type"]=="enum")$X=+$X;if($m["type"]=="set")$X=array_sum($X);}input($m,$X,(string)$_POST["function"][$A]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Uruchom">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];if($_POST&&!$l&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect("ALTER TABLE ".table($a)."\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($a),'Klucz obcy zosta≈Ç usuniƒôty.');else{$uf=array_filter($_POST["source"],'strlen');ksort($uf);$Qf=array();foreach($uf
as$w=>$W)$Qf[$w]=$_POST["target"][$w];query_redirect("ALTER TABLE ".table($a).($_GET["name"]!=""?"\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$uf)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$Qf)).")".(ereg("^($Ud)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($Ud)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($a),($_GET["name"]!=""?'Klucz obcy zosta≈Ç zmieniony.':'Klucz obcy zosta≈Ç utworzony.'));$l='≈πr√≥d≈Çowa i docelowa kolumna muszƒÖ byƒá tego samego typu, powinien istnieƒá indeks na docelowej kolumnie oraz muszƒÖ istnieƒá dane referencyjne.'."<br>$l";}}page_header('Klucz obcy',$l,array("table"=>$a),$a);$I=array("table"=>$a,"source"=>array(""));if($_POST){$I=$_POST;ksort($I["source"]);if($_POST["add"])$I["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$I["target"]=array();}elseif($_GET["name"]!=""){$qc=foreign_keys($a);$I=$qc[$_GET["name"]];$I["source"][]="";}$uf=array_keys(fields($a));$Qf=($a===$I["table"]?$uf:array_keys(fields($I["table"])));$Re=array();foreach(table_status()as$A=>$P){if(fk_support($P))$Re[]=$A;}echo'
<form action="" method="post">
<p>
';if($I["db"]==""&&$I["ns"]==""){echo'Tabela docelowa:
',html_select("table",$Re,$I["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Zmie≈Ñ"></noscript>
<table cellspacing="0">
<thead><tr><th>≈πr√≥d≈Ço<th>Cel</thead>
';$Wc=0;foreach($I["source"]as$w=>$W){echo"<tr>","<td>".html_select("source[".(+$w)."]",array(-1=>"")+$uf,$W,($Wc==count($I["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$w)."]",$Qf,$I["target"][$w]);$Wc++;}echo'</table>
<p>
W przypadku usuniƒôcia: ',html_select("on_delete",array(-1=>"")+explode("|",$Ud),$I["on_delete"]),' W przypadku zmiany: ',html_select("on_update",array(-1=>"")+explode("|",$Ud),$I["on_update"]),'<p>
<input type="submit" value="Zapisz zmiany">
<noscript><p><input type="submit" name="add" value="Dodaj kolumnƒô"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Usu≈Ñ"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$Db=false;if($_POST&&!$l){$A=trim($_POST["name"]);$Db=drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($A)." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($A)),'Perspektywa zosta≈Ça usuniƒôta.','Perspektywa zosta≈Ça zmieniona.','Perspektywa zosta≈Ça utworzona.',$a);}page_header(($a!=""?'Zmie≈Ñ perspektywƒô':'Utw√≥rz perspektywƒô'),$l,array("table"=>$a),$a);$I=$_POST;if(!$I&&$a!=""){$I=view($a);$I["name"]=$a;}echo'
<form action="" method="post">
<p>Nazwa: <input name="name" value="',h($I["name"]),'" maxlength="64">
<p>';textarea("select",$I["select"]);echo'<p>
';if($Db){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Zapisz zmiany">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Usu≈Ñ"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Rc=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$zf=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$l){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Wydarzenie zosta≈Ço usuniƒôte.');elseif(in_array($_POST["INTERVAL_FIELD"],$Rc)&&isset($zf[$_POST["STATUS"]])){$jf="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Wydarzenie zosta≈Ço zmienione.':'Wydarzenie zosta≈Ço utworzone.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$jf.($aa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$jf)."\n".$zf[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Zmie≈Ñ wydarzenie'.": ".h($aa):'Utw√≥rz wydarzenie'),$l);$I=$_POST;if(!$I&&$aa!=""){$J=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$I=reset($J);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Nazwa<td><input name="EVENT_NAME" value="',h($I["EVENT_NAME"]),'" maxlength="64">
<tr><th>PoczƒÖtek<td><input name="STARTS" value="',h("$I[EXECUTE_AT]$I[STARTS]"),'">
<tr><th>Koniec<td><input name="ENDS" value="',h($I["ENDS"]),'">
<tr><th>Wykonuj co<td><input type="number" name="INTERVAL_VALUE" value="',h($I["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Rc,$I["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$zf,$I["STATUS"]),'<tr><th>Komentarz<td><input name="EVENT_COMMENT" value="',h($I["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$I["ON_COMPLETION"]=="PRESERVE",'Nie kasuj wydarzenia po przeterminowaniu'),'</table>
<p>';textarea("EVENT_DEFINITION",$I["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Zapisz zmiany">
';if($aa!=""){echo'<input type="submit" name="drop" value="Usu≈Ñ"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$ef=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$ff=routine_languages();$Db=false;if($_POST&&!$l&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$M=array();$n=(array)$_POST["fields"];ksort($n);foreach($n
as$m){if($m["field"]!="")$M[]=(ereg("^($Oc)\$",$m["inout"])?"$m[inout] ":"").idf_escape($m["field"]).process_type($m,"CHARACTER SET");}$Db=drop_create("DROP $ef ".idf_escape($da),"CREATE $ef ".idf_escape(trim($_POST["name"]))." (".implode(", ",$M).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$ff)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Procedura zosta≈Ça usuniƒôta.','Procedura zosta≈Ça zmieniona.','Procedura zosta≈Ça utworzona.',$da);}page_header(($da!=""?(isset($_GET["function"])?'Zmie≈Ñ funkcjƒô':'Zmie≈Ñ procedurƒô').": ".h($da):(isset($_GET["function"])?'Utw√≥rz funkcjƒô':'Utw√≥rz procedurƒô')),$l);$Va=get_vals("SHOW CHARACTER SET");sort($Va);$I=array("fields"=>array());if($_POST){$I=$_POST;$I["fields"]=(array)$I["fields"];process_fields($I["fields"]);}elseif($da!=""){$I=routine($da,$ef);$I["name"]=$da;}echo'
<form action="" method="post" id="form">
<p>Nazwa: <input name="name" value="',h($I["name"]),'" maxlength="64">
',($ff?'Jƒôzyk'.": ".html_select("language",$ff,$I["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($I["fields"],$Va,$ef);if(isset($_GET["function"])){echo"<tr><td>".'Zwracany typ';edit_type("returns",$I["returns"],$Va);}echo'</table>
<p>';textarea("definition",$I["definition"]);echo'<p>
<input type="submit" value="Zapisz zmiany">
';if($da!=""){echo'<input type="submit" name="drop" value="Usu≈Ñ"',confirm(),'>';}if($Db){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];if($_POST&&!$l){$z=substr(ME,0,-1);$A=trim($_POST["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$z,'Sekwencja zosta≈Ça usuniƒôta.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($A),$z,'Sekwencja zosta≈Ça utworzona.');elseif($fa!=$A)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($A),$z,'Sekwencja zosta≈Ça zmieniona.');else
redirect($z);}page_header($fa!=""?'Zmie≈Ñ sekwencjƒô'.": ".h($fa):'Utw√≥rz sekwencjƒô',$l);$I=$_POST;if(!$I)$I=array("name"=>$fa);echo'
<form action="" method="post">
<p><input name="name" value="',h($I["name"]),'">
<input type="submit" value="Zapisz zmiany">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Usu≈Ñ'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];if($_POST&&!$l){$z=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$z,'Typ zosta≈Ç usuniƒôty.');else
query_redirect("CREATE TYPE ".idf_escape(trim($_POST["name"]))." $_POST[as]",$z,'Typ zosta≈Ç utworzony.');}page_header($ga!=""?'Zmie≈Ñ typ'.": ".h($ga):'Utw√≥rz typ',$l);$I=$_POST;if(!$I)$I=array("as"=>"AS ");echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Usu≈Ñ'."'".confirm().">\n";else{echo"<input name='name' value='".h($I['name'])."'>\n";textarea("as",$I["as"]);echo"<p><input type='submit' value='".'Zapisz zmiany'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$ig=trigger_options();$gg=array("INSERT","UPDATE","DELETE");$Db=false;if($_POST&&!$l&&in_array($_POST["Timing"],$ig["Timing"])&&in_array($_POST["Event"],$gg)&&in_array($_POST["Type"],$ig["Type"])){$Vf=" $_POST[Timing] $_POST[Event]";$Td=" ON ".table($a);$Db=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($v=="pgsql"?$Td:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($v=="mssql"?$Td.$Vf:$Vf.$Td).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($a),'Wyzwalacz zosta≈Ç usuniƒôty.','Wyzwalacz zosta≈Ç zmieniony.','Wyzwalacz zosta≈Ç utworzony.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Zmie≈Ñ wyzwalacz'.": ".h($_GET["name"]):'Utw√≥rz wyzwalacz'),$l,array("table"=>$a));$I=$_POST;if(!$I)$I=trigger($_GET["name"])+array("Trigger"=>$a."_bi");echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Czas<td>',html_select("Timing",$ig["Timing"],$I["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Wydarzenie<td>',html_select("Event",$gg,$I["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$ig["Type"],$I["Type"]),'</table>
<p>Nazwa: <input name="Trigger" value="',h($I["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$I["Statement"]);echo'<p>
<input type="submit" value="Zapisz zmiany">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Usu≈Ñ"',confirm(),'>';}if($Db){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Je=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$I){foreach(explode(",",($I["Privilege"]=="Grant option"?"":$I["Context"]))as$fb)$Je[$fb][$I["Privilege"]]=$I["Comment"];}$Je["Server Admin"]+=$Je["File access on server"];$Je["Databases"]["Create routine"]=$Je["Procedures"]["Create routine"];unset($Je["Procedures"]["Create routine"]);$Je["Columns"]=array();foreach(array("Select","Insert","Update","References")as$W)$Je["Columns"][$W]=$Je["Tables"][$W];unset($Je["Server Admin"]["Usage"]);foreach($Je["Tables"]as$w=>$W)unset($Je["Databases"][$w]);$Kd=array();if($_POST){foreach($_POST["objects"]as$w=>$W)$Kd[$W]=(array)$Kd[$W]+(array)$_POST["grants"][$w];}$zc=array();$Rd="";if(isset($_GET["host"])&&($G=$h->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($I=$G->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$I[0],$_)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$_[1],$sd,PREG_SET_ORDER)){foreach($sd
as$W){if($W[1]!="USAGE")$zc["$_[2]$W[2]"][$W[1]]=true;if(ereg(' WITH GRANT OPTION',$I[0]))$zc["$_[2]$W[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$I[0],$_))$Rd=$_[1];}}if($_POST&&!$l){$Sd=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");$Ld=q($_POST["user"])."@".q($_POST["host"]);$ve=q($_POST["pass"]);if($_POST["drop"])query_redirect("DROP USER $Sd",ME."privileges=",'U≈ºytkownik zosta≈Ç usuniƒôty.');else{$kb=false;if($Sd!=$Ld){$kb=queries(($h->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ld IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $ve");$l=!$kb;}elseif($_POST["pass"]!=$Rd||!$_POST["hashed"])queries("SET PASSWORD FOR $Ld = ".($_POST["hashed"]?$ve:"PASSWORD($ve)"));if(!$l){$bf=array();foreach($Kd
as$Od=>$yc){if(isset($_GET["grant"]))$yc=array_filter($yc);$yc=array_keys($yc);if(isset($_GET["grant"]))$bf=array_diff(array_keys(array_filter($Kd[$Od],'strlen')),$yc);elseif($Sd==$Ld){$Qd=array_keys((array)$zc[$Od]);$bf=array_diff($Qd,$yc);$yc=array_diff($yc,$Qd);unset($zc[$Od]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Od,$_)&&(!grant("REVOKE",$bf,$_[2]," ON $_[1] FROM $Ld")||!grant("GRANT",$yc,$_[2]," ON $_[1] TO $Ld"))){$l=true;break;}}}if(!$l&&isset($_GET["host"])){if($Sd!=$Ld)queries("DROP USER $Sd");elseif(!isset($_GET["grant"])){foreach($zc
as$Od=>$bf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Od,$_))grant("REVOKE",array_keys($bf),$_[2]," ON $_[1] FROM $Ld");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'U≈ºytkownik zosta≈Ç zmieniony.':'U≈ºytkownik zosta≈Ç dodany.'),!$l);if($kb)$h->query("DROP USER $Ld");}}page_header((isset($_GET["host"])?'U≈ºytkownik'.": ".h("$ha@$_GET[host]"):'Dodaj u≈ºytkownika'),$l,array("privileges"=>array('','Uprawnienia u≈ºytkownik√≥w')));if($_POST){$I=$_POST;$zc=$Kd;}else{$I=$_GET+array("host"=>$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$I["pass"]=$Rd;if($Rd!="")$I["hashed"]=true;$zc[(DB==""||$zc?"":idf_escape(addcslashes(DB,"%_"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Serwer<td><input name="host" maxlength="60" value="',h($I["host"]),'">
<tr><th>U≈ºytkownik<td><input name="user" maxlength="16" value="',h($I["user"]),'">
<tr><th>Has≈Ço<td><input id="pass" name="pass" value="',h($I["pass"]),'">
';if(!$I["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$I["hashed"],'Zahashowane',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Uprawnienia u≈ºytkownik√≥w'."</a>";$q=0;foreach($zc
as$Od=>$yc){echo'<th>'.($Od!="*.*"?"<input name='objects[$q]' value='".h($Od)."' size='10'>":"<input type='hidden' name='objects[$q]' value='*.*' size='10'>*.*");$q++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Serwer',"Databases"=>'Baza danych',"Tables"=>'Tabela',"Columns"=>'Kolumna',"Procedures"=>'Procedura',)as$fb=>$vb){foreach((array)$Je[$fb]as$Ie=>$Za){echo"<tr".odd()."><td".($vb?">$vb<td":" colspan='2'").' lang="en" title="'.h($Za).'">'.h($Ie);$q=0;foreach($zc
as$Od=>$yc){$A="'grants[$q][".h(strtoupper($Ie))."]'";$X=$yc[strtoupper($Ie)];if($fb=="Server Admin"&&$Od!=(isset($zc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$A><option><option value='1'".($X?" selected":"").">".'Uprawnienia'."<option value='0'".($X=="0"?" selected":"").">".'Usu≈Ñ uprawnienia'."</select>";else
echo"<td align='center'><input type='checkbox' name=$A value='1'".($X?" checked":"").($Ie=="All privileges"?" id='grants-$q-all'":($Ie=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$q-all');\"")).">";$q++;}}}echo"</table>\n",'<p>
<input type="submit" value="Zapisz zmiany">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Usu≈Ñ"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$l){$cd=0;foreach((array)$_POST["kill"]as$W){if(queries("KILL ".(+$W)))$cd++;}queries_redirect(ME."processlist=",lang(array('Przerwano %d wƒÖtek.','Przerwano %d wƒÖtki.','Przerwano %d wƒÖtk√≥w.'),$cd),$cd||!$_POST["kill"]);}page_header('Lista proces√≥w',$l);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$q=-1;foreach(process_list()as$q=>$I){if(!$q)echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($I))."</thead>\n";echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$I["Id"],0):"");foreach($I
as$w=>$W)echo"<td>".(($v=="sql"&&$w=="Info"&&ereg("Query|Killed",$I["Command"])&&$W!="")||($v=="pgsql"&&$w=="current_query"&&$W!="<IDLE>")||($v=="oracle"&&$w=="sql_text"&&$W!="")?"<code class='jush-$v'>".shorten_utf8($W,100,"</code>").' <a href="'.h(ME.($I["db"]!=""?"db=".urlencode($I["db"])."&":"")."sql=".urlencode($W)).'">'.'Edytuj'.'</a>':nbsp($W));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($q+1)."/".sprintf('%d w sumie',$h->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Przerwij wykonywanie'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$P=table_status($a);$u=indexes($a);$n=fields($a);$qc=column_foreign_keys($a);$Pd="";if($P["Oid"]=="t"){$Pd=($v=="sqlite"?"rowid":"oid");$u[]=array("type"=>"PRIMARY","columns"=>array($Pd));}parse_str($_COOKIE["adminer_import"],$qa);$cf=array();$g=array();$Tf=null;foreach($n
as$w=>$m){$A=$b->fieldName($m);if(isset($m["privileges"]["select"])&&$A!=""){$g[$w]=html_entity_decode(strip_tags($A));if(is_shortable($m))$Tf=$b->selectLengthProcess();}$cf+=$m["privileges"];}list($K,$_c)=$b->selectColumnsProcess($g,$u);$Sc=count($_c)<count($K);$Z=$b->selectSearchProcess($n,$u);$ce=$b->selectOrderProcess($n,$u);$y=$b->selectLimitProcess();$vc=($K?implode(", ",$K):"*".($Pd?", $Pd":""));if($v=="sql"){foreach($g
as$w=>$W){$xa=convert_field($n[$w]);if($xa)$vc.=", $xa AS ".idf_escape($w);}}$vc.="\nFROM ".table($a);$Ac=($_c&&$Sc?"\nGROUP BY ".implode(", ",$_c):"").($ce?"\nORDER BY ".implode(", ",$ce):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$pg=>$I){$xa=convert_field($n[key($I)]);echo$h->result("SELECT".limit(($xa?$xa:idf_escape(key($I)))." FROM ".table($a)," WHERE ".where_check($pg,$n).($Z?" AND ".implode(" AND ",$Z):"").($ce?" ORDER BY ".implode(", ",$ce):""),1));}exit;}if($_POST&&!$l){$Fg="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Ee=$rg=null;foreach($u
as$t){if($t["type"]=="PRIMARY"){$Ee=array_flip($t["columns"]);$rg=($K?$Ee:array());break;}}foreach((array)$rg
as$w=>$W){if(in_array(idf_escape($w),$K))unset($rg[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$rg===array()){$Eg=$Z;if(is_array($_POST["check"]))$Eg[]="($Fg)";$F="SELECT $vc".($Eg?"\nWHERE ".implode(" AND ",$Eg):"").$Ac;}else{$ng=array();foreach($_POST["check"]as$W)$ng[]="(SELECT".limit($vc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W,$n).$Ac,1).")";$F=implode(" UNION ALL ",$ng);}$b->dumpData($a,"table",$F);exit;}if(!$b->selectEmailProcess($Z,$qc)){if($_POST["save"]||$_POST["delete"]){$G=true;$ra=0;$F=table($a);$M=array();if(!$_POST["delete"]){foreach($g
as$A=>$W){$W=process_input($n[$A]);if($W!==null){if($_POST["clone"])$M[idf_escape($A)]=($W!==false?$W:idf_escape($A));elseif($W!==false)$M[]=idf_escape($A)." = $W";}}$F.=($_POST["clone"]?" (".implode(", ",array_keys($M)).")\nSELECT ".implode(", ",$M)."\nFROM ".table($a):" SET\n".implode(",\n",$M));}if($_POST["delete"]||$M){$Xa="UPDATE";if($_POST["delete"]){$Xa="DELETE";$F="FROM $F";}if($_POST["clone"]){$Xa="INSERT";$F="INTO $F";}if($_POST["all"]||($rg===array()&&$_POST["check"])||$Sc){$G=queries("$Xa $F".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $Fg"));$ra=$h->affected_rows;}else{foreach((array)$_POST["check"]as$W){$G=queries($Xa.limit1($F,"\nWHERE ".where_check($W,$n)));if(!$G)break;$ra+=$h->affected_rows;}}}$zd=lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekord√≥w.'),$ra);if($_POST["clone"]&&$G&&$ra==1){$gd=last_id();if($gd)$zd=sprintf('Rekord%s zosta≈Ç dodany.'," $gd");}queries_redirect(remove_from_uri("page"),$zd,$G);}elseif(!$_POST["import"]){if(!$_POST["val"])$l='Ctrl+kliknij warto≈õƒá, aby jƒÖ edytowaƒá.';else{$G=true;$ra=0;foreach($_POST["val"]as$pg=>$I){$M=array();foreach($I
as$w=>$W){$w=bracket_escape($w,1);$M[]=idf_escape($w)." = ".(ereg('char|text',$n[$w]["type"])||$W!=""?$b->processInput($n[$w],$W):"NULL");}$F=table($a)." SET ".implode(", ",$M);$Eg=" WHERE ".where_check($pg,$n).($Z?" AND ".implode(" AND ",$Z):"");$G=queries("UPDATE".($Sc?" $F$Eg":limit1($F,$Eg)));if(!$G)break;$ra+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekord√≥w.'),$ra),$G);}}elseif(is_string($jc=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($qa["output"])."&format=".urlencode($_POST["separator"]));$G=true;$Wa=array_keys($n);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$jc,$sd);$ra=count($sd[0]);begin();$pf=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($sd[0]as$w=>$W){preg_match_all("~((?>\"[^\"]*\")+|[^$pf]*)$pf~",$W.$pf,$td);if(!$w&&!array_diff($td[1],$Wa)){$Wa=$td[1];$ra--;}else{$M=array();foreach($td[1]as$q=>$Ta)$M[idf_escape($Wa[$q])]=($Ta==""&&$n[$Wa[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ta))));$G=insert_update($a,$M,$Ee);if(!$G)break;}}if($G)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d rekord zosta≈Ç zaimportowany.','%d rekordy zosta≈Çy zaimportowane.','%d rekord√≥w zosta≈Ço zaimportowanych.'),$ra),$G);queries("ROLLBACK");}else$l=upload_error($jc);}}$Jf=$b->tableName($P);if(is_ajax())ob_start();page_header('poka≈º'.": $Jf",$l);$M=null;if(isset($cf["insert"])){$M="";foreach((array)$_GET["where"]as$W){if(count($qc[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!ereg('[_%]',$W["val"]))))$M.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}$b->selectLinks($P,$M);if(!$g)echo"<p class='error'>".'Nie uda≈Ço siƒô pobraƒá danych z tabeli'.($n?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($K,$g);$b->selectSearchPrint($Z,$g,$u);$b->selectOrderPrint($ce,$g,$u);$b->selectLimitPrint($y);$b->selectLengthPrint($Tf);$b->selectActionPrint($u);echo"</form>\n";$C=$_GET["page"];if($C=="last"){$tc=$h->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$C=floor(max(0,$tc-1)/$y);}$F=$b->selectQueryBuild($K,$Z,$_c,$ce,$y,$C);if(!$F)$F="SELECT".limit((+$y&&$_c&&$Sc&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").$vc,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Ac,($y!=""?+$y:null),($C?$y*$C:0),"\n");echo$b->selectQuery($F);$G=$h->query($F);if(!$G)echo"<p class='error'>".error()."\n";else{if($v=="mssql")$G->seek($y*$C);$Mb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$J=array();while($I=$G->fetch_assoc()){if($C&&$v=="oracle")unset($I["RNUM"]);$J[]=$I;}if($_GET["page"]!="last")$tc=(+$y&&$_c&&$Sc?($v=="sql"?$h->result(" SELECT FOUND_ROWS()"):$h->result("SELECT COUNT(*) FROM ($F) x")):count($J));if(!$J)echo"<p class='message'>".'Brak rekord√≥w.'."\n";else{$Da=$b->backwardKeys($a,$Jf);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$_c&&$K?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edytuj'."</a>");$Jd=array();$xc=array();reset($K);$Oe=1;foreach($J[0]as$w=>$W){if($w!=$Pd){$W=$_GET["columns"][key($K)];$m=$n[$K?($W?$W["col"]:current($K)):$w];$A=($m?$b->fieldName($m,$Oe):"*");if($A!=""){$Oe++;$Jd[$w]=$A;$f=idf_escape($w);$Gc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$vb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Gc.($ce[0]==$f||$ce[0]==$w||(!$ce&&$Sc&&$_c[0]==$f)?$vb:'')).'">';echo(!$K||$W?apply_sql_function($W["fun"],$A):h(current($K)))."</a>";echo"<span class='column hidden'>","<a href='".h($Gc.$vb)."' title='".'malejƒÖco'."' class='text'> ‚Üì</a>";if(!$W["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'Szukaj'.'" class="text jsonly"> =</a>';echo"</span>";}$xc[$w]=$W["fun"];next($K);}}$ld=array();if($_GET["modify"]){foreach($J
as$I){foreach($I
as$w=>$W)$ld[$w]=max($ld[$w],min(40,strlen(utf8_decode($W))));}}echo($Da?"<th>".'Relacje':"")."</thead>\n";if(is_ajax()){if($y%2==1&&$C%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($J,$qc)as$Id=>$I){$og=unique_array($J[$Id],$u);$pg="";foreach($og
as$w=>$W)$pg.="&".($W!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($W):"null%5B%5D=".urlencode($w));echo"<tr".odd().">".(!$_c&&$K?"":"<td>".checkbox("check[]",substr($pg,1),in_array(substr($pg,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Sc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$pg)."'>".'edytuj'."</a>"));foreach($I
as$w=>$W){if(isset($Jd[$w])){$m=$n[$w];if($W!=""&&(!isset($Mb[$w])||$Mb[$w]!=""))$Mb[$w]=(is_mail($W)?$Jd[$w]:"");$z="";$W=$b->editVal($W,$m);if($W!==null){if(ereg('blob|bytea|raw|file',$m["type"])&&$W!="")$z=ME.'download='.urlencode($a).'&field='.urlencode($w).$pg;if($W==="")$W="&nbsp;";elseif(is_utf8($W)){if($Tf!=""&&is_shortable($m))$W=shorten_utf8($W,max(0,+$Tf));else$W=h($W);}if(!$z){foreach((array)$qc[$w]as$o){if(count($qc[$w])==1||end($o["source"])==$w){$z="";foreach($o["source"]as$q=>$uf)$z.=where_link($q,$o["target"][$q],$J[$Id][$uf]);$z=($o["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($o["db"]),ME):ME).'select='.urlencode($o["table"]).$z;if(count($o["source"])==1)break;}}}if($w=="COUNT(*)"){$z=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$og))$z.=where_link($q++,$V["col"],$V["val"],$V["op"]);}foreach($og
as$Yc=>$V)$z.=where_link($q++,$Yc,$V);}}if(!$z){if(is_mail($W))$z="mailto:$W";if($Me=is_url($I[$w]))$z=($Me=="http"&&$ba?$I[$w]:"$Me://www.adminer.org/redirect/?url=".urlencode($I[$w]));}$r=h("val[$pg][".bracket_escape($w)."]");$X=$_POST["val"][$pg][bracket_escape($w)];$Cc=h($X!==null?$X:$I[$w]);$qd=strpos($W,"<i>...</i>");$Ib=is_utf8($W)&&$J[$Id][$w]==$I[$w]&&!$xc[$w];$Sf=ereg('text|lob',$m["type"]);echo(($_GET["modify"]&&$Ib)||$X!==null?"<td>".($Sf?"<textarea name='$r' cols='30' rows='".(substr_count($I[$w],"\n")+1)."'>$Cc</textarea>":"<input name='$r' value='$Cc' size='$ld[$w]'>"):"<td id='$r' onclick=\"selectClick(this, event, ".($qd?2:($Sf?1:0)).($Ib?"":", '".h('U≈ºyj linku edycji aby zmieniƒá tƒô warto≈õƒá.')."'").");\">".$b->selectVal($W,$z,$m));}}if($Da)echo"<td>";$b->backwardKeysPrint($Da,$J[$Id]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$_c&&$K?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($J||$C)&&!is_ajax()){$Xb=true;if($_GET["page"]!="last"&&+$y&&!$Sc&&($tc>=$y||$C)){$tc=found_rows($P,$Z);if($tc<max(1e4,2*($C+1)*$y))$tc=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):"")));else$Xb=false;}echo"<p class='pages'>";if(+$y&&($tc===false||$tc>$y)){$vd=($tc===false?$C+(count($J)>=$y?2:1):floor(($tc-1)/$y));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($C+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$C).($C>5?" ...":"");for($q=max(1,$C-4);$q<min($vd,$C+5);$q++)echo
pagination($q,$C);echo($C+5<$vd?" ...":"").($Xb&&$tc!==false?pagination($vd,$C):' <a href="'.h(remove_from_uri("page")."&page=last").'">'.'ostatni'."</a>");}echo($tc!==false?" (".($Xb?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekord√≥w'),$tc).")":""),(+$y&&($tc===false?count($J)+1:$tc-$C*$y)>$y?' <a href="'.h(remove_from_uri("page")."&page=".($C+1)).'" onclick="return !selectLoadMore(this, '.(+$y).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'')," ".checkbox("all",1,0,'wybierz wszystkie')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edytuj</legend><div>
<input type="submit" value="Zapisz zmiany"',($_GET["modify"]?'':' title="'.'Ctrl+kliknij warto≈õƒá, aby jƒÖ edytowaƒá.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="Usu≈Ñ" onclick="return confirm('Czy jeste≈õ pewien? (' + (this.form['all'].checked ? <?php echo$tc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$rc=$b->dumpFormat();if($rc){print_fieldset("export",'Eksport');$me=$b->dumpOutput();echo($me?html_select("output",$me,$qa["output"])." ":""),html_select("format",$rc,$qa["format"])," <input type='submit' name='export' value='".'Eksport'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$J);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$qa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Mb,'strlen'),$g);echo"<p><input type='hidden' name='token' value='$R'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$yf=isset($_GET["status"]);page_header($yf?'Status':'Zmienne');$_g=($yf?show_status():show_variables());if(!$_g)echo"<p class='message'>".'Brak rekord√≥w.'."\n";else{echo"<table cellspacing='0'>\n";foreach($_g
as$w=>$W){echo"<tr>","<th><code class='jush-".$v.($yf?"status":"set")."'>".h($w)."</code>","<td>".nbsp($W);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Gf=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$P){$r=js_escape($P["Name"]);json_row("Comment-$r",nbsp($P["Comment"]));if(!is_view($P)){foreach(array("Engine","Collation")as$w)json_row("$w-$r",nbsp($P[$w]));foreach($Gf+array("Auto_increment"=>0,"Rows"=>0)as$w=>$W){if($P[$w]!=""){$W=number_format($P[$w],0,'.',' ');json_row("$w-$r",($w=="Rows"&&$W&&$P["Engine"]==($wf=="pgsql"?"table":"InnoDB")?"~ $W":$W));if(isset($Gf[$w]))$Gf[$w]+=($P["Engine"]!="InnoDB"||$w!="Data_free"?$P[$w]:0);}elseif(array_key_exists($w,$P))json_row("$w-$r");}}}foreach($Gf
as$w=>$W)json_row("sum-$w",number_format($W,0,'.',' '));json_row("");}elseif($_GET["script"]=="kill")$h->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$k=>$W)json_row("tables-".js_escape($k),$W);json_row("");}exit;}else{$Pf=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Pf&&!$l&&!$_POST["search"]){$G=true;$zd="";if($v=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$G=truncate_tables($_POST["tables"]);$zd='Tabele zosta≈Çy opr√≥≈ºnione.';}elseif($_POST["move"]){$G=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$zd='Tabele zosta≈Çy przeniesione.';}elseif($_POST["copy"]){$G=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$zd='Tabele zosta≈Çy skopiowane.';}elseif($_POST["drop"]){if($_POST["views"])$G=drop_views($_POST["views"]);if($G&&$_POST["tables"])$G=drop_tables($_POST["tables"]);$zd='Tabele zosta≈Çy usuniƒôte.';}elseif($v!="sql"){$G=($v=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$zd='Tabele zosta≈Çy zoptymalizowane.';}elseif($_POST["tables"]&&($G=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($I=$G->fetch_assoc())$zd.="<b>".h($I["Table"])."</b>: ".h($I["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$zd,$G);}page_header(($_GET["ns"]==""?'Baza danych'.": ".h(DB):'Schemat'.": ".h($_GET["ns"])),$l,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tabele i perspektywy'."</h3>\n";$Of=tables_list();if(!$Of)echo"<p class='message'>".'Brak tabel.'."\n";else{echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Szukaj'."'>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Tabela','<td>'.'Sk≈Çadowanie','<td>'.'Por√≥wnywanie znak√≥w','<td>'.'Rozmiar danych','<td>'.'Rozmiar indeks√≥w','<td>'.'Wolne miejsce','<td>'.'Auto Increment','<td>'.'Liczba rekord√≥w',(support("comment")?'<td>'.'Komentarz':''),"</thead>\n";foreach($Of
as$A=>$S){$Bg=($S!==null&&!eregi("table",$S));echo'<tr'.odd().'><td>'.checkbox(($Bg?"views[]":"tables[]"),$A,in_array($A,$Pf,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($A).'" title="'.'Struktura tabeli'.'">'.h($A).'</a>';if($Bg){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($A).'" title="'.'Zmie≈Ñ perspektywƒô'.'">'.'Perspektywa'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($A).'" title="'.'Poka≈º dane'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Zmie≈Ñ tabelƒô'),"Index_length"=>array("indexes",'Zmie≈Ñ indeksy'),"Data_free"=>array("edit",'Nowy rekord'),"Auto_increment"=>array("auto_increment=1&create",'Zmie≈Ñ tabelƒô'),"Rows"=>array("select",'Poka≈º dane'),)as$w=>$z)echo($z?"<td align='right'><a href='".h(ME."$z[0]=").urlencode($A)."' id='$w-".h($A)."' title='$z[1]'>?</a>":"<td id='$w-".h($A)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($A)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d w sumie',count($Of)),"<td>".nbsp($v=="sql"?$h->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$w)echo"<td align='right' id='sum-$w'>&nbsp;";echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(ereg('^(sql|sqlite|pgsql)$',$v)?($v!="sqlite"?"<input type='submit' value='".'Analizuj'."'> ":"")."<input type='submit' name='optimize' value='".'Optymalizuj'."'> ":"").($v=="sql"?"<input type='submit' name='check' value='".'Sprawd≈∫'."'> <input type='submit' name='repair' value='".'Napraw'."'> ":"")."<input type='submit' name='truncate' value='".'Opr√≥≈ºnij'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Usu≈Ñ'."'".confirm("formChecked(this, /tables|views/)").">\n";$j=(support("scheme")?schemas():$b->databases());if(count($j)!=1&&$v!="sqlite"){$k=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Przenie≈õ do innej bazy danych'.": ",($j?html_select("target",$j,$k):'<input name="target" value="'.h($k).'">')," <input type='submit' name='move' value='".'Przenie≈õ'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Kopiuj'."'>":""),"\n";}echo"<input type='hidden' name='token' value='$R'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Utw√≥rz tabelƒô'."</a>\n";if(support("view"))echo'<a href="'.h(ME).'view=">'.'Utw√≥rz perspektywƒô'."</a>\n";if(support("routine")){echo"<h3>".'Procedury i funkcje'."</h3>\n";$gf=routines();if($gf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Nazwa'.'<td>'.'Typ'.'<td>'.'Zwracany typ'."<td>&nbsp;</thead>\n";odd('');foreach($gf
as$I){echo'<tr'.odd().'>','<th><a href="'.h(ME).($I["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($I["ROUTINE_NAME"]).'">'.h($I["ROUTINE_NAME"]).'</a>','<td>'.h($I["ROUTINE_TYPE"]),'<td>'.h($I["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($I["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($I["ROUTINE_NAME"]).'">'.'Zmie≈Ñ'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Utw√≥rz procedurƒô'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Utw√≥rz funkcjƒô'."</a>\n";}if(support("sequence")){echo"<h3>".'Sekwencje'."</h3>\n";$qf=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($qf){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Nazwa'."</thead>\n";odd('');foreach($qf
as$W)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Utw√≥rz sekwencjƒô'."</a>\n";}if(support("type")){echo"<h3>".'Typy u≈ºytkownika'."</h3>\n";$T=types();if($T){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Nazwa'."</thead>\n";odd('');foreach($T
as$W)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Utw√≥rz typ'."</a>\n";}if(support("event")){echo"<h3>".'Wydarzenia'."</h3>\n";$J=get_rows("SHOW EVENTS");if($J){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Nazwa'."<td>".'Harmonogram'."<td>".'PoczƒÖtek'."<td>".'Koniec'."</thead>\n";foreach($J
as$I){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($I["Name"]).'">'.h($I["Name"])."</a>","<td>".($I["Execute at"]?'O danym czasie'."<td>".$I["Execute at"]:'Wykonuj co'." ".$I["Interval value"]." ".$I["Interval field"]."<td>$I[Starts]"),"<td>$I[Ends]";}echo"</table>\n";$Wb=$h->result("SELECT @@event_scheduler");if($Wb&&$Wb!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Wb)."\n";}echo'<p><a href="'.h(ME).'event=">'.'Utw√≥rz wydarzenie'."</a>\n";}if($Of)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();