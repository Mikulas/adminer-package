<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.2
*/error_reporting(6135);$Ab=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Ab||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Yd=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Yd)$$V=$Yd;}}@ini_set("mbstring.internal_encoding","8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0Ñ\0\n @\0¥CÑË\"\0`E„Q∏‡ˇá?¿tvM'îJd¡d\\åb0\0ƒ\"ô¿f”à§Ós5õœÁ—AùXPaJì0Ñ•ë8Ñ#RäT©ëz`à#.©«cÌX√˛»Ä?¿-\0°Im?†.´M∂Ä\0»Ø(Ãâ˝¿/(%å\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©ñ®aç'3I– d´¬!S±Êæ:4Áß+MdÂgØã¨«É°Óˆtô∞cëÜ£ı„È†b{èH(∆ì—ît1…)t⁄}F¶p0ôï8Ë\\82õDL>Ç9`'C°º€ó889§» éxQÿ˛\0Óe4ôÕQ òl¡≠P±øVâ≈bÒëóΩT4≤\\ûW/ôÊÈ’\nêÄ` 7\"hƒqπË4ZM6£T÷\r≠r\\ñ∂C{h€7\r”x67Œ©∫J á2.3êÂ9àKûÎ¢H¢,å!mî∆Üo\$„π.[\r&Ó#\$≤<¡àfÕ)èZ£\0=œr®è9√‹jŒ™J†Ë0´c,|Œ=ë√‚˘ΩÍö°Rs_6£Ñ›∑≠˚Ç·…ÌÄZ6£2Bæp\\-á1s2…“>éÉ X:\r‹∫ñ»3ªbö√ºÕ-8SLı¿Ìº…K.¸¥-‹“•\rH@ml·:¢Îµ;Æ˙˛¶ÓJ£0LR–2¥!Ëø´ÂAÍà∆2§	m˝—Ì0eI¡≠-:U\r¸„9‘ıMWLª0˚πGcJv2(ÎÎF9é`¬<áJÑ7+Àö~†çï}DJµΩHWÕSN÷«Ôe◊u]1Ã•(O‘L–™<l˛“R[u&™ÉH⁄3èvÚÄõ‹Uàt6∑√\$¡6‡ﬂ‡X\"ò<£ª}:Oã‰<3x≈O§8Û>†ÃÏÏCŒ⁄Ô1É¢Å’HR‚π’SñdÅ9™‡π%µU1ñSnÊa|.˜‘Å`Í†8£†∂:#Ä ‡CŒ2ã∏*[o·Ü4Xx˙.k\">∫°A™ÕO+,Ûx\\5tò—Ü÷Å`\\≈oûèçà%ßj⁄Ò]∏™n˚»\\È£h‹=éz»√™2\$®´÷F[NYè’Œ”RØ˝[IÙ±’⁄7≤®t“î∂˛7éÏ(·úÔÃWj0ˆÛ§Ê2v}›Ú;Ôk2å–Va–‡ªÒûr=¯ã(À„¢,≥õ\rÏÈj*∫B(RÓ2CñN\\åŒˇ≤9{a\0≈ï”VR4éB∏Ã/zÒnŒ6å£öá≠ÌÅ“(wÉs·sÌÚ∏«¥B[Û¯Mi#:#¯ØU·˛=M-~±ı‰„h)Øı	ÉpåCõ9/,–rÿ=ÉsëÉêò#BvŒäÅM èt=˜@ñhsÕÖÑ`k°Ûåp.=Së\"ŒÓjìÉ&5ƒué—p#Yçúüøá˙Y	‚∂~)∞s4Ÿ√1naV*ÊƒTS·Àqê§6Ü\"[LgÜ¨ë∆B\"|¿í2üéQ§:8∆®’ûÉ\rùVÉ∂4‡aj!º.&ñŒ√Éòo%0F9\"\$Òê≤D»π„â?'®ô2B¥Aﬂga≈kr≠'\$9\rÿ†6π`eœª diÙ˚2p\\õ\$ª“>Ç7Ò\n\\£ñ,°§ƒ9¢Á öIÇÃ+îööLnπ]†HHJú∑ ÂKLehA˘ö™@ˇµÿíÛ@ÜÃ⁄®d ΩÉ˘*ëH10ˆ–êf!‹∏7»1HAù`∞§4ã?ûã∆ZèUº w@(¥R(⁄œ∫T…2°©0Rÿ¯î·D`éÑëb˚ﬂqäqiÈ≈ËhV Íj[!πSìX˚:“\nü0F√L¬¢v…j€¶¡‘9¬ÂJÅfTx7Üz\\œÀõ˝Ü”É+R@“èd›^G¡\0.c¯`≤˛>NèÂ\\ΩF£sˆgñi∑\$ﬂØ%AÈÀ¥TI‡ï@v.ô\0ÃP≈+É cNEı—ßDﬁK∫v«Êe9äÊÊÎ≥Æ*uËVZ`¯⁄=~d¶∂•€De◊}fö”π\0∫≥€5œ¨πüf:jÑ`»ME1»ØE∂®ò CAÅé}∂öç)ê:ná¶U∞F‚YL¨≤Ωf?e+âà.ÎZQ‡ZCxz°‘£õ(`–Àã~Aà5ñ[«yJ1;Ω÷}›NSùL	Ÿ)ê•ñaøãŒ’Sﬁè¿c©ï9Ö¥±2Êmt+ï⁄bﬂcRTôw|•‹7+9˝\\0Éô¬SA≥á Ë·∫g∂ÿü:‘TÒ.'ù-˚bãÙq¶2–9cúP†S˚H÷π¶#ï¸„1©¿´•öØ⁄Í≈gTî‘Qµûi÷º]uÒé(v`ÿ´Î’\r‡Ó>1⁄Àkè~-_ËÎ,ú¨£ÒÒ¿ò·◊0&Cò≥\$¶∆¸<0ÚÍà{•ï∫Üg0ˆ·÷≤ÿ∑ìÔ%´B˙Í“˛v2Ûó.Ωs™b“v‡ªhëdù„Bw˙uﬁ=ãcﬁC÷Eá@>á–");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:õågCIº‹\n:ÃÊsaîPi2\nOgc	»e6LÜÛ‘⁄e7∆s)–ã\rè»HGíIí∆∆3aÑÊs'c„—D i6úNå£—Ëú—2H„Ò8úuF§RÖ#≥îîÍr7á#©îv}Ä@†ê`Qåﬁo5öa‘Iú‹,2O'8îR-q:PÕ∆S∏(àaºä*wÉ(∏Á%ø‡pí<F)‹nx8‰zA\"≥Z-C€e∏V'àßÉÅ¶™s¢‰q’˚;NFì1‰≠≤9ÎGºÕ¶'0ô\r¶õŸ»ø±9n`√—ÄúX1©›ÅG3Ã‡tçee9äÆ:NeÌä˝N±–OSÚz¯cëåzlé`5‚„Å»ﬂ	≥3‚Òyﬂ¸8.ä\r„êŒπP‹˙\rÉ@ç£Æÿ\\1\r„ Û\0Ç@2j8ÿó=.∫¶∞ -r»√°®¨0çäËQ®Íä∫hƒbºåÅÏ`Å¿éª^9ãq⁄E!£ í7)#¿∫™* ¿Q∆»ã\0äÿ“1´»Ê\"ëh >Éÿ˙∞––∆⁄-C \"í‰XÆáS`\\ºè§F÷¨h8‡ä≤‚†¬3ß£`X:OÒö,™á´⁄˙)£8ä“<BN–É;>9¡8“Ûácº<á*¨Ê2éc•9œÈ >¢H¿zôOj™B'B™˙™éä∫≤å5ë,ÚÑPÏb5–45Ä÷3Ïˇ@ÖÅ:∑N+iöjõ’J¢ü⁄ä\\™é	®∆á·@º>ã†∆4Xr(QrèÅ RŸ° dÛÖu=œtÕA8A{åc\\äß)≥Ω|◊ÅC4\n6ÿWÌò7(V4l6µ	ñ9\r°vÀéaﬁ&:CKòç!Ê-°£pŒ:\r\0V¢M†QÜ#ıK@º\0“.ÖŸÄÀVy∑õ¶wE˚\"’„fÉ|jﬁbgŸºF>ƒã	BHnñ›∫Z¢‘B≤B∆\$…F0ïœ√=™ÒkC-9ç„∏˛C¥‰âOîç9^Z3\r«rÖ7‡÷0Í®uŸw˘ïM∏g˘≈∞†’v2∂‘qI∞ºÛ≤ÏˆpÂµ¿∏‰h5c„Py«ÖŸ.Êç[∞˜•hV'-çY¿Ã”T∞Ë”Ö›õí:v–˛ü®O&&6ä®Zó·»Œª	rn˚∂ï•æBc£o⁄ Õ0˙MÉ„£§≤xz]‘åô’çÍ«!ÄvÈdz/sÉ‚€CåÌë¶=ıd9KπeVXŸs:pÃ—à8ñr√A0&iÆ)÷§R\$˙Y_VÈ4¨æÖz˜»;ia∞4∞† lI,&êt5¿¯8øI‰#_©ÄásàF√ª`\niE<¶'—Jy0@∏4á0Ü√a5ò>¬3Ã∫®@ƒï0DÜæœkŒ2ÍuOÇÄB¬Ò[Äº4¿2d•V´<e—`6ê¯C·ƒ	d>'EwAL[ã©iSEıR√[∫ßÅÂ\räﬂê†x<·Ì\\+¢ø xxÉpêû¬\0ËË;ÖA¨ΩpÿˆCÍÆV	ÒY´Rø&ö3∫v®y6 'y)xíjµÍ@‘rIÙÆzhÅBp◊IëífØ∫≈Ü±J˘“Zrù§<…\"\$T∂ë¶^H»Û,3ÊêêPØ≤Ëúê 8fÅ,2áò¶‚âÇp ËNﬂsÊ|Ú∏ûNUÁsCMØ†≤∫t_∞nça–‘,íBŸVbŒp4Û∂§¸€\$w#Áä5%ï8tõÒƒ‡Ùœ¸”ùmØ‡PŸ¯˛Ÿ3˝nØ˝éœ§≤hÛ6Il∫èNrÜQ	î“e‘Eì2⁄Lf'dóÃ*è\":YM #ELz†—h\0%S≠¢DH1–◊!ÍS&≥Ÿ[5	3%√({®»Â^<â…(HÅ¥6X+Œ\"h—W<∏íÛ_êtz∏à9≠Zôuh¨ÖÄîóf^»ã=h”¯:+Bìq≈	P&Ñ¬ä	Épba¿ö\nÆaÏà±V2«W†Ÿöä& ·πZÖ\0ﬁna”›≠dX8Zv>ßùπî–™áb\nCòSJröáªZ‡åW%`[¯/hÄR{\$í-ÖÇ™Åe ≤BGL¯zNBp(∫@¶›∞˜sÉ(fdÚÈG‡bS5“57i?ÜPZt\nzú>å˘`]x0=øJcrRBy»Yì]c_#¢Sìï-‰/Â\0√\n®l– aﬁÉ1áÅ2á@WÖ∞∆\n‰AîÏ#a,1Ö¬¯dí‚0» %aÜèd5ÄÃ|πE∂∆Â¿ŸkBØÔ¯OK+Ã™PÛç~6«0•êﬂeØÍ5á!2@§√∏(vdb¿Â∑q.É@ad≈˛õ¥ÑãRCπàíe¨”)X:#cYæZ.|ÿcﬂZ4>ÿÁ/&‹P≠Vë∏¶2ï∆wûH≤B5ÓÉWÁBpù<p—Œ'<Eüª ö*ê:zFD¥TgHÍR™\\∂√*›+}ºÖ∞¬C–]Ål.@Vº8\$¿≈NjÄõ:Ic·ˆíœΩñ4kï°^Ö˙<ß)˛∆”∏¬\0StÄ∆£•!olju∏∑óÆ÷ÀZkmqÆµÂv⁄€qú%“∫QM€€Æ-jÔYù3˝áﬂ&0°î6ÔIv{{◊ ¸ë‡‹C}∏∂Jz0€Vt”ÿnb-∏l©˘§ÕìÃZWKÄ≠2»x◊⁄m—’F>\nCsÖéàøàÍn„Cﬂ!ÂÀM∆0O…√rìΩ/á∆h2äBÜdUs≤˛é ≠‰ñÉ◊\"XKÅ>}√@¥√Ù@–ß	˜4ﬁ•7D\0†»C∑Ÿ'oGÏÕ\"o˙¯v„îoMvñ„Hy%\$Fù§çv\nUÇ¡zBãê¥ªói)›∫måQ!\"¥º\n;Ï¶‡\0§¢M*öC\rOj∞¢vÓFDºO‡	π/(íÑ¸ÀªÛyÉ;À¿˚ﬂg/Å}‰t9˙l¢Ö¥‹0¿7L∏Bñ©qƒU…‡xì‹úM¡@1Ù‹5…ô[\rû o¸Ö¸a˘I(Äƒ¸(ìÛ˛ç/ ¬ÓiaÇd€õ∞'Ôƒí>°>`&Ô0“6ö8ﬂ‰#M7Ô|Ø‡\\%Hóı\$MT´À∆\\˜\rœÚ˜èÏx`∑\0qIîDb0≥Ù}Ê(0¿ÍCÜTƒFê´àí…1≤™ãéWÔ`˙	î¿éˇO|kÔÙ˙»ûä*‚¡ol3îˆPTõh¸@Ú˚∞èd4(É«p*Ëãè‰éeHp\$OÊxl\$¢äÊ™Ã@÷44\nÄ“#ÓTÃÀ\0hñ\$PôŒ∏†X˚ã¯´‚H†“ ÜLˆOiËÛ‡\\˚j(Ähg)∫˚\"à`p˚Øê `‰˘o∆˚œê¸/“¸¶æ¸‡¬ˆOw∞O	èÔà¯√§«ãx¢p·O§∞Í)ÇˆN´tj™\$`ÍÉÎn∑+wi\"≈]Ìˆ>â8∞•jH1Rd Vo0õË∞ãOÁ®ÙŸ†RLh±iQlUêÇã ‰¡ÓVéŒŒ˚±Üñ/≈\$Ä¥Çí¥ÀP7Q],R ªf\\Ò¶V±™¥´O\r1µÒºgÜ\$2Ø[Ë(4V…¨¯i≥œ…0ÿÀjöÂö8ÉCÕâ\nb‹IãÜ+1Ê+8+M\rÁÖÃ÷Ãd†á%å®ÑÖ\0⁄H(h€ÕR‹ø≠pÍCœÚ.FÔEƒÑåF•§\n-†ö √é‡®*˙º#à®Ú`6`œ&rjÄ–•\nn¿€&ílt‡˙•¢™\r¨í†ÇJ£f˜(‡t∆PSã.Æ=%Úã&2)Ñ√ò¶…˜(“≈&Ú{&R”)L~`Ä¬\rRhÆ·ÑX\rÄƒ’`÷.\0%å*†‚+•J'à\\I\rê¨@Ë00äÂS	ì1ÄÀ1∆f t\nÜ\0\\#\\6 ∞	‡ƒ\rDo2¯S@ ìE4ìL cƒ	®:>¿Ê¬‚E2k\nÄ†<‡ueX¡s0DÏös0\$@ﬁCOjÒ˙)Ä†	‡¶\nÜ\0‡ã:\0RíÍÆ∆/˝8ìÑ0¬K1≥Ñ	 )-,Ë~\$#.†®èÜ‘Y≠˙[®:æÆR\0Z?¿ÓßÜ≤Í\$Ã) …+SÉ≥ºì¡≥ƒ8#d<@∞¥\nT§ä¨G+%õ7´2”äSîT©h;§,T£ŒÃ∆í∞Ã7f]C\"ECÄÛ √à.ÚÚaTLi‰ô8≥ºIîPë·!`AD“\$,í„&àfäƒ¨íÈ\"%!Ù~äPLÀF*êL∆C\0∑ç;LEÉƒ<@WJ#NµÆ\$†®˝√>.÷Fèû„¬;M@¨*“ü/ÖoüÎ@‡e~HKòu¿»∫âòç¿X‚*\r ó∞èöë%é,¡q@˘Iˆ˝§ÍOÄ√¶fâJÛIH˛ÊL∞¡’1–ªSŒaâ™o\0+I S9P*ñò\$i,àEä¶M£à≥ki/‹™o›T\0∏Â(V∆ôŒ∫®ä‹k„™ÚÚÈ® ˝¬òç’,`\rû›RŒ œûˆîDÉ›IıU©≥:Ÿ	ØU130Ê†dÔ…@ÛQÔR\n\rêmÒèÛWK6K±†{XƒXÇN∫∑ıLÓ	ÏB\$Æ∫›≈≠SoESØ¬L4TdÎ<‚Ú\$6-_√ãL\$Ídä»ÃhÖÃ_(rfe—IV.Ñc.≈∆PΩ‡hÄd˚É>	¡h›/Ï∞5\0bœ\$º’\rT’Ä_X`^‡Yi	g´É[≤[vz¨ˆc2ño!Ä∏†`\0Ç9∂:Ïg,sÑ°ä+\0–Fo;&]YdÜÜÉ_/ÏÓÈ&Ωm®r>uö1¿§Ù¢ßaL«(“û\nÄﬁ¥√àé¨e¬B˘Yà82‡≥`oÇHV§Œ‡\\ÄÎ>Ë06ˆŒ‡eo√cpõd& ∑:√@äI\$#≈u …tê9◊J*vt∑:çŒFó∂=`8ﬁ÷/=Ì˛îÇ¶ˆù—‹ˇ∆ç¬àTè4íÁ>KÓπ„>≈'?Öj\n†§	(~\r¥º2ËÀWB\"3‚ãi4GI‘K2ÛªC≈r.ç´,ˆØKÖIK√tVE,ÌGb‚ ÇJ}(∂ØbÔi˜Û|XnÑn5ÙU Eê¥¯;÷Í ◊]Åf3mc¥â\$ÖmÓt∂‰BX.æ÷Ó/6Û\"◊7o≤ú67\\<LÌaD§s`X™[bFkÑbIÅƒnÙ“ﬁ¨r	Äﬁ8.*†P XÉê+àxzÎÎzk0“!£8≥WyW£§øöøl#Wxû±√‡8*\$¡k\"L#)≤ü*\$≠*Éƒø1y“ÂIKÒ|’ΩI÷ŸlTÈÊ–†f‘Lò¨V	ã«~K& ◊Í˝Œªjf?èóÈL›hRDoE…\0GFVèçãD7vßi≥Åg†yàê”ã—`VQd∞¯¿6.à0´\0ˆ¬8§ø’e¿÷†Vãy áKΩòdΩ†Wg‰∆x´_¯Òw¢Çê É/ ≤[ÒÎÇ“\nÏπSÂ\\Yë8˘ï8‰ˇ>OM™≥Ïƒ[‡ÿP&p*ß\"*ΩòPCáÉÇcÉqÉr ÏŒÕÚ*ÕßÜ\"Y“K`≤ceO0_i,ﬁy5\r ¯˘'®∆¡±ô—úå5ﬁ˘\r–Ô^5Ì–k°®ì…ª_BKi∫gå˙ÛçﬁbU8ıS¥Œl∏∂ëL·1Q¿œ£BÜ)3˙∑µ{Äﬂ{ÕuÇeï\røïFÚ¿T≠p<‚ß£1>ëCÏd»„\nÎÎ&&†Ú(´H/cA!Úú+ëûd4““Îü∏è:3,˝£6 \"Z≥'…*Œò£1J∂⁄I®*%•√§8I”I`W{ì•∑ª{˜Y´Ñﬁgy^7@¨ä—1hÛØ†ŸØ‡·JW⁄Å:æ-¢âØΩ´ÃÈß˙–dÿùóv∞[’˚K˜Ìßœ›≤:Odöäá≠U©.∏:L\r≥ëA∫NÒIPe¿¬Å,#µö=/ª¨ZÛ±⁄C¨±O≥⁄’•W≥{zÎ¶%MîÀüï6âßtY∫yó§(∂’sXmTÍÇ@");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\0;";break;case"cross.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\0\0;";break;case"up.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\0«Ú\0;";break;case"down.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\0«Ú\0;";break;case"arrow.gif":echo"GIF89a\0\n\0Ä\0\0ÄÄÄˇˇˇ!˘\0\0\0,\0\0\0\0\0\n\0\0Çiñ±ãûî™”≤ﬁª\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($Xb){$lc=substr($Xb,-1);return
str_replace($lc.$lc,$lc,substr($Xb,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($Xc,$Ab=false){if(get_magic_quotes_gpc()){while(list($v,$V)=each($Xc)){foreach($V
as$gc=>$U){unset($Xc[$v][$gc]);if(is_array($U)){$Xc[$v][stripslashes($gc)]=$U;$Xc[]=&$Xc[$v][stripslashes($gc)];}else$Xc[$v][stripslashes($gc)]=($Ab?$U:stripslashes($U));}}}}function
bracket_escape($Xb,$ra=false){static$Od=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Xb,($ra?array_flip($Od):$Od));}function
h($Q){return
htmlspecialchars(str_replace("\0","",$Q),ENT_QUOTES);}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$W,$Ba,$jc="",$Gc="",$fc=false){static$r=0;$r++;$K="<input type='checkbox' name='$C' value='".h($W)."'".($Ba?" checked":"").($Gc?' onclick="'.h($Gc).'"':'').($fc?" class='jsonly'":"")." id='checkbox-$r'>";return($jc!=""?"<label for='checkbox-$r'>$K".h($jc)."</label>":$K);}function
optionlist($Kc,$nd=null,$de=false){$K="";foreach($Kc
as$gc=>$U){$Lc=array($gc=>$U);if(is_array($U)){$K.='<optgroup label="'.h($gc).'">';$Lc=$U;}foreach($Lc
as$v=>$V)$K.='<option'.($de||is_string($v)?' value="'.h($v).'"':'').(($de||is_string($v)?(string)$v:$V)===$nd?' selected':'').'>'.h($V);if(is_array($U))$K.='</optgroup>';}return$K;}function
html_select($C,$Kc,$W="",$Fc=true){if($Fc)return"<select name='".h($C)."'".(is_string($Fc)?' onchange="'.h($Fc).'"':"").">".optionlist($Kc,$W)."</select>";$K="";foreach($Kc
as$v=>$V)$K.="<label><input type='radio' name='".h($C)."' value='".h($v)."'".($v==$W?" checked":"").">".h($V)."</label>";return$K;}function
confirm($Na=""){return" onclick=\"return confirm('".'Are you sure?'.($Na?" (' + $Na + ')":"")."');\"";}function
print_fieldset($r,$nc,$ge=false,$Gc=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Gc)."return !toggle('fieldset-$r');\">$nc</a></legend><div id='fieldset-$r'".($ge?"":" class='hidden'").">\n";}function
bold($ya){return($ya?" class='active'":"");}function
odd($K=' class="odd"'){static$q=0;if(!$K)$q=-1;return($q++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($v,$V=null){static$Bb=true;if($Bb)echo"{";if($v!=""){echo($Bb?"":",")."\n\t\"".addcslashes($v,"\r\n\"\\").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$Bb=false;}else{echo"\n}\n";$Bb=true;}}function
ini_bool($bc){$V=ini_get($bc);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($I,$e=0){global$g;$K=array();$J=$g->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$e];}return$K;}function
get_key_vals($I,$h=null){global$g;if(!is_object($h))$h=$g;$K=array();$J=$h->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$h=null,$k="<p class='error'>"){global$g;$Ma=(is_object($h)?$h:$g);$K=array();$J=$Ma->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$K;}function
unique_array($L,$t){foreach($t
as$s){if(ereg("PRIMARY|UNIQUE",$s["type"])){$K=array();foreach($s["columns"]as$v){if(!isset($L[$v]))continue
2;$K[$v]=$L[$v];}return$K;}}$K=array();foreach($L
as$v=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$v))$K[$v]=$V;}return$K;}function
where($X,$m=array()){global$u;$K=array();foreach((array)$X["where"]as$v=>$V)$K[]=idf_escape(bracket_escape($v,1)).(($u=="sql"&&ereg('\\.',$V))||$u=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".unconvert_field($m[$v],exact_value($V)));foreach((array)$X["null"]as$v)$K[]=idf_escape($v)." IS NULL";return
implode(" AND ",$K);}function
where_check($V,$m=array()){parse_str($V,$Aa);remove_slashes(array(&$Aa));return
where($Aa,$m);}function
where_link($q,$e,$W,$Ic="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($e)."&where%5B$q%5D%5Bop%5D=".urlencode(($W!==null?$Ic:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($W);}function
cookie($C,$W){global$aa;$Pc=array($C,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Pc[]=true;return
call_user_func_array('setcookie',$Pc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($v){return$_SESSION[$v][DRIVER][SERVER][$_GET["username"]];}function
set_session($v,$V){$_SESSION[$v][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($cb,$O,$T,$i=null){global$db;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($db))."|username|".($i!==null?"db|":"").session_name()),$z);return"$z[1]?".(sid()?SID."&":"").($cb!="server"||$O!=""?urlencode($cb)."=".urlencode($O)."&":"")."username=".urlencode($T).($i!=""?"&db=".urlencode($i):"").($z[2]?"&$z[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($y,$A=null){if($A!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($y!==null?$y:$_SERVER["REQUEST_URI"]))][]=$A;}if($y!==null){if($y=="")$y=".";header("Location: $y");exit;}}function
query_redirect($I,$y,$A,$cd=true,$ub=true,$xb=false){global$g,$k,$b;if($ub)$xb=!$g->query($I);$td="";if($I)$td=$b->messageQuery("$I;");if($xb){$k=error().$td;return
false;}if($cd)redirect($y,$A.$td);return
true;}function
queries($I=null){global$g;static$ad=array();if($I===null)return
implode(";\n",$ad);$ad[]=(ereg(';$',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I);return$g->query($I);}function
apply_queries($I,$Ed,$qb='table'){foreach($Ed
as$R){if(!queries("$I ".$qb($R)))return
false;}return
true;}function
queries_redirect($y,$A,$cd){return
query_redirect(queries(),$y,$A,$cd,false,!$cd);}function
remove_from_uri($Oc=""){return
substr(preg_replace("~(?<=[?&])($Oc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Ra){return" ".($F==$Ra?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F":"")).'">'.($F+1)."</a>");}function
get_file($v,$Ua=false){$n=$_FILES[$v];if(!$n||$n["error"])return$n["error"];$K=file_get_contents($Ua&&ereg('\\.gz$',$n["name"])?"compress.zlib://$n[tmp_name]":($Ua&&ereg('\\.bz2$',$n["name"])?"compress.bzip2://$n[tmp_name]":$n["tmp_name"]));if($Ua){$ud=substr($K,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$ud,$dd))$K=iconv("utf-16","utf-8",$K);elseif($ud=="\xEF\xBB\xBF")$K=substr($K,3);}return$K;}function
upload_error($k){$uc=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($uc?" ".sprintf('Maximum allowed file size is %sB.',$uc):""):'File does not exist.');}function
repeat_pattern($H,$oc){return
str_repeat("$H{0,65535}",$oc/65535)."$H{0,".($oc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($Q,$oc=80,$_d=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$oc).")($)?)u",$Q,$z))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$oc).")($)?)",$Q,$z);return
h($z[1]).$_d.(isset($z[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($Xc,$Zb=array()){while(list($v,$V)=each($Xc)){if(is_array($V)){foreach($V
as$gc=>$U)$Xc[$v."[$gc]"]=$U;}elseif(!in_array($v,$Zb))echo'<input type="hidden" name="'.h($v).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$Gb){foreach($Gb["source"]as$V)$K[$V][]=$Gb;}return$K;}function
enum_input($Rd,$c,$l,$W,$mb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$_);$K=($mb!==null?"<label><input type='$Rd'$c value='$mb'".((is_array($W)?in_array($mb,$W):$W===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($_[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?$W==$q+1:(is_array($W)?in_array($q+1,$W):$W===$V));$K.=" <label><input type='$Rd'$c value='".($q+1)."'".($Ba?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$K;}function
input($l,$W,$p){global$Td,$b,$u;$C=h(bracket_escape($l["field"]));echo"<td class='function'>";$gd=($u=="mssql"&&$l["auto_increment"]);if($gd&&!$_POST["save"])$p=null;$Mb=(isset($_GET["select"])||$gd?array("orig"=>'original'):array())+$b->editFunctions($l);$c=" name='fields[$C]'";if($l["type"]=="enum")echo
nbsp($Mb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Bb=0;foreach($Mb
as$v=>$V){if($v===""||!$V)break;$Bb++;}$Fc=($Bb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Bb > f.selectedIndex) f.selectedIndex = $Bb;\"":"");$c.=$Fc;echo(count($Mb)>1?html_select("function[$C]",$Mb,$p===null||in_array($p,$Mb)||isset($Mb[$p])?$p:"","functionChange(this);"):nbsp(reset($Mb))).'<td>';$dc=$b->editInput($_GET["edit"],$l,$c,$W);if($dc!="")echo$dc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$_);foreach($_[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?($W>>$q)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$C][$q]' value='".(1<<$q)."'".($Ba?' checked':'')."$Fc>".h($b->editVal($V,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Fc>";elseif(($Gd=ereg('text|lob',$l["type"]))||ereg("\n",$W)){if($Gd&&$u!="sqlite")$c.=" cols='50' rows='12'";else{$M=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}else{$vc=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$z)?((ereg("binary",$l["type"])?2:1)*$z[1]+($z[3]?1:0)+($z[2]&&!$l["unsigned"]?1:0)):($Td[$l["type"]]?$Td[$l["type"]]+($l["unsigned"]?0:1):0));echo"<input".(ereg('int|float|double|decimal',$l["type"])?" type='number'":"")." value='".h($W)."'".($vc?" maxlength='$vc'":"").(ereg('char|binary',$l["type"])&&$vc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$Xb=bracket_escape($l["field"]);$p=$_POST["function"][$Xb];$W=$_POST["fields"][$Xb];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($p=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($p=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$n=get_file("fields-$Xb");if(!is_string($n))return
false;return
q($n);}return$b->processInput($l,$W,$p);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Jb=false;foreach(table_status()as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$Jb){echo"<ul>\n";$Jb=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Jb?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($Wb,$yc=false){global$b;$K=$b->dumpHeaders($Wb,$yc);$Nc=$_POST["output"];if($Nc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Wb).".$K".($Nc!="file"&&!ereg('[^0-9a-z]',$Nc)?".$Nc":""));session_write_close();return$K;}function
dump_csv($L){foreach($L
as$v=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$L[$v]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($p,$e){return($p?($p=="unixepoch"?"DATETIME($e, '$p')":($p=="count distinct"?"COUNT(DISTINCT ":strtoupper("$p("))."$e)"):$e);}function
password_file(){$ab=ini_get("upload_tmp_dir");if(!$ab){if(function_exists('sys_get_temp_dir'))$ab=sys_get_temp_dir();else{$zb=@tempnam("","");if(!$zb)return
false;$ab=dirname($zb);unlink($zb);}}$zb="$ab/adminer.key";$K=@file_get_contents($zb);if($K)return$K;$Kb=@fopen($zb,"w");if($Kb){$K=md5(uniqid(mt_rand(),true));fwrite($Kb,$K);fclose($Kb);}return$K;}function
is_mail($jb){$na='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$H="$na+(\\.$na+)*@($bb?\\.)+$bb";return
preg_match("(^$H(,\\s*$H)*\$)i",$jb);}function
is_url($Q){$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($bb?\\.)+$bb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$z)?strtolower($z[1]):"");}function
is_shortable($l){return
ereg('char|text|lob|geometry|point|linestring|polygon',$l["type"]);}function
slow_query($I){global$b,$Nd;$i=$b->database();if(support("kill")&&is_object($h=connect())&&($i==""||$h->select_db($i))){$ic=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Nd,'&kill=',$ic,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;ob_flush();flush();$K=@get_key_vals($I,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
lzw_decompress($wa){$Za=256;$xa=8;$Ea=array();$hd=0;$id=0;for($q=0;$q<strlen($wa);$q++){$hd=($hd<<8)+ord($wa[$q]);$id+=8;if($id>=$xa){$id-=$xa;$Ea[]=$hd>>$id;$hd&=(1<<$id)-1;$Za++;if($Za>>$xa)$xa++;}}$Ya=range("\0","\xFF");$K="";foreach($Ea
as$q=>$Da){$ib=$Ya[$Da];if(!isset($ib))$ib=$ke.$ke[0];$K.=$ib;if($q)$Ya[]=$ke.$ib[0];$ke=$ib;}return$K;}global$b,$g,$db,$gb,$ob,$k,$Mb,$Pb,$aa,$cc,$u,$ba,$kc,$Ec,$Rc,$xd,$Nd,$Qd,$Td,$ae,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Pc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Pc[]=true;call_user_func_array('session_set_cookie_params',$Pc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ab);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Pd,$Bc){$Tc=($Bc==1?0:1);$Pd=str_replace("%d","%s",$Pd[$Tc]);$Bc=number_format($Bc,0,".",',');return
sprintf($Pd,$Bc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$Tc=array_search("",$b->operators);if($Tc!==false)unset($b->operators[$Tc]);}function
dsn($eb,$T,$G,$tb='auth_error'){set_exception_handler($tb);parent::__construct($eb,$T,$G);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$Ud=false){$J=parent::query($I);$this->error="";if(!$J){$pb=$this->errorInfo();$this->error=$pb[2];return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J)$J=$this->_result;if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$db=array();$db=array("server"=>"MySQL")+$db;if(!defined("DRIVER")){$Uc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$T,$G){mysqli_report(MYSQLI_REPORT_OFF);list($Ub,$Sc)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$Ub:ini_get("mysqli.default_host")),($O.$T!=""?$T:ini_get("mysqli.default_user")),($O.$T.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($Sc)?$Sc:ini_get("mysqli.default_port")),(!is_numeric($Sc)?$Sc:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$l];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($O,$T,$G){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$T"!=""?$T:ini_get("mysql.default_user")),("$O$T$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($Sa){return
mysql_select_db($Sa,$this->_link);}function
query($I,$Ud=false){$J=@($Ud?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$l=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$T,$G){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$T,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($Sa){return$this->query("USE ".idf_escape($Sa));}function
query($I,$Ud=false){$this->setAttribute(1000,!$Ud);return
parent::query($I,$Ud);}}}function
idf_escape($Xb){return"`".str_replace("`","``",$Xb)."`";}function
table($Xb){return
idf_escape($Xb);}function
connect(){global$b;$g=new
Min_DB;$Qa=$b->credentials();if($g->connect($Qa[0],$Qa[1],$Qa[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$K=$g->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($kd=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$kd;return$K;}function
get_databases($Cb){global$g;$K=get_session("dbs");if($K===null){$I=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Cb?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$X,$w,$Cc=0,$pd=" "){return" $I$X".($w!==null?$pd."LIMIT $w".($Cc?" OFFSET $Cc":""):"");}function
limit1($I,$X){return
limit($I,$X,1);}function
db_collation($i,$Ha){global$g;$K=null;$Oa=$g->result("SHOW CREATE DATABASE ".idf_escape($i),1);if(preg_match('~ COLLATE ([^ ]+)~',$Oa,$z))$K=$z[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Oa,$z))$K=$Ha[$z[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(ereg("YES|DEFAULT",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Ta){$K=array();foreach($Ta
as$i)$K[$i]=count(get_vals("SHOW TABLES IN ".idf_escape($i)));return$K;}function
table_status($C=""){$K=array();foreach(get_rows("SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Rows"]))$L["Comment"]="";if($C!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return!isset($S["Rows"]);}function
fk_support($S){return
eregi("InnoDB|IBMDB2I",$S["Engine"]);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$z);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$z[1],"length"=>$z[2],"unsigned"=>ltrim($z[3].$z[4]),"default"=>($L["Default"]!=""||ereg("char",$z[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$L["Extra"],$z)?$z[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(explode(",",$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$h=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];}return$K;}function
foreign_keys($R){global$g,$Ec;static$H='`(?:[^`]|``)+`';$K=array();$Pa=$g->result("SHOW CREATE TABLE ".table($R),1);if($Pa){preg_match_all("~CONSTRAINT ($H) FOREIGN KEY \\(((?:$H,? ?)+)\\) REFERENCES ($H)(?:\\.($H))? \\(((?:$H,? ?)+)\\)(?: ON DELETE ($Ec))?(?: ON UPDATE ($Ec))?~",$Pa,$_,PREG_SET_ORDER);foreach($_
as$z){preg_match_all("~$H~",$z[2],$sd);preg_match_all("~$H~",$z[5],$Fd);$K[idf_unescape($z[1])]=array("db"=>idf_unescape($z[4]!=""?$z[3]:$z[4]),"table"=>idf_unescape($z[4]!=""?$z[4]:$z[3]),"source"=>array_map('idf_unescape',$sd[0]),"target"=>array_map('idf_unescape',$Fd[0]),"on_delete"=>($z[6]?$z[6]:"RESTRICT"),"on_update"=>($z[7]?$z[7]:"RESTRICT"),);}}return$K;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$v=>$V)asort($K[$v]);return$K;}function
information_schema($i){global$g;return($g->server_info>=5&&$i=="information_schema")||($g->server_info>=5.5&&$i=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$dd))return$dd[1]-1;}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($i,$Ga){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($i).($Ga?" COLLATE ".q($Ga):""));}function
drop_databases($Ta){set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ta,'idf_escape');}function
rename_database($C,$Ga){if(create_database($C,$Ga)){$ed=array();foreach(tables_list()as$R=>$Rd)$ed[]=table($R)." TO ".idf_escape($C).".".table($R);if(!$ed||queries("RENAME TABLE ".implode(", ",$ed))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$qa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$qa="";break;}if($s["type"]=="PRIMARY")$qa=" UNIQUE";}}return" AUTO_INCREMENT$qa";}function
alter_table($R,$C,$m,$Db,$Ka,$nb,$Ga,$pa,$Qc){$la=array();foreach($m
as$l)$la[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$la=array_merge($la,$Db);$vd="COMMENT=".q($Ka).($nb?" ENGINE=".q($nb):"").($Ga?" COLLATE ".q($Ga):"").($pa!=""?" AUTO_INCREMENT=$pa":"").$Qc;if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$la)."\n) $vd");if($R!=$C)$la[]="RENAME TO ".table($C);$la[]=$vd;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$la));}function
alter_indexes($R,$la){foreach($la
as$v=>$V)$la[$v]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($R).implode(",",$la));}function
truncate_tables($Ed){return
apply_queries("TRUNCATE TABLE",$Ed);}function
drop_views($fe){return
queries("DROP VIEW ".implode(", ",array_map('table',$fe)));}function
drop_tables($Ed){return
queries("DROP TABLE ".implode(", ",array_map('table',$Ed)));}function
move_tables($Ed,$fe,$Fd){$ed=array();foreach(array_merge($Ed,$fe)as$R)$ed[]=table($R)." TO ".idf_escape($Fd).".".table($R);return
queries("RENAME TABLE ".implode(", ",$ed));}function
copy_tables($Ed,$fe,$Fd){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Ed
as$R){$C=($Fd==DB?table("copy_$R"):idf_escape($Fd).".".table($R));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($fe
as$R){$C=($Fd==DB?table("copy_$R"):idf_escape($Fd).".".table($R));$ee=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $ee[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$Rd){global$g,$ob,$cc,$Td;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Sd="((".implode("|",array_merge(array_keys($Td),$ka)).")\\b(?:\\s*\\(((?:[^'\")]*|$ob)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$H="\\s*(".($Rd=="FUNCTION"?"":$cc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Sd";$Oa=$g->result("SHOW CREATE $Rd ".idf_escape($C),2);preg_match("~\\(((?:$H\\s*,?)*)\\)\\s*".($Rd=="FUNCTION"?"RETURNS\\s+$Sd\\s+":"")."(.*)~is",$Oa,$z);$m=array();preg_match_all("~$H\\s*,?~is",$z[1],$_,PREG_SET_ORDER);foreach($_
as$Oc){$C=str_replace("``","`",$Oc[2]).$Oc[3];$m[]=array("field"=>$C,"type"=>strtolower($Oc[5]),"length"=>preg_replace_callback("~$ob~s",'normalize_enum',$Oc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Oc[8] $Oc[7]"))),"null"=>1,"full_type"=>$Oc[4],"inout"=>strtoupper($Oc[1]),"collation"=>strtolower($Oc[9]),);}if($Rd!="FUNCTION")return
array("fields"=>$m,"definition"=>$z[11]);return
array("fields"=>$m,"returns"=>array("type"=>$z[12],"length"=>$z[13],"unsigned"=>$z[15],"collation"=>$z[16]),"definition"=>$z[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")");}function
insert_update($R,$P,$Vc){foreach($P
as$v=>$V)$P[$v]="$v = $V";$be=implode(", ",$P);return
queries("INSERT INTO ".table($R)." SET $be ON DUPLICATE KEY UPDATE $be");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$I){return$g->query("EXPLAIN $I");}function
found_rows($S,$X){return($X||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ld){return
true;}function
create_sql($R,$pa){global$g;$K=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$pa)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Sa){return"USE ".idf_escape($Sa);}function
trigger_sql($R,$yd){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")),null,"-- ")as$L)$K.="\n".($yd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(ereg("binary",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if(ereg("geometry|point|linestring|polygon",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$K){if(ereg("binary",$l["type"]))$K="UNHEX($K)";if(ereg("geometry|point|linestring|polygon",$l["type"]))$K="GeomFromText($K)";return$K;}function
support($yb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$yb);}$u="sql";$Td=array();$xd=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$v=>$V){$Td+=$V;$xd[$v]=array_keys($V);}$ae=array("unsigned","zerofill","unsigned zerofill");$Jc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Mb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Pb=array("avg","count","count distinct","group_concat","max","min","sum");$gb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.6.2";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$Ta=$this->databases(false);return(!$Ta?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Ta[(information_schema($Ta[0])?1:0)]);}function
databases($Cb=true){return
get_databases($Cb);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Username<td><input type="hidden" name="auth[driver]" value="server"><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>Password<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($qc,$G){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Cd){return
h($Cd["Comment"]!=""?$Cd["Comment"]:$Cd["Name"]);}function
fieldName($l,$D=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Cd,$P=""){$a=$Cd["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.'New item'."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Last page'."'>&gt;&gt;</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Bd){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$v=>$V){$C=$this->tableName(table_status($v));if($C!=""){$md=preg_quote($Bd);$pd="(:|\\s*-)?\\s+";$K[$v]["name"]=(preg_match("(^$md$pd(.+)|^(.+?)$pd$md\$)iu",$C,$z)?$z[2].$z[3]:$C);}else
unset($K[$v]);}return$K;}function
backwardKeysPrint($ta,$L){foreach($ta
as$R=>$sa){foreach($sa["keys"]as$Ia){$x=ME.'select='.urlencode($R);$q=0;foreach($Ia
as$e=>$V)$x.=where_link($q++,$e,$L[$V]);echo"<a href='".h($x)."'>".h($sa["name"])."</a>";$x=ME.'edit='.urlencode($R);foreach($Ia
as$e=>$V)$x.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($L[$V]);echo"<a href='".h($x)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($I){return"<!--\n".str_replace("--","--><!-- ",$I)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$l){if(ereg("varchar|character varying",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($M,$Fb){$K=$M;foreach($M[0]as$v=>$V){if(list($R,$r,$C)=$this->_foreignColumn($Fb,$v)){$Yb=array();foreach($M
as$L)$Yb[$L[$v]]=exact_value($L[$v]);$Xa=$this->_values[$R];if(!$Xa)$Xa=get_key_vals("SELECT $r, $C FROM ".table($R)." WHERE $r IN (".implode(", ",$Yb).")");foreach($M
as$B=>$L){if(isset($L[$v]))$K[$B][$v]=(string)$Xa[$L[$v]];}}}return$K;}function
selectVal($V,$x,$l){$K=($V===null?"&nbsp;":$V);$x=h($x);if(ereg('blob|bytea',$l["type"])&&!is_utf8($V)){$K=lang(array('%d byte','%d bytes'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V))$K="<img src='$x' alt='$K'>";}if(like_bool($l)&&$K!="&nbsp;")$K=($V?'yes':'no');if($x)$K="<a href='$x'>$K</a>";if(!$x&&!like_bool($l)&&ereg('int|float|double|decimal',$l["type"]))$K="<div class='number'>$K</div>";elseif(ereg('date',$l["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($V,$l){if(ereg('date|timestamp',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$V);return$V;}function
selectColumnsPrint($N,$f){}function
selectSearchPrint($X,$f,$t){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$hc=array();foreach($X
as$v=>$V)$hc[$V["col"]]=$v;$q=0;$m=fields($_GET["select"]);foreach($f
as$C=>$Wa){$l=$m[$C];if(ereg("enum",$l["type"])||like_bool($l)){$v=$hc[$C];$q--;echo"<div>".h($Wa)."<input type='hidden' name='where[$q][col]' value='".h($C)."'>:",(like_bool($l)?" <select name='where[$q][val]'>".optionlist(array(""=>"",'no','yes'),$X[$v]["val"],true)."</select>":enum_input("checkbox"," name='where[$q][val][]'",$l,(array)$X[$v]["val"],($l["null"]?0:null))),"</div>\n";unset($f[$C]);}elseif(is_array($Kc=$this->_foreignKeyOptions($_GET["select"],$C))){if($m[$C]["null"])$Kc[0]='('.'empty'.')';$v=$hc[$C];$q--;echo"<div>".h($Wa)."<input type='hidden' name='where[$q][col]' value='".h($C)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Kc,$X[$v]["val"],true)."</select></div>\n";unset($f[$C]);}}$q=0;foreach($X
as$V){if(($V["col"]==""||$f[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".'anywhere'.")".optionlist($f,$V["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$q][val]' value='".h($V["val"])."'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'anywhere'.")".optionlist($f,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$q][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($D,$f,$t){$Mc=array();foreach($t
as$v=>$s){$D=array();foreach($s["columns"]as$V)$D[]=$f[$V];if(count(array_filter($D,'strlen'))>1&&$v!="PRIMARY")$Mc[$v]=implode(", ",$D);}if($Mc){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Mc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($w){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$w),"</div></fieldset>\n";}function
selectLengthPrint($Hd){}function
selectActionPrint($t){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($kb,$f){if($kb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($kb)==1?'<input type="hidden" name="email_field" value="'.h(key($kb)).'">':html_select("email_field",$kb)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$t){return
array(array(),array());}function
selectSearchProcess($m,$t){$K=array();foreach((array)$_GET["where"]as$v=>$X){$Fa=$X["col"];$Hc=$X["op"];$V=$X["val"];if(($v<0?"":$Fa).$V!=""){$La=array();foreach(($Fa!=""?array($Fa=>$m[$Fa]):$m)as$C=>$l){if($Fa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$l["type"])){$C=idf_escape($C);if($Fa!=""&&$l["type"]=="enum")$La[]=(in_array(0,$V)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$V)).")";else{$Id=ereg('char|text|enum|set',$l["type"]);$W=$this->processInput($l,(!$Hc&&$Id&&ereg('^[^%]+$',$V)?"%$V%":$V));$La[]=$C.($W=="NULL"?" IS".($Hc==">="?" NOT":"")." $W":(in_array($Hc,$this->operators)||$Hc=="="?" $Hc $W":($Id?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($v<0&&$V=="0")$La[]="$C IS NULL";}}}$K[]=($La?"(".implode(" OR ",$La).")":"0");}}return$K;}function
selectOrderProcess($m,$t){$ac=$_GET["index_order"];if($ac!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($ac!=""?array($t[$ac]):$t)as$s){if($ac!=""||$s["type"]=="INDEX"){$Wa=false;foreach($s["columns"]as$V){if(ereg('date|timestamp',$m[$V]["type"])){$Wa=true;break;}}$K=array();foreach($s["columns"]as$V)$K[]=idf_escape($V).($Wa?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$Fb){if($_POST["email_append"])return
true;if($_POST["email"]){$od=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$zd=$_POST["email_subject"];$A=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$zd.$A",$_);$M=get_rows("SELECT DISTINCT $l".($_[1]?", ".implode(", ",array_map('idf_escape',array_unique($_[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($M,$Fb)as$L){$fd=array('{\\'=>'{');foreach($_[1]as$V)$fd['{$'."$V}"]=$this->editVal($L[$V],$m[$V]);$jb=$L[$_POST["email_field"]];if(is_mail($jb)&&send_mail($jb,strtr($zd,$fd),strtr($A,$fd),$_POST["email_from"],$_FILES["email_files"]))$od++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$od));}return
false;}function
selectQueryBuild($N,$X,$Nb,$D,$w,$F){return"";}function
messageQuery($I){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n-->";}function
editFunctions($l){$K=array();if($l["null"]&&ereg('blob',$l["type"]))$K["NULL"]='empty';$K[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(ereg('date|time',$l["type"]))$K["now"]='now';if(eregi('_(md5|sha1)$',$l["field"],$z))$K[]=strtolower($z[1]);return$K;}function
editInput($R,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Kc=$this->_foreignKeyOptions($R,$l["field"],$W);if($Kc!==null)return(is_array($Kc)?"<select$c>".optionlist($Kc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Kc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$Tb="";if(ereg('time',$l["type"]))$Tb='HH:MM:SS';if(ereg('date|timestamp',$l["type"]))$Tb='[yyyy]-mm-dd'.($Tb?" [$Tb]":"");if($Tb)return"<input value='".h($W)."'$c> ($Tb)";if(eregi('_(md5|sha1)$',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$p=""){if($p=="now")return"$p()";$K=$W;if(ereg('date|timestamp',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$W,$z))$K=($z["p1"]!=""?$z["p1"]:($z["p2"]!=""?($z["p2"]<70?20:19).$z["p2"]:gmdate("Y")))."-$z[p3]$z[p4]-$z[p5]$z[p6]".end($z);$K=($l["type"]=="bit"&&ereg('^[0-9]+$',$W)?$K:q($K));if($W==""&&like_bool($l))$K="0";elseif($W==""&&($l["null"]||!ereg('char|text',$l["type"])))$K="NULL";elseif(ereg('^(md5|sha1)$',$p))$K="$p($K)";return
unconvert_field($l,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$yd,$I){global$g;$J=$g->query($I,1);if($J){while($L=$J->fetch_assoc()){if($yd=="table"){dump_csv(array_keys($L));$yd="INSERT";}dump_csv($L);}}}function
dumpFilename($Wb){return
friendly_url($Wb);}function
dumpHeaders($Wb,$yc=false){$vb="csv";header("Content-Type: text/csv; charset=utf-8");return$vb;}function
homepage(){return
true;}function
navigation($xc){global$ca,$Nd;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($xc=="auth"){$Bb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$G){if($G!==null){if($Bb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Bb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'empty'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$Nd,'">
</p>
</form>
';$this->databasesPrint($xc);if($xc!="db"&&$xc!="ns"){$S=table_status();if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($xc){}function
tablesPrint($Ed){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Ed
as$L){$C=$this->tableName($L);if(isset($L["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"])." title='".'Select data'."'>$C</a><br>\n";}}function
_foreignColumn($Fb,$e){foreach((array)$Fb[$e]as$Eb){if(count($Eb["source"])==1){$C=$this->rowDescription($Eb["table"]);if($C!=""){$r=idf_escape($Eb["target"][0]);return
array($Eb["table"],$r,$C);}}}}function
_foreignKeyOptions($R,$e,$W=null){global$g;if(list($Fd,$r,$C)=$this->_foreignColumn(column_foreign_keys($R),$e)){$K=&$this->_values[$Fd];if($K===null){$S=table_status($Fd);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $r, $C FROM ".table($Fd)." ORDER BY 2"));}if(!$K&&$W!==null)return$g->result("SELECT $C FROM ".table($Fd)." WHERE $r = ".q($W));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Jd,$k="",$_a=array(),$Kd=""){global$ba,$b,$g,$db;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Ld=$Jd.($Kd!=""?": ".h($Kd):"");$Md=strip_tags($Ld.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Md,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.2",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.2",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.2",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($_a!==null){$x=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($x?$x:".").'">'.$db[DRIVER].'</a> &raquo; ';$x=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):'Server');if($_a===false)echo"$O\n";else{echo"<a href='".($x?h($x):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($_a)))echo'<a href="'.h($x."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($_a)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($_a
as$v=>$V){$Wa=(is_array($V)?$V[1]:$V);if($Wa!="")echo'<a href="'.h(ME."$v=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Wa).'</a> &raquo; ';}}echo"$Jd\n";}}echo"<h2>$Ld</h2>\n";restart_session();$ce=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$wc=$_SESSION["messages"][$ce];if($wc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$wc)."</div>\n";unset($_SESSION["messages"][$ce]);}$Ta=&get_session("dbs");if(DB!=""&&$Ta&&!in_array(DB,$Ta,true))$Ta=null;stop_session();if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($xc=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($xc);echo'</div>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($U,$he){$kd='';foreach($U
as$V)$kd.=pack('V',$V);if($he)return
substr($kd,0,end($U));return$kd;}function
str2long($kd,$he){$U=array_values(unpack('V*',str_pad($kd,4*ceil(strlen($kd)/4),"\0")));if($he)$U[]=strlen($kd);return$U;}function
xxtea_mx($Z,$Y,$Ad,$gc){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($Ad^$Y)+($gc^$Z));}function
encrypt_string($wd,$v){if($wd=="")return"";$v=array_values(unpack("V*",pack("H*",md5($v))));$U=str2long($wd,true);$B=count($U)-1;$Z=$U[$B];$Y=$U[0];$Zc=floor(6+52/($B+1));$Ad=0;while($Zc-->0){$Ad=int32($Ad+0x9E3779B9);$fb=$Ad>>2&3;for($E=0;$E<$B;$E++){$Y=$U[$E+1];$zc=xxtea_mx($Z,$Y,$Ad,$v[$E&3^$fb]);$Z=int32($U[$E]+$zc);$U[$E]=$Z;}$Y=$U[0];$zc=xxtea_mx($Z,$Y,$Ad,$v[$E&3^$fb]);$Z=int32($U[$B]+$zc);$U[$B]=$Z;}return
long2str($U,false);}function
decrypt_string($wd,$v){if($wd=="")return"";$v=array_values(unpack("V*",pack("H*",md5($v))));$U=str2long($wd,false);$B=count($U)-1;$Z=$U[$B];$Y=$U[0];$Zc=floor(6+52/($B+1));$Ad=int32($Zc*0x9E3779B9);while($Ad){$fb=$Ad>>2&3;for($E=$B;$E>0;$E--){$Z=$U[$E-1];$zc=xxtea_mx($Z,$Y,$Ad,$v[$E&3^$fb]);$Y=int32($U[$E]-$zc);$U[$E]=$Y;}$Z=$U[$B];$zc=xxtea_mx($Z,$Y,$Ad,$v[$E&3^$fb]);$Y=int32($U[0]-$zc);$U[0]=$Y;$Ad=int32($Ad-0x9E3779B9);}return
long2str($U,true);}$g='';$Nd=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Rc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($v)=explode(":",$V);$Rc[$v]=$V;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$v=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$Wc=$b->permanentLogin();$Rc[$v]="$v:".base64_encode($Wc?encrypt_string($d["password"],$Wc):"");cookie("adminer_permanent",implode(" ",$Rc));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($Nd&&$_POST["token"]!=$Nd){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$v)set_session($v,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($Rc&&!$_SESSION["pwds"]){session_regenerate_id();$Wc=$b->permanentLogin();foreach($Rc
as$v=>$V){list(,$Ca)=explode(":",$V);list($cb,$O,$T,$i)=array_map('base64_decode',explode("-",$v));$_SESSION["pwds"][$cb][$O][$T]=decrypt_string(base64_decode($Ca),$Wc);$_SESSION["db"][$cb][$O][$T][$i]=true;}}function
unset_permanent(){global$Rc;foreach($Rc
as$v=>$V){list($cb,$O,$T)=array_map('base64_decode',explode("-",$v));if($cb==DRIVER&&$O==SERVER&&$i==$_GET["username"])unset($Rc[$v]);}cookie("adminer_permanent",implode(" ",$Rc));}function
auth_error($sb=null){global$g,$b,$Nd;$rd=session_name();$k="";if(!$_COOKIE[$rd]&&$_GET[$rd]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$rd]||$_GET[$rd])&&!$Nd)$k='Session expired, please login again.';else{$G=&get_session("pwds");if($G!==null){$k=h($sb?$sb->getMessage():(is_string($g)?$g:'Invalid credentials.'));$G=null;}unset_permanent();}}page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Uc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Nd=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$Nd;$k=($_POST?($_POST["token"]==$Nd?"":'Invalid CSRF token. Send the form again.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.','"post_max_size"')));if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$g->select_db($b->database());function
email_header($Rb){return"=?UTF-8?B?".base64_encode($Rb)."?=";}function
send_mail($jb,$zd,$A,$Lb="",$_b=array()){$j=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$A=str_replace("\n",$j,wordwrap(str_replace("\r","","$A\n")));$za=uniqid("boundary");$oa="";foreach((array)$_b["error"]as$v=>$V){if(!$V)$oa.="--$za$j"."Content-Type: ".str_replace("\n","",$_b["type"][$v]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$_b["name"][$v])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($_b["tmp_name"][$v])),76,$j).$j;}$va="";$Sb="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($oa){$oa.="--$za--$j";$va="--$za$j$Sb$j$j";$Sb="Content-Type: multipart/mixed; boundary=\"$za\"";}$Sb.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Lb?$j."From: ".str_replace("\n","",$Lb):"");return
mail($jb,email_header($zd),$va.$A.$oa,$Sb);}function
like_bool($l){return
ereg("bool|(tinyint|bit)\\(1\\)",$l["full_type"]);}$Ec="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$db[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$be=(isset($_GET["select"])?$_POST["edit"]:$X);foreach($m
as$C=>$l){if(!isset($l["privileges"][$be?"update":"insert"])||$b->fieldName($l)=="")unset($m[$C]);}if($_POST&&!$k&&!isset($_GET["select"])){$y=$_POST["referer"];if($_POST["insert"])$y=($be?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$y))$y=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $X"),$y,'Item has been deleted.');else{$P=array();foreach($m
as$C=>$l){$V=process_input($l);if($V!==false&&$V!==null)$P[idf_escape($C)]=($be?"\n".idf_escape($C)." = $V":$V);}if($be){if(!$P)redirect($y);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$P),"\nWHERE $X"),$y,'Item has been updated.');}else{$J=insert_into($a,$P);$mc=($J?last_id():0);queries_redirect($y,sprintf('Item%s has been inserted.',($mc?" $mc":"")),$J);}}}$Dd=$b->tableName(table_status($a));page_header(($be?'Edit':'Insert'),$k,array("select"=>array($a,$Dd)),$Dd);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($X){$N=array();foreach($m
as$C=>$l){if(isset($l["privileges"]["select"])){$ma=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$ma="''";if($u=="sql"&&ereg("enum|set",$l["type"]))$ma="1*".idf_escape($C);$N[]=($ma?"$ma AS ":"").idf_escape($C);}}$L=array();if($N){$M=get_rows("SELECT".limit(implode(", ",$N)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$L=(isset($_GET["select"])&&count($M)!=1?null:reset($M));}}if($L===false)echo"<p class='error'>".'No rows.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$C=>$l){echo"<tr><th>".$b->fieldName($l);$Va=$_GET["set"][bracket_escape($C)];$W=($L!==null?($L[$C]!=""&&$u=="sql"&&ereg("enum|set",$l["type"])?(is_array($L[$C])?array_sum($L[$C]):+$L[$C]):$L[$C]):(!$be&&$l["auto_increment"]?"":(isset($_GET["select"])?false:($Va!==null?$Va:$l["default"]))));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$p=($_POST["save"]?(string)$_POST["function"][$C]:($be&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if($l["type"]=="timestamp"&&$W=="CURRENT_TIMESTAMP"){$W="";$p="now";}input($l,$W,$p);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($be?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($be?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Nd,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status($a);$t=indexes($a);$m=fields($a);$Hb=column_foreign_keys($a);$Dc="";if($S["Oid"]=="t"){$Dc=($u=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Dc));}parse_str($_COOKIE["adminer_import"],$ha);$jd=array();$f=array();$Hd=null;foreach($m
as$v=>$l){$C=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$C!=""){$f[$v]=html_entity_decode(strip_tags($C));if(is_shortable($l))$Hd=$b->selectLengthProcess();}$jd+=$l["privileges"];}list($N,$Nb)=$b->selectColumnsProcess($f,$t);$ec=count($Nb)<count($N);$X=$b->selectSearchProcess($m,$t);$D=$b->selectOrderProcess($m,$t);$w=$b->selectLimitProcess();$Lb=($N?implode(", ",$N):"*".($Dc?", $Dc":""));if($u=="sql"){foreach($f
as$v=>$V){$ma=convert_field($m[$v]);if($ma)$Lb.=", $ma AS ".idf_escape($v);}}$Lb.="\nFROM ".table($a);$Ob=($Nb&&$ec?"\nGROUP BY ".implode(", ",$Nb):"").($D?"\nORDER BY ".implode(", ",$D):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Xd=>$L){$ma=convert_field($m[key($L)]);echo$g->result("SELECT".limit(($ma?$ma:idf_escape(key($L)))." FROM ".table($a)," WHERE ".where_check($Xd,$m).($X?" AND ".implode(" AND ",$X):"").($D?" ORDER BY ".implode(", ",$D):""),1));}exit;}if($_POST&&!$k){$je="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Vc=$Zd=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$Vc=array_flip($s["columns"]);$Zd=($N?$Vc:array());break;}}foreach((array)$Zd
as$v=>$V){if(in_array(idf_escape($v),$N))unset($Zd[$v]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Zd===array()){$ie=$X;if(is_array($_POST["check"]))$ie[]="($je)";$I="SELECT $Lb".($ie?"\nWHERE ".implode(" AND ",$ie):"").$Ob;}else{$Vd=array();foreach($_POST["check"]as$V)$Vd[]="(SELECT".limit($Lb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m).$Ob,1).")";$I=implode(" UNION ALL ",$Vd);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($X,$Hb)){if($_POST["save"]||$_POST["delete"]){$J=true;$ia=0;$I=table($a);$P=array();if(!$_POST["delete"]){foreach($f
as$C=>$V){$V=process_input($m[$C]);if($V!==null){if($_POST["clone"])$P[idf_escape($C)]=($V!==false?$V:idf_escape($C));elseif($V!==false)$P[]=idf_escape($C)." = $V";}}$I.=($_POST["clone"]?" (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a):" SET\n".implode(",\n",$P));}if($_POST["delete"]||$P){$Ja="UPDATE";if($_POST["delete"]){$Ja="DELETE";$I="FROM $I";}if($_POST["clone"]){$Ja="INSERT";$I="INTO $I";}if($_POST["all"]||($Zd===array()&&$_POST["check"])||$ec){$J=queries("$Ja $I".($_POST["all"]?($X?"\nWHERE ".implode(" AND ",$X):""):"\nWHERE $je"));$ia=$g->affected_rows;}else{foreach((array)$_POST["check"]as$V){$J=queries($Ja.limit1($I,"\nWHERE ".where_check($V,$m)));if(!$J)break;$ia+=$g->affected_rows;}}}$A=lang(array('%d item has been affected.','%d items have been affected.'),$ia);if($_POST["clone"]&&$J&&$ia==1){$mc=last_id();if($mc)$A=sprintf('Item%s has been inserted.'," $mc");}queries_redirect(remove_from_uri("page"),$A,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+click on a value to modify it.';else{$J=true;$ia=0;foreach($_POST["val"]as$Xd=>$L){$P=array();foreach($L
as$v=>$V){$v=bracket_escape($v,1);$P[]=idf_escape($v)." = ".(ereg('char|text',$m[$v]["type"])||$V!=""?$b->processInput($m[$v],$V):"NULL");}$I=table($a)." SET ".implode(", ",$P);$ie=" WHERE ".where_check($Xd,$m).($X?" AND ".implode(" AND ",$X):"");$J=queries("UPDATE".($ec?" $I$ie":limit1($I,$ie)));if(!$J)break;$ia+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ia),$J);}}elseif(is_string($n=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Ia=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$n,$_);$ia=count($_[0]);begin();$pd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($_[0]as$v=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$pd]*)$pd~",$V.$pd,$sc);if(!$v&&!array_diff($sc[1],$Ia)){$Ia=$sc[1];$ia--;}else{$P=array();foreach($sc[1]as$q=>$Fa)$P[idf_escape($Ia[$q])]=($Fa==""&&$m[$Ia[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Fa))));$J=insert_update($a,$P,$Vc);if(!$J)break;}}if($J)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ia),$J);queries("ROLLBACK");}else$k=upload_error($n);}}$Dd=$b->tableName($S);if(is_ajax())ob_start();page_header('Select'.": $Dd",$k);$P=null;if(isset($jd["insert"])){$P="";foreach((array)$_GET["where"]as$V){if(count($Hb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"]))))$P.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($S,$P);if(!$f)echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$f);$b->selectSearchPrint($X,$f,$t);$b->selectOrderPrint($D,$f,$t);$b->selectLimitPrint($w);$b->selectLengthPrint($Hd);$b->selectActionPrint($t);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$o=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$F=floor(max(0,$o-1)/$w);}$I=$b->selectQueryBuild($N,$X,$Nb,$D,$w,$F);if(!$I)$I="SELECT".limit((+$w&&$Nb&&$ec&&$u=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Lb,($X?"\nWHERE ".implode(" AND ",$X):"").$Ob,($w!=""?+$w:null),($F?$w*$F:0),"\n");echo$b->selectQuery($I);$J=$g->query($I);if(!$J)echo"<p class='error'>".error()."\n";else{if($u=="mssql")$J->seek($w*$F);$lb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$u=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last")$o=(+$w&&$Nb&&$ec?($u=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($I) x")):count($M));if(!$M)echo"<p class='message'>".'No rows.'."\n";else{$ua=$b->backwardKeys($a,$Dd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Nb&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$_c=array();$Mb=array();reset($N);$bd=1;foreach($M[0]as$v=>$V){if($v!=$Dc){$V=$_GET["columns"][key($N)];$l=$m[$N?($V?$V["col"]:current($N)):$v];$C=($l?$b->fieldName($l,$bd):"*");if($C!=""){$bd++;$_c[$v]=$C;$e=idf_escape($v);$Vb=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($v);$Wa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Vb.($D[0]==$e||$D[0]==$v||(!$D&&$ec&&$Nb[0]==$e)?$Wa:'')).'">';echo(!$N||$V?apply_sql_function($V["fun"],$C):h(current($N)))."</a>";echo"<span class='column hidden'>","<a href='".h($Vb.$Wa)."' title='".'descending'."' class='text'> ‚Üì</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($v)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Mb[$v]=$V["fun"];next($N);}}$pc=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$v=>$V)$pc[$v]=max($pc[$v],min(40,strlen(utf8_decode($V))));}}echo($ua?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($w%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$Hb)as$B=>$L){$Wd=unique_array($M[$B],$t);$Xd="";foreach($Wd
as$v=>$V)$Xd.="&".($V!==null?urlencode("where[".bracket_escape($v)."]")."=".urlencode($V):"null%5B%5D=".urlencode($v));echo"<tr".odd().">".(!$Nb&&$N?"":"<td>".checkbox("check[]",substr($Xd,1),in_array(substr($Xd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($ec||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Xd)."'>".'edit'."</a>"));foreach($L
as$v=>$V){if(isset($_c[$v])){$l=$m[$v];if($V!=""&&(!isset($lb[$v])||$lb[$v]!=""))$lb[$v]=(is_mail($V)?$_c[$v]:"");$x="";$V=$b->editVal($V,$l);if($V!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$V!="")$x=ME.'download='.urlencode($a).'&field='.urlencode($v).$Xd;if($V==="")$V="&nbsp;";elseif(is_utf8($V)){if($Hd!=""&&is_shortable($l))$V=shorten_utf8($V,max(0,+$Hd));else$V=h($V);}if(!$x){foreach((array)$Hb[$v]as$Gb){if(count($Hb[$v])==1||end($Gb["source"])==$v){$x="";foreach($Gb["source"]as$q=>$sd)$x.=where_link($q,$Gb["target"][$q],$M[$B][$sd]);$x=($Gb["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Gb["db"]),ME):ME).'select='.urlencode($Gb["table"]).$x;if(count($Gb["source"])==1)break;}}}if($v=="COUNT(*)"){$x=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$Wd))$x.=where_link($q++,$U["col"],$U["val"],$U["op"]);}foreach($Wd
as$gc=>$U)$x.=where_link($q++,$gc,$U);}}if(!$x){if(is_mail($V))$x="mailto:$V";if($Yc=is_url($L[$v]))$x=($Yc=="http"&&$aa?$L[$v]:"$Yc://www.adminer.org/redirect/?url=".urlencode($L[$v]));}$r=h("val[$Xd][".bracket_escape($v)."]");$W=$_POST["val"][$Xd][bracket_escape($v)];$Qb=h($W!==null?$W:$L[$v]);$rc=strpos($V,"<i>...</i>");$hb=is_utf8($V)&&$M[$B][$v]==$L[$v]&&!$Mb[$v];$Gd=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$hb)||$W!==null?"<td>".($Gd?"<textarea name='$r' cols='30' rows='".(substr_count($L[$v],"\n")+1)."'>$Qb</textarea>":"<input name='$r' value='$Qb' size='$pc[$v]'>"):"<td id='$r' onclick=\"selectClick(this, event, ".($rc?2:($Gd?1:0)).($hb?"":", '".h('Use edit link to modify this value.')."'").");\">".$b->selectVal($V,$x,$l));}}if($ua)echo"<td>";$b->backwardKeysPrint($ua,$M[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Nb&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($M||$F)&&!is_ajax()){$rb=true;if($_GET["page"]!="last"&&+$w&&!$ec&&($o>=$w||$F)){$o=found_rows($S,$X);if($o<max(1e4,2*($F+1)*$w))$o=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):"")));else$rb=false;}echo"<p class='pages'>";if(+$w&&($o===false||$o>$w)){$tc=($o===false?$F+(count($M)>=$w?2:1):floor(($o-1)/$w));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($F+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$F).($F>5?" ...":"");for($q=max(1,$F-4);$q<min($tc,$F+5);$q++)echo
pagination($q,$F);echo($F+5<$tc?" ...":"").($rb&&$o!==false?pagination($tc,$F):' <a href="'.h(remove_from_uri("page")."&page=last").'">'.'last'."</a>");}echo($o!==false?" (".($rb?"":"~ ").lang(array('%d row','%d rows'),$o).")":""),(+$w&&($o===false?count($M)+1:$o-$F*$w)>$w?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$w).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'')," ".checkbox("all",1,0,'whole result')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$o,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Ib=$b->dumpFormat();if($Ib){print_fieldset("export",'Export');$Nc=$b->dumpOutput();echo($Nc?html_select("output",$Nc,$ha["output"])." ":""),html_select("format",$Ib,$ha["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($lb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$Nd'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));elseif(list($R,$r,$C)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$J=$g->query("SELECT $r, $C FROM ".table($R)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$r = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($q=0;$q<10&&($L=$J->fetch_row());$q++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($r))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($q==10)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$R=>$L){$C=$b->tableName($L);if(isset($L["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$C</a>";$V=number_format($L["Rows"],0,'.',',');echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();