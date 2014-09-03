<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.3
*/error_reporting(6135);$Bb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Bb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Yd=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Yd)$$V=$Yd;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0Ñ\0\n @\0¥CÑË\"\0`E„Q∏‡ˇá?¿tvM'îJd¡d\\åb0\0ƒ\"ô¿f”à§Ós5õœÁ—AùXPaJì0Ñ•ë8Ñ#RäT©ëz`à#.©«cÌX√˛»Ä?¿-\0°Im?†.´M∂Ä\0»Ø(Ãâ˝¿/(%å\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©ñ®aç'3I– d´¬!S±Êæ:4Áß+MdÂgØã¨«É°Óˆtô∞cëÜ£ı„È†b{èH(∆ì—ît1…)t⁄}F¶p0ôï8Ë\\82õDL>Ç9`'C°º€ó889§» éxQÿ˛\0Óe4ôÕQ òl¡≠P±øVâ≈bÒëóΩT4≤\\ûW/ôÊÈ’\nêÄ` 7\"hƒqπË4ZM6£T÷\r≠r\\ñ∂C{h€7\r”x67Œ©∫J á2.3êÂ9àKûÎ¢H¢,å!mî∆Üo\$„π.[\r&Ó#\$≤<¡àfÕ)èZ£\0=œr®è9√‹jŒ™J†Ë0´c,|Œ=ë√‚˘ΩÍö°Rs_6£Ñ›∑≠˚Ç·…ÌÄZ6£2Bæp\\-á1s2…“>éÉ X:\r‹∫ñ»3ªbö√ºÕ-8SLı¿Ìº…K.¸¥-‹“•\rH@ml·:¢Îµ;Æ˙˛¶ÓJ£0LR–2¥!Ëø´ÂAÍà∆2§	m˝—Ì0eI¡≠-:U\r¸„9‘ıMWLª0˚πGcJv2(ÎÎF9é`¬<áJÑ7+Àö~†çï}DJµΩHWÕSN÷«Ôe◊u]1Ã•(O‘L–™<l˛“R[u&™ÉH⁄3èvÚÄõ‹Uàt6∑√\$¡6‡ﬂ‡X\"ò<£ª}:Oã‰<3x≈O§8Û>†ÃÏÏCŒ⁄Ô1É¢Å’HR‚π’SñdÅ9™‡π%µU1ñSnÊa|.˜‘Å`Í†8£†∂:#Ä ‡CŒ2ã∏*[o·Ü4Xx˙.k\">∫°A™ÕO+,Ûx\\5tò—Ü÷Å`\\≈oûèçà%ßj⁄Ò]∏™n˚»\\È£h‹=éz»√™2\$®´÷F[NYè’Œ”RØ˝[IÙ±’⁄7≤®t“î∂˛7éÏ(·úÔÃWj0ˆÛ§Ê2v}›Ú;Ôk2å–Va–‡ªÒûr=¯ã(À„¢,≥õ\rÏÈj*∫B(RÓ2CñN\\åŒˇ≤9{a\0≈ï”VR4éB∏Ã/zÒnŒ6å£öá≠ÌÅ“(wÉs·sÌÚ∏«¥B[Û¯Mi#:#¯ØU·˛=M-~±ı‰„h)Øı	ÉpåCõ9/,–rÿ=ÉsëÉêò#BvŒäÅM èt=˜@ñhsÕÖÑ`k°Ûåp.=Së\"ŒÓjìÉ&5ƒué—p#Yçúüøá˙Y	‚∂~)∞s4Ÿ√1naV*ÊƒTS·Àqê§6Ü\"[LgÜ¨ë∆B\"|¿í2üéQ§:8∆®’ûÉ\rùVÉ∂4‡aj!º.&ñŒ√Éòo%0F9\"\$Òê≤D»π„â?'®ô2B¥Aﬂga≈kr≠'\$9\rÿ†6π`eœª diÙ˚2p\\õ\$ª“>Ç7Ò\n\\£ñ,°§ƒ9¢Á öIÇÃ+îööLnπ]†HHJú∑ ÂKLehA˘ö™@ˇµÿíÛ@ÜÃ⁄®d ΩÉ˘*ëH10ˆ–êf!‹∏7»1HAù`∞§4ã?ûã∆ZèUº w@(¥R(⁄œ∫T…2°©0Rÿ¯î·D`éÑëb˚ﬂqäqiÈ≈ËhV Íj[!πSìX˚:“\nü0F√L¬¢v…j€¶¡‘9¬ÂJÅfTx7Üz\\œÀõ˝Ü”É+R@“èd›^G¡\0.c¯`≤˛>NèÂ\\ΩF£sˆgñi∑\$ﬂØ%AÈÀ¥TI‡ï@v.ô\0ÃP≈+É cNEı—ßDﬁK∫v«Êe9äÊÊÎ≥Æ*uËVZ`¯⁄=~d¶∂•€De◊}fö”π\0∫≥€5œ¨πüf:jÑ`»ME1»ØE∂®ò CAÅé}∂öç)ê:ná¶U∞F‚YL¨≤Ωf?e+âà.ÎZQ‡ZCxz°‘£õ(`–Àã~Aà5ñ[«yJ1;Ω÷}›NSùL	Ÿ)ê•ñaøãŒ’Sﬁè¿c©ï9Ö¥±2Êmt+ï⁄bﬂcRTôw|•‹7+9˝\\0Éô¬SA≥á Ë·∫g∂ÿü:‘TÒ.'ù-˚bãÙq¶2–9cúP†S˚H÷π¶#ï¸„1©¿´•öØ⁄Í≈gTî‘Qµûi÷º]uÒé(v`ÿ´Î’\r‡Ó>1⁄Àkè~-_ËÎ,ú¨£ÒÒ¿ò·◊0&Cò≥\$¶∆¸<0ÚÍà{•ï∫Üg0ˆ·÷≤ÿ∑ìÔ%´B˙Í“˛v2Ûó.Ωs™b“v‡ªhëdù„Bw˙uﬁ=ãcﬁC÷Eá@>á–");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:õågCIº‹\n:ÃÊsaîPi2\nOgc	»e6LÜÛ‘⁄e7∆s)–ã\rè»HGíIí∆∆3aÑÊs'c„—D i6úNå£—Ëú—2H„Ò8úuF§RÖ#≥îîÍr7á#©îv}Ä@†ê`Qåﬁo5öa‘Iú‹,2O'8îR-q:PÕ∆S∏(àaºä*wÉ(∏Á%ø‡pí<F)‹nx8‰zA\"≥Z-C€e∏V'àßÉÅ¶™s¢‰q’˚;NFì1‰≠≤9ÎGºÕ¶'0ô\r¶õŸ»ø±9n`√—ÄúX1©›ÅG3Ã‡tçee9äÆ:NeÌä˝N±–OSÚz¯cëåzlé`5‚„Å»ﬂ	≥3‚Òyﬂ¸8.ä\r„êŒπP‹˙\rÉ@ç£Æÿ\\1\r„ Û\0Ç@2j8ÿó=.∫¶∞ -r»√°®¨0çäËQ®Íä∫hƒbºåÅÏ`Å¿éª^9ãq⁄E!£ í7)#¿∫™* ¿Q∆»ã\0äÿ“1´»Ê\"ëh >Éÿ˙∞––∆⁄-C \"í‰XÆáS`\\ºè§F÷¨h8‡ä≤‚†¬3ß£`X:OÒö,™á´⁄˙)£8ä“<BN–É;>9¡8“Ûácº<á*¨Ê2éc•9œÈ >¢H¿zôOj™B'B™˙™éä∫≤å5ë,ÚÑPÏb5–45Ä÷3Ïˇ@ÖÅ:∑N+iöjõ’J¢ü⁄ä\\™é	®∆á·@º>ã†∆4Xr(QrèÅ RŸ° dÛÖu=œtÕA8A{åc\\äß)≥Ω|◊ÅC4\n6ÿWÌò7(V4l6µ	ñ9\r°vÀéaﬁ&:CKòç!Ê-°£pŒ:\r\0V¢M†QÜ#ıK@º\0“.ÖŸÄÀVy∑õ¶wE˚\"’„fÉ|jﬁbgŸºF>ƒã	BHnñ›∫Z¢‘B≤B∆\$…F0ïœ√=™ÒkC-9ç„∏˛C¥‰âOîç9^Z3\r«rÖ7‡÷0Í®uŸw˘ïM∏g˘≈∞†’v2∂‘qI∞ºÛ≤ÏˆpÂµ¿∏‰h5c„Py«ÖŸ.Êç[∞˜•hV'-çY¿Ã”T∞Ë”Ö›õí:v–˛ü®O&&6ä®Zó·»Œª	rn˚∂ï•æBc£o⁄ Õ0˙MÉ„£§≤xz]‘åô’çÍ«!ÄvÈdz/sÉ‚€CåÌë¶=ıd9KπeVXŸs:pÃ—à8ñr√A0&iÆ)÷§R\$˙Y_VÈ4¨æÖz˜»;ia∞4∞† lI,&êt5¿¯8øI‰#_©ÄásàF√ª`\niE<¶'—Jy0@∏4á0Ü√a5ò>¬3Ã∫®@ƒï0DÜæœkŒ2ÍuOÇÄB¬Ò[Äº4¿2d•V´<e—`6ê¯C·ƒ	d>'EwAL[ã©iSEıR√[∫ßÅÂ\räﬂê†x<·Ì\\+¢ø xxÉpêû¬\0ËË;ÖA¨ΩpÿˆCÍÆV	ÒY´Rø&ö3∫v®y6 'y)xíjµÍ@‘rIÙÆzhÅBp◊IëífØ∫≈Ü±J˘“Zrù§<…\"\$T∂ë¶^H»Û,3ÊêêPØ≤Ëúê 8fÅ,2áò¶‚âÇp ËNﬂsÊ|Ú∏ûNUÁsCMØ†≤∫t_∞nça–‘,íBŸVbŒp4Û∂§¸€\$w#Áä5%ï8tõÒƒ‡Ùœ¸”ùmØ‡PŸ¯˛Ÿ3˝nØ˝éœ§≤hÛ6Il∫èNrÜQ	î“e‘Eì2⁄Lf'dóÃ*è\":YM #ELz†—h\0%S≠¢DH1–◊!ÍS&≥Ÿ[5	3%√({®»Â^<â…(HÅ¥6X+Œ\"h—W<∏íÛ_êtz∏à9≠Zôuh¨ÖÄîóf^»ã=h”¯:+Bìq≈	P&Ñ¬ä	Épba¿ö\nÆaÏà±V2«W†Ÿöä& ·πZÖ\0ﬁna”›≠dX8Zv>ßùπî–™áb\nCòSJröáªZ‡åW%`[¯/hÄR{\$í-ÖÇ™Åe ≤BGL¯zNBp(∫@¶›∞˜sÉ(fdÚÈG‡bS5“57i?ÜPZt\nzú>å˘`]x0=øJcrRBy»Yì]c_#¢Sìï-‰/Â\0√\n®l– aﬁÉ1áÅ2á@WÖ∞∆\n‰AîÏ#a,1Ö¬¯dí‚0» %aÜèd5ÄÃ|πE∂∆Â¿ŸkBØÔ¯OK+Ã™PÛç~6«0•êﬂeØÍ5á!2@§√∏(vdb¿Â∑q.É@ad≈˛õ¥ÑãRCπàíe¨”)X:#cYæZ.|ÿcﬂZ4>ÿÁ/&‹P≠Vë∏¶2ï∆wûH≤B5ÓÉWÁBpù<p—Œ'<Eüª ö*ê:zFD¥TgHÍR™\\∂√*›+}ºÖ∞¬C–]Ål.@Vº8\$¿≈NjÄõ:Ic·ˆíœΩñ4kï°^Ö˙<ß)˛∆”∏¬\0StÄ∆£•!olju∏∑óÆ÷ÀZkmqÆµÂv⁄€qú%“∫QM€€Æ-jÔYù3˝áﬂ&0°î6ÔIv{{◊ ¸ë‡‹C}∏∂Jz0€Vt”ÿnb-∏l©˘§ÕìÃZWKÄ≠2»x◊⁄m—’F>\nCsÖéàøàÍn„Cﬂ!ÂÀM∆0O…√rìΩ/á∆h2äBÜdUs≤˛é ≠‰ñÉ◊\"XKÅ>}√@¥√Ù@–ß	˜4ﬁ•7D\0†»C∑Ÿ'oGÏÕ\"o˙¯v„îoMvñ„Hy%\$Fù§çv\nUÇ¡zBãê¥ªói)›∫måQ!\"¥º\n;Ï¶‡\0§¢M*öC\rOj∞¢vÓFDºO‡	π/(íÑ¸ÀªÛyÉ;À¿˚ﬂg/Å}‰t9˙l£B[¨∏i‹0›2⁄˘A≤nòõÇ˙Ñ˜∑pKã&‹›∏Í˝\n!o{=º◊âa*êgE\\ûâ1Ω…˚¯ìM¡~√Ÿ{ÑÌ7Ê∏._¡ÊîíàAüﬁkˇØˆ“b>'yÜë¥—∆ˇ ç*nÔnV˚ÇJ¬H¬\"P\$F™*Èxeœ®! ›±\0ßÜp «ôDF#1'ﬁbÉ†ƒ8eLDi\n∏â,ìN+*®˘f˘ØÿôOhk0&;”/‰Hh¢Æ,!Ë|¸¨	#õ/í/â»ˆCBà<pEÄNÅ(π\0(ÊTá∞èW\n«Ü¡\"J(†æj¨ƒ\rc@√@®\r\">·%LÃ∞\$âbEpﬁ¿˙èøäæ ‰ä\r\"dœûÀ¢∫™êIÔ“˛Öj(ÄhÖO‹†fà¸èv¸∆yêÿ˚Fø\0¯˝/¿¸C§«ãx¢oÃ˝I∫˛±ò/dÍ∑F™¢F\0>®>∂Îr∑qTü,U–<ﬂcËìã\nV§ÉL•f#	æãµ\0P®èMö\$¿P&ãqS•Y\n≤LÂhÏÏÔâIb,RHH)+Lµu±p≈ R±Æ∂eœEkãJ¥Ò0k¶xbC*ı∞LÇÄA%löÃpà˜®0a`Ô©òSN\$6CÕi\nb Ièm'∞V–V+M\r«¡¨÷Ãd†á%å®ÑÖ‡⁄H(h€ÕR‹ø≠pÍCœ“>FÔEƒÑåF•§\n-†ö √é‡®*˙º#à®Úp6`œ'rzÄ–•\nn¿€'í|t‡˙•¢™\r¨í†ÇJ£f˙É)‡t∆PSã.Æ=&Úõ'2è*î√ò¶…˜)“’'Úã'R„*L~`Ä¬\rRxÆ·ÑX\rÄƒ’`÷.\0%å*†‚+•J'à\\I\rê¨@Ë10®ÂS 	ì%2ÄÀ2∆f tÜ\0\\#\\6 ∞	‡ƒ\rDo3¯SP ìU5ì\\ cƒ	®:>¿Ê¬‚E3k\nÄ†<‡uEX¡s1DÏös@\$@ﬁCOnÒ\n)Ä†	‡¶\nÜ\0‡ã;\0Rí˙Æ∆/\r9ìî0¬K2≥î	 )-,Ë~\$#.†®èÜ‘Y≠˙[®:æÆR\0Z?¿ÓßÜ≤˙\$Ã) …,Sì\nìÃì—\nì‘8#d<@∞¥T§ä¨G,%õ8´3”öSîT©h;§,T£ŒÃ∆í∞Í7f]D\"EDÄÛ!√à/ÛaT\\i‰ô9≥ÃI§PëÔ\"t]#B/2xÜ`Ë¨J…/èv\"R/H¿ÒIÖÃ¥sÙ\\∆C\0∑ç<LEÉƒ<@WJ„Nµ≤\nè˙3‡RÌdh˝n< Ûƒ‘\n¬≠ P˝sPÄ∂˝qÃ¥W‰Ñπá\\ã®ôà‹ÄÓ\"†‹©n\ro∞Ö0xe¿Cœf∫§¡\n)ˆˇÑÍOÄ√ÜfâJÛII\nÂWR¨qã	èI…©*fÒP¢±Qû!†‰T’]PÍjò\$i-àEä¶M£à≥ki/˙™o˚R†∏Â(WFôŒ∫®ä‹˜#∫/.öåØ˙)à›SF\0ŸÌ’-‚˝o°EH1˛¯√.U©≥JŸ	Æö±~¡•‡dÚ˛õµÊ¯‡Ÿ≤RQ!|±#d±kµîEà\$Î´î^Œ‡ûƒ\"JÎ≠‹Z’>ÙUB˘¡S≈FN≥ﬁ/\"Cbı˛8¥ÃN¶A)¨å∆à\\≈Úó'fQ.£cF2Ï\\eﬁÄXO3‡‡êLç”ÀP,ÚKÕP’MXıé‡Œê‘êñ|∏5∂K%∑g¿zœf3Uá<Û¢äÄÍ\0`#õcŒ∆r«0(J†≤¿\rfÛÆπj’ûHhh5ÛŒÓík÷‹á#Ê:Ø / §Ù¢¶LÔ)“Æ\nÄﬁ¥√àé¨e‚B˜(82‡≥@oÃ∆Vßo‡»≥æÉo¨ÓW\00067È∂Bp‚arBIsÃ4§ëpÇB<WTóBIùtÕa7is»‹‰i{cˆ≥çÌcÓﬂÈH!Íoi€∞o‹(ÄeUR'J\0PæsÙæÎû3‡LRtV†™\n@íá‡€LÉ.åµ|\"#>(∂ïEt´E≥?<¥LW\"Ë⁄≤ﬂb6ß}tLb0˜Gdrﬁ‘v0\"\$ß“õ~V#V°ó«ÄñÍF„_FUfYOÅÕn¬\ru¯c&]m∏#ÅO¨·˜ind\$HVÔZ Àor=så«s‡Àu„ƒŒ÷¸JG6ÄZ•∂\"‰`V∑¯L\$ò37ûË(h	Äﬁ8.*†P XÉêIà∏~ÎÎzk0!£8≥W{X#§øûøl#W¯¢±√‡8*\$¡k\"L#*≤Ø+\$≠+ÉƒøA†øœ\\4´É*yÓûm\nmD…ã\0Â`@òºtƒTî…˙Î∂®c¯˙≤wÓ∑GhrToE…'FVëç´D7v©i”ëg¿yà–ÒånVQr∞¯ƒ6.àp6´\0ˆ¬8®ø’e¿÷†Vãy\$áKΩxjΩ†Wh∆xØ`Ûw¬ÇËÉ/!≤\\Q¯˚Ú\nÏπSı\\Ÿï9˘ô9‰ˇ?OMä≤˝+Ë B0PDp*ß#*Ωòêaá√ÇcÉqn≈áàrÕπ#¨⁄xb%.‚»∂&6T¸¸÷îÕÁìaP∏ïn,ÔKSàÍhœUr.\r’^Ø}ıÒ™áÒ¿ÜxœØ8›Ê%TU<LÊÀãiÆÒö˙6(bì@†À{w∫\r˜æ–WZ&YT€˘Xo \\@z◊Œ*z5¿È:∆Lé0Ææ≤bj\"ä¥Çˆ4/YÜπÏCM-/πˆÀàÛ£R–è⁄5b\"%´Råí¨ÈÄz5ãm§∫Ñ¢ZS¨ZEÄtü/T£/†W{\"ì•◊Ω|[´§ﬁgyb7@¨ä—2hÛØ‡Ÿ∞ ·K‹Å:¿-¢âØDΩ´ÏÈ®“dÿ°ó∂∞õ’\rLπßÔ˚≤zQd∫åá≠U©N∏:L\r≥—OöPÒIPe¿¬Å,#µ⁄?0ª¨z˜≤E¨—]¥◊•wµ{öÔ¶EMïüïvãß:vY∫{óE§(∂’shmTÙÇ@");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\0;";break;case"cross.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\0\0;";break;case"up.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\0«Ú\0;";break;case"down.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\0«Ú\0;";break;case"arrow.gif":echo"GIF89a\0\n\0Ä\0\0ÄÄÄˇˇˇ!˘\0\0\0,\0\0\0\0\0\n\0\0Çiñ±ãûî™”≤ﬁª\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($Yb){$mc=substr($Yb,-1);return
str_replace($mc.$mc,$mc,substr($Yb,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($Zc,$Bb=false){if(get_magic_quotes_gpc()){while(list($u,$V)=each($Zc)){foreach($V
as$hc=>$U){unset($Zc[$u][$hc]);if(is_array($U)){$Zc[$u][stripslashes($hc)]=$U;$Zc[]=&$Zc[$u][stripslashes($hc)];}else$Zc[$u][stripslashes($hc)]=($Bb?$U:stripslashes($U));}}}}function
bracket_escape($Yb,$ra=false){static$Od=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Yb,($ra?array_flip($Od):$Od));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($A,$W,$Ba,$kc="",$Ic="",$gc=false){static$q=0;$q++;$I="<input type='checkbox' name='$A' value='".h($W)."'".($Ba?" checked":"").($Ic?' onclick="'.h($Ic).'"':'').($gc?" class='jsonly'":"")." id='checkbox-$q'>";return($kc!=""?"<label for='checkbox-$q'>$I".h($kc)."</label>":$I);}function
optionlist($Mc,$pd=null,$de=false){$I="";foreach($Mc
as$hc=>$U){$Nc=array($hc=>$U);if(is_array($U)){$I.='<optgroup label="'.h($hc).'">';$Nc=$U;}foreach($Nc
as$u=>$V)$I.='<option'.($de||is_string($u)?' value="'.h($u).'"':'').(($de||is_string($u)?(string)$u:$V)===$pd?' selected':'').'>'.h($V);if(is_array($U))$I.='</optgroup>';}return$I;}function
html_select($A,$Mc,$W="",$Hc=true){if($Hc)return"<select name='".h($A)."'".(is_string($Hc)?' onchange="'.h($Hc).'"':"").">".optionlist($Mc,$W)."</select>";$I="";foreach($Mc
as$u=>$V)$I.="<label><input type='radio' name='".h($A)."' value='".h($u)."'".($u==$W?" checked":"").">".h($V)."</label>";return$I;}function
confirm($Na=""){return" onclick=\"return confirm('".'Opravdu?'.($Na?" (' + $Na + ')":"")."');\"";}function
print_fieldset($q,$oc,$ge=false,$Ic=""){echo"<fieldset><legend><a href='#fieldset-$q' onclick=\"".h($Ic)."return !toggle('fieldset-$q');\">$oc</a></legend><div id='fieldset-$q'".($ge?"":" class='hidden'").">\n";}function
bold($ya){return($ya?" class='active'":"");}function
odd($I=' class="odd"'){static$p=0;if(!$I)$p=-1;return($p++%2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($u,$V=null){static$Cb=true;if($Cb)echo"{";if($u!=""){echo($Cb?"":",")."\n\t\"".addcslashes($u,"\r\n\"\\").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$Cb=false;}else{echo"\n}\n";$Cb=true;}}function
ini_bool($cc){$V=ini_get($cc);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
q($O){global$g;return$g->quote($O);}function
get_vals($G,$e=0){global$g;$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$e];}return$I;}function
get_key_vals($G,$h=null){global$g;if(!is_object($h))$h=$g;$I=array();$H=$h->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[$J[0]]=$J[1];}return$I;}function
get_rows($G,$h=null,$k="<p class='error'>"){global$g;$Ma=(is_object($h)?$h:$g);$I=array();$H=$Ma->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$I;}function
unique_array($J,$s){foreach($s
as$r){if(ereg("PRIMARY|UNIQUE",$r["type"])){$I=array();foreach($r["columns"]as$u){if(!isset($J[$u]))continue
2;$I[$u]=$J[$u];}return$I;}}$I=array();foreach($J
as$u=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$u))$I[$u]=$V;}return$I;}function
where($X,$m=array()){global$t;$I=array();foreach((array)$X["where"]as$u=>$V)$I[]=idf_escape(bracket_escape($u,1)).(($t=="sql"&&ereg('\\.',$V))||$t=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".unconvert_field($m[$u],exact_value($V)));foreach((array)$X["null"]as$u)$I[]=idf_escape($u)." IS NULL";return
implode(" AND ",$I);}function
where_check($V,$m=array()){parse_str($V,$Aa);remove_slashes(array(&$Aa));return
where($Aa,$m);}function
where_link($p,$e,$W,$Kc="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($e)."&where%5B$p%5D%5Bop%5D=".urlencode(($W!==null?$Kc:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($W);}function
cookie($A,$W){global$aa;$Rc=array($A,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Rc[]=true;return
call_user_func_array('setcookie',$Rc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($u){return$_SESSION[$u][DRIVER][SERVER][$_GET["username"]];}function
set_session($u,$V){$_SESSION[$u][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($cb,$M,$T,$i=null){global$db;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($db))."|username|".($i!==null?"db|":"").session_name()),$y);return"$y[1]?".(sid()?SID."&":"").($cb!="server"||$M!=""?urlencode($cb)."=".urlencode($M)."&":"")."username=".urlencode($T).($i!=""?"&db=".urlencode($i):"").($y[2]?"&$y[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($x,$z=null){if($z!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($x!==null?$x:$_SERVER["REQUEST_URI"]))][]=$z;}if($x!==null){if($x=="")$x=".";header("Location: $x");exit;}}function
query_redirect($G,$x,$z,$ed=true,$ub=true,$xb=false){global$g,$k,$b;if($ub)$xb=!$g->query($G);$vd="";if($G)$vd=$b->messageQuery("$G;");if($xb){$k=error().$vd;return
false;}if($ed)redirect($x,$z.$vd);return
true;}function
queries($G=null){global$g;static$cd=array();if($G===null)return
implode(";\n",$cd);$cd[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$g->query($G);}function
apply_queries($G,$Fd,$qb='table'){foreach($Fd
as$Q){if(!queries("$G ".$qb($Q)))return
false;}return
true;}function
queries_redirect($x,$z,$ed){return
query_redirect(queries(),$x,$z,$ed,false,!$ed);}function
remove_from_uri($Qc=""){return
substr(preg_replace("~(?<=[?&])($Qc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$Ra){return" ".($D==$Ra?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($u,$Ua=false){$zb=$_FILES[$u];if(!$zb||$zb["error"])return$zb["error"];$I=file_get_contents($Ua&&ereg('\\.gz$',$zb["name"])?"compress.zlib://$zb[tmp_name]":($Ua&&ereg('\\.bz2$',$zb["name"])?"compress.bzip2://$zb[tmp_name]":$zb["tmp_name"]));if($Ua){$wd=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$wd,$fd))$I=iconv("utf-16","utf-8",$I);elseif($wd=="\xEF\xBB\xBF")$I=substr($I,3);}return$I;}function
upload_error($k){$wc=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Nepoda≈ôilo se nahr√°t soubor.'.($wc?" ".sprintf('Maxim√°ln√≠ povolen√° velikost souboru je %sB.',$wc):""):'Soubor neexistuje.');}function
repeat_pattern($F,$pc){return
str_repeat("$F{0,65535}",$pc/65535)."$F{0,".($pc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($O,$pc=80,$Bd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$pc).")($)?)u",$O,$y))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$pc).")($)?)",$O,$y);return
h($y[1]).$Bd.(isset($y[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($Zc,$ac=array()){while(list($u,$V)=each($Zc)){if(is_array($V)){foreach($V
as$hc=>$U)$Zc[$u."[$hc]"]=$U;}elseif(!in_array($u,$ac))echo'<input type="hidden" name="'.h($u).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$b;$I=array();foreach($b->foreignKeys($Q)as$Hb){foreach($Hb["source"]as$V)$I[$V][]=$Hb;}return$I;}function
enum_input($Rd,$c,$l,$W,$mb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$tc);$I=($mb!==null?"<label><input type='$Rd'$c value='$mb'".((is_array($W)?in_array($mb,$W):$W===0)?" checked":"")."><i>".'pr√°zdn√©'."</i></label>":"");foreach($tc[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?$W==$p+1:(is_array($W)?in_array($p+1,$W):$W===$V));$I.=" <label><input type='$Rd'$c value='".($p+1)."'".($Ba?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$I;}function
input($l,$W,$o){global$Td,$b,$t;$A=h(bracket_escape($l["field"]));echo"<td class='function'>";$id=($t=="mssql"&&$l["auto_increment"]);if($id&&!$_POST["save"])$o=null;$Nb=(isset($_GET["select"])||$id?array("orig"=>'p≈Øvodn√≠'):array())+$b->editFunctions($l);$c=" name='fields[$A]'";if($l["type"]=="enum")echo
nbsp($Nb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Cb=0;foreach($Nb
as$u=>$V){if($u===""||!$V)break;$Cb++;}$Hc=($Cb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Cb > f.selectedIndex) f.selectedIndex = $Cb;\"":"");$c.=$Hc;echo(count($Nb)>1?html_select("function[$A]",$Nb,$o===null||in_array($o,$Nb)||isset($Nb[$o])?$o:"","functionChange(this);"):nbsp(reset($Nb))).'<td>';$ec=$b->editInput($_GET["edit"],$l,$c,$W);if($ec!="")echo$ec;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$tc);foreach($tc[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?($W>>$p)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$A][$p]' value='".(1<<$p)."'".($Ba?' checked':'')."$Hc>".h($b->editVal($V,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$A'$Hc>";elseif(($Hd=ereg('text|lob',$l["type"]))||ereg("\n",$W)){if($Hd&&$t!="sqlite")$c.=" cols='50' rows='12'";else{$K=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$K'".($K==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}else{$xc=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$y)?((ereg("binary",$l["type"])?2:1)*$y[1]+($y[3]?1:0)+($y[2]&&!$l["unsigned"]?1:0)):($Td[$l["type"]]?$Td[$l["type"]]+($l["unsigned"]?0:1):0));echo"<input".(ereg('int',$l["type"])?" type='number'":"")." value='".h($W)."'".($xc?" maxlength='$xc'":"").(ereg('char|binary',$l["type"])&&$xc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$Yb=bracket_escape($l["field"]);$o=$_POST["function"][$Yb];$W=$_POST["fields"][$Yb];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$zb=get_file("fields-$Yb");if(!is_string($zb))return
false;return
q($zb);}return$b->processInput($l,$W,$o);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Kb=false;foreach(table_status()as$Q=>$R){$A=$b->tableName($R);if(isset($R["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$H=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$H||$H->fetch_row()){if(!$Kb){echo"<ul>\n";$Kb=true;}echo"<li>".($H?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n":"$A: <span class='error'>".error()."</span>\n");}}}echo($Kb?"</ul>":"<p class='message'>".'≈Ω√°dn√© tabulky.')."\n";}function
dump_headers($Xb,$_c=false){global$b;$I=$b->dumpHeaders($Xb,$_c);$Pc=$_POST["output"];if($Pc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Xb).".$I".($Pc!="file"&&!ereg('[^0-9a-z]',$Pc)?".$Pc":""));session_write_close();return$I;}function
dump_csv($J){foreach($J
as$u=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$J[$u]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($o,$e){return($o?($o=="unixepoch"?"DATETIME($e, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$e)"):$e);}function
password_file(){$ab=ini_get("upload_tmp_dir");if(!$ab){if(function_exists('sys_get_temp_dir'))$ab=sys_get_temp_dir();else{$_b=@tempnam("","");if(!$_b)return
false;$ab=dirname($_b);unlink($_b);}}$_b="$ab/adminer.key";$I=@file_get_contents($_b);if($I)return$I;$Lb=@fopen($_b,"w");if($Lb){$I=md5(uniqid(mt_rand(),true));fwrite($Lb,$I);fclose($Lb);}return$I;}function
is_mail($jb){$na='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$F="$na+(\\.$na+)*@($bb?\\.)+$bb";return
preg_match("(^$F(,\\s*$F)*\$)i",$jb);}function
is_url($O){$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($bb?\\.)+$bb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$y)?strtolower($y[1]):"");}function
is_shortable($l){return
ereg('char|text|lob|geometry|point|linestring|polygon',$l["type"]);}function
slow_query($G){global$b,$S;$i=$b->database();if(support("kill")&&is_object($h=connect())&&($i==""||$h->select_db($i))){$jc=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$S,'&kill=',$jc,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;ob_flush();flush();$I=@get_key_vals($G,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($I);}function
lzw_decompress($wa){$Za=256;$xa=8;$Ea=array();$jd=0;$kd=0;for($p=0;$p<strlen($wa);$p++){$jd=($jd<<8)+ord($wa[$p]);$kd+=8;if($kd>=$xa){$kd-=$xa;$Ea[]=$jd>>$kd;$jd&=(1<<$kd)-1;$Za++;if($Za>>$xa)$xa++;}}$Ya=range("\0","\xFF");$I="";foreach($Ea
as$p=>$Da){$ib=$Ya[$Da];if(!isset($ib))$ib=$ke.$ke[0];$I.=$ib;if($p)$Ya[]=$ke.$ib[0];$ke=$ib;}return$I;}global$b,$g,$db,$gb,$ob,$k,$Nb,$Qb,$aa,$dc,$t,$ba,$lc,$Gc,$Tc,$zd,$S,$Qd,$Td,$ae,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Rc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Rc[]=true;call_user_func_array('session_set_cookie_params',$Rc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Bb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'cs';}function
lang($Pd,$Dc){$Vc=($Dc==1?0:($Dc&&$Dc<5?1:2));$Pd=str_replace("%d","%s",$Pd[$Vc]);$Dc=number_format($Dc,0,".",' ');return
sprintf($Pd,$Dc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Vc=array_search("",$b->operators);if($Vc!==false)unset($b->operators[$Vc]);}function
dsn($eb,$T,$E,$tb='auth_error'){set_exception_handler($tb);parent::__construct($eb,$T,$E);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$Ud=false){$H=parent::query($G);$this->error="";if(!$H){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;if(!$H)return
false;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$l=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$db=array();$db=array("server"=>"MySQL")+$db;if(!defined("DRIVER")){$Wc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$T,$E){mysqli_report(MYSQLI_REPORT_OFF);list($Vb,$Uc)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Vb:ini_get("mysqli.default_host")),($M.$T!=""?$T:ini_get("mysqli.default_user")),($M.$T.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($Uc)?$Uc:ini_get("mysqli.default_port")),(!is_numeric($Uc)?$Uc:null));if($I){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$I;}function
result($G,$l=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$l];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($M,$T,$E){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$T"!=""?$T:ini_get("mysql.default_user")),("$M$T$E"!=""?$E:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($Sa){return
mysql_select_db($Sa,$this->_link);}function
query($G,$Ud=false){$H=@($Ud?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$l=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$T,$E){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$T,$E);$this->query("SET NAMES utf8");return
true;}function
select_db($Sa){return$this->query("USE ".idf_escape($Sa));}function
query($G,$Ud=false){$this->setAttribute(1000,!$Ud);return
parent::query($G,$Ud);}}}function
idf_escape($Yb){return"`".str_replace("`","``",$Yb)."`";}function
table($Yb){return
idf_escape($Yb);}function
connect(){global$b;$g=new
Min_DB;$Qa=$b->credentials();if($g->connect($Qa[0],$Qa[1],$Qa[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$I=$g->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($md=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$md;return$I;}function
get_databases($Db){global$g;$I=get_session("dbs");if($I===null){$G=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$I=($Db?slow_query($G):get_vals($G));restart_session();set_session("dbs",$I);stop_session();}return$I;}function
limit($G,$X,$v,$Ec=0,$rd=" "){return" $G$X".($v!==null?$rd."LIMIT $v".($Ec?" OFFSET $Ec":""):"");}function
limit1($G,$X){return
limit($G,$X,1);}function
db_collation($i,$Ha){global$g;$I=null;$Oa=$g->result("SHOW CREATE DATABASE ".idf_escape($i),1);if(preg_match('~ COLLATE ([^ ]+)~',$Oa,$y))$I=$y[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Oa,$y))$I=$Ha[$y[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Ta){$I=array();foreach($Ta
as$i)$I[$i]=count(get_vals("SHOW TABLES IN ".idf_escape($i)));return$I;}function
table_status($A=""){$I=array();foreach(get_rows("SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Rows"]))$J["Comment"]="";if($A!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return!isset($R["Rows"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$y);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$y[1],"length"=>$y[2],"unsigned"=>ltrim($y[3].$y[4]),"default"=>($J["Default"]!=""||ereg("char|set",$y[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$y)?$y[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($Q,$h=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($Q){global$g,$Gc;static$F='`(?:[^`]|``)+`';$I=array();$Pa=$g->result("SHOW CREATE TABLE ".table($Q),1);if($Pa){preg_match_all("~CONSTRAINT ($F) FOREIGN KEY \\(((?:$F,? ?)+)\\) REFERENCES ($F)(?:\\.($F))? \\(((?:$F,? ?)+)\\)(?: ON DELETE ($Gc))?(?: ON UPDATE ($Gc))?~",$Pa,$tc,PREG_SET_ORDER);foreach($tc
as$y){preg_match_all("~$F~",$y[2],$ud);preg_match_all("~$F~",$y[5],$Gd);$I[idf_unescape($y[1])]=array("db"=>idf_unescape($y[4]!=""?$y[3]:$y[4]),"table"=>idf_unescape($y[4]!=""?$y[4]:$y[3]),"source"=>array_map('idf_unescape',$ud[0]),"target"=>array_map('idf_unescape',$Gd[0]),"on_delete"=>($y[6]?$y[6]:"RESTRICT"),"on_update"=>($y[7]?$y[7]:"RESTRICT"),);}}return$I;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$u=>$V)asort($I[$u]);return$I;}function
information_schema($i){global$g;return($g->server_info>=5&&$i=="information_schema")||($g->server_info>=5.5&&$i=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$fd))return$fd[1]-1;}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($i,$Ga){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($i).($Ga?" COLLATE ".q($Ga):""));}function
drop_databases($Ta){set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ta,'idf_escape');}function
rename_database($A,$Ga){if(create_database($A,$Ga)){$gd=array();foreach(tables_list()as$Q=>$Rd)$gd[]=table($Q)." TO ".idf_escape($A).".".table($Q);if(!$gd||queries("RENAME TABLE ".implode(", ",$gd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$qa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$r){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$r["columns"],true)){$qa="";break;}if($r["type"]=="PRIMARY")$qa=" UNIQUE";}}return" AUTO_INCREMENT$qa";}function
alter_table($Q,$A,$m,$Eb,$Ka,$nb,$Ga,$pa,$Sc){$la=array();foreach($m
as$l)$la[]=($l[1]?($Q!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($Q!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$la=array_merge($la,$Eb);$xd="COMMENT=".q($Ka).($nb?" ENGINE=".q($nb):"").($Ga?" COLLATE ".q($Ga):"").($pa!=""?" AUTO_INCREMENT=$pa":"").$Sc;if($Q=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$la)."\n) $xd");if($Q!=$A)$la[]="RENAME TO ".table($A);$la[]=$xd;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$la));}function
alter_indexes($Q,$la){foreach($la
as$u=>$V)$la[$u]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$la));}function
truncate_tables($Fd){return
apply_queries("TRUNCATE TABLE",$Fd);}function
drop_views($fe){return
queries("DROP VIEW ".implode(", ",array_map('table',$fe)));}function
drop_tables($Fd){return
queries("DROP TABLE ".implode(", ",array_map('table',$Fd)));}function
move_tables($Fd,$fe,$Gd){$gd=array();foreach(array_merge($Fd,$fe)as$Q)$gd[]=table($Q)." TO ".idf_escape($Gd).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$gd));}function
copy_tables($Fd,$fe,$Gd){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Fd
as$Q){$A=($Gd==DB?table("copy_$Q"):idf_escape($Gd).".".table($Q));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($Q))||!queries("INSERT INTO $A SELECT * FROM ".table($Q)))return
false;}foreach($fe
as$Q){$A=($Gd==DB?table("copy_$Q"):idf_escape($Gd).".".table($Q));$ee=view($Q);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $ee[select]"))return
false;}return
true;}function
trigger($A){if($A=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$Rd){global$g,$ob,$dc,$Td;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Sd="((".implode("|",array_merge(array_keys($Td),$ka)).")\\b(?:\\s*\\(((?:[^'\")]*|$ob)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$F="\\s*(".($Rd=="FUNCTION"?"":$dc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Sd";$Oa=$g->result("SHOW CREATE $Rd ".idf_escape($A),2);preg_match("~\\(((?:$F\\s*,?)*)\\)\\s*".($Rd=="FUNCTION"?"RETURNS\\s+$Sd\\s+":"")."(.*)~is",$Oa,$y);$m=array();preg_match_all("~$F\\s*,?~is",$y[1],$tc,PREG_SET_ORDER);foreach($tc
as$Qc){$A=str_replace("``","`",$Qc[2]).$Qc[3];$m[]=array("field"=>$A,"type"=>strtolower($Qc[5]),"length"=>preg_replace_callback("~$ob~s",'normalize_enum',$Qc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Qc[8] $Qc[7]"))),"null"=>1,"full_type"=>$Qc[4],"inout"=>strtoupper($Qc[1]),"collation"=>strtolower($Qc[9]),);}if($Rd!="FUNCTION")return
array("fields"=>$m,"definition"=>$y[11]);return
array("fields"=>$m,"returns"=>array("type"=>$y[12],"length"=>$y[13],"unsigned"=>$y[15],"collation"=>$y[16]),"definition"=>$y[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$N){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($Q,$N,$Xc){foreach($N
as$u=>$V)$N[$u]="$u = $V";$be=implode(", ",$N);return
queries("INSERT INTO ".table($Q)." SET $be ON DUPLICATE KEY UPDATE $be");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$G){return$g->query("EXPLAIN $G");}function
found_rows($R,$X){return($X||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($nd){return
true;}function
create_sql($Q,$pa){global$g;$I=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$pa)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Sa){return"USE ".idf_escape($Sa);}function
trigger_sql($Q,$_d){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")),null,"-- ")as$J)$I.="\n".($_d=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(ereg("binary",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if(ereg("geometry|point|linestring|polygon",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$I){if(ereg("binary",$l["type"]))$I="UNHEX($I)";if(ereg("geometry|point|linestring|polygon",$l["type"]))$I="GeomFromText($I)";return$I;}function
support($yb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$yb);}$t="sql";$Td=array();$zd=array();foreach(array('ƒå√≠sla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a ƒças'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'≈òetƒõzce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),'Bin√°rn√≠'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometrie'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$u=>$V){$Td+=$V;$zd[$u]=array_keys($V);}$ae=array("unsigned","zerofill","unsigned zerofill");$Lc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Nb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Qb=array("avg","count","count distinct","group_concat","max","min","sum");$gb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.6.3";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$Ta=$this->databases(false);return(!$Ta?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Ta[(information_schema($Ta[0])?1:0)]);}function
databases($Db=true){return
get_databases($Db);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>U≈æivatel<td><input type="hidden" name="auth[driver]" value="server"><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>Heslo<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'P≈ôihl√°sit se'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Trval√© p≈ôihl√°≈°en√≠')."\n";}function
login($rc,$E){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Dd){return
h($Dd["Comment"]!=""?$Dd["Comment"]:$Dd["Name"]);}function
fieldName($l,$B=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Dd,$N=""){$a=$Dd["Name"];if($N!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$N).'">'.'Nov√° polo≈æka'."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Posledn√≠ str√°nka'."'>&gt;&gt;</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Cd){$I=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$J)$I[$J["TABLE_NAME"]]["keys"][$J["CONSTRAINT_NAME"]][$J["COLUMN_NAME"]]=$J["REFERENCED_COLUMN_NAME"];foreach($I
as$u=>$V){$A=$this->tableName(table_status($u));if($A!=""){$od=preg_quote($Cd);$rd="(:|\\s*-)?\\s+";$I[$u]["name"]=(preg_match("(^$od$rd(.+)|^(.+?)$rd$od\$)iu",$A,$y)?$y[2].$y[3]:$A);}else
unset($I[$u]);}return$I;}function
backwardKeysPrint($ta,$J){foreach($ta
as$Q=>$sa){foreach($sa["keys"]as$Ia){$w=ME.'select='.urlencode($Q);$p=0;foreach($Ia
as$e=>$V)$w.=where_link($p++,$e,$J[$V]);echo"<a href='".h($w)."'>".h($sa["name"])."</a>";$w=ME.'edit='.urlencode($Q);foreach($Ia
as$e=>$V)$w.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($J[$V]);echo"<a href='".h($w)."' title='".'Nov√° polo≈æka'."'>+</a> ";}}}function
selectQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$l){if(ereg("varchar|character varying",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($K,$Gb){$I=$K;foreach($K[0]as$u=>$V){if(list($Q,$q,$A)=$this->_foreignColumn($Gb,$u)){$Zb=array();foreach($K
as$J)$Zb[$J[$u]]=exact_value($J[$u]);$Xa=$this->_values[$Q];if(!$Xa)$Xa=get_key_vals("SELECT $q, $A FROM ".table($Q)." WHERE $q IN (".implode(", ",$Zb).")");foreach($K
as$_=>$J){if(isset($J[$u]))$I[$_][$u]=(string)$Xa[$J[$u]];}}}return$I;}function
selectLink($V,$l){}function
selectVal($V,$w,$l){$I=($V===null?"&nbsp;":$V);$w=h($w);if(ereg('blob|bytea',$l["type"])&&!is_utf8($V)){$I=lang(array('%d bajt','%d bajty','%d bajt≈Ø'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V))$I="<img src='$w' alt='$I'>";}if(like_bool($l)&&$I!="&nbsp;")$I=($V?'ano':'ne');if($w)$I="<a href='$w'>$I</a>";if(!$w&&!like_bool($l)&&ereg('int|float|double|decimal',$l["type"]))$I="<div class='number'>$I</div>";elseif(ereg('date',$l["type"]))$I="<div class='datetime'>$I</div>";return$I;}function
editVal($V,$l){if(ereg('date|timestamp',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$V);return$V;}function
selectColumnsPrint($L,$f){}function
selectSearchPrint($X,$f,$s){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Vyhledat'."</legend><div>\n";$ic=array();foreach($X
as$u=>$V)$ic[$V["col"]]=$u;$p=0;$m=fields($_GET["select"]);foreach($f
as$A=>$Wa){$l=$m[$A];if(ereg("enum",$l["type"])||like_bool($l)){$u=$ic[$A];$p--;echo"<div>".h($Wa)."<input type='hidden' name='where[$p][col]' value='".h($A)."'>:",(like_bool($l)?" <select name='where[$p][val]'>".optionlist(array(""=>"",'ne','ano'),$X[$u]["val"],true)."</select>":enum_input("checkbox"," name='where[$p][val][]'",$l,(array)$X[$u]["val"],($l["null"]?0:null))),"</div>\n";unset($f[$A]);}elseif(is_array($Mc=$this->_foreignKeyOptions($_GET["select"],$A))){if($m[$A]["null"])$Mc[0]='('.'pr√°zdn√©'.')';$u=$ic[$A];$p--;echo"<div>".h($Wa)."<input type='hidden' name='where[$p][col]' value='".h($A)."'><input type='hidden' name='where[$p][op]' value='='>: <select name='where[$p][val]'>".optionlist($Mc,$X[$u]["val"],true)."</select></div>\n";unset($f[$A]);}}$p=0;foreach($X
as$V){if(($V["col"]==""||$f[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$p][col]'><option value=''>(".'kdekoliv'.")".optionlist($f,$V["col"],true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$p][val]' value='".h($V["val"])."'></div>\n";$p++;}}echo"<div><select name='where[$p][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'kdekoliv'.")".optionlist($f,null,true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$p][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($B,$f,$s){$Oc=array();foreach($s
as$u=>$r){$B=array();foreach($r["columns"]as$V)$B[]=$f[$V];if(count(array_filter($B,'strlen'))>1&&$u!="PRIMARY")$Oc[$u]=implode(", ",$B);}if($Oc){echo'<fieldset><legend>'.'Se≈ôadit'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Oc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($v){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$v),"</div></fieldset>\n";}function
selectLengthPrint($Id){}function
selectActionPrint($s){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($kb,$f){if($kb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Odes√≠latel'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'P≈ôedmƒõt'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Vlo≈æit'."'>\n";echo"<p>".'P≈ô√≠lohy'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($kb)==1?'<input type="hidden" name="email_field" value="'.h(key($kb)).'">':html_select("email_field",$kb)),"<input type='submit' name='email' value='".'Odeslat'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$s){return
array(array(),array());}function
selectSearchProcess($m,$s){$I=array();foreach((array)$_GET["where"]as$u=>$X){$Fa=$X["col"];$Jc=$X["op"];$V=$X["val"];if(($u<0?"":$Fa).$V!=""){$La=array();foreach(($Fa!=""?array($Fa=>$m[$Fa]):$m)as$A=>$l){if($Fa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$l["type"])){$A=idf_escape($A);if($Fa!=""&&$l["type"]=="enum")$La[]=(in_array(0,$V)?"$A IS NULL OR ":"")."$A IN (".implode(", ",array_map('intval',$V)).")";else{$Jd=ereg('char|text|enum|set',$l["type"]);$W=$this->processInput($l,(!$Jc&&$Jd&&ereg('^[^%]+$',$V)?"%$V%":$V));$La[]=$A.($W=="NULL"?" IS".($Jc==">="?" NOT":"")." $W":(in_array($Jc,$this->operators)||$Jc=="="?" $Jc $W":($Jd?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($u<0&&$V=="0")$La[]="$A IS NULL";}}}$I[]=($La?"(".implode(" OR ",$La).")":"0");}}return$I;}function
selectOrderProcess($m,$s){$bc=$_GET["index_order"];if($bc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($bc!=""?array($s[$bc]):$s)as$r){if($bc!=""||$r["type"]=="INDEX"){$Wa=false;foreach($r["columns"]as$V){if(ereg('date|timestamp',$m[$V]["type"])){$Wa=true;break;}}$I=array();foreach($r["columns"]as$V)$I[]=idf_escape($V).($Wa?" DESC":"");return$I;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$Gb){if($_POST["email_append"])return
true;if($_POST["email"]){$qd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Ad=$_POST["email_subject"];$z=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Ad.$z",$tc);$K=get_rows("SELECT DISTINCT $l".($tc[1]?", ".implode(", ",array_map('idf_escape',array_unique($tc[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($K,$Gb)as$J){$hd=array('{\\'=>'{');foreach($tc[1]as$V)$hd['{$'."$V}"]=$this->editVal($J[$V],$m[$V]);$jb=$J[$_POST["email_field"]];if(is_mail($jb)&&send_mail($jb,strtr($Ad,$hd),strtr($z,$hd),$_POST["email_from"],$_FILES["email_files"]))$qd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Byl odesl√°n %d e-mail.','Byly odesl√°ny %d e-maily.','Bylo odesl√°no %d e-mail≈Ø.'),$qd));}return
false;}function
selectQueryBuild($L,$X,$Ob,$B,$v,$D){return"";}function
messageQuery($G){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$G)."\n-->";}function
editFunctions($l){$I=array();if($l["null"]&&ereg('blob',$l["type"]))$I["NULL"]='pr√°zdn√©';$I[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(ereg('date|time',$l["type"]))$I["now"]='teƒè';if(eregi('_(md5|sha1)$',$l["field"],$y))$I[]=strtolower($y[1]);return$I;}function
editInput($Q,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'p≈Øvodn√≠'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Mc=$this->_foreignKeyOptions($Q,$l["field"],$W);if($Mc!==null)return(is_array($Mc)?"<select$c>".optionlist($Mc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Mc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$Ub="";if(ereg('time',$l["type"]))$Ub='HH:MM:SS';if(ereg('date|timestamp',$l["type"]))$Ub='d.m.[rrrr]'.($Ub?" [$Ub]":"");if($Ub)return"<input value='".h($W)."'$c> ($Ub)";if(eregi('_(md5|sha1)$',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$o=""){if($o=="now")return"$o()";$I=$W;if(ereg('date|timestamp',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$W,$y))$I=($y["p1"]!=""?$y["p1"]:($y["p2"]!=""?($y["p2"]<70?20:19).$y["p2"]:gmdate("Y")))."-$y[p3]$y[p4]-$y[p5]$y[p6]".end($y);$I=($l["type"]=="bit"&&ereg('^[0-9]+$',$W)?$I:q($I));if($W==""&&like_bool($l))$I="0";elseif($W==""&&($l["null"]||!ereg('char|text',$l["type"])))$I="NULL";elseif(ereg('^(md5|sha1)$',$o))$I="$o($I)";return
unconvert_field($l,$I);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$_d,$G){global$g;$H=$g->query($G,1);if($H){while($J=$H->fetch_assoc()){if($_d=="table"){dump_csv(array_keys($J));$_d="INSERT";}dump_csv($J);}}}function
dumpFilename($Xb){return
friendly_url($Xb);}function
dumpHeaders($Xb,$_c=false){$vb="csv";header("Content-Type: text/csv; charset=utf-8");return$vb;}function
homepage(){return
true;}function
navigation($zc){global$ca,$S;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($zc=="auth"){$Cb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$E){if($E!==null){if($Cb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Cb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'pr√°zdn√©'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Odhl√°sit" id="logout">
<input type="hidden" name="token" value="',$S,'">
</p>
</form>
';$this->databasesPrint($zc);if($zc!="db"&&$zc!="ns"){$R=table_status();if(!$R)echo"<p class='message'>".'≈Ω√°dn√© tabulky.'."\n";else$this->tablesPrint($R);}}}function
databasesPrint($zc){}function
tablesPrint($Fd){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Fd
as$J){$A=$this->tableName($J);if(isset($J["Engine"])&&$A!="")echo"<a href='".h(ME).'select='.urlencode($J["Name"])."'".bold($_GET["select"]==$J["Name"])." title='".'Vypsat data'."'>$A</a><br>\n";}}function
_foreignColumn($Gb,$e){foreach((array)$Gb[$e]as$Fb){if(count($Fb["source"])==1){$A=$this->rowDescription($Fb["table"]);if($A!=""){$q=idf_escape($Fb["target"][0]);return
array($Fb["table"],$q,$A);}}}}function
_foreignKeyOptions($Q,$e,$W=null){global$g;if(list($Gd,$q,$A)=$this->_foreignColumn(column_foreign_keys($Q),$e)){$I=&$this->_values[$Gd];if($I===null){$R=table_status($Gd);$I=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $q, $A FROM ".table($Gd)." ORDER BY 2"));}if(!$I&&$W!==null)return$g->result("SELECT $A FROM ".table($Gd)." WHERE $q = ".q($W));return$I;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Kd,$k="",$_a=array(),$Ld=""){global$ba,$b,$g,$db;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Md=$Kd.($Ld!=""?": ".h($Ld):"");$Nd=strip_tags($Md.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Nd,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.3",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.3",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.3",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($_a!==null){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($w?$w:".").'">'.$db[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):'Server');if($_a===false)echo"$M\n";else{echo"<a href='".($w?h($w):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($_a)))echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($_a)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($_a
as$u=>$V){$Wa=(is_array($V)?$V[1]:$V);if($Wa!="")echo'<a href="'.h(ME."$u=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Wa).'</a> &raquo; ';}}echo"$Kd\n";}}echo"<h2>$Md</h2>\n";restart_session();$ce=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$yc=$_SESSION["messages"][$ce];if($yc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$yc)."</div>\n";unset($_SESSION["messages"][$ce]);}$Ta=&get_session("dbs");if(DB!=""&&$Ta&&!in_array(DB,$Ta,true))$Ta=null;stop_session();if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($zc=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($zc);echo'</div>
';}function
int32($_){while($_>=2147483648)$_-=4294967296;while($_<=-2147483649)$_+=4294967296;return(int)$_;}function
long2str($U,$he){$md='';foreach($U
as$V)$md.=pack('V',$V);if($he)return
substr($md,0,end($U));return$md;}function
str2long($md,$he){$U=array_values(unpack('V*',str_pad($md,4*ceil(strlen($md)/4),"\0")));if($he)$U[]=strlen($md);return$U;}function
xxtea_mx($Z,$Y,$P,$hc){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($P^$Y)+($hc^$Z));}function
encrypt_string($yd,$u){if($yd=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($yd,true);$_=count($U)-1;$Z=$U[$_];$Y=$U[0];$bd=floor(6+52/($_+1));$P=0;while($bd-->0){$P=int32($P+0x9E3779B9);$fb=$P>>2&3;for($C=0;$C<$_;$C++){$Y=$U[$C+1];$Ac=xxtea_mx($Z,$Y,$P,$u[$C&3^$fb]);$Z=int32($U[$C]+$Ac);$U[$C]=$Z;}$Y=$U[0];$Ac=xxtea_mx($Z,$Y,$P,$u[$C&3^$fb]);$Z=int32($U[$_]+$Ac);$U[$_]=$Z;}return
long2str($U,false);}function
decrypt_string($yd,$u){if($yd=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($yd,false);$_=count($U)-1;$Z=$U[$_];$Y=$U[0];$bd=floor(6+52/($_+1));$P=int32($bd*0x9E3779B9);while($P){$fb=$P>>2&3;for($C=$_;$C>0;$C--){$Z=$U[$C-1];$Ac=xxtea_mx($Z,$Y,$P,$u[$C&3^$fb]);$Y=int32($U[$C]-$Ac);$U[$C]=$Y;}$Z=$U[$_];$Ac=xxtea_mx($Z,$Y,$P,$u[$C&3^$fb]);$Y=int32($U[0]-$Ac);$U[0]=$Y;$P=int32($P-0x9E3779B9);}return
long2str($U,true);}$g='';$S=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Tc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($u)=explode(":",$V);$Tc[$u]=$V;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$u=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$Yc=$b->permanentLogin();$Tc[$u]="$u:".base64_encode($Yc?encrypt_string($d["password"],$Yc):"");cookie("adminer_permanent",implode(" ",$Tc));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($S&&$_POST["token"]!=$S){page_header('Odhl√°sit','Neplatn√Ω token CSRF. Ode≈°lete formul√°≈ô znovu.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$u)set_session($u,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhl√°≈°en√≠ probƒõhlo v po≈ô√°dku.');}}elseif($Tc&&!$_SESSION["pwds"]){session_regenerate_id();$Yc=$b->permanentLogin();foreach($Tc
as$u=>$V){list(,$Ca)=explode(":",$V);list($cb,$M,$T,$i)=array_map('base64_decode',explode("-",$u));$_SESSION["pwds"][$cb][$M][$T]=decrypt_string(base64_decode($Ca),$Yc);$_SESSION["db"][$cb][$M][$T][$i]=true;}}function
unset_permanent(){global$Tc;foreach($Tc
as$u=>$V){list($cb,$M,$T)=array_map('base64_decode',explode("-",$u));if($cb==DRIVER&&$M==SERVER&&$i==$_GET["username"])unset($Tc[$u]);}cookie("adminer_permanent",implode(" ",$Tc));}function
auth_error($sb=null){global$g,$b,$S;$td=session_name();$k="";if(!$_COOKIE[$td]&&$_GET[$td]&&ini_bool("session.use_only_cookies"))$k='Session promƒõnn√© mus√≠ b√Ωt povolen√©.';elseif(isset($_GET["username"])){if(($_COOKIE[$td]||$_GET[$td])&&!$S)$k='Session vypr≈°ela, p≈ôihla≈°te se pros√≠m znovu.';else{$E=&get_session("pwds");if($E!==null){$k=h($sb?$sb->getMessage():(is_string($g)?$g:'Neplatn√© p≈ôihla≈°ovac√≠ √∫daje.'));$E=null;}unset_permanent();}}page_header('P≈ôihl√°sit se',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('≈Ω√°dn√© roz≈°√≠≈ôen√≠',sprintf('Nen√≠ dostupn√© ≈æ√°dn√© z podporovan√Ωch PHP roz≈°√≠≈ôen√≠ (%s).',implode(", ",$Wc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$S=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$S;$k=($_POST?($_POST["token"]==$S?"":'Neplatn√Ω token CSRF. Ode≈°lete formul√°≈ô znovu.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('P≈ô√≠li≈° velk√° POST data. Zmen≈°ete data nebo zvy≈°te hodnotu konfiguraƒçn√≠ direktivy %s.','"post_max_size"')));if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$g->select_db($b->database());function
email_header($Sb){return"=?UTF-8?B?".base64_encode($Sb)."?=";}function
send_mail($jb,$Ad,$z,$Mb="",$Ab=array()){$j=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$z=str_replace("\n",$j,wordwrap(str_replace("\r","","$z\n")));$za=uniqid("boundary");$oa="";foreach((array)$Ab["error"]as$u=>$V){if(!$V)$oa.="--$za$j"."Content-Type: ".str_replace("\n","",$Ab["type"][$u]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Ab["name"][$u])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Ab["tmp_name"][$u])),76,$j).$j;}$va="";$Tb="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($oa){$oa.="--$za--$j";$va="--$za$j$Tb$j$j";$Tb="Content-Type: multipart/mixed; boundary=\"$za\"";}$Tb.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Mb?$j."From: ".str_replace("\n","",$Mb):"");return
mail($jb,email_header($Ad),$va.$z.$oa,$Tb);}function
like_bool($l){return
ereg("bool|(tinyint|bit)\\(1\\)",$l["full_type"]);}$Gc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$db[DRIVER]='P≈ôihl√°sit se';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$be=(isset($_GET["select"])?$_POST["edit"]:$X);foreach($m
as$A=>$l){if(!isset($l["privileges"][$be?"update":"insert"])||$b->fieldName($l)=="")unset($m[$A]);}if($_POST&&!$k&&!isset($_GET["select"])){$x=$_POST["referer"];if($_POST["insert"])$x=($be?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$x))$x=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $X"),$x,'Polo≈æka byla smaz√°na.');else{$N=array();foreach($m
as$A=>$l){$V=process_input($l);if($V!==false&&$V!==null)$N[idf_escape($A)]=($be?"\n".idf_escape($A)." = $V":$V);}if($be){if(!$N)redirect($x);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$N),"\nWHERE $X"),$x,'Polo≈æka byla aktualizov√°na.');}else{$H=insert_into($a,$N);$nc=($H?last_id():0);queries_redirect($x,sprintf('Polo≈æka%s byla vlo≈æena.',($nc?" $nc":"")),$H);}}}$Ed=$b->tableName(table_status($a));page_header(($be?'Upravit':'Vlo≈æit'),$k,array("select"=>array($a,$Ed)),$Ed);$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($X){$L=array();foreach($m
as$A=>$l){if(isset($l["privileges"]["select"])){$ma=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$ma="''";if($t=="sql"&&ereg("enum|set",$l["type"]))$ma="1*".idf_escape($A);$L[]=($ma?"$ma AS ":"").idf_escape($A);}}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false)echo"<p class='error'>".'≈Ω√°dn√© ≈ô√°dky.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'Nem√°te opr√°vnƒõn√≠ editovat tuto tabulku.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$A=>$l){echo"<tr><th>".$b->fieldName($l);$Va=$_GET["set"][bracket_escape($A)];$W=($J!==null?($J[$A]!=""&&$t=="sql"&&ereg("enum|set",$l["type"])?(is_array($J[$A])?array_sum($J[$A]):+$J[$A]):$J[$A]):(!$be&&$l["auto_increment"]?"":(isset($_GET["select"])?false:($Va!==null?$Va:$l["default"]))));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$o=($_POST["save"]?(string)$_POST["function"][$A]:($be&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if($l["type"]=="timestamp"&&$W=="CURRENT_TIMESTAMP"){$W="";$o="now";}input($l,$W,$o);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Ulo≈æit'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($be?'Ulo≈æit a pokraƒçovat v editaci':'Ulo≈æit a vlo≈æit dal≈°√≠')."' title='Ctrl+Shift+Enter'>\n";}echo($be?"<input type='submit' name='delete' value='".'Smazat'."' onclick=\"return confirm('".'Opravdu?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status($a);$s=indexes($a);$m=fields($a);$Ib=column_foreign_keys($a);$Fc="";if($R["Oid"]=="t"){$Fc=($t=="sqlite"?"rowid":"oid");$s[]=array("type"=>"PRIMARY","columns"=>array($Fc));}parse_str($_COOKIE["adminer_import"],$ha);$ld=array();$f=array();$Id=null;foreach($m
as$u=>$l){$A=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$A!=""){$f[$u]=html_entity_decode(strip_tags($A));if(is_shortable($l))$Id=$b->selectLengthProcess();}$ld+=$l["privileges"];}list($L,$Ob)=$b->selectColumnsProcess($f,$s);$fc=count($Ob)<count($L);$X=$b->selectSearchProcess($m,$s);$B=$b->selectOrderProcess($m,$s);$v=$b->selectLimitProcess();$Mb=($L?implode(", ",$L):"*".($Fc?", $Fc":""));if($t=="sql"){foreach($f
as$u=>$V){$ma=convert_field($m[$u]);if($ma)$Mb.=", $ma AS ".idf_escape($u);}}$Mb.="\nFROM ".table($a);$Pb=($Ob&&$fc?"\nGROUP BY ".implode(", ",$Ob):"").($B?"\nORDER BY ".implode(", ",$B):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Xd=>$J){$ma=convert_field($m[key($J)]);echo$g->result("SELECT".limit(($ma?$ma:idf_escape(key($J)))." FROM ".table($a)," WHERE ".where_check($Xd,$m).($X?" AND ".implode(" AND ",$X):"").($B?" ORDER BY ".implode(", ",$B):""),1));}exit;}if($_POST&&!$k){$je="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Xc=$Zd=null;foreach($s
as$r){if($r["type"]=="PRIMARY"){$Xc=array_flip($r["columns"]);$Zd=($L?$Xc:array());break;}}foreach((array)$Zd
as$u=>$V){if(in_array(idf_escape($u),$L))unset($Zd[$u]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Zd===array()){$ie=$X;if(is_array($_POST["check"]))$ie[]="($je)";$G="SELECT $Mb".($ie?"\nWHERE ".implode(" AND ",$ie):"").$Pb;}else{$Vd=array();foreach($_POST["check"]as$V)$Vd[]="(SELECT".limit($Mb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m).$Pb,1).")";$G=implode(" UNION ALL ",$Vd);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($X,$Ib)){if($_POST["save"]||$_POST["delete"]){$H=true;$ia=0;$G=table($a);$N=array();if(!$_POST["delete"]){foreach($f
as$A=>$V){$V=process_input($m[$A]);if($V!==null){if($_POST["clone"])$N[idf_escape($A)]=($V!==false?$V:idf_escape($A));elseif($V!==false)$N[]=idf_escape($A)." = $V";}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Ja="UPDATE";if($_POST["delete"]){$Ja="DELETE";$G="FROM $G";}if($_POST["clone"]){$Ja="INSERT";$G="INTO $G";}if($_POST["all"]||($Zd===array()&&$_POST["check"])||$fc){$H=queries("$Ja $G".($_POST["all"]?($X?"\nWHERE ".implode(" AND ",$X):""):"\nWHERE $je"));$ia=$g->affected_rows;}else{foreach((array)$_POST["check"]as$V){$H=queries($Ja.limit1($G,"\nWHERE ".where_check($V,$m)));if(!$H)break;$ia+=$g->affected_rows;}}}$z=lang(array('Byl ovlivnƒõn %d z√°znam.','Byly ovlivnƒõny %d z√°znamy.','Bylo ovlivnƒõno %d z√°znam≈Ø.'),$ia);if($_POST["clone"]&&$H&&$ia==1){$nc=last_id();if($nc)$z=sprintf('Polo≈æka%s byla vlo≈æena.'," $nc");}queries_redirect(remove_from_uri("page"),$z,$H);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+kliknƒõte na pol√≠ƒçko, kter√© chcete zmƒõnit.';else{$H=true;$ia=0;foreach($_POST["val"]as$Xd=>$J){$N=array();foreach($J
as$u=>$V){$u=bracket_escape($u,1);$N[]=idf_escape($u)." = ".(ereg('char|text',$m[$u]["type"])||$V!=""?$b->processInput($m[$u],$V):"NULL");}$G=table($a)." SET ".implode(", ",$N);$ie=" WHERE ".where_check($Xd,$m).($X?" AND ".implode(" AND ",$X):"");$H=queries("UPDATE".($fc?" $G$ie":limit1($G,$ie)));if(!$H)break;$ia+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivnƒõn %d z√°znam.','Byly ovlivnƒõny %d z√°znamy.','Bylo ovlivnƒõno %d z√°znam≈Ø.'),$ia),$H);}}elseif(is_string($zb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Ia=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$zb,$tc);$ia=count($tc[0]);begin();$rd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($tc[0]as$u=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$rd]*)$rd~",$V.$rd,$uc);if(!$u&&!array_diff($uc[1],$Ia)){$Ia=$uc[1];$ia--;}else{$N=array();foreach($uc[1]as$p=>$Fa)$N[idf_escape($Ia[$p])]=($Fa==""&&$m[$Ia[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Fa))));$H=insert_update($a,$N,$Xc);if(!$H)break;}}if($H)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('Byl importov√°n %d z√°znam.','Byly importov√°ny %d z√°znamy.','Bylo importov√°no %d z√°znam≈Ø.'),$ia),$H);queries("ROLLBACK");}else$k=upload_error($zb);}}$Ed=$b->tableName($R);if(is_ajax())ob_start();page_header('Vypsat'.": $Ed",$k);$N=null;if(isset($ld["insert"])){$N="";foreach((array)$_GET["where"]as$V){if(count($Ib[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"]))))$N.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($R,$N);if(!$f)echo"<p class='error'>".'Nepoda≈ôilo se vypsat tabulku'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$f);$b->selectSearchPrint($X,$f,$s);$b->selectOrderPrint($B,$f,$s);$b->selectLimitPrint($v);$b->selectLengthPrint($Id);$b->selectActionPrint($s);echo"</form>\n";$D=$_GET["page"];if($D=="last"){$n=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$D=floor(max(0,$n-1)/$v);}$G=$b->selectQueryBuild($L,$X,$Ob,$B,$v,$D);if(!$G)$G="SELECT".limit((+$v&&$Ob&&$fc&&$t=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Mb,($X?"\nWHERE ".implode(" AND ",$X):"").$Pb,($v!=""?+$v:null),($D?$v*$D:0),"\n");echo$b->selectQuery($G);$H=$g->query($G);if(!$H)echo"<p class='error'>".error()."\n";else{if($t=="mssql")$H->seek($v*$D);$lb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$t=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last")$n=(+$v&&$Ob&&$fc?($t=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($G) x")):count($K));if(!$K)echo"<p class='message'>".'≈Ω√°dn√© ≈ô√°dky.'."\n";else{$ua=$b->backwardKeys($a,$Ed);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Ob&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upravit'."</a>");$Bc=array();$Nb=array();reset($L);$dd=1;foreach($K[0]as$u=>$V){if($u!=$Fc){$V=$_GET["columns"][key($L)];$l=$m[$L?($V?$V["col"]:current($L)):$u];$A=($l?$b->fieldName($l,$dd):"*");if($A!=""){$dd++;$Bc[$u]=$A;$e=idf_escape($u);$Wb=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($u);$Wa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Wb.($B[0]==$e||$B[0]==$u||(!$B&&$fc&&$Ob[0]==$e)?$Wa:'')).'">';echo(!$L||$V?apply_sql_function($V["fun"],$A):h(current($L)))."</a>";echo"<span class='column hidden'>","<a href='".h($Wb.$Wa)."' title='".'sestupnƒõ'."' class='text'> ‚Üì</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($u)).'\'); return false;" title="'.'Vyhledat'.'" class="text jsonly"> =</a>';echo"</span>";}$Nb[$u]=$V["fun"];next($L);}}$qc=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$u=>$V)$qc[$u]=max($qc[$u],min(40,strlen(utf8_decode($V))));}}echo($ua?"<th>".'Vztahy':"")."</thead>\n";if(is_ajax()){if($v%2==1&&$D%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($K,$Ib)as$_=>$J){$Wd=unique_array($K[$_],$s);$Xd="";foreach($Wd
as$u=>$V)$Xd.="&".($V!==null?urlencode("where[".bracket_escape($u)."]")."=".urlencode($V):"null%5B%5D=".urlencode($u));echo"<tr".odd().">".(!$Ob&&$L?"":"<td>".checkbox("check[]",substr($Xd,1),in_array(substr($Xd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($fc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Xd)."'>".'upravit'."</a>"));foreach($J
as$u=>$V){if(isset($Bc[$u])){$l=$m[$u];if($V!=""&&(!isset($lb[$u])||$lb[$u]!=""))$lb[$u]=(is_mail($V)?$Bc[$u]:"");$w="";$V=$b->editVal($V,$l);if($V!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$V!="")$w=ME.'download='.urlencode($a).'&field='.urlencode($u).$Xd;if($V==="")$V="&nbsp;";elseif($Id!=""&&is_shortable($l))$V=shorten_utf8($V,max(0,+$Id));else$V=h($V);if(!$w){foreach((array)$Ib[$u]as$Hb){if(count($Ib[$u])==1||end($Hb["source"])==$u){$w="";foreach($Hb["source"]as$p=>$ud)$w.=where_link($p,$Hb["target"][$p],$K[$_][$ud]);$w=($Hb["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Hb["db"]),ME):ME).'select='.urlencode($Hb["table"]).$w;if(count($Hb["source"])==1)break;}}}if($u=="COUNT(*)"){$w=ME."select=".urlencode($a);$p=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$Wd))$w.=where_link($p++,$U["col"],$U["val"],$U["op"]);}foreach($Wd
as$hc=>$U)$w.=where_link($p++,$hc,$U);}}if(!$w&&($w=$b->selectLink($J[$u],$l))===null){if(is_mail($J[$u]))$w="mailto:$J[$u]";if($ad=is_url($J[$u]))$w=($ad=="http"&&$aa?$J[$u]:"$ad://www.adminer.org/redirect/?url=".urlencode($J[$u]));}$q=h("val[$Xd][".bracket_escape($u)."]");$W=$_POST["val"][$Xd][bracket_escape($u)];$Rb=h($W!==null?$W:$J[$u]);$sc=strpos($V,"<i>...</i>");$hb=is_utf8($V)&&$K[$_][$u]==$J[$u]&&!$Nb[$u];$Hd=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$hb)||$W!==null?"<td>".($Hd?"<textarea name='$q' cols='30' rows='".(substr_count($J[$u],"\n")+1)."'>$Rb</textarea>":"<input name='$q' value='$Rb' size='$qc[$u]'>"):"<td id='$q' onclick=\"selectClick(this, event, ".($sc?2:($Hd?1:0)).($hb?"":", '".h('Ke zmƒõnƒõ t√©to hodnoty pou≈æijte odkaz upravit.')."'").");\">".$b->selectVal($V,$w,$l));}}if($ua)echo"<td>";$b->backwardKeysPrint($ua,$K[$_]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Ob&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($K||$D)&&!is_ajax()){$rb=true;if($_GET["page"]!="last"&&+$v&&!$fc&&($n>=$v||$D)){$n=found_rows($R,$X);if($n<max(1e4,2*($D+1)*$v))$n=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):"")));else$rb=false;}echo"<p class='pages'>";if(+$v&&($n===false||$n>$v)){$vc=($n===false?$D+(count($K)>=$v?2:1):floor(($n-1)/$v));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Str√°nka'."', '".($D+1)."'), event); return false;\">".'Str√°nka'."</a>:",pagination(0,$D).($D>5?" ...":"");for($p=max(1,$D-4);$p<min($vc,$D+5);$p++)echo
pagination($p,$D);echo($D+5<$vc?" ...":"").($rb&&$n!==false?pagination($vc,$D):' <a href="'.h(remove_from_uri("page")."&page=last").'">'.'posledn√≠'."</a>");}echo($n!==false?" (".($rb?"":"~ ").lang(array('%d ≈ô√°dek','%d ≈ô√°dky','%d ≈ô√°dk≈Ø'),$n).")":""),(+$v&&($n===false?count($K)+1:$n-$D*$v)>$v?' <a href="'.h(remove_from_uri("page")."&page=".($D+1)).'" onclick="return !selectLoadMore(this, '.(+$v).', \''.'Nahr√°v√° se'.'\');">'.'Nahr√°t dal≈°√≠ data'.'</a>':'')," ".checkbox("all",1,0,'cel√Ω v√Ωsledek')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Upravit</legend><div>
<input type="submit" value="Ulo≈æit"',($_GET["modify"]?'':' title="'.'Ctrl+kliknƒõte na pol√≠ƒçko, kter√© chcete zmƒõnit.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat" onclick="return confirm('Opravdu? (' + (this.form['all'].checked ? <?php echo$n,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Jb=$b->dumpFormat();if($Jb){print_fieldset("export",'Export');$Pc=$b->dumpOutput();echo($Pc?html_select("output",$Pc,$ha["output"])." ":""),html_select("format",$Jb,$ha["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($lb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$S'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));elseif(list($Q,$q,$A)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$H=$g->query("SELECT $q, $A FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$q = $_GET[value] OR ":"")."$A LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($p=0;$p<10&&($J=$H->fetch_row());$p++)echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($q))."]")."=".urlencode($J[0]))."'>".h($J[1])."</a><br>\n";if($p==10)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Vyhledat data v tabulk√°ch'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Vyhledat'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabulka'.'<td>'.'≈ò√°dk≈Ø'."</thead>\n";foreach(table_status()as$Q=>$J){$A=$b->tableName($J);if(isset($J["Engine"])&&$A!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$A</a>";$V=number_format($J["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($J["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();