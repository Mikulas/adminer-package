<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.1
*/error_reporting(6135);$Ab=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Ab||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Yd=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Yd)$$V=$Yd;}}if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo"\000\000\000\000\000\000\000(\000\000\000\000\000(\000\000\000\000\000\000 \000\000\000\000\000\000\000\000\000¿\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000ˇˇˇ\000\000\000ˇ\000aN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\00031\000\000\0001\000\000\0001\000\000\0001\000\000\0001\000\000\0001\000\000\0003331!31\000!\000\000\000!\000\000\000\000!\"\000\000\000\000\000\000\000\000\000\000\000\000ˇˇ’\000¿ˇ’\000Ä\000\000Ä\000Ä§\000ÄÄ\000Ä\000\000Ä\000\000Ä\000\000Äˇ\000Äˇ\000¿\000ˇ\000˛\000ˇ\000ˇ\000ˇÅ’\000ˇˇ’\000";}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©ñ®aç'3I– d´¬!S±Êæ:4Áß+MdÂgØã¨«É°Óˆtô∞cëÜ£ı„È†b{èH(∆ì—ît1…)t⁄}F¶p0ôï8Ë\\82õDL>Ç9`'C°º€ó889§» éxQÿ˛\000Óe4ôÕQ òl¡≠P±øVâ≈bÒëóΩT4≤\\ûW/ôÊÈ’\nêÄ` 7\"hƒqπË4ZM6£T÷\r≠r\\ñ∂C{h€7\r”x67Œ©∫J á2.3êÂ9àKûÎ¢H¢,å!mî∆Üo\$„π.[\r&Ó#\$≤<¡àfÕ)èZ£\000=œr®è9√‹jŒ™J†Ë0´c,|Œ=ë√‚˘ΩÍö°Rs_6£Ñ›∑≠˚Ç·…ÌÄZ6£2Bæp\\-á1s2…“>éÉ X:\r‹∫ñ»3ªbö√ºÕ-8SLı¿Ìº…K.¸¥-‹“•\rH@ml·:¢Îµ;Æ˙˛¶ÓJ£0LR–2¥!Ëø´ÂAÍà∆2§	mMT7ÛåÁS’5]2Ï√Ó‰Eç)ÿ»£Ø≠Ê8\rÉÚ*`‹Ø.i˙Ç6Uıu*—è›”¥ìN÷«Ôe∆’◊U&¿MÑ˝DÕ\n†·#∆œÌ%%∑W`˙4ç£8˜j®	Ω≥XáCk|2Ll©Œ\r˝˘)É¿Z;∑”†t¯æC√7âTÒJCå?Í¡NŒƒ<Ì°nÛ: (TÖ.+ùU9eàÛóÆí[US56ÓeWíÔzH≈Ù®®Ë-éÉ»‡2á∑‡¬3å¢Ì˛ñ⁄ÿCÇ`Õ>ÖÀö»èÆ®PFÍÜÛS À¡ºﬁ\rCù&4`ı†X1[ç'∏£„b	eYñtWi™õÜ‰:C®⁄7cÄﬁ≤0ÍåâÈJıì”ñıGR´ˇV“|Ùurç¡l™¥•-º\r„ª\n8f{ª◊=ÑÈ9åùgiyé˚¢Ã£4òt8.¸/wôè}Í 2¯ã,Ê√{ZäÆêäªåêÂÅîc3øÈ^†@1d¥’Çç#êÆ'≈^Ñ[∞\r£(Ê°Íõ(tä;√wµÃh˜\nÙ»Kw~/Õ©§g6J‚?«©¢Øv2éXcà\r5˚!0nàs`%Âö\n¡rﬂ¯nqPVÑh@ÿP)§Îß∞·Hπ-]üê∞å\raº7p≠Í	0÷Y›ãÜRaçSë(ÄØôÛÁk\r∞˜‚˝ã!<Vœ©6†nfõ\000f\"·ç»™≈\\÷ ä|9n–ƒKbÒÄåπè8X6Oó‚FSÒÆ1G\n”Z{…b°†Û™–v≈#-(7Öƒ“ÿxpr-»£¶π§|>1˙@H)	!ú)'‰ı!f<Và;ŸlÃ8¨“ÓU§¨| ·∑î…*Lπ˜cLu>üfBﬂå\"qÆ<≤Üì‰»;ïÅâ&Æ»∑“h Fi0∫pdkU!!*r¿Éï-.†uŒc©¸j◊\"H3Ã(ÿõ3j°ì*s¨™D∞ƒ√€:AòÑr‡›_–}d Œá0X“Eû)ﬂ¨∑úä›ÿ;ûS—÷É©mgl¸*\r»ôPàò(£Â{jpç¢9ˆ√9/∞—Ûòßûú^Ö•lÆ¶•†ï95é”u ©Ûa4æ*'lñ≠*TCëº!N8®`ÂDi\"g%Õ˚B˘ÙAï© há≤gÆ¥rê›sÜ^ØÉ·1hâ0_Œ9»S™;Ê	fô≤% Õ⁄Td¥EDû”GTÁ–˙Rú20‰‚ü%yî·;7^~e„ë¨ÓRµ:rß[™¡≠§èq†◊&?4+Ä-≤∆]s’£¯{ÍÀ§=≥\$˙À)⁄c†È÷¶∆Ñ”ìIäÙTi©Åh\$4ÁkbßRuµÉ¶⁄zamNaŒ\"í¨È˙a\$ Ÿåÿä b∫ÕìexÜ–ﬁÅhu(Ê∆Fò42·Xb\reñÏ›≤åNÓı)ù∑Sî≈'@SvJd)C•Ño‚âs≥” ¯Ä«P*gW:^À˙–W+T˙ΩóIówº]√r≥ûìπ,0õ\000rÅ∞¶gè§∂7Uz·¨8æ&UT\\2‚ú6§‡\000r≈ÿp@7Ëë≠F™˜7‚GT5R¥UT¯c£>£O‡1òµ|˘ØáäÅ{W˙¿∫›C√x;é¨^–Œ#€iRb:«∏r}÷,fp%»u ◊*áHLµ'ÿ`@~&å0Õ≤kT≥*èü˘§=∏ö≥ÌÑÌ»\n–æ‹ä›Vk’| ëõ5¶#.ÍÏ3µà:E€ápÓù{…w÷\r‡ºÙXtË}");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:õågCIº‹\n:ÃÊsaîPi2\nOgc	»e6LÜÛ‘⁄e7∆s)–ã\rè»HGíIí∆∆3aÑÊs'c„—D i6úNå£—Ëú—2H„Ò8úuF§RÖ#≥îîÍr7á#©îv}Ä@†ê`Qåﬁo5öa‘Iú‹,2O'8îR-q:PÕ∆S∏(àaºä*wÉ(∏Á%ø‡pí<F)‹nx8‰zA\"≥Z-C€e∏V'àßÉÅ¶™s¢‰q’˚;NFì1‰≠≤9ÎGºÕ¶'0ô\r¶õŸ»ø±9n`√—ÄúX1©›ÅG3Ã‡tçee9äÆ:NeÌä˝N±–OSÚz¯cëåzlé`5‚„Å»ﬂ	≥3‚Òyﬂ¸8.ä\r„êŒπP‹˙\rÉ@ç£Æÿ\\1\r„ Û\000Ç@2j8ÿó=.∫¶∞ -r»√°®¨0çäËQ®Íä∫hƒbºåÅÏ`Å¿éª^9ãq⁄E!£ í7)#¿∫™* ¿Q∆»ã\000äÿ“1´»Ê\"ëh >Éÿ˙∞––∆⁄-C \"í‰XÆáS`\\ºè§F÷¨h8‡ä≤‚†¬3ß£`X:OÒö,™á´⁄˙)£8ä“<BN–É;>9¡8“Ûácº<á*¨Ê2éc•9œÈ >¢H¿zôOj™B'B™˙™éä∫≤å5ë,ÚÑPÏb5–45Ä÷3Ïˇ@ÖÅ:∑N+iöjõ’J¢ü⁄ä\\™é	®∆á·@º>ã†∆4Xr(QrèÅ RŸ° dÛÖu=œtÕA8A{åc\\äß)≥Ω|◊ÅC4\n6ÿWÌò7(V4l6µ	ñ9\r°vÀéaﬁ&:CKòç!Ê-°£pŒ:\r\000V¢M†QÜ#ıK@º\000“.ÖŸÄÀVy∑õ¶wE˚\"’„fÉ|jﬁbgŸºF>ƒã	BHnñ›∫Z¢‘B≤B∆\$…F0ïœ√=™ÒkC-9ç„∏˛C¥‰âOîç9^Z3\r«rÖ7‡÷0Í®uŸw˘ïM∏g˘≈∞†’v2∂‘qI∞ºÛ≤ÏˆpÂµ¿∏‰h5c„Py«ÖŸ.Êç[∞˜•hV'-çY¿Ã”T∞Ë”Ö›õí:v–˛ü®O&&6ä®Zó·»Œª	rn˚∂ï•æBc£o⁄ Õ0˙MÉ„£§≤xz]‘åô’çÍ«!ÄvÈdz/sÉ‚€CåÌë¶=ıd9KπeVXŸs:pÃ—à8ñr√A0&iÆ)÷§R\$˙Y_VÈ4¨æÖz˜»;ia∞4∞† lIÁÉãÙûÓqÿwlM(ßî¿‰·b)O&êÊ√xl&°¿√ìÿF`˘óUí¶Ç◊√ôÌy∆]N©PAx^+`êÜòLî™’gå∫(ÇÜ“|8Å¡,áƒË°Ë)äëY-*h∞™XkwT·–<°†BQ[Úú=´ÖtW„»on¥»@c›d“BÉ◊Æ»}U ¡>+5jW‰õFwN’&Ÿ6Ô\$Î o1~™◊©√\\	'“†¡=4@•D™hƒR,DFÎ≈+ÁIi êK\$Åêr≤#»áª\000¿!&Oö>¡BæÀ¶)Ü(·ò:∞ `LOóØà2&	∑Sk:(ì.8ë4h˙	‰ﬂ_\000˛u44⁄˙—[+ßE˚Ë»\rB…\$-ïf,Á\000CO;`âoÕ≤G>x£YSáIø@ŒAÌ_¡ëç9÷⁄˛Â	üÌì?÷ÍˇÿÏˆK ˆç3dñÀ®‘'sç£L∆]CY3-§Fbpÿ-.UDt¢ôîFäò(’>¢P:dä`»êb;°Æ@:⁄gí∂jJHP˜P— ºx\ríPêhl%‡∞4V\000ÿÚN àO5˘G†KàÅSöû¢÷Z¬Q	IveÏà≥÷ç>É¢¥)0‘7PêhL(†ò7 ÊŸ†™ÜøXK\rb,Uv\rêI®¢bï®P\rÊÊÃs§-SŒ‹áIìËUC±°Ã)•x9LC›®pF	´í∞-‘≥¿)=íI¬ÉAU¿≤‚ÜY!„ê!Üƒ‰'ãö\n`M◊w\$2Ü`VO.lw%0\\”Suì¯eß@ß©√‡œë◊p3€È¶%!‘'úÖô1V0aUÚ!π9DﬁBaçp0™ÜÕ6\r\r·ò3pË.ËtxK\na`ÆD@>¡∂¡\\'ÖI.å¢ShËCP!»«¿;î[bn\\\rí≥™˛˝ÑÙ≤±l™•8¿7„,hQC\nY\rˆJ¸£XdC d\nAº;ÇáfF+ÓWw–4LPÔ…ªHAµ!Ù;óâ&VÃ≤yÉ¢65öÂzÁÕ=ı£CÌçr“mƒä’i`ÀâbÒ\\gy‘ã\$#QùËmt–s«\\‡rsƒY˚≤\000y°®„ß£‰KC@i≈ßZ[ãyp∞¬C–]Ål.@Vº8\$¿≈Njpõ:Ic·ˆêœ}ï4Kï†é^É˙4ß)Êæ”8≤\000S4Äƒ‚§°ohR£®√\nﬂo:õTj≠Y´µÜ≤÷ïÀgmFpóJÈE4Oj∏µ´∫çfpœvyòP¬ÜP€Ω%Ÿ›Ô\\3ÚGÉpM\rˆŒ÷®-‹√g6ÖOaπà¥jŸ∞ß∆ås6?/i&¥´!‚ú3e∑GU7¯m\rŒ6¢˛Iñë@ãZsì¿nN¡?!\r N£-7ó√„≥ô5!B¬*πŸáı•Ø.Û…a.˘Á”œ√Búï|®°o§Hv·ªÌËΩâ£MˇX‹ZãÈnƒ‹hÔ§”±Æ≥I∞8/HQVˆ'rÌ%∑M±g\$\$VóÅGvì˚ËîIôRÉ(a©çBîNœ«HóÇÔÈ7%ÂPÅﬂíw~S.g9Z{¥ﬂÔOºéá??ìP¢ö¡ÊÜ‚{!¡bXJ§«W'Ä‚hrqDê«@√¶ö\$9œW6fä˛0‡§î@b˝‰B˘_0°É–b.¿&ôXMYØ~‹B#Í„ÇnÂc1£ç&1S>È…}—%¡‹≠’˚o‰’Jº≠eﬁ»ÑÜ‚\$˛\"Dx`∂ˇÇqIXDb0≤ê\000}Ê(0¿ÍCÜTƒFèÀ~ëÈ#Ç≤™+ÑWÔR˘ià∫!Ï;	£\000¢âî≠¨ıËÑ¯èåöNHi¶˚¿Ú˚0éÑ4(É«\"ËäØ‹çÖHpF˛iÀgÜ¿¢J(†æj¨º\rc@¬¿®\r\">‡eLÃ/ˇ∞ì\000\r‡†X˚´ÇH†“ ÜLıo[àB®∞‘\$O¶V¢àÄa ]\rÔö†f≤¯b∑È∞˚I¢˚Ø ¸&æ¸`¬ıojàêH¿êLâ¢˜œÄ–É¶∂ ü\r∞ÍöÔ© `)ÇˆN´jj™`ÍÉÎd∂ë(d FÖ]mÍ>â*∞%jH1NÍNo0õ(¢äoﬂhÊÿ†RLh±eL•YË§L‰®ﬁÏ≥\"|ì¨JH@)+D¥Éuë^ƒ†Sœêà©EkãB¥pÀ0G¶xbC*Ù–&ÇÄA≈lö{q∞– è\\ò•ö8ÉCÕi\nb⁄*p1'∞V“LvxPƒÃÏæJdX ÇHP\r§ÇÖ≠¨[` [≠≤\\\000ºø-`ÈÉœ≤(FÓ˛EƒÑãf•\$\n-†ö √“ß Úª£à®í`6`œ&rjÄ–§äf¿€&ílt‡˙•\"™\r¨ä†ÇJ£fˆC(‡t∆PSã&Æ1%Úã&2)Ñ√ò¶IÔ(“≈&Ú{&R”)R,Ä¬\rRhÆ‡ƒX\rÄƒ€ ÷.\000%å*†‚+•J'àNI\rÄ´‡Ë00ÜÂS	ì1ÄÀ1∆f t\nÖ \\#\\6 ∞	‡ƒ\rDo2¯S@ ìE4ìL cƒ	®:>¿Ê¬bE2k\nÄ†<‡uEX¿Û0DÏô≥0\$@ﬁCO\\2˙)Ä†	‡¶\nÜ\000‡ã:\000RíÍÆF/˝8ìÑ0¬K1≥Ñ	)-\$Ëp\$#.†®é¶‘Y≠Ó[®:æ.F\000Z?¿ÓßÜ≤Í\$Ã) …+SÉsºì¡sƒ8#d<@∞¥\nT§ä¨?+%õ7´2”äSîT©^;§,T£ŒLæë–ƒ7f]C\"ECÄÛ É(.ÚÚaTLi‰ô8≥ºIîPëﬁ∑¬≥D–6`í„&àXäæ¨2Ë¯¢%!4~äPL√F*ãDÃ\\0fX”¥¿dX<Cƒt†4ÎP·Ä \nè‘3‡RÏÑh˘N0 Û¥”äº¨¿P˘R¯PÄ∂˘Qå≥ç˙W‰ÑÜ™∏Á\\ãû2Â˝HÂ	Ó˝\$ÍOÄ√ffâ<Úi;«ô¥tódi,àEä†M£à≤Îi/‘™‘L\000^éFÄu(aäœJÇypZ;¢Ú¯º˝Bòåı`\ré‹íŒ œîı¥DÉ®±	8iä≥:ÿ	äôÒl¿êÏ˙†dÔ¡–\\ıpËqÌ˚ÄŸêÈ—ˇı0∞£d∞ÎµJEà%Kt˜æLÊ	Ï:\$±\$›≠Qo7QØ∫LTdÎ<‚Ú\$5Ì[£ãLÍdä»L`ÑÏW(rfe—IUÓëÉ.≈FPΩ`hÄd˚>ˆ¿Ëœ/Ï®5\000bŒ§Ω#“@€UB‰`Œê∞è∂:∑ïlK%∑c†zŒÊ3)fÒ^tÄÍ\000`#õ_Æ∏r«0(J†2∞\rfÚ¬õXœ;HÑHC_/ÏÊËÑ%iÀ‰:Ø/ §Û“Œrç)‡®\rÎD8à‹¿ñ\$ ±O¶øl†Ë)ËPÏÊVckÄ»≥‡æklæV∫66æ¯\000p‚a]VÛ@`äI¬\$#≈p†…o§ê9◊\$Çß\\˜∂ÙåÓ:+ıÔS5æ≥\r·^Ûﬁﬂ):!Íge∞ØÙoŒ(ÄeHÒ·I PΩÛ‰ækî3‡LRs¯V†™\n@íá\000€K£.ã’0\"#>(∂QDtùD≥/;¥<W\"ËŸ≤œf‘∂Tî∫0ˆˇ`RŒúW2¢Ü†ßrãf’·z÷]{É|ÜÖ£_ER\000YG|ìºÜC_qW‘c&]UHë|œi7'jVõ~ƒj√k2'oIo`ÀqCƒŒU‘JG6ÄZ•5‡„†V∑X0§ÑÛÚﬁ ‰Ñ	Äﬁ8.*†P XÉê#Ñ86Îpk0 !£8≤◊7Sc§æòVæÏs@Â\\>Ç°ÃæÇ\$¡≤õ)Ú¢J“®<KÈC[.TîæóãWîù~éå\$ØÄ≠Ê–üÊ‘LòiÜÀøz+ ◊®˝Q%fF?ãWßKÔ’dMHo%ƒ\\è¸t`‰ˆOe6eeìÅc†yÑPÀá±\\VQ`∞x~6-ıÉ™†ˆ¡∏`æòÕ\$&Ú’†Väòñ≥À—r WX\"Ω Wc‰∆xg[ÿksÇÇÇFû…©ã ìèW±Èi≤\n\nÏ∏≥‰UØ{ï9VOÛ‰Û™œÜÀ≈æ\rÄÖÁ™\r(0P;ÉCÇcÉqi‰ƒÁàZÃå±\"L“xb%Ç‡µk6Tı\r∂PÕj—∞GZ0R‚‚¡1óëöãUöö0\r–ÈYı©ı¶0ÈY⁄¿ï¥öÊxœ/*›&%QèG;LﬁÀ_é—à˘Ú(bì?†Àw7v\r˜zœ◊&Y€H¿T≠`<‚ßü:ë>∂˙\r`É\nÎ&†Ú(´@/cA!1ÂòáöÑ4“RÎõ,∞éYÒ,Ôü‡\"Zo'…ŒøüF∂:£Í†˙†øIëI`Wv‚ì°óyw◊ßDﬁgyÜ`¨*À1hÂ´`Ÿ´†·J7òÅ:z-¢â™ƒΩßå·£∫ådÿYìu√¨≈#ÿ∑K◊´£è’≠˙B≈˙FÜ“A§ˆí:LØQ=nÔ^nÙ¿‡¬Å,uJ∫íwvzÑ∂KØöë°7qwZß¢Mêãïê˙+¢˙37ÏÂ‚Ü8BmTËÇ@");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\000\000°\000\000ÓÓÓ\000\000\000ôôô\000\000\000,\000\000\000\000\000\000\000!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\000;";break;case"cross.gif":echo"GIF87a\000\000°\000\000ÓÓÓ\000\000\000ôôô\000\000\000,\000\000\000\000\000\000\000#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\000\000;";break;case"up.gif":echo"GIF87a\000\000°\000\000ÓÓÓ\000\000\000ôôô\000\000\000,\000\000\000\000\000\000\000 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\000«Ú\000;";break;case"down.gif":echo"GIF87a\000\000°\000\000ÓÓÓ\000\000\000ôôô\000\000\000,\000\000\000\000\000\000\000 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\000«Ú\000;";break;case"arrow.gif":echo"GIF89a\000\n\000Ä\000\000ÄÄÄˇˇˇ!˘\000\000\000,\000\000\000\000\000\n\000\000Çiñ±ãûî™”≤ﬁª\000\000;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($Xb){$mc=substr($Xb,-1);return
str_replace($mc.$mc,$mc,substr($Xb,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($Yc,$Ab=false){if(get_magic_quotes_gpc()){while(list($u,$V)=each($Yc)){foreach($V
as$hc=>$U){unset($Yc[$u][$hc]);if(is_array($U)){$Yc[$u][stripslashes($hc)]=$U;$Yc[]=&$Yc[$u][stripslashes($hc)];}else$Yc[$u][stripslashes($hc)]=($Ab?$U:stripslashes($U));}}}}function
bracket_escape($Xb,$ra=false){static$Od=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Xb,($ra?array_flip($Od):$Od));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($B,$W,$Ba,$kc="",$Hc="",$gc=false){static$r=0;$r++;$J="<input type='checkbox' name='$B' value='".h($W)."'".($Ba?" checked":"").($Hc?' onclick="'.h($Hc).'"':'').($gc?" class='jsonly'":"")." id='checkbox-$r'>";return($kc!=""?"<label for='checkbox-$r'>$J".h($kc)."</label>":$J);}function
optionlist($Lc,$od=null,$de=false){$J="";foreach($Lc
as$hc=>$U){$Mc=array($hc=>$U);if(is_array($U)){$J.='<optgroup label="'.h($hc).'">';$Mc=$U;}foreach($Mc
as$u=>$V)$J.='<option'.($de||is_string($u)?' value="'.h($u).'"':'').(($de||is_string($u)?(string)$u:$V)===$od?' selected':'').'>'.h($V);if(is_array($U))$J.='</optgroup>';}return$J;}function
html_select($B,$Lc,$W="",$Gc=true){if($Gc)return"<select name='".h($B)."'".(is_string($Gc)?' onchange="'.h($Gc).'"':"").">".optionlist($Lc,$W)."</select>";$J="";foreach($Lc
as$u=>$V)$J.="<label><input type='radio' name='".h($B)."' value='".h($u)."'".($u==$W?" checked":"").">".h($V)."</label>";return$J;}function
confirm($Na=""){return" onclick=\"return confirm('".'Are you sure?'.($Na?" (' + $Na + ')":"")."');\"";}function
print_fieldset($r,$oc,$ge=false,$Hc=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Hc)."return !toggle('fieldset-$r');\">$oc</a></legend><div id='fieldset-$r'".($ge?"":" class='hidden'").">\n";}function
bold($ya){return($ya?" class='active'":"");}function
odd($J=' class="odd"'){static$q=0;if(!$J)$q=-1;return($q++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($u,$V=null){static$Bb=true;if($Bb)echo"{";if($u!=""){echo($Bb?"":",")."\n\t\"".addcslashes($u,"\r\n\"\\").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$Bb=false;}else{echo"\n}\n";$Bb=true;}}function
ini_bool($cc){$V=ini_get($cc);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$g;return$g->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$I=$h->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$k="<p class='error'>"){global$g;$Ma=(is_object($h)?$h:$g);$J=array();$I=$Ma->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$J;}function
unique_array($K,$s){foreach($s
as$ac){if(ereg("PRIMARY|UNIQUE",$ac["type"])){$J=array();foreach($ac["columns"]as$u){if(!isset($K[$u]))continue
2;$J[$u]=$K[$u];}return$J;}}$J=array();foreach($K
as$u=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$u))$J[$u]=$V;}return$J;}function
where($X){global$t;$J=array();foreach((array)$X["where"]as$u=>$V)$J[]=idf_escape(bracket_escape($u,1)).(($t=="sql"&&ereg('\\.',$V))||$t=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".exact_value($V));foreach((array)$X["null"]as$u)$J[]=idf_escape($u)." IS NULL";return
implode(" AND ",$J);}function
where_check($V){parse_str($V,$Aa);remove_slashes(array(&$Aa));return
where($Aa);}function
where_link($q,$e,$W,$Jc="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($e)."&where%5B$q%5D%5Bop%5D=".urlencode(($W!==null?$Jc:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($W);}function
cookie($B,$W){global$aa;$Qc=array($B,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Qc[]=true;return
call_user_func_array('setcookie',$Qc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($u){return$_SESSION[$u][DRIVER][SERVER][$_GET["username"]];}function
set_session($u,$V){$_SESSION[$u][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($cb,$N,$T,$i=null){global$db;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($db))."|username|".($i!==null?"db|":"").session_name()),$y);return"$y[1]?".(sid()?SID."&":"").($cb!="server"||$N!=""?urlencode($cb)."=".urlencode($N)."&":"")."username=".urlencode($T).($i!=""?"&db=".urlencode($i):"").($y[2]?"&$y[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($x,$_=null){if($_!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($x!==null?$x:$_SERVER["REQUEST_URI"]))][]=$_;}if($x!==null){if($x=="")$x=".";header("Location: $x");exit;}}function
query_redirect($H,$x,$_,$dd=true,$ub=true,$xb=false){global$g,$k,$b;if($ub)$xb=!$g->query($H);$ud="";if($H)$ud=$b->messageQuery("$H;");if($xb){$k=error().$ud;return
false;}if($dd)redirect($x,$_.$ud);return
true;}function
queries($H=null){global$g;static$bd=array();if($H===null)return
implode(";\n",$bd);$bd[]=(ereg(';$',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H);return$g->query($H);}function
apply_queries($H,$Ed,$qb='table'){foreach($Ed
as$R){if(!queries("$H ".$qb($R)))return
false;}return
true;}function
queries_redirect($x,$_,$dd){return
query_redirect(queries(),$x,$_,$dd,false,!$dd);}function
remove_from_uri($Pc=""){return
substr(preg_replace("~(?<=[?&])($Pc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Ra){return" ".($E==$Ra?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E":"")).'">'.($E+1)."</a>");}function
get_file($u,$Ua=false){$n=$_FILES[$u];if(!$n||$n["error"])return$n["error"];$J=file_get_contents($Ua&&ereg('\\.gz$',$n["name"])?"compress.zlib://$n[tmp_name]":($Ua&&ereg('\\.bz2$',$n["name"])?"compress.bzip2://$n[tmp_name]":$n["tmp_name"]));if($Ua){$vd=substr($J,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$vd,$ed))$J=iconv("utf-16","utf-8",$J);elseif($vd=="\xEF\xBB\xBF")$J=substr($J,3);}return$J;}function
upload_error($k){$vc=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($vc?" ".sprintf('Maximum allowed file size is %sB.',$vc):""):'File does not exist.');}function
repeat_pattern($G,$pc){return
str_repeat("$G{0,65535}",$pc/65535)."$G{0,".($pc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($P,$pc=80,$Ad=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$pc).")($)?)u",$P,$y))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$pc).")($)?)",$P,$y);return
h($y[1]).$Ad.(isset($y[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($Yc,$Zb=array()){while(list($u,$V)=each($Yc)){if(is_array($V)){foreach($V
as$hc=>$U)$Yc[$u."[$hc]"]=$U;}elseif(!in_array($u,$Zb))echo'<input type="hidden" name="'.h($u).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$Gb){foreach($Gb["source"]as$V)$J[$V][]=$Gb;}return$J;}function
enum_input($Rd,$c,$l,$W,$mb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$z);$J=($mb!==null?"<label><input type='$Rd'$c value='$mb'".((is_array($W)?in_array($mb,$W):$W===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($z[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?$W==$q+1:(is_array($W)?in_array($q+1,$W):$W===$V));$J.=" <label><input type='$Rd'$c value='".($q+1)."'".($Ba?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$J;}function
input($l,$W,$p){global$Td,$b,$t;$B=h(bracket_escape($l["field"]));echo"<td class='function'>";$hd=($t=="mssql"&&$l["auto_increment"]);if($hd&&!$_POST["save"])$p=null;$Mb=(isset($_GET["select"])||$hd?array("orig"=>'original'):array())+$b->editFunctions($l);$c=" name='fields[$B]'";if($l["type"]=="enum")echo
nbsp($Mb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Bb=0;foreach($Mb
as$u=>$V){if($u===""||!$V)break;$Bb++;}$Gc=($Bb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Bb > f.selectedIndex) f.selectedIndex = $Bb;\"":"");$c.=$Gc;echo(count($Mb)>1?html_select("function[$B]",$Mb,$p===null||in_array($p,$Mb)||isset($Mb[$p])?$p:"","functionChange(this);"):nbsp(reset($Mb))).'<td>';$ec=$b->editInput($_GET["edit"],$l,$c,$W);if($ec!="")echo$ec;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$z);foreach($z[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?($W>>$q)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$B][$q]' value='".(1<<$q)."'".($Ba?' checked':'')."$Gc>".h($b->editVal($V,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$B'$Gc>";elseif(($Gd=ereg('text|lob',$l["type"]))||ereg("\n",$W)){if($Gd&&$t!="sqlite")$c.=" cols='50' rows='12'";else{$L=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}else{$wc=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$y)?((ereg("binary",$l["type"])?2:1)*$y[1]+($y[3]?1:0)+($y[2]&&!$l["unsigned"]?1:0)):($Td[$l["type"]]?$Td[$l["type"]]+($l["unsigned"]?0:1):0));echo"<input value='".h($W)."'".($wc?" maxlength='$wc'":"").(ereg('char|binary',$l["type"])&&$wc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$Xb=bracket_escape($l["field"]);$p=$_POST["function"][$Xb];$W=$_POST["fields"][$Xb];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($p=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($p=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$n=get_file("fields-$Xb");if(!is_string($n))return
false;return
q($n);}return$b->processInput($l,$W,$p);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Jb=false;foreach(table_status()as$R=>$S){$B=$b->tableName($S);if(isset($S["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$Jb){echo"<ul>\n";$Jb=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$B</a>\n":"$B: <span class='error'>".error()."</span>\n");}}}echo($Jb?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($Wb,$zc=false){global$b;$J=$b->dumpHeaders($Wb,$zc);$Oc=$_POST["output"];if($Oc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Wb).".$J".($Oc!="file"&&!ereg('[^0-9a-z]',$Oc)?".$Oc":""));session_write_close();return$J;}function
dump_csv($K){foreach($K
as$u=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$K[$u]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($p,$e){return($p?($p=="unixepoch"?"DATETIME($e, '$p')":($p=="count distinct"?"COUNT(DISTINCT ":strtoupper("$p("))."$e)"):$e);}function
password_file(){$ab=ini_get("upload_tmp_dir");if(!$ab){if(function_exists('sys_get_temp_dir'))$ab=sys_get_temp_dir();else{$zb=@tempnam("","");if(!$zb)return
false;$ab=dirname($zb);unlink($zb);}}$zb="$ab/adminer.key";$J=@file_get_contents($zb);if($J)return$J;$Kb=@fopen($zb,"w");if($Kb){$J=md5(uniqid(mt_rand(),true));fwrite($Kb,$J);fclose($Kb);}return$J;}function
is_mail($jb){$na='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$G="$na+(\\.$na+)*@($bb?\\.)+$bb";return
preg_match("(^$G(,\\s*$G)*\$)i",$jb);}function
is_url($P){$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($bb?\\.)+$bb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$y)?strtolower($y[1]):"");}function
slow_query($H){global$b,$Nd;$i=$b->database();if(support("kill")&&is_object($h=connect())&&($i==""||$h->select_db($i))){$jc=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Nd,'&kill=',$jc,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
lzw_decompress($wa){$Za=256;$xa=8;$Ea=array();$id=0;$jd=0;for($q=0;$q<strlen($wa);$q++){$id=($id<<8)+ord($wa[$q]);$jd+=8;if($jd>=$xa){$jd-=$xa;$Ea[]=$id>>$jd;$id&=(1<<$jd)-1;$Za++;if($Za>>$xa)$xa++;}}$Ya=range("\0","\xFF");$J="";foreach($Ea
as$q=>$Da){$ib=$Ya[$Da];if(!isset($ib))$ib=$ke.$ke[0];$J.=$ib;if($q)$Ya[]=$ke.$ib[0];$ke=$ib;}return$J;}global$b,$g,$db,$gb,$ob,$k,$Mb,$Pb,$aa,$dc,$t,$ba,$lc,$Fc,$Sc,$yd,$Nd,$Qd,$Td,$ae,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Qc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Qc[]=true;call_user_func_array('session_set_cookie_params',$Qc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ab);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Pd,$Cc){$Uc=($Cc==1?0:1);$Pd=str_replace("%d","%s",$Pd[$Uc]);$Cc=number_format($Cc,0,".",',');return
sprintf($Pd,$Cc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$Uc=array_search("",$b->operators);if($Uc!==false)unset($b->operators[$Uc]);}function
dsn($eb,$T,$F,$tb='auth_error'){set_exception_handler($tb);parent::__construct($eb,$T,$F);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$Ud=false){$I=parent::query($H);$this->error="";if(!$I){$pb=$this->errorInfo();$this->error=$pb[2];return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I)$I=$this->_result;if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$db=array();$db=array("server"=>"MySQL")+$db;if(!defined("DRIVER")){$Vc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$T,$F){mysqli_report(MYSQLI_REPORT_OFF);list($Ub,$Tc)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$Ub:ini_get("mysqli.default_host")),($N.$T!=""?$T:ini_get("mysqli.default_user")),($N.$T.$F!=""?$F:ini_get("mysqli.default_pw")),null,(is_numeric($Tc)?$Tc:ini_get("mysqli.default_port")),(!is_numeric($Tc)?$Tc:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$l];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($N,$T,$F){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$T"!=""?$T:ini_get("mysql.default_user")),("$N$T$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Sa){return
mysql_select_db($Sa,$this->_link);}function
query($H,$Ud=false){$I=@($Ud?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$l=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$T,$F){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$T,$F);$this->query("SET NAMES utf8");return
true;}function
select_db($Sa){return$this->query("USE ".idf_escape($Sa));}function
query($H,$Ud=false){$this->setAttribute(1000,!$Ud);return
parent::query($H,$Ud);}}}function
idf_escape($Xb){return"`".str_replace("`","``",$Xb)."`";}function
table($Xb){return
idf_escape($Xb);}function
connect(){global$b;$g=new
Min_DB;$Qa=$b->credentials();if($g->connect($Qa[0],$Qa[1],$Qa[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($ld=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$ld;return$J;}function
get_databases($Cb){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Cb?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$X,$v,$Dc=0,$qd=" "){return" $H$X".($v!==null?$qd."LIMIT $v".($Dc?" OFFSET $Dc":""):"");}function
limit1($H,$X){return
limit($H,$X,1);}function
db_collation($i,$Ha){global$g;$J=null;$Oa=$g->result("SHOW CREATE DATABASE ".idf_escape($i),1);if(preg_match('~ COLLATE ([^ ]+)~',$Oa,$y))$J=$y[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Oa,$y))$J=$Ha[$y[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(ereg("YES|DEFAULT",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Ta){$J=array();foreach($Ta
as$i)$J[$i]=count(get_vals("SHOW TABLES IN ".idf_escape($i)));return$J;}function
table_status($B=""){$J=array();foreach(get_rows("SHOW TABLE STATUS".($B!=""?" LIKE ".q(addcslashes($B,"%_")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Rows"]))$K["Comment"]="";if($B!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return!isset($S["Rows"]);}function
fk_support($S){return
eregi("InnoDB|IBMDB2I",$S["Engine"]);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$y);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$y[1],"length"=>$y[2],"unsigned"=>ltrim($y[3].$y[4]),"default"=>($K["Default"]!=""||ereg("char",$y[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$K["Extra"],$y)?$y[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(explode(",",$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];}return$J;}function
foreign_keys($R){global$g,$Fc;static$G='`(?:[^`]|``)+`';$J=array();$Pa=$g->result("SHOW CREATE TABLE ".table($R),1);if($Pa){preg_match_all("~CONSTRAINT ($G) FOREIGN KEY \\(((?:$G,? ?)+)\\) REFERENCES ($G)(?:\\.($G))? \\(((?:$G,? ?)+)\\)(?: ON DELETE ($Fc))?(?: ON UPDATE ($Fc))?~",$Pa,$z,PREG_SET_ORDER);foreach($z
as$y){preg_match_all("~$G~",$y[2],$td);preg_match_all("~$G~",$y[5],$Fd);$J[idf_unescape($y[1])]=array("db"=>idf_unescape($y[4]!=""?$y[3]:$y[4]),"table"=>idf_unescape($y[4]!=""?$y[4]:$y[3]),"source"=>array_map('idf_unescape',$td[0]),"target"=>array_map('idf_unescape',$Fd[0]),"on_delete"=>($y[6]?$y[6]:"RESTRICT"),"on_update"=>($y[7]?$y[7]:"RESTRICT"),);}}return$J;}function
view($B){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($B),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$u=>$V)asort($J[$u]);return$J;}function
information_schema($i){global$g;return($g->server_info>=5&&$i=="information_schema")||($g->server_info>=5.5&&$i=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$ed))return$ed[1]-1;}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($i,$Ga){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($i).($Ga?" COLLATE ".q($Ga):""));}function
drop_databases($Ta){set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ta,'idf_escape');}function
rename_database($B,$Ga){if(create_database($B,$Ga)){$fd=array();foreach(tables_list()as$R=>$Rd)$fd[]=table($R)." TO ".idf_escape($B).".".table($R);if(!$fd||queries("RENAME TABLE ".implode(", ",$fd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$qa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$ac){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$ac["columns"],true)){$qa="";break;}if($ac["type"]=="PRIMARY")$qa=" UNIQUE";}}return" AUTO_INCREMENT$qa";}function
alter_table($R,$B,$m,$Db,$Ka,$nb,$Ga,$pa,$Rc){$la=array();foreach($m
as$l)$la[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$la=array_merge($la,$Db);$wd="COMMENT=".q($Ka).($nb?" ENGINE=".q($nb):"").($Ga?" COLLATE ".q($Ga):"").($pa!=""?" AUTO_INCREMENT=$pa":"").$Rc;if($R=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$la)."\n) $wd");if($R!=$B)$la[]="RENAME TO ".table($B);$la[]=$wd;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$la));}function
alter_indexes($R,$la){foreach($la
as$u=>$V)$la[$u]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($R).implode(",",$la));}function
truncate_tables($Ed){return
apply_queries("TRUNCATE TABLE",$Ed);}function
drop_views($fe){return
queries("DROP VIEW ".implode(", ",array_map('table',$fe)));}function
drop_tables($Ed){return
queries("DROP TABLE ".implode(", ",array_map('table',$Ed)));}function
move_tables($Ed,$fe,$Fd){$fd=array();foreach(array_merge($Ed,$fe)as$R)$fd[]=table($R)." TO ".idf_escape($Fd).".".table($R);return
queries("RENAME TABLE ".implode(", ",$fd));}function
copy_tables($Ed,$fe,$Fd){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Ed
as$R){$B=($Fd==DB?table("copy_$R"):idf_escape($Fd).".".table($R));if(!queries("DROP TABLE IF EXISTS $B")||!queries("CREATE TABLE $B LIKE ".table($R))||!queries("INSERT INTO $B SELECT * FROM ".table($R)))return
false;}foreach($fe
as$R){$B=($Fd==DB?table("copy_$R"):idf_escape($Fd).".".table($R));$ee=view($R);if(!queries("DROP VIEW IF EXISTS $B")||!queries("CREATE VIEW $B AS $ee[select]"))return
false;}return
true;}function
trigger($B){if($B=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($B));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$Rd){global$g,$ob,$dc,$Td;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Sd="((".implode("|",array_merge(array_keys($Td),$ka)).")\\b(?:\\s*\\(((?:[^'\")]*|$ob)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$G="\\s*(".($Rd=="FUNCTION"?"":$dc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Sd";$Oa=$g->result("SHOW CREATE $Rd ".idf_escape($B),2);preg_match("~\\(((?:$G\\s*,?)*)\\)\\s*".($Rd=="FUNCTION"?"RETURNS\\s+$Sd\\s+":"")."(.*)~is",$Oa,$y);$m=array();preg_match_all("~$G\\s*,?~is",$y[1],$z,PREG_SET_ORDER);foreach($z
as$Pc){$B=str_replace("``","`",$Pc[2]).$Pc[3];$m[]=array("field"=>$B,"type"=>strtolower($Pc[5]),"length"=>preg_replace_callback("~$ob~s",'normalize_enum',$Pc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Pc[8] $Pc[7]"))),"full_type"=>$Pc[4],"inout"=>strtoupper($Pc[1]),"collation"=>strtolower($Pc[9]),);}if($Rd!="FUNCTION")return
array("fields"=>$m,"definition"=>$y[11]);return
array("fields"=>$m,"returns"=>array("type"=>$y[12],"length"=>$y[13],"unsigned"=>$y[15],"collation"=>$y[16]),"definition"=>$y[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($R,$O){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
insert_update($R,$O,$Wc){foreach($O
as$u=>$V)$O[$u]="$u = $V";$be=implode(", ",$O);return
queries("INSERT INTO ".table($R)." SET $be ON DUPLICATE KEY UPDATE $be");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$X){return($X||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($md){return
true;}function
create_sql($R,$pa){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$pa)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Sa){return"USE ".idf_escape($Sa);}function
trigger_sql($R,$zd){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")),null,"-- ")as$K)$J.="\n".($zd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(ereg("binary",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if(ereg("geometry|point|linestring|polygon",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$J){if(ereg("binary",$l["type"]))$J="unhex($J)";if(ereg("geometry|point|linestring|polygon",$l["type"]))$J="GeomFromText($J)";return$J;}function
support($yb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$yb);}$t="sql";$Td=array();$yd=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$u=>$V){$Td+=$V;$yd[$u]=array_keys($V);}$ae=array("unsigned","zerofill","unsigned zerofill");$Kc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Mb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Pb=array("avg","count","count distinct","group_concat","max","min","sum");$gb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.6.1";class
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
login($rc,$F){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Cd){return
h($Cd["Comment"]!=""?$Cd["Comment"]:$Cd["Name"]);}function
fieldName($l,$C=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Cd,$O=""){$a=$Cd["Name"];if($O!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$O).'">'.'New item'."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Last page'."'>&gt;&gt;</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Bd){$J=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$K)$J[$K["TABLE_NAME"]]["keys"][$K["CONSTRAINT_NAME"]][$K["COLUMN_NAME"]]=$K["REFERENCED_COLUMN_NAME"];foreach($J
as$u=>$V){$B=$this->tableName(table_status($u));if($B!=""){$nd=preg_quote($Bd);$qd="(:|\\s*-)?\\s+";$J[$u]["name"]=(preg_match("(^$nd$qd(.+)|^(.+?)$qd$nd\$)iu",$B,$y)?$y[2].$y[3]:$B);}else
unset($J[$u]);}return$J;}function
backwardKeysPrint($ta,$K){foreach($ta
as$R=>$sa){foreach($sa["keys"]as$Ia){$w=ME.'select='.urlencode($R);$q=0;foreach($Ia
as$e=>$V)$w.=where_link($q++,$e,$K[$V]);echo"<a href='".h($w)."'>".h($sa["name"])."</a>";$w=ME.'edit='.urlencode($R);foreach($Ia
as$e=>$V)$w.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($K[$V]);echo"<a href='".h($w)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($H){return"<!--\n".str_replace("--","--><!-- ",$H)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$l){if(ereg("varchar|character varying",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($L,$Fb){$J=$L;foreach($L[0]as$u=>$V){if(list($R,$r,$B)=$this->_foreignColumn($Fb,$u)){$Yb=array();foreach($L
as$K)$Yb[$K[$u]]=exact_value($K[$u]);$Xa=$this->_values[$R];if(!$Xa)$Xa=get_key_vals("SELECT $r, $B FROM ".table($R)." WHERE $r IN (".implode(", ",$Yb).")");foreach($L
as$A=>$K){if(isset($K[$u]))$J[$A][$u]=(string)$Xa[$K[$u]];}}}return$J;}function
selectVal($V,$w,$l){$J=($V===null?"&nbsp;":$V);if(ereg('blob|bytea',$l["type"])&&!is_utf8($V)){$J=lang(array('%d byte','%d bytes'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V))$J="<img src='$w' alt='$J'>";}if(like_bool($l)&&$J!="&nbsp;")$J=($V?'yes':'no');if($w)$J="<a href='$w'>$J</a>";if(!$w&&!like_bool($l)&&ereg('int|float|double|decimal',$l["type"]))$J="<div class='number'>$J</div>";elseif(ereg('date',$l["type"]))$J="<div class='datetime'>$J</div>";return$J;}function
editVal($V,$l){if(ereg('date|timestamp',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$V);return$V;}function
selectColumnsPrint($M,$f){}function
selectSearchPrint($X,$f,$s){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$ic=array();foreach($X
as$u=>$V)$ic[$V["col"]]=$u;$q=0;$m=fields($_GET["select"]);foreach($f
as$B=>$Wa){$l=$m[$B];if(ereg("enum",$l["type"])||like_bool($l)){$u=$ic[$B];$q--;echo"<div>".h($Wa)."<input type='hidden' name='where[$q][col]' value='".h($B)."'>:",(like_bool($l)?" <select name='where[$q][val]'>".optionlist(array(""=>"",'no','yes'),$X[$u]["val"],true)."</select>":enum_input("checkbox"," name='where[$q][val][]'",$l,(array)$X[$u]["val"],($l["null"]?0:null))),"</div>\n";unset($f[$B]);}elseif(is_array($Lc=$this->_foreignKeyOptions($_GET["select"],$B))){if($m[$B]["null"])$Lc[0]='('.'empty'.')';$u=$ic[$B];$q--;echo"<div>".h($Wa)."<input type='hidden' name='where[$q][col]' value='".h($B)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Lc,$X[$u]["val"],true)."</select></div>\n";unset($f[$B]);}}$q=0;foreach($X
as$V){if(($V["col"]==""||$f[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".'anywhere'.")".optionlist($f,$V["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$V["op"]),"<input name='where[$q][val]' value='".h($V["val"])."'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'anywhere'.")".optionlist($f,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input name='where[$q][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($C,$f,$s){$Nc=array();foreach($s
as$u=>$ac){$C=array();foreach($ac["columns"]as$V)$C[]=$f[$V];if(count(array_filter($C,'strlen'))>1&&$u!="PRIMARY")$Nc[$u]=implode(", ",$C);}if($Nc){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Nc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($v){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$v),"</div></fieldset>\n";}function
selectLengthPrint($Hd){}function
selectActionPrint($s){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($kb,$f){if($kb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($kb)==1?'<input type="hidden" name="email_field" value="'.h(key($kb)).'">':html_select("email_field",$kb)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$s){return
array(array(),array());}function
selectSearchProcess($m,$s){$J=array();foreach((array)$_GET["where"]as$u=>$X){$Fa=$X["col"];$Ic=$X["op"];$V=$X["val"];if(($u<0?"":$Fa).$V!=""){$La=array();foreach(($Fa!=""?array($Fa=>$m[$Fa]):$m)as$B=>$l){if($Fa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$l["type"])){$B=idf_escape($B);if($Fa!=""&&$l["type"]=="enum")$La[]=(in_array(0,$V)?"$B IS NULL OR ":"")."$B IN (".implode(", ",array_map('intval',$V)).")";else{$Id=ereg('char|text|enum|set',$l["type"]);$W=$this->processInput($l,(!$Ic&&$Id&&ereg('^[^%]+$',$V)?"%$V%":$V));$La[]=$B.($W=="NULL"?" IS".($Ic==">="?" NOT":"")." $W":(in_array($Ic,$this->operators)||$Ic=="="?" $Ic $W":($Id?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($u<0&&$V=="0")$La[]="$B IS NULL";}}}$J[]=($La?"(".implode(" OR ",$La).")":"0");}}return$J;}function
selectOrderProcess($m,$s){$bc=$_GET["index_order"];if($bc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($bc!=""?array($s[$bc]):$s)as$ac){if($bc!=""||$ac["type"]=="INDEX"){$Wa=false;foreach($ac["columns"]as$V){if(ereg('date|timestamp',$m[$V]["type"])){$Wa=true;break;}}$J=array();foreach($ac["columns"]as$V)$J[]=idf_escape($V).($Wa?" DESC":"");return$J;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$Fb){if($_POST["email_append"])return
true;if($_POST["email"]){$pd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$_d=$_POST["email_subject"];$_=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$_d.$_",$z);$L=get_rows("SELECT DISTINCT $l".($z[1]?", ".implode(", ",array_map('idf_escape',array_unique($z[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($L,$Fb)as$K){$gd=array('{\\'=>'{');foreach($z[1]as$V)$gd['{$'."$V}"]=$this->editVal($K[$V],$m[$V]);$jb=$K[$_POST["email_field"]];if(is_mail($jb)&&send_mail($jb,strtr($_d,$gd),strtr($_,$gd),$_POST["email_from"],$_FILES["email_files"]))$pd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$pd));}return
false;}function
selectQueryBuild($M,$X,$Nb,$C,$v,$E){return"";}function
messageQuery($H){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$H)."\n-->";}function
editFunctions($l){$J=array();if($l["null"]&&ereg('blob',$l["type"]))$J["NULL"]='empty';$J[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(ereg('date|time',$l["type"]))$J["now"]='now';if(eregi('_(md5|sha1)$',$l["field"],$y))$J[]=strtolower($y[1]);return$J;}function
editInput($R,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Lc=$this->_foreignKeyOptions($R,$l["field"],$W);if($Lc!==null)return(is_array($Lc)?"<select$c>".optionlist($Lc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Lc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$Tb="";if(ereg('time',$l["type"]))$Tb='HH:MM:SS';if(ereg('date|timestamp',$l["type"]))$Tb='[yyyy]-mm-dd'.($Tb?" [$Tb]":"");if($Tb)return"<input value='".h($W)."'$c> ($Tb)";if(eregi('_(md5|sha1)$',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$p=""){if($p=="now")return"$p()";$J=$W;if(ereg('date|timestamp',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$W,$y))$J=($y["p1"]!=""?$y["p1"]:($y["p2"]!=""?($y["p2"]<70?20:19).$y["p2"]:gmdate("Y")))."-$y[p3]$y[p4]-$y[p5]$y[p6]".end($y);$J=($l["type"]=="bit"&&ereg('^[0-9]+$',$W)?$J:q($J));if($W==""&&like_bool($l))$J="0";elseif($W==""&&($l["null"]||!ereg('char|text',$l["type"])))$J="NULL";elseif(ereg('^(md5|sha1)$',$p))$J="$p($J)";return
unconvert_field($l,$J);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$zd,$H){global$g;$I=$g->query($H,1);if($I){while($K=$I->fetch_assoc()){if($zd=="table"){dump_csv(array_keys($K));$zd="INSERT";}dump_csv($K);}}}function
dumpFilename($Wb){return
friendly_url($Wb);}function
dumpHeaders($Wb,$zc=false){$vb="csv";header("Content-Type: text/csv; charset=utf-8");return$vb;}function
homepage(){return
true;}function
navigation($yc){global$ca,$Nd;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($yc=="auth"){$Bb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$F){if($F!==null){if($Bb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Bb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'empty'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$Nd,'">
</p>
</form>
';$this->databasesPrint($yc);if($yc!="db"&&$yc!="ns"){$S=table_status();if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($yc){}function
tablesPrint($Ed){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Ed
as$K){$B=$this->tableName($K);if(isset($K["Engine"])&&$B!="")echo"<a href='".h(ME).'select='.urlencode($K["Name"])."'".bold($_GET["select"]==$K["Name"])." title='".'Select data'."'>$B</a><br>\n";}}function
_foreignColumn($Fb,$e){foreach((array)$Fb[$e]as$Eb){if(count($Eb["source"])==1){$B=$this->rowDescription($Eb["table"]);if($B!=""){$r=idf_escape($Eb["target"][0]);return
array($Eb["table"],$r,$B);}}}}function
_foreignKeyOptions($R,$e,$W=null){global$g;if(list($Fd,$r,$B)=$this->_foreignColumn(column_foreign_keys($R),$e)){$J=&$this->_values[$Fd];if($J===null){$S=table_status($Fd);$J=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $r, $B FROM ".table($Fd)." ORDER BY 2"));}if(!$J&&$W!==null)return$g->result("SELECT $B FROM ".table($Fd)." WHERE $r = ".q($W));return$J;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Jd,$k="",$_a=array(),$Kd=""){global$ba,$b,$g,$db;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Ld=$Jd.($Kd!=""?": ".h($Kd):"");$Md=strip_tags($Ld.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Md,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.1",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($_a!==null){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($w?$w:".").'">'.$db[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($_a===false)echo"$N\n";else{echo"<a href='".($w?h($w):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($_a)))echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($_a)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($_a
as$u=>$V){$Wa=(is_array($V)?$V[1]:$V);if($Wa!="")echo'<a href="'.h(ME."$u=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Wa).'</a> &raquo; ';}}echo"$Jd\n";}}echo"<h2>$Ld</h2>\n";restart_session();$ce=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$xc=$_SESSION["messages"][$ce];if($xc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$xc)."</div>\n";unset($_SESSION["messages"][$ce]);}$Ta=&get_session("dbs");if(DB!=""&&$Ta&&!in_array(DB,$Ta,true))$Ta=null;stop_session();if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($yc=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($yc);echo'</div>
';}function
int32($A){while($A>=2147483648)$A-=4294967296;while($A<=-2147483649)$A+=4294967296;return(int)$A;}function
long2str($U,$he){$ld='';foreach($U
as$V)$ld.=pack('V',$V);if($he)return
substr($ld,0,end($U));return$ld;}function
str2long($ld,$he){$U=array_values(unpack('V*',str_pad($ld,4*ceil(strlen($ld)/4),"\0")));if($he)$U[]=strlen($ld);return$U;}function
xxtea_mx($Z,$Y,$Q,$hc){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($Q^$Y)+($hc^$Z));}function
encrypt_string($xd,$u){if($xd=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($xd,true);$A=count($U)-1;$Z=$U[$A];$Y=$U[0];$ad=floor(6+52/($A+1));$Q=0;while($ad-->0){$Q=int32($Q+0x9E3779B9);$fb=$Q>>2&3;for($D=0;$D<$A;$D++){$Y=$U[$D+1];$_c=xxtea_mx($Z,$Y,$Q,$u[$D&3^$fb]);$Z=int32($U[$D]+$_c);$U[$D]=$Z;}$Y=$U[0];$_c=xxtea_mx($Z,$Y,$Q,$u[$D&3^$fb]);$Z=int32($U[$A]+$_c);$U[$A]=$Z;}return
long2str($U,false);}function
decrypt_string($xd,$u){if($xd=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($xd,false);$A=count($U)-1;$Z=$U[$A];$Y=$U[0];$ad=floor(6+52/($A+1));$Q=int32($ad*0x9E3779B9);while($Q){$fb=$Q>>2&3;for($D=$A;$D>0;$D--){$Z=$U[$D-1];$_c=xxtea_mx($Z,$Y,$Q,$u[$D&3^$fb]);$Y=int32($U[$D]-$_c);$U[$D]=$Y;}$Z=$U[$A];$_c=xxtea_mx($Z,$Y,$Q,$u[$D&3^$fb]);$Y=int32($U[0]-$_c);$U[0]=$Y;$Q=int32($Q-0x9E3779B9);}return
long2str($U,true);}$g='';$Nd=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Sc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($u)=explode(":",$V);$Sc[$u]=$V;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$u=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$Xc=$b->permanentLogin();$Sc[$u]="$u:".base64_encode($Xc?encrypt_string($d["password"],$Xc):"");cookie("adminer_permanent",implode(" ",$Sc));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($Nd&&$_POST["token"]!=$Nd){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$u)set_session($u,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($Sc&&!$_SESSION["pwds"]){session_regenerate_id();$Xc=$b->permanentLogin();foreach($Sc
as$u=>$V){list(,$Ca)=explode(":",$V);list($cb,$N,$T,$i)=array_map('base64_decode',explode("-",$u));$_SESSION["pwds"][$cb][$N][$T]=decrypt_string(base64_decode($Ca),$Xc);$_SESSION["db"][$cb][$N][$T][$i]=true;}}function
unset_permanent(){global$Sc;foreach($Sc
as$u=>$V){list($cb,$N,$T)=array_map('base64_decode',explode("-",$u));if($cb==DRIVER&&$N==SERVER&&$i==$_GET["username"])unset($Sc[$u]);}cookie("adminer_permanent",implode(" ",$Sc));}function
auth_error($sb=null){global$g,$b,$Nd;$sd=session_name();$k="";if(!$_COOKIE[$sd]&&$_GET[$sd]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$sd]||$_GET[$sd])&&!$Nd)$k='Session expired, please login again.';else{$F=&get_session("pwds");if($F!==null){$k=h($sb?$sb->getMessage():(is_string($g)?$g:'Invalid credentials.'));$F=null;}unset_permanent();}}page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Vc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Nd=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$Nd;$k=($_POST?($_POST["token"]==$Nd?"":'Invalid CSRF token. Send the form again.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.','"post_max_size"')));if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$g->select_db($b->database());function
email_header($Rb){return"=?UTF-8?B?".base64_encode($Rb)."?=";}function
send_mail($jb,$_d,$_,$Lb="",$_b=array()){$j=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$_=str_replace("\n",$j,wordwrap(str_replace("\r","","$_\n")));$za=uniqid("boundary");$oa="";foreach((array)$_b["error"]as$u=>$V){if(!$V)$oa.="--$za$j"."Content-Type: ".str_replace("\n","",$_b["type"][$u]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$_b["name"][$u])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($_b["tmp_name"][$u])),76,$j).$j;}$va="";$Sb="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($oa){$oa.="--$za--$j";$va="--$za$j$Sb$j$j";$Sb="Content-Type: multipart/mixed; boundary=\"$za\"";}$Sb.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Lb?$j."From: ".str_replace("\n","",$Lb):"");return
mail($jb,email_header($_d),$va.$_.$oa,$Sb);}function
like_bool($l){return
ereg("bool|(tinyint|bit)\\(1\\)",$l["full_type"]);}$Fc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$db[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$be=(isset($_GET["select"])?$_POST["edit"]:$X);$m=fields($a);foreach($m
as$B=>$l){if(!isset($l["privileges"][$be?"update":"insert"])||$b->fieldName($l)=="")unset($m[$B]);}if($_POST&&!$k&&!isset($_GET["select"])){$x=$_POST["referer"];if($_POST["insert"])$x=($be?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$x))$x=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $X"),$x,'Item has been deleted.');else{$O=array();foreach($m
as$B=>$l){$V=process_input($l);if($V!==false&&$V!==null)$O[idf_escape($B)]=($be?"\n".idf_escape($B)." = $V":$V);}if($be){if(!$O)redirect($x);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$O),"\nWHERE $X"),$x,'Item has been updated.');}else{$I=insert_into($a,$O);$nc=($I?last_id():0);queries_redirect($x,sprintf('Item%s has been inserted.',($nc?" $nc":"")),$I);}}}$Dd=$b->tableName(table_status($a));page_header(($be?'Edit':'Insert'),$k,array("select"=>array($a,$Dd)),$Dd);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($X){$M=array();foreach($m
as$B=>$l){if(isset($l["privileges"]["select"])){$ma=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$ma="''";if($t=="sql"&&ereg("enum|set",$l["type"]))$ma="1*".idf_escape($B);$M[]=($ma?"$ma AS ":"").idf_escape($B);}}$K=array();if($M){$L=get_rows("SELECT".limit(implode(", ",$M)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$K=(isset($_GET["select"])&&count($L)!=1?null:reset($L));}}if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($m){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$B=>$l){echo"<tr><th>".$b->fieldName($l);$Va=$_GET["set"][bracket_escape($B)];$W=($K!==null?($K[$B]!=""&&$t=="sql"&&ereg("enum|set",$l["type"])?(is_array($K[$B])?array_sum($K[$B]):+$K[$B]):$K[$B]):(!$be&&$l["auto_increment"]?"":(isset($_GET["select"])?false:($Va!==null?$Va:$l["default"]))));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$p=($_POST["save"]?(string)$_POST["function"][$B]:($be&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if($l["type"]=="timestamp"&&$W=="CURRENT_TIMESTAMP"){$W="";$p="now";}input($l,$W,$p);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($be?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($be?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Nd,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status($a);$s=indexes($a);$m=fields($a);$Hb=column_foreign_keys($a);$Ec="";if($S["Oid"]=="t"){$Ec=($t=="sqlite"?"rowid":"oid");$s[]=array("type"=>"PRIMARY","columns"=>array($Ec));}parse_str($_COOKIE["adminer_import"],$ha);$kd=array();$f=array();$Hd=null;foreach($m
as$u=>$l){$B=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$B!=""){$f[$u]=html_entity_decode(strip_tags($B));if(ereg('text|lob|geometry|point|linestring|polygon',$l["type"]))$Hd=$b->selectLengthProcess();}$kd+=$l["privileges"];}list($M,$Nb)=$b->selectColumnsProcess($f,$s);$fc=count($Nb)<count($M);$X=$b->selectSearchProcess($m,$s);$C=$b->selectOrderProcess($m,$s);$v=$b->selectLimitProcess();$Lb=($M?implode(", ",$M):"*".($Ec?", $Ec":""));if($t=="sql"){foreach($f
as$u=>$V){$ma=convert_field($m[$u]);if($ma)$Lb.=", $ma AS ".idf_escape($u);}}$Lb.="\nFROM ".table($a);$Ob=($Nb&&$fc?"\nGROUP BY ".implode(", ",$Nb):"").($C?"\nORDER BY ".implode(", ",$C):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Xd=>$K){$ma=convert_field($m[key($K)]);echo$g->result("SELECT".limit(($ma?$ma:idf_escape(key($K)))." FROM ".table($a)," WHERE ".where_check($Xd).($X?" AND ".implode(" AND ",$X):"").($C?" ORDER BY ".implode(", ",$C):""),1));}exit;}if($_POST&&!$k){$je="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Wc=$Zd=null;foreach($s
as$ac){if($ac["type"]=="PRIMARY"){$Wc=array_flip($ac["columns"]);$Zd=($M?$Wc:array());break;}}foreach((array)$Zd
as$u=>$V){if(in_array(idf_escape($u),$M))unset($Zd[$u]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Zd===array()){$ie=$X;if(is_array($_POST["check"]))$ie[]="($je)";$H="SELECT $Lb".($ie?"\nWHERE ".implode(" AND ",$ie):"").$Ob;}else{$Vd=array();foreach($_POST["check"]as$V)$Vd[]="(SELECT".limit($Lb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V).$Ob,1).")";$H=implode(" UNION ALL ",$Vd);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($X,$Hb)){if($_POST["save"]||$_POST["delete"]){$I=true;$ia=0;$H=table($a);$O=array();if(!$_POST["delete"]){foreach($f
as$B=>$V){$V=process_input($m[$B]);if($V!==null){if($_POST["clone"])$O[idf_escape($B)]=($V!==false?$V:idf_escape($B));elseif($V!==false)$O[]=idf_escape($B)." = $V";}}$H.=($_POST["clone"]?" (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a):" SET\n".implode(",\n",$O));}if($_POST["delete"]||$O){$Ja="UPDATE";if($_POST["delete"]){$Ja="DELETE";$H="FROM $H";}if($_POST["clone"]){$Ja="INSERT";$H="INTO $H";}if($_POST["all"]||($Zd===array()&&$_POST["check"])||$fc){$I=queries("$Ja $H".($_POST["all"]?($X?"\nWHERE ".implode(" AND ",$X):""):"\nWHERE $je"));$ia=$g->affected_rows;}else{foreach((array)$_POST["check"]as$V){$I=queries($Ja.limit1($H,"\nWHERE ".where_check($V)));if(!$I)break;$ia+=$g->affected_rows;}}}$_=lang(array('%d item has been affected.','%d items have been affected.'),$ia);if($_POST["clone"]&&$I&&$ia==1){$nc=last_id();if($nc)$_=sprintf('Item%s has been inserted.'," $nc");}queries_redirect(remove_from_uri("page"),$_,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Double click on a value to modify it.';else{$I=true;$ia=0;foreach($_POST["val"]as$Xd=>$K){$O=array();foreach($K
as$u=>$V){$u=bracket_escape($u,1);$O[]=idf_escape($u)." = ".(ereg('char|text',$m[$u]["type"])||$V!=""?$b->processInput($m[$u],$V):"NULL");}$H=table($a)." SET ".implode(", ",$O);$ie=" WHERE ".where_check($Xd).($X?" AND ".implode(" AND ",$X):"");$I=queries("UPDATE".($fc?" $H$ie":limit1($H,$ie)));if(!$I)break;$ia+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ia),$I);}}elseif(is_string($n=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$I=true;$Ia=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$n,$z);$ia=count($z[0]);begin();$qd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($z[0]as$u=>$V){preg_match_all("~((\"[^\"]*\")+|[^$qd]*)$qd~",$V.$qd,$tc);if(!$u&&!array_diff($tc[1],$Ia)){$Ia=$tc[1];$ia--;}else{$O=array();foreach($tc[1]as$q=>$Fa)$O[idf_escape($Ia[$q])]=($Fa==""&&$m[$Ia[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Fa))));$I=insert_update($a,$O,$Wc);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ia),$I);queries("ROLLBACK");}else$k=upload_error($n);}}$Dd=$b->tableName($S);if(is_ajax())ob_start();page_header('Select'.": $Dd",$k);$O=null;if(isset($kd["insert"])){$O="";foreach((array)$_GET["where"]as$V){if(count($Hb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"]))))$O.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($S,$O);if(!$f)echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($X,$f,$s);$b->selectOrderPrint($C,$f,$s);$b->selectLimitPrint($v);$b->selectLengthPrint($Hd);$b->selectActionPrint($s);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$o=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$E=floor(max(0,$o-1)/$v);}$H=$b->selectQueryBuild($M,$X,$Nb,$C,$v,$E);if(!$H)$H="SELECT".limit((+$v&&$Nb&&$fc&&$t=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Lb,($X?"\nWHERE ".implode(" AND ",$X):"").$Ob,($v!=""?+$v:null),($E?$v*$E:0),"\n");echo$b->selectQuery($H);$I=$g->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($t=="mssql")$I->seek($v*$E);$lb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$t=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$o=(+$v&&$Nb&&$fc?($t=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$ua=$b->backwardKeys($a,$Dd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Nb&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$Ac=array();$Mb=array();reset($M);$cd=1;foreach($L[0]as$u=>$V){if($u!=$Ec){$V=$_GET["columns"][key($M)];$l=$m[$M?($V?$V["col"]:current($M)):$u];$B=($l?$b->fieldName($l,$cd):"*");if($B!=""){$cd++;$Ac[$u]=$B;$e=idf_escape($u);$Vb=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($u);$Wa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Vb.($C[0]==$e||$C[0]==$u||(!$C&&$fc&&$Nb[0]==$e)?$Wa:'')).'">';echo(!$M||$V?apply_sql_function($V["fun"],$B):h(current($M)))."</a>";echo"<span class='column hidden'>","<a href='".h($Vb.$Wa)."' title='".'descending'."' class='text'> ‚Üì</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($u)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Mb[$u]=$V["fun"];next($M);}}$qc=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$u=>$V)$qc[$u]=max($qc[$u],min(40,strlen(utf8_decode($V))));}}echo($ua?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($v%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Hb)as$A=>$K){$Wd=unique_array($L[$A],$s);$Xd="";foreach($Wd
as$u=>$V)$Xd.="&".($V!==null?urlencode("where[".bracket_escape($u)."]")."=".urlencode($V):"null%5B%5D=".urlencode($u));echo"<tr".odd().">".(!$Nb&&$M?"":"<td>".checkbox("check[]",substr($Xd,1),in_array(substr($Xd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($fc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Xd)."'>".'edit'."</a>"));foreach($K
as$u=>$V){if(isset($Ac[$u])){$l=$m[$u];if($V!=""&&(!isset($lb[$u])||$lb[$u]!=""))$lb[$u]=(is_mail($V)?$Ac[$u]:"");$w="";$V=$b->editVal($V,$l);if($V!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$V!="")$w=h(ME.'download='.urlencode($a).'&field='.urlencode($u).$Xd);if($V==="")$V="&nbsp;";elseif(is_utf8($V)){if($Hd!=""&&ereg('text|lob|geometry|point|linestring|polygon',$l["type"]))$V=shorten_utf8($V,max(0,+$Hd));else$V=h($V);}if(!$w){foreach((array)$Hb[$u]as$Gb){if(count($Hb[$u])==1||end($Gb["source"])==$u){$w="";foreach($Gb["source"]as$q=>$td)$w.=where_link($q,$Gb["target"][$q],$L[$A][$td]);$w=h(($Gb["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Gb["db"]),ME):ME).'select='.urlencode($Gb["table"]).$w);if(count($Gb["source"])==1)break;}}}if($u=="COUNT(*)"){$w=h(ME."select=".urlencode($a));$q=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$Wd))$w.=h(where_link($q++,$U["col"],$U["val"],$U["op"]));}foreach($Wd
as$hc=>$U)$w.=h(where_link($q++,$hc,$U));}}if(!$w){if(is_mail($V))$w="mailto:$V";if($Zc=is_url($K[$u]))$w=($Zc=="http"&&$aa?$K[$u]:"$Zc://www.adminer.org/redirect/?url=".urlencode($K[$u]));}$r=h("val[$Xd][".bracket_escape($u)."]");$W=$_POST["val"][$Xd][bracket_escape($u)];$Qb=h($W!==null?$W:$K[$u]);$sc=strpos($V,"<i>...</i>");$hb=is_utf8($V)&&$L[$A][$u]==$K[$u]&&!$Mb[$u];$Gd=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$hb)||$W!==null?"<td>".($Gd?"<textarea name='$r' cols='30' rows='".(substr_count($K[$u],"\n")+1)."'>$Qb</textarea>":"<input name='$r' value='$Qb' size='$qc[$u]'>"):"<td id='$r' ondblclick=\"".($hb?"selectDblClick(this, event".($sc?", 2":($Gd?", 1":"")).")":"alert('".h('Use edit link to modify this value.')."')").";\">".$b->selectVal($V,$w,$l));}}if($ua)echo"<td>";$b->backwardKeysPrint($ua,$L[$A]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Nb&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($L||$E)&&!is_ajax()){$rb=true;if($_GET["page"]!="last"&&+$v&&!$fc&&($o>=$v||$E)){$o=found_rows($S,$X);if($o<max(1e4,2*($E+1)*$v))$o=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):"")));else$rb=false;}echo"<p class='pages'>";if(+$v&&($o===false||$o>$v)){$uc=($o===false?$E+(count($L)>=$v?2:1):floor(($o-1)/$v));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($E+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$E).($E>5?" ...":"");for($q=max(1,$E-4);$q<min($uc,$E+5);$q++)echo
pagination($q,$E);echo($E+5<$uc?" ...":"").($rb&&$o!==false?pagination($uc,$E):' <a href="'.h(remove_from_uri("page")."&page=last").'">'.'last'."</a>");}echo($o!==false?" (".($rb?"":"~ ").lang(array('%d row','%d rows'),$o).")":""),(+$v&&($o===false?count($L)+1:$o-$E*$v)>$v?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$v).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'')," ".checkbox("all",1,0,'whole result')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Double click on a value to modify it.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$o,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Ib=$b->dumpFormat();if($Ib){print_fieldset("export",'Export');$Oc=$b->dumpOutput();echo($Oc?html_select("output",$Oc,$ha["output"])." ":""),html_select("format",$Ib,$ha["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$Nd'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($lb,'strlen'),$f);echo"</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));elseif(list($R,$r,$B)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$I=$g->query("SELECT $r, $B FROM ".table($R)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$r = $_GET[value] OR ":"")."$B LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($q=0;$q<10&&($K=$I->fetch_row());$q++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($r))."]")."=".urlencode($K[0]))."'>".h($K[1])."</a><br>\n";if($q==10)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$R=>$K){$B=$b->tableName($K);if(isset($K["Engine"])&&$B!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$B</a>";$V=number_format($K["Rows"],0,'.',',');echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($K["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();